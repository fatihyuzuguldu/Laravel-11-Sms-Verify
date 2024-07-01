<?php
// app/Http/Controllers/Auth/VerifyController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class VerifyController extends Controller
{
    public function showVerifyForm()
    {
        if (!session()->has('UserPhone')) {
            return redirect()->route('login');
        }

        return view('auth.verify');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'UserPhone' => 'required|string',
            'code1' => 'required|integer',
            'code2' => 'required|integer',
            'code3' => 'required|integer',
            'code4' => 'required|integer',
            'code5' => 'required|integer',
            'code6' => 'required|integer',
        ]);

        // Kullanıcı tarafından girilen kodları birleştirerek tek bir doğrulama kodu oluştur
        $randomNumber = intval($request->code1) . intval($request->code2) . intval($request->code3) .
            intval($request->code4) . intval($request->code5) . intval($request->code6);

        // Veritabanında doğrulama kodunu ve telefon numarasını kontrol et
        $verificationCode = VerificationCode::where('UserPhone', $request->UserPhone)
            ->where('verification_code', $randomNumber)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if ($verificationCode) {
            $user = User::where('UserPhone', $request->UserPhone)->first();
            Auth::login($user);

            // Doğrulama kodunu sil
            $verificationCode->delete();

            // Kullanıcının telefon numarasını session'dan sil
            session()->forget('UserPhone');

            // auth_verified session oluştur
            session(['auth_verified' => true]);

            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['verification_code' => 'Geçersiz veya süresi dolmuş doğrulama kodu.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // auth_verified session'i sil
        session()->forget('auth_verified');

        return redirect()->route('login');
    }
}
