<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = ['Manty', 'Tamdyrlama', 'Burger', 'Mohito', 'Cola', 'Coffee'];

        foreach ($objs as $obj) {
            $restaurant = Restaurant::inRandomOrder()->first(); // Restaurant ID-ini almak

            // Restaurant ýok bolsa, täze birini döretmek
            if (!$restaurant) {
                $restaurant = Restaurant::factory()->create();
            }

            $category = Category::inRandomOrder()->first(); // Category ID-ini almak

            // Category ýok bolsa, täze birini döretmek
            if (!$category) {
                $category = Category::factory()->create();
            }

            Product::create([
                'name' => $obj,
                'price' => rand(1, 100),
                'restaurant_id' => $restaurant->id, // Dogry restaurant ID-ini ulanylýar
                'category_id' => $category->id, // Dogry category ID-ini ulanylýar
            ]);
        }

    }
}
