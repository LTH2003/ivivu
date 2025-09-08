<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wishlists')->insert([
            'user_id' => 1,
            'item_type' => 'tour',
            'item_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('wishlists')->insert([
            'user_id' => 2,
            'item_type' => 'hotel',
            'item_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('wishlists')->insert([
            'user_id' => 3,
            'item_type' => 'flight',
            'item_id' => 1,
            'created_at' => now(),
        ]);
    }
}
