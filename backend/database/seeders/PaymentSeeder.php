<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'booking_id' => 1,
            'amount' => 1000,
            'currency' => 'USD',
            'payment_method' => 'Credit Card',
            'transaction_id' => '1234567890',
            'gateway_response' => 'Success',
            'status' => 'paid',
            'processed_at' => '2023-09-01 10:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payments')->insert([
            'booking_id' => 2,
            'amount' => 500,
            'currency' => 'USD',
            'payment_method' => 'PayPal',
            'transaction_id' => '0987654321',
            'gateway_response' => 'Success',
            'status' => 'paid',
            'processed_at' => '2023-09-02 11:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('payments')->insert([
            'booking_id' => 3,
            'amount' => 1500,
            'currency' => 'USD',
            'payment_method' => 'Bank Transfer',
            'transaction_id' => '1122334455',
            'gateway_response' => 'Pending',
            'status' => 'pending',
            'processed_at' => '2023-09-03 12:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
