<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotions')->insert([
            'code' => 'SUMMER2023',
            'name' => 'Summer 2023 Special',
            'description' => 'Summer 2023 Special Discount',
            'discount_type' => 'percentage',
            'discount_value' => '10',
            'min_order_amount' => '0',
            'max_discount' => '100',
            'usage_limit' => '1',
            'used_count' => '0',
            'valid_from' => '2023-06-01',
            'valid_to' => '2023-09-30',
            'applicable_to' => 'all',
            'is_active' => '1',
        ]);
        DB::table('promotions')->insert([
            'code' => 'WELCOME50',
            'name' => 'Welcome Offer',
            'description' => 'Get $50 off on your first booking',
            'discount_type' => 'fixed',
            'discount_value' => '50',
            'min_order_amount' => '200',
            'max_discount' => '50',
            'usage_limit' => '1',
            'used_count' => '0',
            'valid_from' => '2023-01-01',
            'valid_to' => '2024-12-31',
            'applicable_to' => 'first_time_users',
            'is_active' => '1',
        ]);
        DB::table('promotions')->insert([
            'code' => 'FALL2023',
            'name' => 'Fall 2023 Discount',
            'description' => 'Enjoy a 15% discount this fall season',
            'discount_type' => 'percentage',
            'discount_value' => '15',
            'min_order_amount' => '100',
            'max_discount' => '150',
            'usage_limit' => '2',
            'used_count' => '0',
            'valid_from' => '2023-09-01',
            'valid_to' => '2023-11-30',
            'applicable_to' => 'all',
            'is_active' => '1',
        ]);
    }
}
