<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{

    private const EXPERIENCES_SHOW = 6;

    public function index()
    {
        $keyword = request()->get("keyword");

        $experiences = Experience::with("user")
                        ->where("title", "LIKE", "%{$keyword}%")
                        ->orWhere("description", "LIKE", "%{$keyword}%")
                        ->paginate(self::EXPERIENCES_SHOW);

        return view("experiences.index", compact("experiences"));
        
    }

    public function show($id)
    {
        $experience = Experience::with(["comments", "comments.user"])->find($id);
        
        return view("experiences.show", compact("experience"));
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
