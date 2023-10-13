<x-layout :titlePage="$user->name">
    <x-div-profile :user="$user" :posts="$posts"/>
    <x-forms.alert/>
 
    <x-div-ul>
        <x-forms.li tagName="tabs-publications" text="Publicaciones" selected="true" dataActive="data-te-nav-active">
            @mobile
                <x-icons.posts-mobile/>
            @elsemobile
                <x-icons.posts/>
            @endmobile
        </x-forms.li>
        @auth
            @if ($user->id === auth()->user()->id)
                <x-forms.li tagName="tabs-saved" text="Guardado" selected="false">
                    @mobile
                        <x-icons.saved-mobile/>
                    @elsemobile
                        <x-icons.saved/>
                    @endmobile
                </x-forms.li>
            @endif
        @endauth
        <x-forms.li tagName="tabs-tagged" text="Etiquetadas" selected="false">
            @mobile
                <x-icons.tagged-mobile/>
            @elsemobile
                <x-icons.tagged/>
            @endmobile
        </x-forms.li>
    </x-div-ul>
    <!--Tabs content-->
    <div class="mb-6">
        <x-tab-content tabName="tabs-publications" dataActive="data-te-tab-active" class="opacity-100 container-posts">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-div-post alt="gallery" :post="$post" userId="{{ auth()->user()->id }}"/>
                @endforeach
            @else
                @if ($user->id == auth()->user()->id)
                    <x-div-nothing-to-show src="{{ asset('img/publication.png') }}" alt="image saved" textH1="Comparte fotos" textP="Cuando compartas fotos, aparecerán en tu perfil.">
                        <a class="openModalStorePost text-sm text-sky-600 hover:text-sky-950 font-semibold cursor-pointer" type="button">
                            Comparte tu primera foto
                        </a>
                    </x-div-nothing-to-show>
                @else
                    <x-div-nothing-to-show src="{{ asset('img/publication.png') }}" alt="image saved" textH1="Aún no hay publicaciones" textP=""/>
                @endif
            @endif
            
        </x-tab-content>
        <x-tab-content tabName="tabs-saved" class="opacity-0">
            <x-div-nothing-to-show src="{{ asset('img/saved.png') }}" alt="image saved" textH1="Guardar" textP="Guarda fotos y videos que quieras volver a ver. Nadie recibirá una notificación y solo tú podrás ver lo que guardaste."/>
        </x-tab-content>
        <x-tab-content tabName="tabs-tagged" class="opacity-0">
            <x-div-nothing-to-show src="{{ asset('img/target.png') }}" alt="image saved" textH1="Fotos en las que apareces" textP="Cuando las personas te etiqueten en fotos, aparecerán aquí."/>
        </x-tab-content>
    </div>
    @if (Auth::check())
        <x-div-modal id="showPost" classButton="closeModalshowPost">
            <x-content-modal-post-show :user="$user"/>
        </x-div-modal>
        <x-div-modal id="options-post" idBackDropModal="backdrop-modal">
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" id="cancel-delete" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" id="delete-post" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Eliminar</button>
             
            </div>
        </x-div-modal>
    @endif
</x-layout>
