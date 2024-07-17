<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logowanieController extends Controller
{
    public function viewLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function viewRegisterForm()
    {
        return view('register');
    }

}
