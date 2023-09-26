<div class="flex justify-center">
    <div class="md:w-8/12 lg:w-8/12 w-full flex flex-col items-center md:flex-row">
        <div class="grid sm:grid-cols-1 grid-cols-3 w-full md:w-4/12 lg:w-4/12 items-center">
            <div class="p-3">
                @if ($user->id === auth()->user()->id)
                    <img class="rounded-full sm:h-40 h-20 m-auto" src="{{ asset('img/user.jpg') }}" alt="Imagen de perfil">
                @else
                    <img class="rounded-full sm:h-40 h-20 m-auto" src="{{ asset('img/user2.png') }}" alt="Imagen de perfil">
                @endif
            </div>
            <div class="pl-2 pr-6 text-start jus sm:hidden block col-span-2">
                <p class="text-gray-800 text-xl flex items-center"> {{ $user->username }}
                    <svg aria-label="Verificado" class="ml-2" color="rgb(0, 149, 246)" fill="rgb(0, 149, 246)" height="18" role="img" viewBox="0 0 40 40" width="18">
                        <title>Verificado</title>
                        <path d="M19.998 3.094 14.638 0l-2.972 5.15H5.432v6.354L0 14.64 3.094 20 0 25.359l5.432 3.137v5.905h5.975L14.638 40l5.36-3.094L25.358 40l3.232-5.6h6.162v-6.01L40 25.359 36.905 20 40 14.641l-5.248-3.03v-6.46h-6.419L25.358 0l-5.36 3.094Zm7.415 11.225 2.254 2.287-11.43 11.5-6.835-6.93 2.244-2.258 4.587 4.581 9.18-9.18Z" fill-rule="evenodd"></path>
                    </svg>
                </p>
                @auth
                    @if ($user->id === auth()->user()->id) <!-- Si el usuario es el mismo que el que está logueado -->
                        <a class="mt-5 block w-full text-gray-800 text-sm hover:bg-gray-300 bg-gray-200 py-2 px-4 rounded-lg font-semibold cursor-pointer" href="">Editar Perfil</a>
                    @else
                        <button class="mt-5 text-white text-sm hover:bg-sky-700 bg-sky-500 py-2 px-4 rounded-lg font-semibold cursor-pointer" type="submit">Seguir</button>
                    @endif
                @endauth
            </div>
        </div>
        <div class="w-full md:w-8/12 lg:w-8/12 md:flex sm:justify-start justify-center items-center">
            <div class="p-1">
                <div class="grid grid-cols-2 gap-4 items-center py-3">
                    <div class="px-2 text-center sm:text-start">
                        <p class="text-gray-700 text-xl hidden sm:flex items-center">{{ $user->username }}
                            <svg aria-label="Verificado" class="ml-2" color="rgb(0, 149, 246)" fill="rgb(0, 149, 246)" height="18" role="img" viewBox="0 0 40 40" width="18">
                                <title>Verificado</title>
                                <path d="M19.998 3.094 14.638 0l-2.972 5.15H5.432v6.354L0 14.64 3.094 20 0 25.359l5.432 3.137v5.905h5.975L14.638 40l5.36-3.094L25.358 40l3.232-5.6h6.162v-6.01L40 25.359 36.905 20 40 14.641l-5.248-3.03v-6.46h-6.419L25.358 0l-5.36 3.094Zm7.415 11.225 2.254 2.287-11.43 11.5-6.835-6.93 2.244-2.258 4.587 4.581 9.18-9.18Z" fill-rule="evenodd"></path>
                            </svg>
                        </p>
                        <p class="text-gray-700 text-md font-semibold block sm:hidden">{{ $user->name }}</p>
                    </div>
                    <div class="px-2 text-center sm:text-start hidden sm:block">
                        @auth
                            @if ($user->id === auth()->user()->id)
                                <a class=" text-gray-800 text-sm hover:bg-gray-300 bg-gray-200 py-2 px-4 rounded-lg font-semibold cursor-pointer" href="/user">Editar perfil</a>
                            @else
                                <button class="text-white text-sm hover:bg-sky-700 bg-sky-500 py-2 px-4 rounded-lg font-semibold cursor-pointer" type="submit">Seguir</button>
                            @endif
                        @endauth
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 items-center py-3 px-4 sm:px-0 border-t-2 sm:border-t-0">
                    <div class="px-2">
                        <span class="text-gray-700 text-sm">
                            <span class="flex sm:inline font-bold items-center justify-center">0</span>
                            <span class="flex sm:inline font-normal items-center justify-center">publicaciones</span>
                        </span>
                    </div>
                    <div class="px-2">
                        <span class="text-gray-700 text-sm">
                            <span class="flex sm:inline font-bold items-center justify-center">0</span>
                            <span class="flex sm:inline font-normal items-center justify-center">seguidores</span>
                        </span>
                    </div>
                    <div class="px-2">
                        <span class="text-gray-700 text-sm">
                            <span class="flex sm:inline font-bold items-center justify-center">0</span>
                            <span class="flex sm:inline font-normal items-center justify-center">seguidos</span>
                        </span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 items-center sm:py-3">
                    <div class="px-2 text-center sm:text-start">
                        <p class="text-gray-800 text-base font-semibold hidden sm:block"> {{ $user->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>