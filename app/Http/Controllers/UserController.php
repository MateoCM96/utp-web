<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

use Facades\App\Models\User;
class UserController extends Controller
{
    public function index(){
        return view('profile.user');
    }

    public function store(LoginRequest $request){
       
        User::saveOrUpdate($request->all());
        return redirect()->route('post',$request->username);
    }
}
