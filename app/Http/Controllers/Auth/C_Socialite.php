<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class C_Socialite extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // public function callback()
    // {
    //     $socialUser = Socialite::driver('google')->user();

    //     $registerUser = User::where("google_id", $socialUser->id)->first();

    //     if (!$registerUser) {
    //         // Jika pengguna belum terdaftar, simpan data pengguna dari Google ke dalam session
    //         session(['socialUser' => $socialUser]);

    //         // Redirect ke halaman register
    //         return redirect('/register');
    //     }

    //     Auth::login($registerUser);

    //     // Redirect ke dashboard untuk pengguna yang sudah terdaftar
    //     return redirect($registerUser->role === 'admin' ? '/dashboard_admin' : '/dashboard_person');
    // }


    public function callback()
    {
        // Ambil data pengguna dari Google
        $socialUser = Socialite::driver('google')->user();

        // Cari pengguna di database berdasarkan Google ID
        $registeredUser = User::where("google_id", $socialUser->id)->first();

        if (!$registeredUser) {
            // Jika pengguna belum terdaftar, daftarkan pengguna baru
            $user = User::create([
                'google_id' => $socialUser->id,
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => bcrypt($socialUser->email), // Menggunakan email sebagai password (opsional)
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
                'avatar' => $socialUser->avatar, // Menyimpan URL avatar
                'role' => 'person' // Atur peran pengguna sesuai kebutuhan
            ]);

            $person = Person::create([
                'google_id' => $socialUser->id,
                'status' => 'N'
                // Isi dengan data lainnya yang sesuai dengan struktur tabel
            ]);

            // Autentikasi pengguna
            Auth::login($user);

            // Menyimpan data pengguna dan tbl_biodata ke dalam sesi
            session(['userData' => $user, 'tblBiodata' => $person]);

            // Redirect ke dashboard untuk pengguna baru
            return redirect('/dashboard_person');
        }

        // Autentikasi pengguna yang sudah terdaftar
        Auth::login($registeredUser);

        // Cek tbl_biodata berdasarkan google_id
        $tblBiodata = Person::where('google_id', $socialUser->id)->first();

        // Menyimpan data pengguna dan tbl_biodata ke dalam sesi
        session(['userData' => $registeredUser, 'tblBiodata' => $tblBiodata]);

        //  print_r(session()->all());

        // Redirect ke dashboard sesuai peran pengguna
        if ($registeredUser->role === 'admin') {
            return redirect('/dashboard_admin');
        } else {
            return redirect('/dashboard_person');
        }
    }
}
