@extends('layouts.template')

@section('title', 'pokeInfo');

@section('content')

    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-4 text-red-500">Detalles del Pokémon</h2>
            <ul class="list-none">
                <li class="inline-block">
                    <span class="text-black px-4 py-2 rounded-lg mr-2">Nombre: {{ $pokemon->name }}</span>
                </li>
                <br>
                <li class="inline-block">
                    <span class="text-black px-4 py-2 rounded-lg mr-2">Altura: {{ $pokemon->height }}</span>
                </li>
                <br>
                <li class="inline-block">
                    <span class="text-black px-4 py-2 rounded-lg">Peso: {{ $pokemon->weight }}</span>
                </li>
            </ul>
        </div>
    </div>


    <style>

      

    </style>



@endsection
