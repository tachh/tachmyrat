<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CitySeeder::class,
            CategorySeeder::class,
        ]);

        User::factory()
            ->count(rand(20, 30))
            ->create();

        Restaurant::factory()
            ->count(rand(10, 20))
            ->create();

        Reservation::factory()
            ->count(rand(50, 100))
            ->create();

        Product::factory()
            ->count(rand(50, 100))
            ->create();





        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }

}
