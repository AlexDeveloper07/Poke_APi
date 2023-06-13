<?php

namespace Database\Seeders;

use App\Models\Attachment;
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
        $pokemons = $response->json()['results'];

        foreach ($pokemons as $pokemon) {
            $pokemonResponse = Http::get($pokemon['url'])->json();
            $sprites = $pokemonResponse['sprites'];

            $createdPokemon = Pokemon::create([
                'name' => $pokemonResponse['name'],
                'height' => $pokemonResponse['height'],
                'weight' => $pokemonResponse['weight']
            ]);

            $attachments = [];

            if ($sprites['back_default']) {
                $attachments[] = ['url' => $sprites['back_default']];
            }

            if ($sprites['front_default']) {
                $attachments[] = ['url' => $sprites['front_default']];
            }

            if ($sprites['back_shiny']) {
                $attachments[] = ['url' => $sprites['back_shiny']];
            }

            if ($sprites['front_shiny']) {
                $attachments[] = ['url' => $sprites['front_shiny']];
            }

            $createdPokemon->attachments()->createMany($attachments);
        }
    }
}
