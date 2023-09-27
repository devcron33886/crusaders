<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'team_id' => fake()->numberBetween(1, 10),
            'category_id' => fake()->numberBetween(1, 10),
            'date_of_birth' => fake()->date(),
            'height' => fake()->numberBetween(1.50, 2.18),
            'weight' => fake()->numberBetween(50, 90),
            'position' => fake()->realText(30),
            'skills' => fake()->realText(50),
            'injury_history' => fake()->realText(100),

        ];
    }
}
