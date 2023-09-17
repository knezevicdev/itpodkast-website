<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 | Podkast IT TIpa</title>

    @vite(['resources/css/app.css'])
</head>
<body class="bg-bg grid place-items-center h-[100vh] font-anonymous-pro text-black">
<section class="border-2 border-black py-28 px-10 max-w-2xl text-center mx-4 md:mx-0">
    <h1 class="text-orange text-9xl">404</h1>
    <p class="text-3xl">Not found</p>
    <p class="text-lg text-gray">Stranica koju tražite ne postoji ili je obrisana</p>
    <a href="{{ route('home') }}" class="bg-orange border-2 border-black inline-flex mt-4 py-1 px-2 lg:px-4 text-lg items-center  transition-shadow hover:shadow-effect">
        Početna stranica?
    </a>
</section>
</body>
</html>
