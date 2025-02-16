<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function index()
    {
        // Llamar a la API de TheCocktailDB
        $response = Http::get(env('COCKTAILDB_API_URL') . '/search.php?s=margarita');
        $cocktails = $response->json()['drinks'] ?? [];

        return view('dashboard', compact('cocktails'));
    }
}
