<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>@yield('title')</title>
</head>

<body class="w-screen h-screen">
    <nav class="rounded-lg shadow-md h-[9.5vh] bg-white bg-opacity-[8%]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/">
                            <img class="h-12 w-12 transition-transform transform duration-300 hover:brightness-125 hover:scale-110" src="/image/logo.png">
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('home') }}"
                                class="text-red-400 hover:bg-gradient-to-r from-red-500 to-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                            <a href="{{ route('pokemons.index') }}"
                                class="text-red-400 hover:bg-gradient-to-r from-red-500 to-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ver
                                pokemones</a>
                            <a href="{{ route('pokemons.create') }}"
                                class="text-red-400 hover:bg-gradient-to-r from-red-500 to-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Crear
                                un nuevo registro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="main_container">
        <div class="bg"></div>
        @yield('content')
    </main>



    <style>
        .main_container {
            /*             overflow: hidden; */
            height: 80vh;
        }

        .bg {
            top: 0;
            left: 0;
            z-index: -10;
            background-image: url("/image/bg/1.jpg");
            width: 100vw;
            height: 165vh;
            position: absolute;
        }

        .bg-white {}
    </style>



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
        })
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
