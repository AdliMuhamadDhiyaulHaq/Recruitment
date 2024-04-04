<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class C_Login extends Controller
{
    public function prosesLogin(Request $request)
    {
        try {
            $request->validate([
                'login' => 'required', // Memastikan input login (email atau nomor telepon) tidak kosong
                'password' => 'required', // Memastikan input password tidak kosong
            ]);

            $loginType = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'noTelepon';

            // Mendapatkan input login (email atau nomor telepon) dan password dari request
            $credentials = [
                $loginType => $request->input('login'),
            ];

            // Cari user berdasarkan email atau nomor telepon
            $user = User::where($loginType, $credentials[$loginType])->first();

            // Jika pengguna ditemukan dan password cocok
            if ($user && Hash::check($request->input('password'), $user->password)) {
                // Ambil data Person berdasarkan google_id
                $tblBiodata = Person::where('google_id', $user->google_id)->first();

                // Autentikasi berhasil, login pengguna
                Auth::login($user);

                // Menyimpan data pengguna dan tbl_biodata ke dalam sesi
                session(['userData' => $user->toArray(), 'tblBiodata' => $tblBiodata]);

                // Redirect ke dashboard yang sesuai dengan peran (role) pengguna
                if ($user->role == 'admin') {
                    return redirect('/dashboard_admin');
                } elseif ($user->role == 'person') {
                    return redirect('/dashboard_person');
                } else {
                    // Tindakan lain jika peran tidak sesuai, misalnya redirect ke halaman default
                    return redirect()->route('login')->with('error', 'Role tidak dikenali');
                }
            }

            // Jika autentikasi gagal, lempar exception dengan pesan error
            throw ValidationException::withMessages([
                'login' => 'Email atau password salah.'
            ]);
        } catch (ValidationException $e) {
            // Tangkap exception dan kembali ke halaman sebelumnya dengan error validation
            return back()->withErrors($e->errors())->withInput();
        }
    }
}
