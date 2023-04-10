<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClientsFactory extends Factory
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
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC',
            'phone' => $this->faker->numberBetween(7000000000,7229999999),
            'address' => Str::random(10),
            'tax_id' =>$this->faker->numberBetween(1,1000),
            'active' =>$this->faker->randomElement(['0','1'])
            
        ]; 
    }

    
}
