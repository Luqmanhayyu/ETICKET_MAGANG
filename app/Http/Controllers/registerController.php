<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:akuns|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Membuat akun baru
        $akun = Akun::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // Anda bisa menambahkan kolom lain sesuai kebutuhan
        ]);

        // TODO: Tambahkan logika lain yang diperlukan, seperti mengirim email konfirmasi, dsb.

        return response()->json(['message' => 'Registrasi berhasil', 'data' => $akun], 201);
    }
}
