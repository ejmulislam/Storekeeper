<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
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
        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'total' => $this->faker->numberBetween(100, 1000),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'declined']),
            'payment_method' => $this->faker->creditCardType,
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid']),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'postal_code' => $this->faker->postcode,
            'notes' => $this->faker->sentence(10),

            'user_id' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
