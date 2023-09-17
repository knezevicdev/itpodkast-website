<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Podkast IT Tipa!</title>
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>
<body class="antialiased bg-bg font-anonymous-pro text-black">
<div class="w-[100vw]">
    <header class="border-b-2 border-b-black">
        <div class="container grid grid-cols-3 lg:grid-cols-header lg:gap-4 relative">
            <nav role="navigation"
                 class="font-azeret-mono flex lg:relative absolute overflow-hidden bg-bg flex-col lg:flex-row w-full lg:w-auto top-full lg:top-0 border-y-2 lg:border-y-0 border-black transition-transform -translate-y-full lg:translate-y-0 z-0 lg:z-10"
                 id="menu">
                <a href="{{ route('home') }}" wire:navigate
                   class="pl-4 lg:pl-0 py-3 lg:py-7 pr-8 flex items-center text-lg leading-none {{ Route::is('home') ? 'text-orange' : '' }} hover:text-orange transition-colors">Početna</a>
                <a href="{{ route('epizode') }}" wire:navigate
                   class="pl-4 py-3 lg:pl-0 lg:py-7 pr-8 flex items-center text-lg leading-none {{ Route::is('epizode') || Route::is('epizoda') ? 'text-orange' : '' }} hover:text-orange transition-colors">Epizode</a>
                <a href="{{ route('kontakt') }}" wire:navigate
                   class="pl-4 py-3 lg:pl-0 lg:py-7 pr-8 flex items-center text-lg leading-none {{ Route::is('kontakt') ? 'text-orange' : '' }} hover:text-orange transition-colors">Kontakt</a>
            </nav>
            <button class="lg:hidden flex justify-center items-center bg-bg z-10 fill-black" id="burger-menu">
                <svg viewBox="0 0 100 80" width="25" height="25" class="fill-inherit">
                    <rect width="100" height="15"></rect>
                    <rect y="30" width="100" height="15"></rect>
                    <rect y="60" width="100" height="15"></rect>
                </svg>
            </button>
            <div class="border-x-2 border-x-black px-4 py-3 bg-bg z-10">
                <a href="{{ route('home') }}" wire:navigate>
                    <img src="/images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="flex justify-center lg:justify-end items-center bg-bg z-10">
                <x-orange-button href="{{ route('epizode') }}" wire:navigate>
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
                    <a href="https://www.instagram.com/podkastittipa/" target="_blank" rel="noopener noreferrer"
                       class="inline-flex  border-2 border-black w-8 h-8 items-center justify-center bg-bg transition-shadow hover:shadow-effect-sm">
                        <img src="/images/icons/instagram-dark.svg" alt="instagram" class="w-4">
                    </a>
                    <a href="https://twitter.com/podkastittipa" target="_blank" rel="noopener noreferrer"
                       class="inline-flex  border-2 border-black w-8 h-8 items-center justify-center bg-bg transition-shadow hover:shadow-effect-sm">
                        <img src="/images/icons/twitter-dark.svg" alt="twitter" class="w-4">
                    </a>
                </div>
                <p class="text-gray text-lg font-azeret-mono">Copyright © Podkast IT Tipa</p>
            </div>
        </div>
    </footer>

    @persist('player')
    @php
        $lastPlayedEpisodeSlug = request()->cookie('last_played_episode');
        $episode = \App\Models\Episode::orderBy('number', 'desc')->first();

        if ($lastPlayedEpisodeSlug) {
            $lastPlayedEpisode = \App\Models\Episode::where('slug', $lastPlayedEpisodeSlug)->first();
            if ($lastPlayedEpisode) {
                $episode = $lastPlayedEpisode;
            }
        }
    @endphp
    <div
        class="fixed bottom-0 left-1/2 -translate-x-1/2 border-black border-2 border-b-0 bg-bg transition-transform will-change-transform translate-y-0"
        id="player-container">
        <button id="player-toggle" class="border-black border-2 absolute top-0 -right-0.5 -translate-y-full bg-bg">
            <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                 transform="translate(0, 1)" class="rotate-90">
                <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
            </svg>
        </button>
        <audio crossorigin playsinline id="player">
            <source src="{{ asset($episode->audio_url) }}" type="audio/mp3">
        </audio>
    </div>
    <div hidden="" id="sprite-plyr"><!--?xml version="1.0" encoding="UTF-8"?-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol id="plyr-airplay" viewBox="0 0 18 18">
                <path d="M16 1H2a1 1 0 00-1 1v10a1 1 0 001 1h3v-2H3V3h12v8h-2v2h3a1 1 0 001-1V2a1 1 0 00-1-1z"></path>
                <path d="M4 17h10l-5-6z"></path>
            </symbol>
            <symbol id="plyr-captions-off" viewBox="0 0 18 18">
                <path
                    d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z"
                    fill-rule="evenodd" fill-opacity=".5"></path>
            </symbol>
            <symbol id="plyr-captions-on" viewBox="0 0 18 18">
                <path
                    d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="plyr-download" viewBox="0 0 18 18">
                <path
                    d="M9 13c.3 0 .5-.1.7-.3L15.4 7 14 5.6l-4 4V1H8v8.6l-4-4L2.6 7l5.7 5.7c.2.2.4.3.7.3zm-7 2h14v2H2z"></path>
            </symbol>
            <symbol id="plyr-enter-fullscreen" viewBox="0 0 18 18">
                <path d="M10 3h3.6l-4 4L11 8.4l4-4V8h2V1h-7zM7 9.6l-4 4V10H1v7h7v-2H4.4l4-4z"></path>
            </symbol>
            <symbol id="plyr-exit-fullscreen" viewBox="0 0 18 18">
                <path d="M1 12h3.6l-4 4L2 17.4l4-4V17h2v-7H1zM16 .6l-4 4V1h-2v7h7V6h-3.6l4-4z"></path>
            </symbol>
            <symbol id="plyr-fast-forward" viewBox="0 0 18 18">
                <path d="M7.875 7.171L0 1v16l7.875-6.171V17L18 9 7.875 1z"></path>
            </symbol>
            <symbol id="plyr-logo-vimeo" viewBox="0 0 18 18">
                <path
                    d="M17 5.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C5 10.9 4.4 6 3 6c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z"></path>
            </symbol>
            <symbol id="plyr-logo-youtube" viewBox="0 0 18 18">
                <path
                    d="M16.8 5.8c-.2-1.3-.8-2.2-2.2-2.4C12.4 3 9 3 9 3s-3.4 0-5.6.4C2 3.6 1.3 4.5 1.2 5.8 1 7.1 1 9 1 9s0 1.9.2 3.2c.2 1.3.8 2.2 2.2 2.4C5.6 15 9 15 9 15s3.4 0 5.6-.4c1.4-.3 2-1.1 2.2-2.4.2-1.3.2-3.2.2-3.2s0-1.9-.2-3.2zM7 12V6l5 3-5 3z"></path>
            </symbol>
            <symbol id="plyr-muted" viewBox="0 0 18 18">
                <path
                    d="M12.4 12.5l2.1-2.1 2.1 2.1 1.4-1.4L15.9 9 18 6.9l-1.4-1.4-2.1 2.1-2.1-2.1L11 6.9 13.1 9 11 11.1zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path>
            </symbol>
            <symbol id="plyr-pause" viewBox="0 0 18 18">
                <path
                    d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zm6 0c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"></path>
            </symbol>
            <symbol id="plyr-pip" viewBox="0 0 18 18">
                <path d="M13.293 3.293L7.022 9.564l1.414 1.414 6.271-6.271L17 7V1h-6z"></path>
                <path d="M13 15H3V5h5V3H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1v-6h-2v5z"></path>
            </symbol>
            <symbol id="plyr-play" viewBox="0 0 18 18">
                <path
                    d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"></path>
            </symbol>
            <symbol id="plyr-restart" viewBox="0 0 18 18">
                <path
                    d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z"></path>
            </symbol>
            <symbol id="plyr-rewind" viewBox="0 0 18 18">
                <path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z"></path>
            </symbol>
            <symbol id="plyr-settings" viewBox="0 0 18 18">
                <path
                    d="M16.135 7.784a2 2 0 01-1.23-2.969c.322-.536.225-.998-.094-1.316l-.31-.31c-.318-.318-.78-.415-1.316-.094a2 2 0 01-2.969-1.23C10.065 1.258 9.669 1 9.219 1h-.438c-.45 0-.845.258-.997.865a2 2 0 01-2.969 1.23c-.536-.322-.999-.225-1.317.093l-.31.31c-.318.318-.415.781-.093 1.317a2 2 0 01-1.23 2.969C1.26 7.935 1 8.33 1 8.781v.438c0 .45.258.845.865.997a2 2 0 011.23 2.969c-.322.536-.225.998.094 1.316l.31.31c.319.319.782.415 1.316.094a2 2 0 012.969 1.23c.151.607.547.865.997.865h.438c.45 0 .845-.258.997-.865a2 2 0 012.969-1.23c.535.321.997.225 1.316-.094l.31-.31c.318-.318.415-.781.094-1.316a2 2 0 011.23-2.969c.607-.151.865-.547.865-.997v-.438c0-.451-.26-.846-.865-.997zM9 12a3 3 0 110-6 3 3 0 010 6z"></path>
            </symbol>
            <symbol id="plyr-volume" viewBox="0 0 18 18">
                <path
                    d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z"></path>
                <path
                    d="M11.282 5.282a.909.909 0 000 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 000 1.316c.145.145.636.262 1.018.156a.725.725 0 00.298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 00-1.316 0zm-7.496.726H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path>
            </symbol>
        </svg>
    </div>
    @endpersist
</div>
@vite(['resources/js/app.js'])
@livewireScripts
</body>
</html>
