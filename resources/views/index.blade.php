<x-layout>
    <section class="overflow-x-hidden">
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
                    <a href="{{ route('epizode') }}"
                       class="mt-8 mb-10 font-azeret-mono text-lg font-semibold border-2 border-black px-8 py-2.5 inline-flex bg-bg relative transition-shadow hover:shadow-effect">Najnovije
                        epizode</a>
                    <div class="flex items-start lg:items-center flex-col lg:flex-row">
                        <span class="text-xl lg:pr-5 pb-2 lg:pb-0">Slušajte nas na:</span>
                        <ul class="flex gap-2 lg:gap-8">
                            <li class="flex items-center">
                                <a href="{{ config('app.apple_podcasts_url') }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/apple-podcast.svg" alt="apple podcast"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ config('app.google_podcasts_url') }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/google-podcasts.svg" alt="google podcasts"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ config('app.deezer_url') }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/deezer.svg" alt="deezer"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ config('app.spotify_url') }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/spotify.svg" alt="spotify"
                                                 class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ config('app.youtube_url') }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/youtube.svg" alt="youtube"
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
                    @foreach($episodes as $episode)
                        <li class="p-6 border-2 border-black mb-8">
                            <div class="grid grid-cols-1 lg:grid-cols-episode gap-3 lg:gap-8">
                                <a href="{{ route('epizoda', ['slug' => $episode->slug]) }}" class="inline-block">
                                    <img class="border-2 border-black" src="{{ $episode->cover_image_url }}" alt="episode">
                                </a>
                                <div class="flex flex-col">
                                    <div class="flex flex-col lg:flex-row justify-between pt-2.5">
                                        <span class="font-azeret-mono font-semibold text-orange text-lg">Epizoda {{ $episode->number }}</span>
                                        <div class="flex items-center mt-2 lg:mt-0">
                                            <img src="/images/icons/clock.svg" alt="clock" class="mr-1.5 w-4 h-4">
                                            <span class="text-gray text-lg font-azeret-mono">{{ $episode->formatted_duration }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('epizoda', ['slug' => $episode->slug]) }}">
                                        <h6 class="text-xl lg:text-3xl mt-2.5 hover:text-orange transition-all ease-in-out">
                                            {{ $episode->title }}
                                        </h6>
                                    </a>
                                    <div class="mt-auto flex justify-between flex-col xl:flex-row">
                                        <div class="mt-4 xl:mt-0">
                                            <a href="{{ route('epizoda', ['slug' => $episode->slug]) }}"
                                               class="px-6 lg:px-8 py-2 lg:py-4 bg-black text-white font-azeret-mono font-semibold text-md lg:text-xs inline-block transition-shadow hover:shadow-effect-orange">Pusti
                                                epizodu</a>
                                        </div>
                                        <div class="flex flex-col lg:flex-row items-start lg:items-center mt-3 xl:mt-0">
                                            <span class="text-gray pr-2.5">Poslušajte na:</span>
                                            <ul class="flex gap-2.5 mt-2 lg:mt-0">
                                                <li class="flex items-center">
                                                    <a href="{{ $episode->apple_podcasts_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/apple-podcast.svg" alt="apple podcast"
                                                                     class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                                </li>
                                                <li class="flex items-center">
                                                    <a href="{{ $episode->google_podcasts_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/google-podcasts.svg" alt="google podcasts"
                                                                     class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                                </li>
                                                <li class="flex items-center">
                                                    <a href="{{ $episode->deezer_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/deezer.svg" alt="deezer"
                                                                     class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                                </li>
                                                <li class="flex items-center">
                                                    <a href="{{ $episode->spotify_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/spotify.svg" alt="spotify"
                                                                     class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                                </li>
                                                <li class="flex items-center">
                                                    <a href="{{ $episode->youtube_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/youtube.svg" alt="youtube"
                                                                     class="w-5 hover:scale-110 transition-transform ease-in-out"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="flex justify-center gap-8 relative">
                    <a href="{{ route('epizode') }}" class="rounded-full inline-flex w-[220px] h-[220px] sticky top-8">
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
    @vite(['resources/js/home.js'])
</x-layout>
