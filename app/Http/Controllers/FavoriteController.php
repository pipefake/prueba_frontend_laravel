<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'drink_id' => 'nullable|string',
        ]);

        Favorite::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'image' => $request->image,
            'drink_id' => $request->drink_id,
        ]);

        return back()->with('success', 'Cóctel agregado a favoritos');
    }
}
