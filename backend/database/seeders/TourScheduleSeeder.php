<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tour_schedules')->insert([
            'tour_id' => 1,
            'departure_date' => '2023-09-01',
            'return_date' => '2023-09-05',
            'available_slots' => 10,
            'price' => 1000,
            'guide_id' => 1,
            'status' => 'available',
        ]);
        DB::table('tour_schedules')->insert([
            'tour_id' => 2,
            'departure_date' => '2023-09-02',
            'return_date' => '2023-09-06',
            'available_slots' => 5,
            'price' => 1500,
            'guide_id' => 2,
            'status' => 'available',
        ]);
        DB::table('tour_schedules')->insert([
            'tour_id' => 3,
            'departure_date' => '2023-09-03',
            'return_date' => '2023-09-07',
            'available_slots' => 8,
            'price' => 1200,
            'guide_id' => 3,
            'status' => 'available',
        ]);
        DB::table('tour_schedules')->insert([
            'tour_id' => 1,
            'departure_date' => '2023-09-04',
            'return_date' => '2023-09-08',
            'available_slots' => 12,
            'price' => 1800,
            'guide_id' => 4,
            'status' => 'available',
        ]);
    }
}
