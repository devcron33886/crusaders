<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = [
            [
                'id' => 1,
                'name' => 'Football',
                'description' => 'Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal.',

            ],
            [
                'id' => 2,
                'name' => 'Basketball',
                'description' => 'Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball through the defender goal while preventing the opposing team from shooting through their own goal.',
            ], [
                'id' => 3,
                'name' => 'Volleyball',
                'description' => 'Volleyball is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other teams court under organized rules.',
            ],
            [
                'id' => 4,
                'name' => 'Tennis',
                'description' => 'Tennis is a racket sport that can be played individually against a single opponent or between two teams of two players each.',

            ], [
                'id' => 5,
                'name' => 'Table Tennis',
                'description' => 'Table tennis, also known as ping-pong and whiff-whaff, is a sport in which two or four players hit a lightweight ball, also known as the ping-pong ball, back and forth across a table using small rackets.',
            ],
            [
                'id' => 6,
                'name' => 'Athletics',
                'description' => 'Athletics is a group of sporting events that involves competitive running, jumping, throwing, and walking.',
            ],

        ];
        Sport::insert($sports);
    }
}
