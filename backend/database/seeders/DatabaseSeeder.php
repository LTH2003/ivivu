<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            UserProfilesSeeder::class,
            DestinationSeeder::class,
            HotelSeeder::class,
            HotelRoomSeeder::class,
            TourSeeder::class,
            TourScheduleSeeder::class,
            AirLineSeeder::class,
            AirPortSeeder::class,
            FlightSeeder::class,
            BookingSeeder::class,
            BookingItemSeeder::class,
            ComboDealSeeder::class,
            ReviewSeeder::class,
            PaymentSeeder::class,
            CategoriesSeeder::class,
            PromotionSeeder::class,
            WishlistSeeder::class,
        ]);
    }
}
