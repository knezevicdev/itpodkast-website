<x-layout>
    <section class="container py-16 lg:py-24 px-4 lg:px-0">
        <h1 class="text-5xl md:text-6xl xl:text-8xl mb-16 text-center">Sve epizode</h1>
        <ul class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @foreach ($episodes as $episode)
                <li>
                    <x-epizoda
                        thumbnail="/images/epizoda-thumb.jpeg"
                        :slug="$episode['slug']"
                        :title="$episode['title']"
                        :number="$episode['number']"
                        :duration="$episode['duration']"
                    />
                </li>
            @endforeach
        </ul>
        <div class="flex justify-center items-center mt-10 gap-4">
            @if($page > 1)
                <x-orange-button href="/epizode">
                    <svg height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                         transform="translate(0, 1)">
                        <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                    </svg>
                    Prošlo
                </x-orange-button>
            @endif
            @if($totalPages > $page)
                <x-orange-button href="/epizode{{ '?page=' . ($page + 1) }}">
                    Sledeće
                    <svg height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                         transform="translate(0, 1)">
                        <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
                    </svg>
                </x-orange-button>
            @endif
        </div>
    </section>
</x-layout>
