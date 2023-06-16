@extends('layouts.template')

@section('title', $pokemon->name)

@section('content')


    <div class="container mx-auto bg-white rounded-lg shadow-md p-6 mt-5 bg-opacity-20">
        <form class="w-full max-w-lg bg-gray-100 rounded-lg shadow-md px-6 py-4"
            action="{{ route('pokemons.edit', $pokemon) }}" method="POST">
            @csrf

            @method('put')

            <div class="mb-4">
                <label for="name" class="block text-gray text-sm font-medium mb-2">Nombre del pokemon:</label>
                <input type="text" name="name"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese el nombre del pokemon" value="{{ old('name', $pokemon->name) }}">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray text-sm font-medium mb-2">Peso del pokemon:</label>
                <input type="text" name="weight"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese el peso del pokemon" value="{{ old('weight', $pokemon->weight) }} KG">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray text-sm font-medium mb-2">Altura del pokemon</label>
                <input type="text" name="height"
                    class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    placeholder="Ingrese la altura del pokemon" value="{{ old('weight', $pokemon->height) }} MTS">
            </div>

            <div class="flex">
                <button type="submit"
                    class="text-gray-900 bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 shadow-lg shadow-yellow-500/50 dark:shadow-lg dark:shadow-yellow-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Actualizar
                    datos</button>
            </div>
        </form>
    </div>


{{--     <div class="pokemon_container">
        <img src="{{ }}" alt="">
    </div> --}}


@endsection
