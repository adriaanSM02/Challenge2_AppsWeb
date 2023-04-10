<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClientsFacttory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>  $this->faker->name(),    
            'email' =>  $this->faker->email(),
            'password' => $this->faker->str_random(10),
            'phone' => $this->faker->float_random(10),
            'address' => $this->faker->str_random(30),
            'tax_id' =>$this->faker->str_random(13),
            'active' =>$this ->$faker->randomElement(['yes', 'no']),
            
        ]; 
    }

    
}
