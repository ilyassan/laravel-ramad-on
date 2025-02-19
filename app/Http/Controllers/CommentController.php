<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // i want this function to be able to store comments for both experiences and recipes
        $data = $request->validate([
            "content" => "required|min:1"
        ]);

        if ($request->has("experience_id")){
            $data["experience_id"] = $request->get("experience_id");
        }
        else{
            $data["recipe_id"] = $request->get("recipe_id");
        }


        $data["user_id"] = Auth::id();

        Comment::create($data);

        return back()->with("success", "Your comment has been published successfully.");
    }
}
