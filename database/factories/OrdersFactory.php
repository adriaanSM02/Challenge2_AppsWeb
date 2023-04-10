<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OrdersFacttory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => 'factory:App\Customer',
            'staff_id' => 'factory:App\Staff',
            'total' => $this -> $faker -> randomFloat(),
            'subtotal' => $this -> $faker -> randomFloat(),
            'vat' => $this -> $faker -> randomFloat(),
            'status' => $this -> $faker->randomElement(['in progress', 'sent', 'delivered']),
            'notes' => $this -> $faker -> str_random(50),
            'dateNtime' => $this -> $faker -> int_random(),
            'photo1' => "",
            'photo2' => "",
            'active' => $this -> $faker->randomElement(['yes', 'no']),
            
        ]; 
    }

    
}
