<div class="inline-block relative group">
    <div
        class="absolute top-0 left-0 w-full h-full bg-black group-hover:translate-x-1 group-hover:translate-y-1 transition-transform ease-in-out -z-10"></div>
    <a {{ $attributes }} class="bg-orange border-2 border-black flex py-1 px-2 lg:px-4 text-xs lg:text-lg items-center">
        {{ $slot }}
    </a>
</div>
