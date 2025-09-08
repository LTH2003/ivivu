<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            'user_id' => 1,
            'booking_type' => 'flight',
            'booking_reference' => 'FL001',
            'total_amount' => 1000,
            'currency' => 'USD',
            'status' => 'pending',
            'payment_status' => 'unpaid',
            'booking_date' => '2023-09-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('bookings')->insert([
            'user_id' => 2,
            'booking_type' => 'hotel',
            'booking_reference' => 'HT001',
            'total_amount' => 500,
            'currency' => 'USD',
            'status' => 'confirmed',
            'payment_status' => 'paid',
            'booking_date' => '2023-09-02',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('bookings')->insert([
            'user_id' => 3,
            'booking_type' => 'tour',
            'booking_reference' => 'TR001',
            'total_amount' => 1500,
            'currency' => 'USD',
            'status' => 'cancelled',
            'payment_status' => 'refunded',
            'booking_date' => '2023-09-03',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
