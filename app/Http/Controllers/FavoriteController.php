<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        // Eager load the user relationship to avoid N+1 problems
        $favorites = Favorite::where('user_id', Auth::id())
            ->with('user') // Add this to eager load
            ->get();

        return view('favorites.index', compact('favorites')); // Create a view named favorites.index
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'drink_id' => 'required|string', // Make sure this is required if it's your unique identifier
        ]);

        // Check for existing favorite (important to prevent duplicates)
        $existingFavorite = Favorite::where('user_id', Auth::id())
            ->where('drink_id', $request->drink_id)
            ->first();

        if ($existingFavorite) {
            return back()->with('error', 'Este cóctel ya está en tus favoritos');
        }

        Favorite::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'image' => $request->image,
            'drink_id' => $request->drink_id,
        ]);

        return back()->with('success', 'Cóctel agregado a favoritos');
    }


    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);

        // Authorize: Make sure the current user owns this favorite
        if ($favorite->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.'); // Or redirect with an error
        }

        $favorite->delete();

        return back()->with('success', 'Favorito eliminado'); // Redirect back to favorites page
    }

}