<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PerformanceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'player_id' => fake()->numberBetween(1, 30),
            'event_id' => fake()->numberBetween(1, 200),
            'points_scored' => fake()->numberBetween(1, 45),
            'assists' => fake()->numberBetween(1, 20),
            'rebound' => fake()->numberBetween(1, 20),
            'notes' => fake()->realText(),
        ];
    }
}
