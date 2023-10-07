<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_number' => $this->faker->unique()->randomNumber(8),
            'user_id' => $this->faker->numberBetween(1, 30),
            'country_id' => $this->faker->numberBetween(1, 30),
            'competition_id' => $this->faker->numberBetween(1, 6),
            'sport_id' => $this->faker->numberBetween(1, 6),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid']),
            'payment_method' => $this->faker->randomElement(['paypal', 'stripe']),
            'payment_reference' => $this->faker->randomNumber(8),
            'payment_amount' => $this->faker->randomFloat(2, 0, 100),
            'payment_date' => $this->faker->date(),
            'payment_time' => $this->faker->time(),
            'payment_currency' => $this->faker->randomElement(['USD', 'EUR']),

        ];
    }
}
