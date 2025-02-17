<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CocktailController;
use App\Http\Controllers\FavoriteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ruta para listar los cockteles
Route::get('/dashboard', [CocktailController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/favorites', [FavoriteController::class, 'store'])->middleware('auth')->name('favorites.store');
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
Route::resource('favorites', FavoriteController::class)->only(['store', 'destroy']); 

require __DIR__.'/auth.php';


