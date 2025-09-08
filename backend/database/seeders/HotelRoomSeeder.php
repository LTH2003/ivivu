<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_rooms')->insert([
            'hotel_id' => 1,
            'room_type' => 'Deluxe Room',
            'description' => 'A spacious and luxurious room with a private balcony.',
            'max_occupancy' => '2',
            'bed_type' => 'King Size Bed',
            'room_size' => '400 sqft',
            'amenities' => 'Air Conditioning, TV, Balcony',
            'base_price' => '1000',
            'image_url' => 'https://example.com/deluxe_room.jpg',
            'available_rooms' => '10',
        ]);

        DB::table('hotel_rooms')->insert([
            'hotel_id' => 1,
            'room_type' => 'Suite Room',
            'description' => 'A spacious and luxurious suite with a private balcony and a separate living area.',
            'max_occupancy' => '4',
            'bed_type' => 'Queen Size Bed',
            'room_size' => '600 sqft',
            'amenities' => 'Air Conditioning, TV, Balcony, Living Area',
            'base_price' => '1500',
            'image_url' => 'https://example.com/suite_room.jpg',
            'available_rooms' => '5',
        ]);
        DB::table('hotel_rooms')->insert([
            'hotel_id' => 2,
            'room_type' => 'Deluxe Room',
            'description' => 'A spacious and luxurious room with a private balcony.',
            'max_occupancy' => '2',
            'bed_type' => 'King Size Bed',
            'room_size' => '400 sqft',
            'amenities' => 'Air Conditioning, TV, Balcony',
            'base_price' => '1000',
            'image_url' => 'https://example.com/deluxe_room.jpg',
            'available_rooms' => '10',
        ]);
        DB::table('hotel_rooms')->insert([
            'hotel_id' => 2,
            'room_type' => 'Suite Room',
            'description' => 'A spacious and luxurious suite with a private balcony and a separate living area.',
            'max_occupancy' => '4',
            'bed_type' => 'Queen Size Bed',
            'room_size' => '600 sqft',
            'amenities' => 'Air Conditioning, TV, Balcony, Living Area',
            'base_price' => '1500',
            'image_url' => 'https://example.com/suite_room.jpg',
            'available_rooms' => '5',
        ]);
    }
}
