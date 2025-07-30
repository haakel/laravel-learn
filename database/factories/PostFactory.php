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
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(5),
            'image' => $this->faker->imageUrl(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'user_id' => 1,
            'published_at' => $this->faker->optional()->dateTime(),
        ];
    }
}