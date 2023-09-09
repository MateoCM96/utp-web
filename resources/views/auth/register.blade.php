@extends('layouts.app')

@section('Titulo')
    Registrarse
@endsection

@section('contenido')
  <div class=" md:flex md:justify-center md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounden-lg shadow-2xl">
        <div class="md:flex md:justify-center hidden sm:block">
            <img class="max-h-20" src="{{asset('img/0.jpg')}}" alt="UTP SOCIAL">
        </div>
        <h2 class="mb-5 text-gray-600 font-bold font-sans text-center">
            Registrarse para ver fotos de perros y gatos.
        </h2>
        <hr class="mb-5">

        <form action="{{ route('register') }}" method="POST">
            @csrf 
            <div class="mb-5"> 
                <label for="name" class="mb-2:block uppercase text-gray-500 font-bold">
                    Nombre Completo        
                </label>
                <input
                    id="name"
                    name="name"
                    type="text" 
                    placeholder="Ingrese su nombre completo"
                    class="border p-3 w-full rounded-lg @error('name')
                        border-red-500
                        @enderror"         
                    
                type="text"
                >
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-center" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5"> 
                <label for="username" class="mb-2:block uppercase text-gray-500 font-bold">
                   Nombre de usuario      
                </label>
                <input
                    id="username"
                    name="username"
                    type="text" 
                    placeholder="tu nombre"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"    
                
                >
                @error('username')
                <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-center" >{{$message}}</p>
                 @enderror
            </div>
            <div class="mb-5"> 
                <label for="email" class="mb-2:block uppercase text-gray-500 font-bold">
                    Correo electronico      
                </label>
                <input
                    id="email"
                    name="email"
                    type="email" 
                    placeholder="Ingrese su correo electronico"
                    class="border p-3 w-full rounded-lg @error('email')
                    border-red-500
                    @enderror"             
                >
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-center" >{{$message}}</p>
                 @enderror
            </div>
            <div class="mb-5"> 
                <label for="password" class="mb-2:block uppercase text-gray-500 font-bold">
                    Contraseña   
                </label>
                <input
                    id="password"
                    name="password"
                    type="password" 
                    placeholder="Ingrese su Contrasena"
                    class="border p-3 w-full rounded-lg @error('password')
                    border-red-500
                    @enderror"    
                >
                @error('password')    
                <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-center" >{{$message}}</p>
                 @enderror
            </div>
            <div class="mb-5"> 
                <label for="password_confirmation" class="mb-2:block uppercase text-gray-500 font-bold">
                     Repetir Contraseña   
                </label>
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password" 
                    placeholder="Repita su Contrasena"
                    class="border p-3 w-full rounded-lg @error('password_confirmation')
                    border-red-500
                    @enderror"    
                >
            </div>
            <input 
                type="submit"
                value="Registrarse"
                class="bg-sky-600 hover:bg-green-600 cursor-pointer uppercase w-full p-3 text-white rounded-lg:font-bold"
            >
        </form>
    </div>
  </div>
  <div class="md:flex md:justify-center md:items-center mt-10">
    <div class="md:w-4/12 bg-white p-6 rounden-lg shadow-2xl">
        <h2 class="text-center">
            ¿Tienes una cuenta?
            <a class="text-blue-600" href="/login">
            Inicia Sesion
            </a>
        </h2>
    </div>
  </div>
@endsection