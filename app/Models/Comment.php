<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'content',
        'user_id',
        'recipe_id',
        'experience_id',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
