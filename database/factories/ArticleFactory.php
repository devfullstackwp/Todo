<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        return [
            'title' => $title = fake()->sentence(),
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(10, true),
            'status' => Article::STATUS_PUBLISHED,
            'published_at' => fake()->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
