<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Experience;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $usersCount = User::count();
        $experiencesCount = Experience::count();
        $recipesCount = Recipe::count();
        $commentsCount = Comment::count();

        $latestRecipes = Recipe::with("user")->latest()->take(3)->get();
        $latestExperiences = Experience::with("user")->latest()->take(3)->get();
        
        return view('home', compact('usersCount', 'experiencesCount', 'recipesCount', 'commentsCount', 'latestRecipes', 'latestExperiences'));
    }
}
