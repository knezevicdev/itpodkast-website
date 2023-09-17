<div>
    @if($success)
        <p class="border-black border-2 text-black p-2 max-w-2xl mx-auto mt-4 text-lg text-center">
            Uspešno ste poslali poruku! Očekujte odgovor uskoro :)
        </p>
    @else
        <form class="mt-14 max-w-2xl mx-auto" wire:submit="submit">
            <div>
                <label for="name" class="mb-1 font-azeret-mono text-lg text-gray">Ime</label>
                <input wire:model.blur="name" id="name" name="name" placeholder="Ime" maxlength="256" type="text"
                       class="w-full border-2 border-black bg-bg py-2.5 px-4 text-lg leading-normal peer outline-0 font-azeret-mono transition-shadow focus:shadow-effect"/>
                @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>
            <div class="mt-2">
                <label for="email" class="mb-1 font-azeret-mono text-lg text-gray">Email Adresa</label>
                <input wire:model.blur="email" id="email" name="email" placeholder="Email" maxlength="256" type="email"
                       class="w-full border-2 border-black bg-bg py-2.5 px-4 text-lg leading-normal peer outline-0 font-azeret-mono transition-shadow focus:shadow-effect"/>
                @error('email') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>
            <div class="mt-2">
                <label for="message" class="mb-1 font-azeret-mono text-lg text-gray">Vaša Poruka</label>
                <textarea wire:model.blur="message" id="message" name="message" placeholder="Ime" maxlength="256"
                          type="text"
                          class="w-full border-2 border-black bg-bg py-2.5 px-4 text-lg leading-normal peer outline-0 font-azeret-mono transition-shadow focus:shadow-effect"></textarea>
                @error('message') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>
            <x-honey/>
            <button type="submit"
                    class="bg-orange border-2 border-black flex py-1 px-2 lg:px-4 text-xl font-azeret-mono font-semibold lg:text-lg items-center  transition-shadow hover:shadow-effect w-full justify-center mt-4">
                Pošalji
            </button>
        </form>
    @endif
</div>
