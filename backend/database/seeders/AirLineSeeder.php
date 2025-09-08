<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airlines')->insert([
            'name' => 'Vietnam Airlines',
            'code' => 'VN',
            'logo_url' => 'https://via.placeholder.com/150',
            'country' => 'Vietnam',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('airlines')->insert([
            'name' => 'Bamboo Airways',
            'code' => 'QH',
            'logo_url' => 'https://via.placeholder.com/150',
            'country' => 'Vietnam',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('airlines')->insert([
            'name' => 'VietJet Air',
            'code' => 'VJ',
            'logo_url' => 'https://via.placeholder.com/150',
            'country' => 'Vietnam',
            'created_at' => now(),
            'updated_at' => now(),
        ]); 
        DB::table('airlines')->insert([
            'name' => 'Pacific Airlines',
            'code' => 'BL',
            'logo_url' => 'https://via.placeholder.com/150',
            'country' => 'Vietnam',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
