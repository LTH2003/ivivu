<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            'name' => 'Khach San Xanh',
            'slug' => 'khach-san-xanh',
            'description' => 'Hotel 1 description',
            'destination_id' => 1,
            'address' => '123 Main St, New York, Viet Nam',
            'city' => 'New York',
            'star_rating' => '4',
            'amenities' => 'Pool, Spa, Restaurant',
            'image_url' => 'https://example.com/hotel1.jpg',
            'base_price' => '1000',
            'is_featured' => 1,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hotels')->insert([
            'name' => 'Khach San Do',
            'slug' => 'khach-san-do',
            'description' => 'Hotel 2 description',
            'destination_id' => 2,
            'address' => '456 Elm St, Los Angeles, Viet Nam',
            'city' => 'Los Angeles',
            'star_rating' => '5',
            'amenities' => 'Pool, Spa, Restaurant',
            'image_url' => 'https://example.com/hotel2.jpg',
            'base_price' => '1500',
            'is_featured' => 1,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hotels')->insert([
            'name' => 'Khach San Vang',
            'slug' => 'khach-san-vang',
            'description' => 'Hotel 1 description',
            'destination_id' => 1,
            'address' => '123 Main St, New York, Viet Nam',
            'city' => 'New York',
            'star_rating' => '4',
            'amenities' => 'Pool, Spa, Restaurant',
            'image_url' => 'https://example.com/hotel1.jpg',
            'base_price' => '1000',
            'is_featured' => 1,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hotels')->insert([
            'name' => 'Khach San Tim',
            'slug' => 'khach-san-tim',
            'description' => 'Hotel 2 description',
            'destination_id' => 2,
            'address' => '456 Elm St, Los Angeles, Viet Nam',
            'city' => 'Los Angeles',
            'star_rating' => '5',
            'amenities' => 'Pool, Spa, Restaurant',
            'image_url' => 'https://example.com/hotel2.jpg',
            'base_price' => '1500',
            'is_featured' => 1,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
