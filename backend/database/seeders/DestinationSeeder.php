<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            'name' => 'Bali',
            'slug' => 'bali',
            'description' => 'Bali is a popular island in Indonesia known for its stunning beaches, lush rainforests, and vibrant culture.',
            'country' => 'Indonesia',
            'region' => 'South East Asia',
            'image_url' => 'https://example.com/bali.jpg',
            'featured' => 1,
            'is_domestic' => 1,
            'popular_rank' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('destinations')->insert([
            'name' => 'Nha Trang',
            'slug' => 'nha-trang',
            'description' => 'Nha Trang is a popular beach resort in Vietnam known for its stunning beaches, lush rainforests, and vibrant culture.',
            'country' => 'Vietnam',
            'region' => 'South East Asia',
            'image_url' => 'https://example.com/bali.jpg',
            'featured' => 1,
            'is_domestic' => 1,
            'popular_rank' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('destinations')->insert([
            'name' => 'Phu Quoc',
            'slug' => 'phu-quoc',
            'description' => 'Phu Quoc is a popular island in Vietnam known for its stunning beaches, lush rainforests, and vibrant culture.',
            'country' => 'Vietnam',
            'region' => 'South East Asia',
            'image_url' => 'https://example.com/bali.jpg',
            'featured' => 1,
            'is_domestic' => 1,
            'popular_rank' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('destinations')->insert([
            'name' => 'Cua Lo',
            'slug' => 'cua-lo',
            'description' => 'Cua Lo is a popular island in Vietnam known for its stunning beaches, lush rainforests, and vibrant culture.',
            'country' => 'Vietnam',
            'region' => 'South East Asia',
            'image_url' => 'https://example.com/bali.jpg',
            'featured' => 1,
            'is_domestic' => 1,
            'popular_rank' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
