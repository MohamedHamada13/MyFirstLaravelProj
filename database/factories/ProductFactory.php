<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'description' => fake()->boolean(80) ? fake()->paragraph() : null,
            'price' => fake()->randomFloat(2, 1, 5000),
            'quantity' => fake()->numberBetween(0, 200),
            'image' => fake()->boolean(60) ? ('products/' . fake()->uuid() . '.jpg') : null,
        ];
    }
}
