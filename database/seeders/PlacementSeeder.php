<?php

namespace Database\Seeders;

use App\Models\Placement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Placement::create([
                'occupant_id' => 1,
                'room_id' => 1,
                'check_in_date' => '2021-06-09'
            ]);
    }
}
