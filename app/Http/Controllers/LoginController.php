<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; // Menggunakan `Auth` tanpa namespace

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
        auth()->logout();
     
        return redirect('/login');
    }

}
