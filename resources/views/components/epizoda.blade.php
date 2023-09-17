<div class="p-6 border-2 border-black min-h-full">
    <div class="grid grid-cols-1 gap-3">
        <a href="#" class="inline-block">
            <img class="border-2 border-black" src="/images/epizoda-thumb.jpeg" alt="episode">
        </a>
        <div class="flex flex-col">
            <div class="flex flex-col justify-between pt-2.5">
                <span class="font-azeret-mono font-semibold text-orange text-lg">Epizoda {{ $number }}</span>
            </div>
            <a href="#">
                <h6 class="text-xl mt-2.5 hover:text-orange transition-all ease-in-out">
                    {{ $title }}
                </h6>
            </a>
            <div class="mt-auto flex justify-between flex-col">
                <div class="mt-4">
                    <div class="inline-block relative group">
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-orange group-hover:translate-x-1.5 group-hover:translate-y-1.5 transition-transform ease-in-out -z-10"></div>
                        <a href="#"
                           class="px-6 py-2 bg-black text-white font-azeret-mono font-semibold text-md inline-block">Pusti
                            epizodu</a>
                    </div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="/images/icons/clock.svg" alt="clock" class="mr-1.5 w-4 h-4">
                    <span class="text-gray text-lg font-azeret-mono">{{ $duration }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
