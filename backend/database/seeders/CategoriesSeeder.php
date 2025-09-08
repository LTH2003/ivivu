<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Adventure',
            'slug' => 'adventure',
            'description' => 'Exciting and adventurous tours for thrill-seekers.',
            'icon_url' => 'https://example.com/adventure-icon.png',
            'image_url' => 'https://example.com/adventure-image.jpg',
            'sort_order' => '1',
            'is_active' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Beach',
            'slug' => 'beach',
            'description' => 'Relax and unwind on the beach.',
            'icon_url' => 'https://example.com/beach-icon.png',
            'image_url' => 'https://example.com/beach-image.jpg',
            'sort_order' => '2',
            'is_active' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Cultural',
            'slug' => 'cultural',
            'description' => 'Explore rich cultural heritage and traditions.',
            'icon_url' => 'https://example.com/cultural-icon.png',
            'image_url' => 'https://example.com/cultural-image.jpg',
            'sort_order' => '3',
            'is_active' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
