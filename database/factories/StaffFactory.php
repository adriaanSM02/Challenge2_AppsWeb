<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StaffFacttory extends Factory
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
            'role'=>  $this->faker->randomElement(['Employee', 'Manager', 'CEO']),
            'email' =>  $this->faker->email(),
            'password' =>  $this->faker->str_random(10),
            'tax_id' =>$this->faker->str_random(13),
            'active' =>$faker->randomElement(['yes', 'no']),
            
        ]; 
    }

    
}
