<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\PokedexController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('artworks', ArtworkController::class);



Route::get('/pokedex', [PokedexController::class, 'index'])->name('pokedex.index');
Route::post('/pokedex/search', [PokedexController::class, 'search'])->name('pokedex.search');
