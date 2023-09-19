<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Facades\App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('profile.user'); // Se usa para mostrar la vista de editar perfil, esta dentro de la carpeta profile
    } // Se usa para mostrar la vista de editar perfil

    public function store(LoginRequest $request){ //LoginRequest se usa para validar los datos del formulario
       
        User::saveOrUpdate($request->all());
        return redirect()->route('post',$request->username); //para redireccionar a la vista de perfil despues de guardar los cambios
    } // Se usa para guardar los cambios del perfil, se usa el facade para llamar al metodo saveOrUpdate     
}
