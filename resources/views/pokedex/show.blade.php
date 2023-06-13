@extends('layouts.template')

@section('title', $pokemon->name);

@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-4 text-red-500">Detalles del Pokémon</h2>
            @if ($pokemon->attachments_exists)
                <div class="h-[92vh] flex items-center justify-center">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($pokemon->attachments->chunk(2) as $attachments)
                                <div
                                    class="swiper-slide border-[8px] border-[#E7A1A1] grid grid-rows-5 h-full rounded-[17px] p-2">
                                    <div class="text-center flex items-start">
                                        <img src="/image/logo.png" alt=""
                                            class="h-9 transition-transform animate-pulse">
                                        <span class="mx -auto text-red-300">{{ $pokemon->name }}</span>
                                    </div>

                                    @foreach ($attachments as $attachment)
                                        <div class="overflow-hidden row-span-3 flex items-center justify-center">
                                            <img src="{{ $attachment->url }}"
                                                class="bg-transparent object-cover w-[150px] h-[150px]">
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
                                        <div>
                                            <p>
                                                {{ $pokemon->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <style>
        /* .container {
                                                                                                                                                                                                                        display: flex;
                                                                                                                                                                                                                        justify-content: center;
                                                                                                                                                                                                                        align-items: center;
                                                                                                                                                                                                                    } */

        /* .container img {
                                                                                                                                                                                                                        max-width: 50%;
                                                                                                                                                                                                                        max-height: 50%;
                                                                                                                                                                                                                    } */


        .swiper {
            width: 340px;
            height: 420px;
        }

        .swiper-slide {
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            /* border-radius: 18px; */
            /* font-size: 22px; */
            /* font-weight: bold; */
            /* color: #fff; */
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

        .swiper-slide:nth-child(4n) {
            background-color: rgb(211, 122, 7);
        }

        .swiper-slide:nth-child(5n) {
            background-color: rgb(118, 163, 12);
        }

        .swiper-slide:nth-child(6n) {
            background-color: rgb(180, 10, 47);
        }

        .swiper-slide:nth-child(7n) {
            background-color: rgb(35, 99, 19);
        }

        .swiper-slide:nth-child(8n) {
            background-color: rgb(0, 68, 255);
        }

        .swiper-slide:nth-child(9n) {
            background-color: rgb(218, 12, 218);
        }

        .swiper-slide:nth-child(10n) {
            background-color: rgb(54, 94, 77);
        }
    </style>
@endsection
