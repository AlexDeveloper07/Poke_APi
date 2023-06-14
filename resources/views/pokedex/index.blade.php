@extends('layouts.template')

@section('title', 'pokeList')

@section('content')
    <div class="container mx-auto bg-white rounded-lg shadow-md p-6 mt-8 bg-opacity-20">
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
                    <tr>
                        <td class="py-2 px-4 border border-separate">
                            <div class="pokemon_container">
                                <span>
                                    {{ $pokemon->name }}
                                </span>
                                <img class="hover:scale-[115%]" src="{{ $pokemon->attachments()->skip(1)->first()->url }}">
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
                {{--                 <tr>
                                       <td colspan="3">
                        {{ $pokemons->links() }}
                    </td> 
                </tr> --}}
            </tfoot>
        </table>
    </div>

    <style>
        @keyframes colorChange {
            0% {
                background-color: red;
            }

            50% {
                background-color: rgb(231, 56, 123);
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

        /*  .pokemon_container {
                font-size: 1em;
                text-align: center;
                Font-family: Consolas;
                display: flex;
                align-items: center;
            }

            .pokemon_container {
                display: flex;
                margin-top: -3.5%;
            }

            .pokemon_container img {
                width: 9%;
                height: 9%;
            } */

        .pokemon_container img {
            display: flex;
            align-items: center;
            margin-top: -5.5%;
        }

        .pokemon_container span {
            font-size: 2rem;
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
