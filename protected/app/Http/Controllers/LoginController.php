<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to dashboard or intended page
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back with error message
        return back()->with('loginError', 'Login Tidak Berhasil! Silakan Periksa Kembali Email dan Password Anda.');
    }

    public function dashboard()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            return view('dashboard');
        }

        // If not authenticated, redirect to login page
        return redirect('/');
    }

    public function tes()
    {
        return view('tes');
    }
}
