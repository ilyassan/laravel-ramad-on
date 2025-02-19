<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view("recipes.create", compact("categories"));
    }

    public function store(Request $request)
    {
        // Validate the request
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|max:2048',
        ]);

        // Store the image
        $data["image"] = $request->file('image')->store('images', 'public');
        $data["user_id"] = Auth::id();
        
        // Create the experience
        Recipe::create($data);
        
        return back()->with("success", "Your recipe has been published successfully.");
    }
}
