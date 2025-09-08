<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('booking_items')->insert([
            'booking_id' => 1,
            'item_type' => 'flight',
            'item_id' => 1,
            'quantity' => 1,
            'unit_price' => 1000,
            'total_price' => 1000,
            'check_in_date' => '2023-09-01',
            'check_out_date' => '2023-09-02',
            'guest_details' => 'John Doe'
        ]);
        DB::table('booking_items')->insert([
            'booking_id' => 2,
            'item_type' => 'hotel',
            'item_id' => 1,
            'quantity' => 1,
            'unit_price' => 500,
            'total_price' => 500,
            'check_in_date' => '2023-09-02',
            'check_out_date' => '2023-09-03',
            'guest_details' => 'Jane Smith'
        ]);
        DB::table('booking_items')->insert([
            'booking_id' => 3,
            'item_type' => 'tour',
            'item_id' => 1,
            'quantity' => 1,
            'unit_price' => 1500,
            'total_price' => 1500,
            'check_in_date' => '2023-09-03',
            'check_out_date' => '2023-09-04',
            'guest_details' => 'Alice Johnson'
        ]);
        DB::table('booking_items')->insert([
            'booking_id' => 1,
            'item_type' => 'flight',
            'item_id' => 2,
            'quantity' => 2,
            'unit_price' => 800,
            'total_price' => 1600,
            'check_in_date' => '2023-09-05',
            'check_out_date' => '2023-09-06',
            'guest_details' => 'Bob Brown'
        ]);
    }
}
