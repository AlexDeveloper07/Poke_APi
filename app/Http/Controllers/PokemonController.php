<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function index()
    {
        /* dd(Pokemon::all()); */
       ;
        return view('pokedex.index', [
            'pokemons' => Pokemon::paginate(8)
        ]);
    }

     public function create()
    {
        return view('pokedex.create');    
    }

    public function show()
    {
        return view('pokedex.show');
    }


    public function uploadPokemon(Request $request)
    {
        if ($request->hasFile('pokemon_image')) {
            $request->store('pokemons', 'public');
        }
    }
}
