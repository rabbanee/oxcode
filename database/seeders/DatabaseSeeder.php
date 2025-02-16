<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ImageSeeder::class,
            CitySeeder::class,
            AttractionSeeder::class,
            CategorySeeder::class,
            HoursOfOperationSeeder::class,
            TicketPriceSeeder::class,
            UserSeeder::class,
            TravelerReviewSeeder::class,
        ]);
    }
}
