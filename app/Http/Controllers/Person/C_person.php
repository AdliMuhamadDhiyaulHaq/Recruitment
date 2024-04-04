<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_person extends Controller
{
    public function Dashboard(Request $request)
    {
        // Periksa apakah pengguna memiliki sesi yang valid dan peran 'person'
        if ($request->session()->has('userData') && $request->session()->get('userData')['role'] === 'person') {
            return view('pages/ds_person');
        } else {
            // Jika tidak, arahkan kembali ke halaman login

            return view('auth/login');
        }
    }

    public function Cv(Request $request)
    {
        // Periksa apakah pengguna memiliki sesi yang valid dan peran 'person'
        if ($request->session()->has('userData') && $request->session()->get('userData')['role'] === 'person') {
            return view('pages/cv');
        } else {
            // Jika tidak, arahkan kembali ke halaman login

            return view('auth/login');
        }
    }
}
