<div class="mb-6">
    <div
        class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-publications"
        role="tabpanel"
        aria-labelledby="tabs-publications-tab"
        data-te-tab-active>
            <div class="sm:container mx-auto sm:px-5 px-2 py-2 lg:px-32 lg:pt-12">
                <div class="-m-1 flex flex-wrap md:-m-2">
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-0.5">
                            <img
                                alt="gallery"
                                class="block h-full w-full object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" />
                        </div>
                    </div>
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-0.5">
                            <img
                                alt="gallery"
                                class="block h-full w-full object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp" />
                        </div>
                    </div>
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-0.5">
                            <img
                                alt="gallery"
                                class="block h-full w-full object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp" />
                        </div>
                    </div>
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-0.5">
                            <img
                                alt="gallery"
                                class="block h-full w-full object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp" />
                        </div>
                    </div>
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-0.5">
                            <img
                                alt="gallery"
                                class="block h-full w-full object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(76).webp" />
                        </div>
                    </div>
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-0.5">
                            <img
                                alt="gallery"
                                class="block h-full w-full object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp" />
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div
        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-saved"
        role="tabpanel"
        aria-labelledby="tabs-saved-tab">
            <div class=" sm:justify-between sm:flex">
                <p class=" text-center text-xs font-semibold text-gray-500 mt-5">Solo tú puedes ver lo que guardaste</p>
                <a href="#" class="text-sky-700 cursor-pointer hidden sm:block">+ Nueva colección</a>
            </div>
            <div class="mt-20">
                <img class="m-auto justify-center items-center text-center" src="{{ asset('img/saved.png') }}" alt="image saved">
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-black font-sans">Guardar</h1>
                <p class="m-3 text-sm text-gray-800">Guarda fotos y videos que quieras volver a ver. Nadie recibirá una notificación y solo tú podrás ver lo que guardaste.</p>
            </div>
    </div>
    <div
        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-tagged"
        role="tabpanel"
        aria-labelledby="tabs-tagged">
        <div class="mt-20">
            <img class="m-auto text-center" src="{{ asset('img/target.png') }}" alt="image saved">
        </div>
        <div class="mt-5">
            <h1 class="text-2xl font-black font-sans text-center">Fotos en las que apareces</h1>
            <p class="m-3 text-sm text-gray-800 text-center">Cuando las personas te etiqueten en fotos, aparecerán aquí.</p>
        </div>
    </div>
</div>