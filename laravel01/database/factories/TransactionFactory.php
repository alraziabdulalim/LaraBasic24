<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_name' => fake()->numberBetween(int1:1, int2:200),
            'account_type' => fake()->numberBetween(int1:1, int2:2),
            'amount' => fake()->numberBetween(int1:10, int2:9999),
            'details' => fake()->sentence(nbWords:255),
        ];
    }
}
