<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->title(3),
            'mini_description' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraph(5),
            'slug' => $this->faker->unique()->slug(),
            'tag' => $this->faker->title(),
        ];
    }
}
