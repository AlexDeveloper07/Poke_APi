<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class, 'home')->name('home');



Route::controller(PokemonController::class)->group(function () {
    Route::get('pokemons', 'index')->name('pokemons.index');
/*     Route::get('pokemons/create', 'create')->name('pokemons.create'); */
    Route::get('pokemons/show/{id}', 'show')->name('pokemons.show');
    Route::get('pokemons/{pokemon}/edit', 'edit')->name('pokemons.edit');
    Route::put('pokemons/{pokemon}', 'update')->name('pokemons.update');
});