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

        $subtotal = $this->faker->randomFloat(2, 100, 9999);
        $tax = $subtotal*.16;
        $total = $subtotal + $tax;
        
        return [
            'client_id' => $this->faker->numberBetween(1,10),
            'status' => $this->faker->numberBetween(0, 4),
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total,
            'notes' => "Comments",
            'dateNtime' => $this->faker->dateTimeThisMonth(),
            'photo1' => "https://picsum.photos/400/200",
            'active' => $this->faker->randomElement(['0','1'])

        ];
    }
}
