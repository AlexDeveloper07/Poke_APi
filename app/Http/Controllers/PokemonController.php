<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function index()
    {
        return view('pokedex.index', [
            'pokemons' => Pokemon::paginate(6)
        ]);
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


    public function edit(Request $request, Pokemon $pokemon)
    {
        return view('pokedex.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemon $pokemon)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
        ]);

        $pokemon->name = $validatedData['name'];
        $pokemon->height = $validatedData['height'];
        $pokemon->weight = $validatedData['weight'];
        $pokemon->save();

/*         return response()->json([
            'message' => 'Datos actualizados correctamente',
            'data' => $pokemon,
        ]); */

        return redirect()->route('pokemons.show', $pokemon);
    }


    public function uploadPokemon(Request $request)
    {
        if ($request->hasFile('pokemon_image')) {
            $request->store('pokemons', 'public');
        }
    }
}
