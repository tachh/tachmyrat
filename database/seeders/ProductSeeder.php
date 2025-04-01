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
            Product::create([
                'name' => $obj,
                'price' => rand(1,100),
                'restaurant_id' => Restaurant::inRandomOrder()->value('id'),
                'category_id' => Category::inRandomOrder()->value('id'),
                ]);
        }
    }
}
