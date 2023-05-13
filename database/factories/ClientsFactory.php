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
            'uuid' => $this->faker->uuid(),
            'name' =>  $this->faker->firstName(),    
            'tax_id' => $this->faker->numberBetween(1111111111111, 9999999999999),
            'active' =>$this->faker->randomElement(['0','1'])
            
        ]; 
    }

    
}
