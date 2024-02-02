<?php

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
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
