<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_profiles')->insert([
            'user_id' => 1,
            'address' => '123 Main St, New York, Viet Nam',
            'city' => 'New York',
            'country' => 'Viet Nam',
            'passport_number' => '123456789',
            'preferred_language' => 'English',
            'loyalty_points' => 0,
            'membership_level' => 'Bronze',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('user_profiles')->insert([
            'user_id' => 2,
            'address' => '456 Elm St, Los Angeles, Viet Nam',
            'city' => 'Los Angeles',
            'country' => 'Viet Nam',
            'passport_number' => '987654321',
            'preferred_language' => 'Spanish',
            'loyalty_points' => 100,
            'membership_level' => 'Gold',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('user_profiles')->insert([
            'user_id' => 3,
            'address' => '789 Oak St, San Francisco, Viet Nam',
            'city' => 'San Francisco',
            'country' => 'Viet Nam',
            'passport_number' => '555555555',
            'preferred_language' => 'English',
            'loyalty_points' => 50,
            'membership_level' => 'Silver',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('user_profiles')->insert([
            'user_id' => 4,
            'address' => '321 Pine St, Chicago, Viet Nam',
            'city' => 'Chicago',
            'country' => 'Viet Nam',
            'passport_number' => '111111111',
            'preferred_language' => 'French',
            'loyalty_points' => 200,
            'membership_level' => 'Platinum',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
