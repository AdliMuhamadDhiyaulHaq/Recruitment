<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class C_SocialiteRegister extends Controller
{

    public function redirect_register()
    {
        return Socialite::driver('google')->redirect();
    }


    public function registerCallback()
    {
        $socialUserRegist = Socialite::driver('google')->user();

        $registerUser = User::where("google_id", $socialUserRegist->id)->first();

        if (!$registerUser) {
            // Jika pengguna belum terdaftar, daftarkan pengguna baru
            $user = User::updateOrCreate([
                'google_id' => $socialUserRegist->id,
            ], [
                'name' => $socialUserRegist->name,
                'email' => $socialUserRegist->email,
                'password' => Hash::make('123'), // Ini mungkin harus diperbaiki
                'google_token' => $socialUserRegist->token,
                'google_refresh_token' => $socialUserRegist->refreshToken,
                'avatar' => $socialUserRegist->avatar, // Menyimpan avatar URL
                'role' => 'person' // Atur peran pengguna sesuai kebutuhan
            ]);

            Auth::login($user);
            return redirect('/dashboard_person');
        }

        Auth::login($registerUser);

        // Redirect ke dashboard untuk pengguna yang sudah terdaftar
        return redirect($registerUser->role === 'admin' ? '/dashboard_admin' : '/dashboard_person');
    }
}
