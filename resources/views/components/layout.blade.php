<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Podkast IT Tipa!</title>

    @vite(['resources/css/app.css'])
</head>
<body class="antialiased bg-bg font-anonymous-pro text-black">
<div class="w-[100vw]">
    <header class="border-b-2 border-b-black">
        <div class="container grid grid-cols-3 lg:grid-cols-header lg:gap-4 relative">
            <nav role="navigation"
                 class="font-azeret-mono flex lg:relative absolute overflow-hidden bg-bg flex-col lg:flex-row w-full lg:w-auto top-full lg:top-0 border-y-2 lg:border-y-0 border-black transition-transform -translate-y-full lg:translate-y-0 z-0 lg:z-10"
                 id="menu">
                <a href="{{ route('home') }}" aria-current="page"
                   class="pl-4 lg:pl-0 py-3 lg:py-7 pr-8 flex items-center text-lg leading-none {{ Route::is('home') ? 'text-orange' : '' }}">Početna</a>
                <a href="{{ route('epizode') }}"
                   class="pl-4 py-3 lg:pl-0 lg:py-7 pr-8 flex items-center text-lg leading-none {{ Route::is('epizode') || Route::is('epizoda') ? 'text-orange' : '' }}">Epizode</a>
                <a href="{{ route('kontakt') }}"
                   class="pl-4 py-3 lg:pl-0 lg:py-7 pr-8 flex items-center text-lg leading-none {{ Route::is('kontakt') ? 'text-orange' : '' }}">Kontakt</a>
            </nav>
            <button class="lg:hidden flex justify-center items-center bg-bg z-10 fill-black" id="burger-menu">
                <svg viewBox="0 0 100 80" width="25" height="25" class="fill-inherit">
                    <rect width="100" height="15"></rect>
                    <rect y="30" width="100" height="15"></rect>
                    <rect y="60" width="100" height="15"></rect>
                </svg>
            </button>
            <div class="border-x-2 border-x-black px-4 py-3 bg-bg z-10">
                <a href="{{ route('home') }}">
                    <img src="/images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="flex justify-center lg:justify-end items-center bg-bg z-10">
                <x-orange-button href="{{ route('epizode') }}">
                    Sve epizode
                </x-orange-button>
            </div>
        </div>
    </header>

    {{ $slot }}

    <div class="px-4 lg:px-0">
        <div class="border-x-2 lg:border-x-0 lg:border-y-2 border-black">
            <div class="lg:container grid grid-cols-1 lg:grid-cols-6">
                <div
                    class="py-8 lg:px-5 border-black border-y-2 lg:border-y-0 lg:border-x-2 flex justify-center items-center font-bold text-lg">
                    Nađi nas na:
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="{{ config('app.apple_podcasts_url') }}" target="_blank" rel="noopener noreferrer">
                        <img src="/images/logos/apple-podcasts.svg" alt="apple podcast" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="{{ config('app.google_podcasts_url') }}" target="_blank" rel="noopener noreferrer">
                        <img src="/images/logos/google-podcasts.svg" alt="google podcasts" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="{{ config('app.deezer_url') }}" target="_blank" rel="noopener noreferrer">
                        <img src="/images/logos/deezer.svg" alt="deezer" width="231" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="{{ config('app.spotify_url') }}" target="_blank" rel="noopener noreferrer">
                        <img src="/images/logos/spotify.svg" alt="spotify" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="{{ config('app.youtube_url') }}" target="_blank" rel="noopener noreferrer">
                        <img src="/images/logos/youtube.svg" alt="youtube" width="176" class="h-10">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-12 px-4 lg:px-0">
        <div class="container px-x lg:px-0 flex flex-col lg:flex-row justify-between items-center">
            <img src="/images/logo.png" alt="Logo" class="max-h-24">
            <div>
                <div class="flex gap-2 justify-center lg:justify-end mb-2 mt-2 lg:mt-0">
                    <a href="https://www.instagram.com/podkastittipa/" target="_blank" rel="noopener noreferrer" class="inline-flex  border-2 border-black w-8 h-8 items-center justify-center bg-bg transition-shadow hover:shadow-effect-sm">
                        <img src="/images/icons/instagram-dark.svg" alt="instagram" class="w-4">
                    </a>
                    <a href="https://twitter.com/podkastittipa" target="_blank" rel="noopener noreferrer" class="inline-flex  border-2 border-black w-8 h-8 items-center justify-center bg-bg transition-shadow hover:shadow-effect-sm">
                        <img src="/images/icons/twitter-dark.svg" alt="twitter" class="w-4">
                    </a>
                </div>
                <p class="text-gray text-lg font-azeret-mono">Copyright © Podkast IT Tipa</p>
            </div>
        </div>
    </footer>
</div>
@vite(['resources/js/app.js'])
</body>
</html>
