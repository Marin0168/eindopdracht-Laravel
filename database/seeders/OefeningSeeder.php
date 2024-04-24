<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Oefening;

class OefeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oefening::create(['naam' => 'Push-ups', 'aantal_keren' => '20']);
        Oefening::create(['naam' => 'Sit-ups', 'aantal_keren' => '30']);
        Oefening::create(['naam' => 'Squats', 'aantal_keren' => '25']);
        Oefening::create(['naam' => 'Lunges', 'aantal_keren' => '15']);
        Oefening::create(['naam' => 'Planks', 'aantal_keren' => '60 seconds']);
        Oefening::create(['naam' => 'Burpees', 'aantal_keren' => '10']);
        Oefening::create(['naam' => 'Jumping Jacks', 'aantal_keren' => '50']);
        Oefening::create(['naam' => 'Mountain Climbers', 'aantal_keren' => '20']);
        Oefening::create(['naam' => 'Crunches', 'aantal_keren' => '25']);
        Oefening::create(['naam' => 'Pull-ups', 'aantal_keren' => '10']);
    }
}
