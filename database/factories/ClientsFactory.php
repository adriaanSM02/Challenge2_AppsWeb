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
<<<<<<< HEAD
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC',
            'phone' => $this->faker->numberBetween(7000000000,7229999999),
            'address' => Str::random(10),
            'tax_id' =>$this->faker->numberBetween(1,1000),
            'active' =>$this->faker->randomElement(['0','1'])
=======
            'email' =>  $this->faker->email(),
            'password' => $this->faker->str_random(10),
            'phone' => $this->faker->float_random(10),
            'address' => $this->faker->str_random(30),
            'tax_id' =>$this->faker->str_random(13),
            'active' =>$this ->$faker->randomElement(['yes', 'no']),
>>>>>>> aa9685103967cb82859d3b9ad7f685a259400117
            
        ]; 
    }

    
}
