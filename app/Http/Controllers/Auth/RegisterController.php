<?php
// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Rules\PhoneNumber;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Kullanıcı adını büyük harfle başlayacak şekilde düzenle
        $userFullName = mb_convert_case($request->input('UserFullName'), MB_CASE_TITLE, "UTF-8");

        $user = $this->create(array_merge($request->all(), ['UserFullName' => $userFullName]));

        return redirect()->route('login')->with('success', 'Kayıt işlemi başarıyla tamamlandı. Lütfen giriş yapın.');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'UserFullName' => ['required', 'string', 'max:255'],
            'UserPhone' => ['required', 'string', 'size:10', 'unique:users', new PhoneNumber],
            // size:11 ile 11 haneli olmasını sağlıyoruz
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'UserFullName' => $data['UserFullName'],
            'UserPhone' => $data['UserPhone'],
            'password' => Hash::make('default_password'), // varsayılan şifreyi değiştirebilirsiniz
        ]);
    }
}
