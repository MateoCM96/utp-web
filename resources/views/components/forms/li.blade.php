<li class="mr-2" role="presentation">
    <a
        href="{{ $route }}"
        class="flex gap-2 items-center my-0 border-x-0 border-b-0 border-t-2 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
        data-te-toggle="pill"
        data-te-target="{{ $target }}"
        role="tab"
        aria-controls="{{$controls}}"
        aria-selected="{{$selected}}"
        >
        {{$slot}}
        <p class="hidden sm:block">{{ $text }}</p>
    </a>
</li>