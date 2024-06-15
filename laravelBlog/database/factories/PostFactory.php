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
            'user_id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->sentence(200),
            'type' => $this->faker->randomElement(['page-post', 'blog-post']),
            'category_id' => $this->faker->numberBetween(1, 5),
            'pub_status' => $this->faker->randomElement(['draft', 'public', 'private']),
            'com_status' => $this->faker->randomElement(['restricted', 'public', 'private']),
        ];
    }
}
