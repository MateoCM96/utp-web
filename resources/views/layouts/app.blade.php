<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body class=" bg-gray-50">
        <header class=" p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <img class "max-h-10 src="{{ asset('img/utp.png') }}" alt="Logo UTP">
                <h1 class="text-3xl font-black">
                   PELUDITOS UTP  
                </h1>
                <nav class="flex gap-2 items-center">
                    @if (Route::has('login') && Auth::check())
                    <a class="font-bold text-gray-600 text-sm" href="#">
                        Hola, {{ auth()->user()->username }}
                    </a>
                        <form action="{{route('logout')}}" method="post">
                        @csrf
                            <button type="submit" class="font bold uppercase text-gray-600 test-sm">
                                Cerrar Sesion
                            </button
                        </form>
                    @elseif(Route::has('login') && !Auth::check())
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">Login</a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">Regístrate</a>
                    @endif               
                </nav>
            </div>
        </header>
        <main class="conteiner mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">@yield('Titulo')</h2>
            @yield('contenido')
        </main>
        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            Todos los derechos reservados {{now()-> year}}
        </footer>
    </body>
</html>
