<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name("home");

Route::get('/recipes', function () {
    return view('recipes.index');
})->name("recipes.index");

Route::get('/recipes/create', function () {
    return view('recipes.create');
})->name("recipes.create");

Route::get('/recipes/{id}', function () {
    return view('recipes.show');
})->name("recipes.show");

Route::get('/experiences', [ExperienceController::class, 'index'])->name("experiences.index");

Route::get('/experiences/create', [ExperienceController::class, 'create'])->name("experiences.create");

Route::middleware('auth')->post('/experiences/store', [ExperienceController::class, 'store'])->name("experiences.store");

Route::get('/experiences/{id}', function () {
    return view('experiences.show');
})->name("experiences.show");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
