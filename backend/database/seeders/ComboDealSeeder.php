<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComboDealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('combo_deals')->insert([
            'name' => 'Hanoi Explorer Combo',
            'description' => 'Explore Hanoi with a 3-day city tour and a 2-night stay at a 4-star hotel.',
            'hotel_id' => 1,
            'tour_id' => 1,
            'flight_id' => 1,
            'original_price' => 5000,
            'combo_price' => 4000,
            'discount_percentage' => 10,
            'valid_from' => '2023-09-01',
            'valid_to' => '2023-09-30',
            'max_bookings' => 10,
            'current_bookings' => 5,
            'is_featured' => 1,
            'status' => 'active',
        ]);
        DB::table('combo_deals')->insert([
            'name' => 'Saigon Adventure Combo',
            'description' => 'Experience Saigon with a 4-day city tour and a 3-night stay at a 5-star hotel.',
            'hotel_id' => 2,
            'tour_id' => 2,
            'flight_id' => 2,
            'original_price' => 7000,
            'combo_price' => 6000,
            'discount_percentage' => 15,
            'valid_from' => '2023-10-01',
            'valid_to' => '2023-10-31',
            'max_bookings' => 15,
            'current_bookings' => 7,
            'is_featured' => 0,
            'status' => 'active',
        ]);
        DB::table('combo_deals')->insert([
            'name' => 'Danang Beach Combo',
            'description' => 'Relax in Danang with a 5-day beach tour and a 4-night stay at a beachfront resort.',
            'hotel_id' => 3,
            'tour_id' => 3,
            'flight_id' => 3,
            'original_price' => 8000,
            'combo_price' => 6500,
            'discount_percentage' => 20,
            'valid_from' => '2023-11-01',
            'valid_to' => '2023-11-30',
            'max_bookings' => 20,
            'current_bookings' => 10,
            'is_featured' => 1,
            'status' => 'active',
        ]);
        DB::table('combo_deals')->insert([
            'name' => 'Hue Cultural Combo',
            'description' => 'Discover Hue with a 3-day cultural tour and a 2-night stay at a heritage hotel.',
            'hotel_id' => 2,
            'tour_id' => 2,
            'flight_id' => 1,
            'original_price' => 6000,
            'combo_price' => 5000,
            'discount_percentage' => 12,
            'valid_from' => '2023-12-01',
            'valid_to' => '2023-12-31',
            'max_bookings' => 12,
            'current_bookings' => 6,
            'is_featured' => 0,
            'status' => 'active',
        ]);
    }
}
