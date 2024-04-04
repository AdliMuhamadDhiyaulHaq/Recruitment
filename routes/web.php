<?php

use App\Http\Controllers\Auth\C_Login;
use App\Http\Controllers\Auth\C_Socialite;
use App\Http\Controllers\Auth\C_SocialiteRegister;
use App\Http\Controllers\Person\C_person;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landing-page');
});

Route::get('login', function () {
    return view('auth/login');
});
Route::get('register', function () {
    return view('auth/register');
});

Route::get('dashboard_admin', function () {
    return view('pages/ds_admin');
});




Route::get('dashboard_person', [C_person::class, 'Dashboard']);
Route::get('riwayat_hidup', [C_person::class, 'Cv']);


Route::get('/auth/redirect', [C_Socialite::class, 'redirect']);
Route::get('/auth/google/callback', [C_Socialite::class, 'callback']);


Route::get('/auth/redirect_register', [C_SocialiteRegister::class, 'redirect_register']);
Route::get('/auth/register/google/callback', [C_SocialiteRegister::class, 'registerCallback']);

Route::post('/login', [C_Login::class, 'prosesLogin'])->name('login.process');
