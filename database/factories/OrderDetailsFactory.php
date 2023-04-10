<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class OrderDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->numberBetween(1,1000),
            'product_id' => $this->faker->numberBetween(1,1000),
            'quantity' => $this->faker->randomFloat(2,50,100),
            'active' => $this->faker->randomElement(['0','1'])

        ];
    }
}