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

//(1) ROUTE LOGIN
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('home', [LoginController::class, 'index'])->name('home')->middleware('auth');
Route::get('login/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('/', function () {
    return view('user/login');
});
Route::get('/registrasi', function () {
    return view('user/registrasi'); //REGISTER
});
Route::get('/halaman', function () {
    return view('user/halaman'); //HALAMAN UTAMA
});
Route::get('/pengaduan', function () {
    return view('user/pengaduan'); //HALAMAN PENGADUAN
});
Route::get('/cekpengaduan', function () {
    return view('user/cekpengaduan'); // HALAMAN CEK PENGADUAN
});
Route::get('/halamaninformasi', function () {
    return view('user/halamaninformasi'); // HALAMAN INFORMASI DENGAN LOGIN
});
Route::get('/tentangkami', function () {
    return view('user/tentangkami'); //HALAMAN TENTANG KAMI LOGIN
});
Route::get('/tentangkami1', function () {
    return view('user/tentangkami1'); //HALAMAN TENTANG KAMI TANPA LOGIN
});
Route::get('/admindashboard', function () {
    return view('admin/admindashboard'); //HALAMAN ADMIN DASHBOARD
});
Route::get('admin/cekadmin', function () {
    return view('admin/cekadmin'); //HALAMAN CEK ADMIN
});
Route::get('admin/adminpengaduan', function () {
    return view('admin/adminpengaduan'); //HALAMAN CEK PENGADUAN ADMIN
});
Route::get('admin/jawabadmin', function () {
    return view('admin/jawabadmin'); //HALAMAN JAWAB PENGADUAN ADMIN
});
Route::get('/loginadmin', function () {
    return view('admin/loginadmin'); //HALAMAN LOGIN ADMIN
});
Route::get('navbar1', function () {
    return view('navbar.navbars'); //HALAMAN NAVBARS
});
Route::get('navbar', function () {
    return view('navbar.navbar'); //HALAMAN NAVBAR
});
Route::get('loginNavbar', function () {
    return view('navbar.loginNavbar'); //HALAMAN LOGIN.NAVBAR
});
Route::get('footer', function () {
    return view('footer.footer'); //HALAMAN FOOTER
});
Route::get('sidebar', function () {
    return view('sidebar.sidebar'); //HALAMAN SIDEBAR
});
