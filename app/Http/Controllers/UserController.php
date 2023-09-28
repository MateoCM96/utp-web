<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use Facades\App\Models\User; 
class UserController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store(LoginRequest $request)
    {
        $user = User::saveOrUpdate($request->all());
        return redirect()->route('post', ['user' => $user]);
    }
}