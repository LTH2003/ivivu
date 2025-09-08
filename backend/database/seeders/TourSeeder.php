<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours')->insert([
            'name' => 'Tour 1',
            'slug' => 'tour-1',
            'description' => 'Tour 1 description',
            'destination_id' => 1,
            'duration_days' => '3',
            'duration_nights' => '2',
            'tour_type' => 'Adventure',
            'difficulty_level' => 'Easy',
            'max_participants' => '10',
            'min_participants' => '5',
            'base_price' => '1000',
            'includes' => 'Transportation, Meals, Guide',
            'excludes' => 'Lunch, Dinner, Snacks',
            'itinerary' => 'Day 1: Explore city A, Day 2: Explore city B, Day 3: Explore city C',
            'image_url' => 'https://example.com/tour1.jpg',
            'status' => 'active',
            'is_featured' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tours')->insert([
            'name' => 'Tour 2',
            'slug' => 'tour-2',
            'description' => 'Tour 2 description',
            'destination_id' => 2,
            'duration_days' => '4',
            'duration_nights' => '3',
            'tour_type' => 'Adventure',
            'difficulty_level' => 'Medium',
            'max_participants' => '15',
            'min_participants' => '10',
            'base_price' => '1500',
            'includes' => 'Transportation, Meals, Guide',
            'excludes' => 'Lunch, Dinner, Snacks',
            'itinerary' => 'Day 1: Explore city A, Day 2: Explore city B, Day 3: Explore city C, Day 4: Explore city D',
            'image_url' => 'https://example.com/tour2.jpg',
            'status' => 'active',
            'is_featured' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tours')->insert([
            'name' => 'Tour 3',
            'slug' => 'tour-3',
            'description' => 'Tour 3 description',
            'destination_id' => 3,
            'duration_days' => '5',
            'duration_nights' => '4',
            'tour_type' => 'Adventure',
            'difficulty_level' => 'Hard',
            'max_participants' => '20',
            'min_participants' => '15',
            'base_price' => '2000',
            'includes' => 'Transportation, Meals, Guide',
            'excludes' => 'Lunch, Dinner, Snacks',
            'itinerary' => 'Day 1: Explore city A, Day 2: Explore city B, Day 3: Explore city C, Day 4: Explore city D, Day 5: Explore city E',
            'image_url' => 'https://example.com/tour3.jpg',
            'status' => 'active',
            'is_featured' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
