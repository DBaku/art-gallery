<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokedexController extends Controller
{
    public function index()
    {
        return view('pokedex.index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string'
        ]);

        $search = strtolower($request->input('search'));
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$search}");

        if ($response->successful()) {
            $pokemon = $response->json();
            return view('pokedex.index', compact('pokemon'));
        } else {
            return view('pokedex.index')->withErrors(['No Pokémon found with that name.']);
        }
    }
}
