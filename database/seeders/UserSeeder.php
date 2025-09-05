<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'first_name' => 'Le',
            'last_name' => 'Huy',
            'email' => 'Ml7CZ@example.com',
            'password_hash' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '1234567890',
            'email_verified_at' => now(),
            'date_of_birth' => '1990-01-01',
            'sex' => 'male',
            'avatar_url' => 'https://example.com/avatar.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Nguyen',
            'last_name' => 'An',
            'email' => 'H6C4o@example.com',
            'password_hash' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '1234567890',
            'email_verified_at' => now(),
            'date_of_birth' => '1990-01-01',
            'sex' => 'male',
            'avatar_url' => 'https://example.com/avatar.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Tran',
            'last_name' => 'Binh',
            'email' => '1Dh9V@example.com',
            'password_hash' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '1234567890',
            'email_verified_at' => now(),
            'date_of_birth' => '1990-01-01',
            'sex' => 'male',
            'avatar_url' => 'https://example.com/avatar.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
