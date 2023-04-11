<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->numberBetween(1,1000),
            'staff_id' => $this->faker->numberBetween(1,1000),
            'total' => $this->faker->randomFloat(4,50,100),
            'subtotal' => $this->faker->randomFloat(4,50,100),
            'vat' => $this->faker->randomFloat(2,50,100),
            'status' => "sale",
            'notes' => "Comments",
            'dateNtime' => $this->faker->dateTimeThisMonth(),
            'photo1' => "https://picsum.photos/400/200",
            'photo2' => "https://picsum.photos/400/200",
            'active' => $this->faker->randomElement(['0','1'])

        ];
    }
}
