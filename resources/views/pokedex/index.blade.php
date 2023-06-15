@extends('layouts.template')

@section('title', 'pokeList')

@section('content')
    <div class="container mx-auto bg-white rounded-lg shadow-md p-6 mt-5 bg-opacity-20">
        <table class="w-full bg-white border-collapse rounded-lg overflow-hidden bg-opacity-80">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-red-500 text-white font-medium text-left border border-gray-200">Nombre del
                        pokemon</th>
                    <th class="py-2 px-4 w-[15%] bg-red-500 text-white font-medium text-left border border-gray-200">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $pokemon)
                    <tr class="">
                        <td class="py-2 pl-12 border border-separate">
                            <div class="pokemon_container flex items-center">
                                <img class="hover:scale-[115%]" src="{{ $pokemon->attachments()->skip(1)->first()->url }}">
                                <span class="text-red-500">
                                    {{ $pokemon->name }}
                                </span>
                            </div>
                        </td>
                        <td class="py-2 px-4 centered-cell hover:scale-110">
                            <a href="{{ route('pokemons.show', $pokemon) }}" class="text-red-500 hover:text-red-700">
                                <i class="fa-solid fa-circle-info text-xl"></i>
                                <span class="text-base">Detalles...</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <div class="flex items-center" >
                            {{ $pokemons -> links() }}
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <style>
        @keyframes colorChange {
            0% {
                background-color: red;
            }

            50% {
                background-color: rgb(206, 34, 100);
            }

            100% {
                background-color: red;
            }
        }

        tr {
            Font-family: Consolas;
        }

        th {
            animation: colorChange 8s infinite;
        }

        .pokemon_container img {
            display: flex;
            align-items: center;
        }

        .pokemon_container span {
            align-content: center;
            align-items: center;
            font-size: 1.5rem;
            text-align: center;
            margin-left: 25%;
        }

        



    </style>

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
