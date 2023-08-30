<?php

namespace Database\Seeders;

use App\Models\Occupant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OccupantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Occupant::query()->create([
            'name' => 'Elizabeth',
            'gender'=>'Female',
            'birth_place'=>'Maluku',
            'birth_date'=>'1998-12-20',
            'origin_city'=>'Jayapura',
            'phone_number'=>'0817-2287-9912',
        ]);
    }
}
