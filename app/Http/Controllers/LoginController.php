<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        
        if (Auth::check()){
            return redirect()->route('post', auth()->user()->username);
        }
            return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('post', auth()->user()->username);
        }

        return back()->with('warning', 'Credenenciales invalidas de inicio de sesion');
    }                 
}