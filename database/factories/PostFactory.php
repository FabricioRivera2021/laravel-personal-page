<?php

namespace Database\Factories;

use App\Models\Post;
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
            'title' => fake()->text(15),
            'subTitle' => fake()->text(20),
            'author' => 'Some user',
            'body' => fake()->paragraphs(3, true),
            'img' => fake()->url(),
            'lang' => fake()->randomElement(Post::$lang)
        ];
    }
}
