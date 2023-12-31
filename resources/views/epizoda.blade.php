<x-layout>
    <section class="py-24 container px-4 lg:px-0">
        <p class="text-orange font-azeret-mono font-semibold text-lg">Epizoda {{ $episode->number }}</p>
        <h1 class="text-7xl leading-tight">{{ $episode->title }}</h1>
        <div class="p-6 border-2 border-black mb-8 mt-2">
            <div class="grid grid-cols-1 lg:grid-cols-episode gap-3 lg:gap-8">
                <span
                    class="inline-block">
                    <img class="border-2 border-black" src="{{ $episode->cover_image_url }}" alt="episode">
                </span>
                <div class="flex flex-col">
                    <div class="flex flex-col lg:flex-row justify-between pt-2.5">
                        <div class="flex items-center mt-2 lg:mt-0">
                            <img src="/images/icons/clock.svg" alt="clock" class="mr-1.5 w-4 h-4">
                            <span class="text-gray text-lg font-azeret-mono">{{ $episode->formatted_duration }}</span>
                        </div>
                    </div>
                    <div class="mt-auto flex justify-between flex-col xl:flex-row">
                        <div class="mt-4 xl:mt-0">
                            <button onclick="playEpisode('{{ $episode->slug }}', '{{ asset($episode->audio_url) }}')"
                               class="border-2 border-black px-6 lg:px-8 py-2 lg:py-4 bg-orange text-black font-azeret-mono font-semibold text-md lg:text-xl inline-block transition-shadow hover:shadow-effect">Pusti
                                epizodu</button>
                        </div>
                        <div class="flex flex-col lg:flex-row items-start lg:items-center mt-3 xl:mt-0">
                            <span class="text-gray pr-2.5">Poslušajte na:</span>
                            <ul class="flex gap-2.5 mt-2 lg:mt-0">
                                <li class="flex items-center">
                                    <a href="{{ $episode->apple_podcasts_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/apple-podcast.svg" alt="apple podcast"
                                                     class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                                </li>
                                <li class="flex items-center">
                                    <a href="{{ $episode->google_podcasts_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/google-podcasts.svg" alt="google podcasts"
                                                     class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                                </li>
                                <li class="flex items-center">
                                    <a href="{{ $episode->deezer_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/deezer.svg" alt="deezer"
                                                     class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                                </li>
                                <li class="flex items-center">
                                    <a href="{{ $episode->spotify_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/spotify.svg" alt="spotify"
                                                     class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                                </li>
                                <li class="flex items-center">
                                    <a href="{{ $episode->youtube_url }}" target="_blank" rel="noopener noreferrer"><img src="/images/icons/youtube.svg" alt="youtube"
                                                     class="w-10 hover:scale-110 transition-transform ease-in-out"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-24 container px-4 lg:px-0">
        <h1 class="text-3xl md:text-5xl xl:text-8xl mb-16">Nove epizode</h1>
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($episodes as $episode)
                <li>
                    <x-epizoda
                        :thumbnail="$episode->cover_image_url"
                        :slug="$episode->slug"
                        :title="$episode->title"
                        :number="$episode->number"
                        :duration="$episode->formatted_duration"
                        :src="asset($episode->audio_url)"
                    />
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>
