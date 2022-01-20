<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login&register.login', ['pages' => 'Home']);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/HomeAdmin')->with('loginAdmin', 'Berhasil Login Sebagai Admin');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/Home');
            }
        } else {
            return back()->with('loginError', 'Gagal Login Email atau Password Salah!');
        }

        // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}