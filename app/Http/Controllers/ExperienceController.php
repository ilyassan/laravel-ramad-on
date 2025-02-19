<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{

    public function index()
    {
        return view("experiences");
    }

    public function create()
    {
        return view("experiences.create");
    }

    public function store(Request $request)
    {
        // Validate the request
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        // Store the image
        $data["image"] = $request->file('image')->store('images', 'public');
        $data["user_id"] = Auth::id();
        
        // Create the experience
        Experience::create($data);
        
        return back()->with("success", "Your experiences has been published successfully.");
    }
}
