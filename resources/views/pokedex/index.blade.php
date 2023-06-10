@extends('layouts.template')

@section('title', 'pokeList');

@section('content')
    <div class="container mx-auto bg-white rounded-lg shadow-md p-6 mt-8">
        <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-2" onclick="openModal()">
            Comparar Pokemones
        </button>
        <div id="myModal"
            class="fixed inset-0 flex items-center justify-center z-10 opacity-0 transition-opacity duration-300 pointer-events-none">
            <div class="bg-white rounded-lg p-8 shadow-md border transform transition-transform duration-300">
                <h2 class="text-2xl font-bold mb-4 text-red-500">Comparación Pokemones</h2>
                <p>

                </p>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4"
                    onclick="closeModal()">
                    Cerrar
                </button>
            </div>
        </div>
        <table class="w-full bg-white rounded-lg shadow-md font-sans">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-red-500 text-white font-medium text-left border border-gray-200">Nombre</th>
                    <th class="py-2 px-4 bg-red-500 text-white font-medium text-left border border-gray-200">Altura</th>
                    <th class="py-2 px-4 bg-red-500 text-white font-medium text-left border border-gray-200">Peso</th>
                    <th class="py-2 px-4 w-[15%] bg-red-500 text-white font-medium text-left border border-gray-200">
                        Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $pokemon)
                    <tr>
                        <td class="py-2 px-4 border border-gray-200">{{ $pokemon->name }}</td>
                        <td class="py-2 px-4 border border-gray-200">{{ $pokemon->height }} Cms</td>
                        <td class="py-2 px-4 border border-gray-200">{{ $pokemon->weight }} Kg</td>
                        <td class="py-2 px-4 flex items-center space-x-6 border border-gray-200">
                            <input type="checkbox" id="pokemon_id" class="form-checkbox h-5 w-5 text-red-500 rounded">
                            <a href="{{ route('pokemons.show', $pokemon) }}" class="text-red-500 hover:text-red-700">
                                <i class="fa-solid fa-circle-info fa-lg"></i>
                                <span class="text-sm">Detalles...</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        {{ $pokemons->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        function openModal() {
            const modal = document.getElementById('myModal');
            modal.classList.remove('pointer-events-none');
            modal.classList.remove('opacity-0');
            modal.classList.add('pointer-events-auto');
            modal.classList.add('opacity-100');
        }

        function closeModal() {
            const modal = document.getElementById('myModal');
            modal.classList.remove('pointer-events-auto');
            modal.classList.remove('opacity-100');
            modal.classList.add('pointer-events-none');
            modal.classList.add('opacity-0');
        }
    </script>

@endsection
