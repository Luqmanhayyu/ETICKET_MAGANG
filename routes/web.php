<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/registerPage', function () {
    return view('register');
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
