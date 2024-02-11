<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('home', [LoginController::class, 'index'])->name('home')->middleware('auth');
Route::get('login/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('/login', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/halaman', function () {
    return view('halaman');
});
Route::get('/pengaduan', function () {
    return view('pengaduan');
});
Route::get('/cekpengaduan', function () {
    return view('cekpengaduan');
});
Route::get('/informasi', function () {
    return view('informasi');
});
Route::get('/tatacara', function () {
    return view('tatacara');
});
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/admindashboard', function () {
    return view('admindashboard');
});
Route::get('/cekadmin', function () {
    return view('cekadmin');
});
Route::get('/adminpengaduan', function () {
    return view('adminpengaduan');
});
Route::get('/jawabadmin', function () {
    return view('jawabadmin');
});
Route::get('/loginadmin', function () {
    return view('loginadmin');
});
Route::get('/settingprofile', function () {
    return view('settingprofile');
});
Route::get('/settingprofileadmin', function () {
    return view('settingprofileadmin');
});
