<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Halaman Login'
        ]);
    }

    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if( Auth::attempt($credentials) ) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('loginSuccess', 'anda berhasil login');
        }

        return back()->with('loginFailed', 'gagal login username dan password salah');
    }
    
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/')->with('logout', 'anda berhasil logout');
    }
}
