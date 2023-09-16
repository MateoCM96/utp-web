@extends('layouts.app')

@section('Titulo')
    Editar Perfil
@endsection
@section('contenido')
<div class=" md:flex md:justify-center md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounden-lg shadow-2xl">
        <div class="md:flex md:justify-center hidden sm:block">
            <img class="max-h-20" src="{{asset('img/9.jpg')}}" alt="UTP SOCIAL">
        </div>
        <h2 class="mb-5 text-gray-600 font-bold font-sans text-center">

        </h2>
        <hr class="mb-5">

        <form action="{{ route('user') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{auth()->user()->id }}">
            @if(session('warning'))
            <p class="bg-red-500 text-white my-2 rounded-lg p-2 text-center">
                {{session('warning')}}
            </p>
            @endif
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
            <input 
                type="submit"
                value="Guardar Cambios"
                class="bg-sky-600 hover:bg-green-600 cursor-pointer uppercase w-full p-3 text-white rounded-lg:font-bold"
            >
        </form>
    </div>
</div> 
 
@endsection