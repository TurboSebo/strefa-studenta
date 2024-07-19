<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class EditProfileController extends Controller
{
    public function viewEditProfileForm()
    {
        if (auth()->check()) {
            return view('editprofile');
        }
        return redirect('login');
    }
    public function updateProfileByUser(Request $request){
        $user = Auth::user();
        
        //Walidacja danych
        $request->validate([
            'first_name' => ['nullable', 'string', 'max:50'],
            'last_name' => ['nullable', 'string', 'max:50'],
            'about_me' => ['nullable', 'string', 'max:200'],
        ]);
        //przygotowanie danych do aktualizacji
        $data = $request->only(['first_name', 'last_name', 'about_me']);
        //aktualizacja danych
        $user->editProfile($data);
        //przekierowanie z komunikatem sukcesu
        return redirect()->route('myprofile')->with('success', 'Profil zaktualizowany pomyślnie.');
        
    }
}
