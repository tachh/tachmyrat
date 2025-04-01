<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
            'restaurant_id' => Restaurant::inRandomOrder()->value('id') ?? Restaurant::factory(),
            'reservation_date' => fake()->dateTimeBetween('now', '+1 month'),
            'guest_count' => fake()->numberBetween(1, 10),
        ];
    }
}
