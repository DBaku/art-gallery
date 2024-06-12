<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index()
    {
        $artworks = Artwork::all();
        return view('artworks.index', compact('artworks'));
    }

    public function create()
    {
        return view('artworks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('artworks', 'public');
        }

        Artwork::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => $path,
        ]);

        return redirect()->route('artworks.index')->with('success', 'Artwork created successfully.');
    }

    public function show(Artwork $artwork)
    {
        return view('artworks.show', compact('artwork'));
    }

    public function edit(Artwork $artwork)
    {
        return view('artworks.edit', compact('artwork'));
    }

    public function update(Request $request, Artwork $artwork)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('artworks', 'public');
            $artwork->update([
                'image_path' => $path,
            ]);
        }

        $artwork->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('artworks.index')->with('success', 'Artwork updated successfully.');
    }

    public function destroy(Artwork $artwork)
    {
        $artwork->delete();
        return redirect()->route('artworks.index')->with('success', 'Artwork deleted successfully.');
    }
}
