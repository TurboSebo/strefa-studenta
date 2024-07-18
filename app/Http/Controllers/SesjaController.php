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
}
