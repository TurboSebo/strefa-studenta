<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class logowanieController extends Controller
{
    public function viewLoginForm()
    {
        if (auth()->check()) {
            return redirect('/dashboard');
        }

        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
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

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'accept' => ['accepted'],
        ]);
        try {
            
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
            ]);
        }
        catch (\Exception $e) {
            return back()->withErrors(['register_error' => 'Wystąpił problem z rejestracją prosimy spróbować ponownie później.']);
            }

       // auth()->login($user); //automatyczne logowanie po rejestracji
       // return redirect('/dashboard'); //i przekierowanie na Dashboard

       return redirect('login')->with('status', 'Udana rejestracja! Możesz się teraz zalogować.');
    
    }
}
