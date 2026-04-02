<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get the user IDs from the database to associate with the orders.
        // `static` To avoid querying the database for user IDs on every factory instance creation, we can cache them in a static variable.
        static $userIds;
        $userIds ??= User::query()->pluck('id');

        return [
            'user_id' => $userIds->isNotEmpty()
                ? $userIds->random()
                : User::factory(),
        ];
    }
}
