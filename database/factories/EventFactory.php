<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'date_happened' => fake()->date(),
            'location' => fake()->address(),
            'description' => fake()->realText(),
            'status' => 'Pending',
        ];
    }
}
