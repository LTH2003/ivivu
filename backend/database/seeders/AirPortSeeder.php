<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirPortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airports')->insert([
            'name' => 'Noi Bai International Airport',
            'code' => 'HAN',
            'city' => 'Hanoi',
            'country' => 'Vietnam',
            'timezone' => 'Asia/Ho_Chi_Minh'
        ]);
        DB::table('airports')->insert([
            'name' => 'Tan Son Nhat International Airport',
            'code' => 'SGN',
            'city' => 'Ho Chi Minh City',
            'country' => 'Vietnam',
            'timezone' => 'Asia/Ho_Chi_Minh'
        ]);
        DB::table('airports')->insert([
            'name' => 'Da Nang International Airport',
            'code' => 'DAD',
            'city' => 'Da Nang',
            'country' => 'Vietnam',
            'timezone' => 'Asia/Ho_Chi_Minh'
        ]);
        DB::table('airports')->insert([
            'name' => 'Cam Ranh International Airport',
            'code' => 'CXR',
            'city' => 'Nha Trang',
            'country' => 'Vietnam',
            'timezone' => 'Asia/Ho_Chi_Minh'
        ]);
        DB::table('airports')->insert([
            'name' => 'Phu Quoc International Airport',
            'code' => 'PQC',
            'city' => 'Phu Quoc',
            'country' => 'Vietnam',
            'timezone' => 'Asia/Ho_Chi_Minh'
        ]);
        
    }
}
