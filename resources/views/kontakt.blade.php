<x-layout>
    <section class="container px-4 lg:px-0 py-20 lg:py-24">
        <h1 class="text-4xl lg:text-6xl text-center">Kontaktirajte nas!</h1>
        <form class="mt-14 max-w-2xl mx-auto">
            <div>
                <label for="name" class="mb-1 font-azeret-mono text-lg text-gray">Ime</label>
                <input id="name" name="name" placeholder="Ime" maxlength="256" type="text" class="w-full border-2 border-black bg-bg py-2.5 px-4 text-lg leading-normal peer outline-0 font-azeret-mono transition-shadow focus:shadow-effect" />
            </div>
            <div class="mt-2">
                <label for="email" class="mb-1 font-azeret-mono text-lg text-gray">Email Adresa</label>
                <input id="email" name="email" placeholder="Email" maxlength="256" type="email" class="w-full border-2 border-black bg-bg py-2.5 px-4 text-lg leading-normal peer outline-0 font-azeret-mono transition-shadow focus:shadow-effect" />
            </div>
            <div class="mt-2">
                <label for="phone" class="mb-1 font-azeret-mono text-lg text-gray">Broj Telefona</label>
                <input id="phone" name="phone" placeholder="Telefon" maxlength="256" type="text" class="w-full border-2 border-black bg-bg py-2.5 px-4 text-lg leading-normal peer outline-0 font-azeret-mono transition-shadow focus:shadow-effect" />
            </div>
            <div class="mt-2">
                <label for="message" class="mb-1 font-azeret-mono text-lg text-gray">Vaša Poruka</label>
                <textarea id="message" name="message" placeholder="Ime" maxlength="256" type="text" class="w-full border-2 border-black bg-bg py-2.5 px-4 text-lg leading-normal peer outline-0 font-azeret-mono transition-shadow focus:shadow-effect"></textarea>
            </div>
            <button type="submit" class="bg-orange border-2 border-black flex py-1 px-2 lg:px-4 text-xl font-azeret-mono font-semibold lg:text-lg items-center  transition-shadow hover:shadow-effect w-full justify-center mt-4">
                Pošalji
            </button>
        </form>
    </section>
</x-layout>
