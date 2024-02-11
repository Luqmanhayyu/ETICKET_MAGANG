<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('halaman');
        }else{
            Session::flash('message', 'Email atau Password Salah');
            return view('login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('register');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function index()
    {
        return view('halaman');
    }
}
