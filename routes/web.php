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
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi'); //REGISTER
});
Route::get('/halaman', function () {
    return view('halaman'); //HALAMAN UTAMA
});
Route::get('/pengaduan', function () {
    return view('pengaduan'); //HALAMAN PENGADUAN
});
Route::get('/cekpengaduan', function () {
    return view('cekpengaduan'); // HALAMAN CEK PENGADUAN
});
Route::get('/informasi', function () {
    return view('informasi'); // HALAMAN INFORMASI TANPA LOGIN
});
Route::get('/halamaninformasi', function () {
    return view('halamaninformasi'); // HALAMAN INFORMASI DENGAN LOGIN
});
Route::get('/tatacara', function () {
    return view('tatacara'); // HALAMAN TATACARA
});
Route::get('/tentangkami', function () {
    return view('tentangkami'); //HALAMAN TENTANG KAMI LOGIN
});
Route::get('/tentangkami1', function () {
    return view('tentangkami1'); //HALAMAN TENTANG KAMI TANPA LOGIN
});
Route::get('/menu', function () {
    return view('menu'); //HALAMAN MENU
});
Route::get('/admindashboard', function () {
    return view('admindashboard'); //HALAMAN ADMIN DASHBOARD
});
Route::get('/cekadmin', function () {
    return view('cekadmin'); //HALAMAN CEK ADMIN
});
Route::get('/adminpengaduan', function () {
    return view('adminpengaduan'); //HALAMAN CEK PENGADUAN ADMIN
});
Route::get('/jawabadmin', function () {
    return view('jawabadmin'); //HALAMAN JAWAB PENGADUAN ADMIN
});
Route::get('/loginadmin', function () {
    return view('loginadmin'); //HALAMAN LOGIN ADMIN
});
Route::get('navbar', function () {
    return view('navbar.navbar');
});
Route::get('footer', function () {
    return view('footer.footer');
});
Route::get('sidebar', function () {
    return view('sidebar.sidebar');
});



Route::get('/test1', function () {
    return view('test1'); //HALAMAN TEST CODE
});
