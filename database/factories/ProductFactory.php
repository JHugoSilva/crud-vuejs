<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->title(),
            'description' => fake()->paragraph(),
            'photo' => fake()->image('public/storage/images',400,300),
            'type' => fake()->title(),
            'quantity' => fake()->randomNumber(5),
            'price' => fake()->randomFloat(2, 10, 100)
        ];
    }
}
