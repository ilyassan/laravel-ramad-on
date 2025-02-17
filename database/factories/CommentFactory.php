<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $recipes = \App\Models\Recipe::pluck('id');
        $experiences = \App\Models\Experience::pluck('id');
        $users = \App\Models\User::pluck('id');

        $recipe = rand(0, 1) ? fake()->randomElement($recipes) : null;
        $experience = $recipe ? null : fake()->randomElement($experiences) ;

        return [
            "content" => fake()->words(6, true),
            "user_id" => fake()->randomElement($users),
            "recipe_id" => $recipe,
            "experience_id" => $experience,
        ];
    }
}
