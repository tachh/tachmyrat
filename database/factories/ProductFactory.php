<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Product;
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
            'name' => fake()->name(),
            'price' => rand(1, 100),
            'restaurant_id' => Restaurant::inRandomOrder()->value('id') ?? Restaurant::factory(),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory(),
            'description' => fake()->sentence(1, 3),
        ];
    }
}
