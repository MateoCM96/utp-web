<div class="text-sm font-medium text-center text-gray-500 border-b-0 border-t border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px items-center justify-center sm:gap-2 gap-12" role="tablist" data-te-nav-ref>
        <li class="mr-2" role="presentation">
            <a
                href="#tabs-publications"
                class="flex gap-2 items-center my-0 border-x-0 border-b-0 border-t-2 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-publications"
                data-te-nav-active
                role="tab"
                aria-controls="tabs-publications"
                aria-selected="true">
                <svg color="border-gray-800" fill="border-gray-800" height="12" role="img" viewBox="0 0 24 24" width="12">
                    <rect fill="none" height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="18" x="3" y="3"></rect>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="9.015" x2="9.015" y1="3" y2="21"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="14.985" x2="14.985" y1="3" y2="21"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="21" x2="3" y1="9.015" y2="9.015"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="21" x2="3" y1="14.985" y2="14.985"></line>
                </svg>
                <p class="hidden sm:block">Publicaciones</p>
            </a>
        </li>
        @auth
            @if ($user->id === auth()->user()->id)
                <li class="mr-2" role="presentation">
                    <a
                        href="#tabs-saved"
                        class="flex gap-2 items-center my-0 border-x-0 border-b-0 border-t-2 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill"
                        data-te-target="#tabs-saved"
                        role="tab"
                        aria-controls="tabs-saved"
                        aria-selected="false"
                    >
                    <svg color="border-gray-800" fill="border-gray-800" height="12" role="img" viewBox="0 0 24 24" width="12">
                        <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                    </svg>
                        <p class="hidden sm:block">Guardado</p>
                    </a>
                </li>
            @endif
        @endauth
        <li class="mr-2" role="presentation">
            <a
                href="#tabs-tagged"
                class="flex gap-2 items-center my-0 border-x-0 border-b-0 border-t-2 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                data-te-toggle="pill"
                data-te-target="#tabs-tagged"
                role="tab"
                aria-controls="tabs-tagged"
                aria-selected="false"
                >
                <svg color="border-gray-800" fill="border-gray-800" height="12" role="img" viewBox="0 0 24 24" width="12">
                    <path d="M10.201 3.797 12 1.997l1.799 1.8a1.59 1.59 0 0 0 1.124.465h5.259A1.818 1.818 0 0 1 22 6.08v14.104a1.818 1.818 0 0 1-1.818 1.818H3.818A1.818 1.818 0 0 1 2 20.184V6.08a1.818 1.818 0 0 1 1.818-1.818h5.26a1.59 1.59 0 0 0 1.123-.465Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    <path d="M18.598 22.002V21.4a3.949 3.949 0 0 0-3.948-3.949H9.495A3.949 3.949 0 0 0 5.546 21.4v.603" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    <circle cx="12.072" cy="11.075" fill="none" r="3.556" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                </svg>
                <p class="hidden sm:block">Etiquetadas</p>
            </a>
        </li>
    </ul>
</div>