<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::paginate(6)->load('attachments');
        return view('pokedex.index', compact('pokemons'));
    }

    public function create()
    {
        return view('pokedex.create');
    }

    /**
     * @param int $id
     */
    public function show(int $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon = $pokemon->load('attachments')->loadExists('attachments');
        if (!$pokemon) {
            return redirect()->route('pokemons.index')->with('Error', 'El pokemon seleccionado no existe');
        }

        return view('pokedex.show', compact('pokemon'));
    }


    public function uploadPokemon(Request $request)
    {
        if ($request->hasFile('pokemon_image')) {
            $request->store('pokemons', 'public');
        }
    }
}
