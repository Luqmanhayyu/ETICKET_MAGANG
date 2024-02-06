<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->route('halaman')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
