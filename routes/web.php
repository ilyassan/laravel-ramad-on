<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, RecipeController, ExperienceController, CommentController};

Route::get('/', HomeController::class)->name("home");

// Recipes routes
Route::controller(RecipeController::class)->prefix('recipes')->name('recipes.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{id}', 'show')->name('show');
    Route::middleware('auth')->post('/store', 'store')->name('store');
});

// Experiences routes
Route::controller(ExperienceController::class)->prefix('experiences')->name('experiences.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{id}', 'show')->name('show');
    Route::middleware('auth')->post('/store', 'store')->name('store');
});

// Comments route
Route::middleware('auth')->post('/comments/store', [CommentController::class, 'store'])->name("comments.store");

require __DIR__.'/auth.php';
