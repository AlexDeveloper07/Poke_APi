<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="bg-white rounded-lg shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/">
                            <img class="h-10 w-10 transition-transform transform hover:scale-110" src="/image/logo.png">
                        </a>
                    </div>                                       
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('home') }}"
                                class="text-red-500 hover:bg-gradient-to-r from-red-500 to-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                            <a href="{{ route('pokemons.index') }}"
                                class="text-red-500 hover:bg-gradient-to-r from-red-500 to-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ver pokemones</a>
                            <a href="{{route('pokemons.create')}}"
                                class="text-red-500 hover:bg-gradient-to-r from-red-500 to-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Crear un nuevo registro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>           
    @yield('content') 
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
