<?php
// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Services\SmsSenderService;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'UserPhone' => 'required|string',
        ]);

        $user = User::where('UserPhone', $request->UserPhone)->first();

        if ($user) {
            VerificationCode::where('UserPhone', $request->UserPhone)->delete();
            $verification_code = rand(100000, 999999);

            VerificationCode::create([
                'UserPhone' => $user->UserPhone,
                'verification_code' => $verification_code,
                'expires_at' => Carbon::now()->addMinute(1),
            ]);

            // Session'a kullanıcı bilgilerini kaydet
            session(['UserPhone' => $request->UserPhone]);
            session(['UserFullName' => $user->UserFullName]);

            $phonenumber = $request->UserPhone;
            $userfullname = mb_convert_case($user->UserFullName, MB_CASE_TITLE, "UTF-8");

            // SmsSenderService örneği oluşturma
            $smsSenderService = new SmsSenderService();
            $response = $smsSenderService->sendVerifySms($phonenumber, $verification_code, $userfullname);

            if ($response['status'] === 'success') {
                return redirect()->route('verify');
            } else {
                return back()->withErrors(['verification_code' => 'SMS doğrulaması başarısız.'])->withInput();
            }
        } else {
            return back()->withErrors(['UserPhone' => 'Bu telefon numarası kayıtlı değil.'])->withInput();
        }
    }

    protected function authenticated(Request $request, $user)
    {
        // Kullanıcı doğrulandıktan sonra yapılan işlemler
        session()->forget('auth.verify');

        return redirect()->route('dashboard');
    }
}
