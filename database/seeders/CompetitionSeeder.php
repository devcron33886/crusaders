<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competitions = [
            [
                'id' => 1,
                'name' => 'Premier League',
                'description' => 'The Premier League, often referred to outside England as the English Premier League or the EPL, is the top level of the English football league system. Contested by 20 clubs, it operates on a system of promotion and relegation with the English Football League.',
                'sport_id' => 1,
                'start_date' => '2021-08-13',
                'end_date' => '2022-05-22',
                'location' => 'England',
                'status' => 'active',

            ],
            [
                'id' => 2,
                'name' => 'La Liga',
                'description' => 'The Campeonato Nacional de Liga de Primera División, commonly known as La Liga, is the men\'s top professional football division of the Spanish football league system. Administered by the Liga Nacional de Fútbol Profesional, is contested by 20 teams, with the three lowest-placed teams at the end of each season relegated to the Segunda División and replaced by the top two teams and a play-off winner in that division.',
                'sport_id' => 1,
                'start_date' => '2021-08-13',
                'end_date' => '2022-05-22',
                'location' => 'Spain',
                'status' => 'active',
            ], [
                'id' => 3,
                'name' => 'NBA',
                'description' => 'The National Basketball Association is a professional basketball league in North America. The league is composed of 30 teams and is one of the four major professional sports leagues in the United States and Canada. It is the premier men\'s professional basketball league in the world.',
                'sport_id' => 2,
                'start_date' => '2021-10-19',
                'end_date' => '2022-04-10',
                'location' => 'United States',
                'status' => 'active',

            ],
            [
                'id' => 4,
                'name' => 'WNBA',
                'description' => 'The Women\'s National Basketball Association is a professional basketball league in the United States. It is currently composed of twelve teams. The league was founded on April 24, 1996, as the women\'s counterpart to the National Basketball Association, and league play started in 1997.',
                'sport_id' => 2,
                'start_date' => '2021-05-14',
                'end_date' => '2021-10-03',
                'location' => 'United States',
                'status' => 'active',
            ],
            [
                'id' => 5,
                'name' => 'Tenis US Open',
                'description' => 'The United States Open Tennis Championships is a hard court tennis tournament. The tournament is the modern version of one of the oldest tennis championships in the world, the U.S. National Championship, for which men\'s singles and men\'s doubles were first played in 1881.',
                'sport_id' => 4,
                'start_date' => '2021-08-30',
                'end_date' => '2021-09-12',
                'location' => 'United States',
                'status' => 'active',
            ], [
                'id' => 6,
                'name' => 'Volleball World Cup',
                'description' => 'The FIVB Volleyball Men\'s World Cup is an international volleyball competition contested by the senior men\'s national teams of the members of Fédération Internationale de Volleyball, the sport\'s global governing body. Initially the tournament was played in the year following the Olympic Games, except for 1973 when no tournament was held, but since 1991 the World Cup has been awarded in the year preceding the Olympic Games.',
                'sport_id' => 3,
                'start_date' => '2021-09-10',
                'end_date' => '2021-10-15',
                'location' => 'Japan',
                'status' => 'active',
            ],
            [
                'id' => 7,
                'name' => 'Athletics World Championships',
                'description' => 'The World Athletics Championships are a biennial athletics competition organized by World Athletics. The World Championships were started in 1976 in response to the International Olympic Committee dropping the men\'s 50 km walk from the Olympic athletics programme for the 1976 Montreal Olympics, despite its constant presence at the games since 1932.',
                'sport_id' => 6,
                'start_date' => '2022-07-15',
                'end_date' => '2022-07-24',
                'location' => 'United States',
                'status' => 'active',
            ],

        ];

        \App\Models\Competition::insert($competitions);

    }
}
