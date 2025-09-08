<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'user_id' => 1,
            'reviewable_type' => 'flight',
            'reviewable_id' => 1,
            'rating' => 5,
            'title' => 'Great flight!',
            'content' => 'Excellent flight experience!',
            'image_url' => 'https://example.com/flight1.jpg',
            'helpful_count' => 10,
            'is_verified' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 2,
            'reviewable_type' => 'hotel',
            'reviewable_id' => 1,
            'rating' => 4,
            'title' => 'Nice stay',
            'content' => 'Comfortable and clean hotel.',
            'image_url' => 'https://example.com/hotel1.jpg',
            'helpful_count' => 5,
            'is_verified' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 3,
            'reviewable_type' => 'tour',
            'reviewable_id' => 1,
            'rating' => 3,
            'title' => 'Average tour',
            'content' => 'It was okay, nothing special.',
            'image_url' => 'https://example.com/tour1.jpg',
            'helpful_count' => 2,
            'is_verified' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
