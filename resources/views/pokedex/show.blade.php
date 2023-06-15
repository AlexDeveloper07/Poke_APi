@extends('layouts.template')

@section('title', $pokemon->name)

@section('content')
    <div class="container mx-auto bg-white rounded-lg shadow-md p-6 mt-5 bg-opacity-20">
        <a href="{{ route('pokemons.index') }}" class="text-black font-bold py-2 px-4 rounded mt-4">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h2 class="text-2xl font-bold mb-4 text-red-500">Detalles del Pokémon</h2>
        @if ($pokemon->attachments_exists)
            <div class="h-[65vh] w-auto flex items-center justify-center">
                <div class="swiper mySwiper select-none">
                    <div class="swiper-wrapper">
                        @foreach ($pokemon->attachments->chunk(2) as $attachments)
                            <div
                                class="swiper-slide border-[4px] border-[#E7A1A1] grid grid-rows-5 h-full rounded-[17px] p-2 border_color">
                                <img src="/image/logo.png" alt="" class="h-9 transition-transform animate-pulse">
                                <div class="text-center">
                                    <span class="mx -auto text-black">{{ $pokemon->name }}</span>
                                </div>

                                @foreach ($attachments as $attachment)
                                    <div class="overflow-hidden row-span-3 flex items-center justify-center">
                                        <img src="{{ $attachment->url }}"
                                            class="bg-transparent object-cover w-[240px] h-[150px]">
                                    </div>
                                @endforeach
                                <div class="p-2">
                                    <div class="jutify-between">
                                        <small class="m-2">
                                            Altura: <b> {{ $pokemon->height }} </b> cm
                                        </small>
                                        <small class="m-2">
                                            Peso: <b> {{ $pokemon->weight }} </b> lb
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>

    <style>
        .swiper {
            width: 340px;
            height: 420px;
        }

        .swiper-slide:nth-child(1n) {
            background-color: #F3F4F6;

        }

        .swiper-slide:nth-child(2n) {
            background-color: #F3F4F6;
        }

        .swiper-slide:nth-child(3n) {
            background-color: #F3F4F6;
        }

        .swiper-slide {
            transition: border-color 1s ease-in-out;
        }

        @keyframes changeBorderColor {
            0% { border-color: red; }
            25% { border-color: green; }
            50% { border-color: blue; }
            75% { border-color: yellow; }
            100% { border-color: red; }
        }

        .swiper-slide {
            animation: changeBorderColor 3.5s infinite;
        }



    </style>
@endsection
