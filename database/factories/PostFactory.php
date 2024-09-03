<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post' => fake()->text(),
            'movie_id' => \App\Models\Movie::all()->random()->id,//\App\Models\Movie::factory(),
            'user_id' => \App\Models\User::factory()
        ];
    }
}
