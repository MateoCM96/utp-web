<x-layout title=" ">
    <x-div-profile :user="$user" />
    <div
        class="text-sm font-medium text-center text-gray-500 border-b-0 border-t border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px items-center justify-center sm:gap-2 gap-12" role="tablist" data-te-nav-ref>
            <x-forms.li route="#tabs-publications" target="#tabs-publications" controls="tabs-publications" selected="true"
                text="Publicaciones">
                <x-icons.publication-icon />
            </x-forms.li>
            @auth
                @if ($user->id === auth()->user()->id)
                    <x-forms.li route="#tabs-saved" target="#tabs-saved" controls="tabs-saved" selected="false"
                        text="Guardado">
                        <x-icons.saved-icon />
                    </x-forms.li>
                @endif
            @endauth
            <x-forms.li route="#tabs-tagged" target="#tabs-tagged" controls="tabs-tagged" selected="false"
                text="Etiquetadas">
                <x-icons.etiquets-icon />
            </x-forms.li>
        </ul>
    </div>

    <!--Tabs content-->
    <div class="mb-6">
        <x-public />
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-saved" role="tabpanel" aria-labelledby="tabs-saved-tab">
            <div class=" sm:justify-between sm:flex">
                <p class=" text-center text-xs font-semibold text-gray-500 mt-5">Solo tú puedes ver lo que guardaste
                </p>
                <a href="#" class="text-sky-700 cursor-pointer hidden sm:block">+ Nueva colección</a>
            </div>
            <div class="mt-20">
                <img class="m-auto justify-center items-center text-center" src="{{ asset('img/saved.png') }}"
                    alt="image saved">
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-black font-sans">Guardar</h1>
                <p class="m-3 text-sm text-gray-800">Guarda fotos y videos que quieras volver a ver. Nadie recibirá una
                    notificación y solo tú podrás ver lo que guardaste.</p>
            </div>
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-tagged" role="tabpanel" aria-labelledby="tabs-tagged">
            <div class="mt-20">
                <img class="m-auto text-center" src="{{ asset('img/target.png') }}" alt="image saved">
            </div>
            <div class="mt-5">
                <h1 class="text-2xl font-black font-sans text-center">Fotos en las que apareces</h1>
                <p class="m-3 text-sm text-gray-800 text-center">Cuando las personas te etiqueten en fotos, aparecerán
                    aquí.</p>
            </div>
        </div>
    </div>
</x-layout>
