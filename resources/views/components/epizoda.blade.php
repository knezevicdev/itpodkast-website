<div class="p-6 border-2 border-black min-h-full">
    <div class="grid grid-cols-1 gap-3">
        <a href="{{ route('epizoda', [ 'slug' => $slug ]) }}" class="inline-block" wire:navigate>
            <img class="border-2 border-black" src="{{ $thumbnail }}" alt="episode">
        </a>
        <div class="flex flex-col">
            <div class="flex flex-col justify-between pt-2.5">
                <span class="font-azeret-mono font-semibold text-orange text-lg">Epizoda {{ $number }}</span>
            </div>
            <a href="{{ route('epizoda', [ 'slug' => $slug ]) }}" wire:navigate>
                <h6 class="text-xl mt-2.5 hover:text-orange transition-all ease-in-out">
                    {{ $title }}
                </h6>
            </a>
            <div class="mt-auto flex justify-between flex-col">
                <div class="mt-4">
                    <button
                        class="px-6 py-2 bg-black text-white font-azeret-mono font-semibold text-md inline-block transition-shadow hover:shadow-effect-orange"
                        onclick="playEpisode('{{ $slug }}', '{{ $src }}')"
                    >
                        Pusti epizodu
                    </button>
                </div>
                <div class="flex items-center mt-2">
                    <img src="/images/icons/clock.svg" alt="clock" class="mr-1.5 w-4 h-4">
                    <span class="text-gray text-lg font-azeret-mono">{{ $duration }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
