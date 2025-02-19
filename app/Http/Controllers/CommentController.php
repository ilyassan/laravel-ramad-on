<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            "content" => "required|min:1",
            "experience_id" => "required|exists:experiences,id"
        ]);

        $data["user_id"] = Auth::id();

        Comment::create($data);

        return back()->with("success", "Your comment has been published successfully.");
    }
}
