@extends('layouts.template')

@section('title', 'home')

@section('content')
    <div class="container mx-auto bg-gray rounded-lg shadow-md p-4 mt-7">
        <div class="h-[92vh] flex items-center justify-center">
            <div class="swiper mySwiper  select-none">
                <div class="swiper-wrapper">
                    {{-- Esto es una card --}}
                    <div class="swiper-slide border-[8px] border-[#E7A1A1] grid grid-rows-5 h-full rounded-[17px] p-2">
                        <div class="">
                            <img src="/image/logo.png" alt="" class="h-9 transition-transform animate-pulse">
                        </div>
                        <div class="overflow-hidden row-span-3 flex items-center justify-center">
                            <img src="/image/pokemons/charmander_prev_ui.png"
                                class="bg-transparent object-cover w-[150px] h-[150px]">
                        </div>
                        <div class="p-2">
                        </div>
                    </div>
                    <div class="swiper-slide border-[8px] border-[#E7A1A1] grid grid-rows-5 h-full rounded-[18px] p-2">
                        <div class="p-2">
                            <img src="/image/logo.png" alt="" class="h-9 transition-transform animate-pulse">
                        </div>
                        <div class="overflow-hidden row-span-3 flex items-center justify-center">
                            <img src="/image/pokemons/pikachu_prev_ui.png"
                                class="bg-transparent object-cover w-[150px] h-[150px]">
                        </div>
                        <div class="p-2">
                        </div>
                    </div>
                    <div class="swiper-slide border-[8px] border-[#E7A1A1] grid grid-rows-5 h-full rounded-[18px] p-2">
                        <div class="p-2">
                            <img src="/image/logo.png" alt="" class="h-9 transition-transform animate-pulse">
                        </div>
                        <div class="overflow-hidden row-span-3 flex items-center justify-center">
                            <img src="/image/pokemons/wartortle_prev_ui.png"
                                class="bg-transparent object-cover w-[150px] h-[150px]">
                        </div>
                        <div class="p-2">
                        </div>
                    </div>
                </div>
            </div>
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
