<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesjaController extends Controller
{
    public function viewDashboard(){
        if (auth()->check()) {
            return view('dashboard');
        }
        return redirect('/');
    }
    public function viewMyProfile(){
       // if (auth()->check()) {
            return view('profile');
       // }
       // return redirect('login');
    }
    public function viewSchools(){
        return view('schools');
    }
}
