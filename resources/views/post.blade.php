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
        <x-tabs tabName="tabs-saved" tabName1="tabs-saved-tab" >
            <x-tabs-content src="{{asset('img/saved.png')}}" alt="image saved" text="Guardar" text2="Guarda fotos y videos que quieras volver a ver. Nadie recibirá una notificación y solo tú podrás ver lo que guardaste." />
        </x-tabs>   
        <x-tabs tabName="tabs-tagged" tabName1="tabs-tagged" >
            <x-tabs-content src="{{asset('img/target.png')}}" alt="image saved" text="Fotos en las que apareces" text2="Cuando las personas te etiqueten en fotos, aparecerán aquí." />
        </x-tabs> 
    </div>
</x-layout>
