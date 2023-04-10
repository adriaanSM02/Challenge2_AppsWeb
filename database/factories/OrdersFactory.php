<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
=======
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OrdersFacttory extends Factory
>>>>>>> aa9685103967cb82859d3b9ad7f685a259400117
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
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
=======
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

    
>>>>>>> aa9685103967cb82859d3b9ad7f685a259400117
}
