<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = \App\Models\User::pluck('id');
        $categories = \App\Models\Category::pluck('id');
        return [
            'title' => fake()->words(2, true),
            'description' => fake()->paragraph(10),
            'category_id' => fake()->randomElement($categories),
            'user_id' => fake()->randomElement($users)
        ];
    }
}
