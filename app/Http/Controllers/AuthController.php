<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Mencoba login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika berhasil login, redirect ke halaman students
            return redirect()->route('students');
        } else {
            // Jika gagal, kembalikan dengan pesan error
            return back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
