<?php

namespace Database\Seeders;

use App\Models\Performance;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    public function run(): void
    {
        Performance::factory(200)->create();
    }
}
