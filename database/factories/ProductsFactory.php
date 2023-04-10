<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'stock' => $this->faker->numberBetween(1,1000),
            'price' => $this->faker->randomFloat(2,50,100),
            'description' =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.",
            'photo' => "https://picsum.photos/400/200",
            'active' => $this->faker->randomElement(['0','1'])
        ];
    }
}

