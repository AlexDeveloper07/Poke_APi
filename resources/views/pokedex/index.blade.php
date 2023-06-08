@extends('layouts.template')

@section('title', 'pokeList');

@section('content')
    <div class="container mx-auto bg-white rounded-lg shadow-md p-6 mt-8">
        <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-2" onclick="openModal()">
            Comparar Pokemones
        </button>
        <div id="myModal" class="fixed inset-0 flex items-center justify-center z-10 hidden">
            <div class="bg-white rounded-lg p-8 border-2 shadow-md border-red-200 shadow-lg">
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
                    <th class="py-2 px-4 bg-red-500 text-white font-medium">Nombre</th>
                    <th class="py-2 px-4 bg-red-500 text-white font-medium">Altura</th>
                    <th class="py-2 px-4 bg-red-500 text-white font-medium">Peso</th>
                    <th class="py-2 px-4 bg-red-500 text-white font-medium">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $pokemon)
                    <tr>
                        <td class="py-2 px-4">{{ $pokemon->name }}</td>
                        <td class="py-2 px-4">{{ $pokemon->height }} Kg</td>
                        <td class="py-2 px-4">{{ $pokemon->weight }} Cms</td>
                        <td class="py-2 px-4">
                            <input type="checkbox" id="pokemon_id" class="form-checkbox h-5 w-5 text-red-500 rounded">
                        </td>
                        <td class="py-2 px-4">
                            <a href="{{route('pokemons.show')}}">
                                but
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
            document.getElementById('myModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('myModal').classList.add('hidden');
        }
    </script>

@endsection
