<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register (Request $request)
    {

        //Validation
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required','email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],

        ]);

        //S'incrire
        $user = User::create($fields);
        
        //Se connecter
       Auth::login($user);

        //Rediriger
        return redirect()->route('home');
        
        // dd($request);
    }
}