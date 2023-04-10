<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
=======
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StaffFacttory extends Factory
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
            'name' => $this->faker->name(),
            'role' => $this->faker->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'tax_id' => $this->faker->numberBetween(1,200),
            'active' => $this->faker->randomElement(['0','1'])

        ];
    }
=======
            'name' =>  $this->faker->name(),
            'role'=>  $this->faker->randomElement(['Employee', 'Manager', 'CEO']),
            'email' =>  $this->faker->email(),
            'password' =>  $this->faker->str_random(10),
            'tax_id' =>$this->faker->str_random(13),
            'active' =>$faker->randomElement(['yes', 'no']),
            
        ]; 
    }

    
>>>>>>> aa9685103967cb82859d3b9ad7f685a259400117
}
