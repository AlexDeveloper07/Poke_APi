<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/');
        $pokemons = $response->json(); 
        /* dd($pokemons['results']);  */

        $pokemonsData = [];

        foreach ($pokemons['results'] as $key => $pokemon) {
            $pokemonName = $pokemon['name'];
            $items = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokemonName}")->json();
            $pokemonsData[] = [
                'name' => $items['name'],
                'height' => $items['height'],
                'weight' => $items['weight']
            ];
        }


        Pokemon::insert($pokemonsData);
    }
}
