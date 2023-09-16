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
                <a href="/" aria-current="page"
                   class="pl-4 lg:pl-0 py-3 lg:py-7 pr-8 flex items-center text-lg leading-none text-orange">Početna</a>
                <a href="/epizode"
                   class="pl-4 py-3 lg:pl-0 lg:py-7 pr-8 flex items-center text-lg leading-none">Epizode</a>
                <a href="/kontakt"
                   class="pl-4 py-3 lg:pl-0 lg:py-7 pr-8 flex items-center text-lg leading-none">Kontakt</a>
            </nav>
            <button class="lg:hidden flex justify-center items-center bg-bg z-10 fill-black" id="burger-menu">
                <svg viewBox="0 0 100 80" width="25" height="25" class="fill-inherit">
                    <rect width="100" height="15"></rect>
                    <rect y="30" width="100" height="15"></rect>
                    <rect y="60" width="100" height="15"></rect>
                </svg>
            </button>
            <div class="border-x-2 border-x-black px-4 py-3 bg-bg z-10">
                <a href="/">
                    <img src="/images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="flex justify-center lg:justify-end items-center bg-bg z-10">
                <a href="/epizode" class="bg-orange border-2 border-black flex py-1 px-2 lg:px-4 text-xs lg:text-lg">
                    Sve epizode
                </a>
            </div>
        </div>
    </header>

    <section>
        <div class="container grid grid-cols-2 gap-5 lg:hero pt-6 mb-16 lg:mb-24 px-4 lg:px-0">
            <div class="lg:hero-content mt-4 lg:mt-16 col-span-2">
                <h1 class="text-5xl lg:text-8xl lg:ml-20">Podkast IT</h1>
                <h1 class="text-5xl lg:text-8xl lg:-ml-8">Tipa sa Sebom</h1>
                <h1 class="text-5xl lg:text-8xl">i Nikolom</h1>
                <div class="mt-12 lg:pl-24 lg:pr-52">
                    <p class="text-gray font-azeret-mono">
                        Sve što ste hteli da znate o softverskom inženjerstvu,
                        <br/>
                        a niste smeli da pitate!
                    </p>
                    <div class="group relative mt-8 mb-10 inline-flex">
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-black group-hover:translate-x-1.5 group-hover:translate-y-1.5 transition-transform ease-in-out"></div>
                        <a href="/epizode"
                           class="font-azeret-mono text-lg font-semibold border-2 border-black px-8 py-2.5 inline-flex bg-bg relative">Najnovije
                            epizode</a>
                    </div>
                    <div class="flex items-start lg:items-center flex-col lg:flex-row">
                        <span class="text-xl lg:pr-5 pb-2 lg:pb-0">Slušajte nas na:</span>
                        <ul class="flex gap-2 lg:gap-8">
                            <li class="flex items-center">
                                <a href="#"><img src="/images/icons/apple-podcast.svg" alt="apple podcast"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="#"><img src="/images/icons/google-podcasts.svg" alt="google podcasts"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="#"><img src="/images/icons/stitcher.svg" alt="stitcher"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="#"><img src="/images/icons/deezer.svg" alt="deezer"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="#"><img src="/images/icons/spotify.svg" alt="spotify"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="#"><img src="/images/icons/youtube.svg" alt="youtube"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:hero-image-right lg:mt-40 lg:ml-20 lg:-mr-36">
                <div class="relative">
                    <div
                        class="hero-image-shadow w-[103%] h-[102%] bg-black absolute top-0 left-0 -z-10 will-change-transform"></div>
                    <img src="/images/nikola.jpeg" alt="Nikola" class="max-w-full border-2 border-black">
                </div>
            </div>
            <div class="lg:hero-image-left lg:-mt-96 lg:-ml-28 lg:mr-16">
                <div class="relative">
                    <div
                        class="hero-image-shadow w-[103%] h-[102%] bg-orange absolute top-0 left-0 -z-10 will-change-transform"></div>
                    <img src="/images/seb.jpeg" alt="Sebastian" class="max-w-full border-2 border-black">
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-full overflow-hidden">
        <div class="border-y-2 border-y-black h-4 bg-orange"></div>
        <div id="scroller" class="flex">
            <div class="py-4 flex t-0 left-0 flex-none will-change-transform">
                <div class="flex items-center flex-none">
                    <img src="/images/divider.svg" alt="divider" class="w-10 mx-7">
                    <div class="text-3xl uppercase font-azeret-mono">Google podcast</div>
                </div>
                <div class="flex items-center flex-none">
                    <img src="/images/divider.svg" alt="divider" class="w-10 mx-7">
                    <div class="text-3xl uppercase font-azeret-mono">Deezer</div>
                </div>
                <div class="flex items-center flex-none">
                    <img src="/images/divider.svg" alt="divider" class="w-10 mx-7">
                    <div class="text-3xl uppercase font-azeret-mono">Stitcher</div>
                </div>
                <div class="flex items-center flex-none">
                    <img src="/images/divider.svg" alt="divider" class="w-10 mx-7">
                    <div class="text-3xl uppercase font-azeret-mono">Apple podcasts</div>
                </div>
                <div class="flex items-center flex-none">
                    <img src="/images/divider.svg" alt="divider" class="w-10 mx-7">
                    <div class="text-3xl uppercase font-azeret-mono">Spotify</div>
                </div>
                <div class="flex items-center flex-none">
                    <img src="/images/divider.svg" alt="divider" class="w-10 mx-7">
                    <div class="text-3xl uppercase font-azeret-mono">YouTube</div>
                </div>
            </div>
        </div>
        <div class="border-y-2 border-y-black h-4 bg-orange"></div>
    </div>

    <section class="py-14 lg:py-24">
        <div class="container px-4 lg:px-0">
            <h2 class="text-4xl lg:text-6xl text-center mb-10">Nove epizode</h2>
            <div class="grid lg:grid-cols-episodes">
                <ul>
                    <li class="p-6 border-2 border-black mb-8">
                        <div class="grid grid-cols-1 lg:grid-cols-episode gap-3 lg:gap-8">
                            <a href="#" class="inline-block">
                                <img class="border-2 border-black" src="/images/epizoda-thumb.jpeg" alt="episode">
                            </a>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row justify-between pt-2.5">
                                    <span class="font-azeret-mono font-semibold text-orange text-lg">Epizoda 11</span>
                                    <div class="flex items-center mt-2 lg:mt-0">
                                        <img src="/images/icons/clock.svg" alt="clock" class="mr-1.5 w-4 h-4">
                                        <span class="text-gray text-lg font-azeret-mono">1hr 15min</span>
                                    </div>
                                </div>
                                <a href="#">
                                    <h6 class="text-xl lg:text-3xl mt-2.5 hover:text-orange transition-all ease-in-out">
                                        Epizoda 11: Testiranje Softvera (gost: Dejan Miličić)
                                    </h6>
                                </a>
                                <div class="mt-auto flex justify-between flex-col xl:flex-row">
                                    <div class="mt-4 xl:mt-0">
                                        <div class="inline-block relative group">
                                            <div
                                                class="absolute top-0 left-0 w-full h-full bg-orange group-hover:translate-x-1.5 group-hover:translate-y-1.5 transition-transform ease-in-out -z-10"></div>
                                            <a href="#"
                                               class="px-6 lg:px-8 py-2 lg:py-4 bg-black text-white font-azeret-mono font-semibold text-md lg:text-xs inline-block">Pusti
                                                epizodu</a>
                                        </div>
                                    </div>
                                    <div class="flex flex-col lg:flex-row items-start lg:items-center mt-3 xl:mt-0">
                                        <span class="text-gray pr-2.5">Poslušajte na:</span>
                                        <ul class="flex gap-2.5 mt-2 lg:mt-0">
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/apple-podcast.svg" alt="apple podcast"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/google-podcasts.svg" alt="google podcasts"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/stitcher.svg" alt="stitcher"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/deezer.svg" alt="deezer"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/spotify.svg" alt="spotify"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/youtube.svg" alt="youtube"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-6 border-2 border-black mb-8">
                        <div class="grid grid-cols-1 lg:grid-cols-episode gap-3 lg:gap-8">
                            <a href="#" class="inline-block">
                                <img class="border-2 border-black" src="/images/epizoda-thumb.jpeg" alt="episode">
                            </a>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row justify-between pt-2.5">
                                    <span class="font-azeret-mono font-semibold text-orange text-lg">Epizoda 11</span>
                                    <div class="flex items-center mt-2 lg:mt-0">
                                        <img src="/images/icons/clock.svg" alt="clock" class="mr-1.5 w-4 h-4">
                                        <span class="text-gray text-lg font-azeret-mono">1hr 15min</span>
                                    </div>
                                </div>
                                <a href="#">
                                    <h6 class="text-xl lg:text-3xl mt-2.5 hover:text-orange transition-all ease-in-out">
                                        Epizoda 11: Testiranje Softvera (gost: Dejan Miličić)
                                    </h6>
                                </a>
                                <div class="mt-auto flex justify-between flex-col xl:flex-row">
                                    <div class="mt-4 xl:mt-0">
                                        <div class="inline-block relative group">
                                            <div
                                                class="absolute top-0 left-0 w-full h-full bg-orange group-hover:translate-x-1.5 group-hover:translate-y-1.5 transition-transform ease-in-out -z-10"></div>
                                            <a href="#"
                                               class="px-6 lg:px-8 py-2 lg:py-4 bg-black text-white font-azeret-mono font-semibold text-md lg:text-xs inline-block">Pusti
                                                epizodu</a>
                                        </div>
                                    </div>
                                    <div class="flex flex-col lg:flex-row items-start lg:items-center mt-3 xl:mt-0">
                                        <span class="text-gray pr-2.5">Poslušajte na:</span>
                                        <ul class="flex gap-2.5 mt-2 lg:mt-0">
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/apple-podcast.svg" alt="apple podcast"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/google-podcasts.svg" alt="google podcasts"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/stitcher.svg" alt="stitcher"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/deezer.svg" alt="deezer"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/spotify.svg" alt="spotify"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/youtube.svg" alt="youtube"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-6 border-2 border-black mb-8">
                        <div class="grid grid-cols-1 lg:grid-cols-episode gap-3 lg:gap-8">
                            <a href="#" class="inline-block">
                                <img class="border-2 border-black" src="/images/epizoda-thumb.jpeg" alt="episode">
                            </a>
                            <div class="flex flex-col">
                                <div class="flex flex-col lg:flex-row justify-between pt-2.5">
                                    <span class="font-azeret-mono font-semibold text-orange text-lg">Epizoda 11</span>
                                    <div class="flex items-center mt-2 lg:mt-0">
                                        <img src="/images/icons/clock.svg" alt="clock" class="mr-1.5 w-4 h-4">
                                        <span class="text-gray text-lg font-azeret-mono">1hr 15min</span>
                                    </div>
                                </div>
                                <a href="#">
                                    <h6 class="text-xl lg:text-3xl mt-2.5 hover:text-orange transition-all ease-in-out">
                                        Epizoda 11: Testiranje Softvera (gost: Dejan Miličić)
                                    </h6>
                                </a>
                                <div class="mt-auto flex justify-between flex-col xl:flex-row">
                                    <div class="mt-4 xl:mt-0">
                                        <div class="inline-block relative group">
                                            <div
                                                class="absolute top-0 left-0 w-full h-full bg-orange group-hover:translate-x-1.5 group-hover:translate-y-1.5 transition-transform ease-in-out -z-10"></div>
                                            <a href="#"
                                               class="px-6 lg:px-8 py-2 lg:py-4 bg-black text-white font-azeret-mono font-semibold text-md lg:text-xs inline-block">Pusti
                                                epizodu</a>
                                        </div>
                                    </div>
                                    <div class="flex flex-col lg:flex-row items-start lg:items-center mt-3 xl:mt-0">
                                        <span class="text-gray pr-2.5">Poslušajte na:</span>
                                        <ul class="flex gap-2.5 mt-2 lg:mt-0">
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/apple-podcast.svg" alt="apple podcast"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/google-podcasts.svg" alt="google podcasts"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/stitcher.svg" alt="stitcher"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/deezer.svg" alt="deezer"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/spotify.svg" alt="spotify"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                            <li class="flex items-center">
                                                <a href="#"><img src="/images/icons/youtube.svg" alt="youtube"
                                                                 class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="flex justify-center gap-8 relative">
                    <a href="/epizode" class="rounded-full inline-flex w-[220px] h-[220px] sticky top-8">
                        <span
                            class="rounded-full w-[103%] h-[102%] absolute top-0 left-0 -z-10 bg-black button-mouse-move-bg will-change-transform"></span>
                        <span
                            class="rounded-full bg-orange flex w-full h-full items-center justify-center button-mouse-move">
                            <span class="font-azeret-mono font-semibold text-lg text-center">
                                Pogledaj sve
                                <br/>
                                epizode
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="px-4 lg:px-0">
        <div class="border-x-2 lg:border-x-0 lg:border-y-2 border-black">
            <div class="container grid grid-cols-1 lg:grid-cols-7">
                <div
                    class="py-8 lg:px-5 border-black border-y-2 lg:border-y-0 lg:border-x-2 flex justify-center items-center font-bold text-lg">
                    Nađi nas na:
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="#">
                        <img src="/images/logos/apple-podcasts.svg" alt="apple podcast" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="#">
                        <img src="/images/logos/google-podcasts.svg" alt="google podcasts" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="#">
                        <img src="/images/logos/stitcher.svg" alt="stitcher" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="#">
                        <img src="/images/logos/deezer.svg" alt="deezer" width="231" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="#">
                        <img src="/images/logos/spotify.svg" alt="spotify" class="h-10">
                    </a>
                </div>
                <div
                    class="py-8 lg:px-5 border-b-2 lg:border-b-0 lg:border-r-2 border-black flex justify-center items-center font-bold text-lg">
                    <a href="#">
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
                    <div class="group relative">
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-black group-hover:translate-x-1 group-hover:translate-y-1 transition-transform ease-in-out -z-10"></div>
                        <a href="" class="inline-flex  border-2 border-black w-8 h-8 items-center justify-center bg-bg">
                            <img src="/images/icons/instagram-dark.svg" alt="instagram" class="w-4">
                        </a>
                    </div>
                    <div class="group relative">
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-black group-hover:translate-x-1 group-hover:translate-y-1 transition-transform ease-in-out -z-10"></div>
                        <a href="" class="inline-flex  border-2 border-black w-8 h-8 items-center justify-center bg-bg">
                            <img src="/images/icons/twitter-dark.svg" alt="twitter" class="w-4">
                        </a>
                    </div>
                </div>
                <p class="text-gray text-lg font-azeret-mono">Copyright © Podkast IT Tipa</p>
            </div>
        </div>
    </footer>
</div>
@vite(['resources/js/app.js'])
</body>
</html>
