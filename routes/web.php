<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', function () {
    return view('recipes.index');
});

Route::get('/recipes/create', function () {
    return view('recipes.create');
});

Route::get('/recipes/{id}', function () {
    return view('recipes.show');
});

Route::get('/experiences', function () {
    return view('experiences.index');
});

Route::get('/experiences/create', function () {
    return view('experiences.create');
});

Route::get('/experiences/{id}', function () {
    return view('experiences.show');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
