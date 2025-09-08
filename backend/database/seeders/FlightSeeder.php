<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            'airline_id' => 1,
            'departure_airport_id' => 1,
            'arrival_airport_id' => 2,
            'flight_number' => 'VN123',
            'departure_time' => '2023-10-01 08:00:00',
            'arrival_time' => '2023-10-01 10:00:00',
            'aircraft_type' => 'Boeing 787',
            'base_price' => 1000,
            'available_seats' => 100,
            'status' => 'scheduled',
        ]);
        DB::table('flights')->insert([
            'airline_id' => 2,
            'departure_airport_id' => 2,
            'arrival_airport_id' => 3,
            'flight_number' => 'QH456',
            'departure_time' => '2023-10-02 09:00:00',
            'arrival_time' => '2023-10-02 11:30:00',
            'aircraft_type' => 'Airbus A320',
            'base_price' => 800,
            'available_seats' => 150,
            'status' => 'scheduled',
        ]);
        DB::table('flights')->insert([
            'airline_id' => 3,
            'departure_airport_id' => 1,
            'arrival_airport_id' => 3,
            'flight_number' => 'VJ789',
            'departure_time' => '2023-10-03 07:30:00',
            'arrival_time' => '2023-10-03 09:30:00',
            'aircraft_type' => 'Boeing 737',
            'base_price' => 600,
            'available_seats' => 120,
            'status' => 'scheduled',
        ]);
    }
}
