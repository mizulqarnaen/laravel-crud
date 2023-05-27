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
            'customer_id' => $this->faker->numberBetween(1, 10),
            'payment_type' => $this->faker->randomElement(['Transfer', 'Cash']),
            'shipping_cost' => $this->faker->randomNumber(5, true),
            'total_amount' => $this->faker->randomNumber(6, true),
            'description' => $this->faker->paragraph(),
            'source' => $this->faker->randomElement(['Direct', 'Marketplace', 'Website']),
        ];
    }
}
