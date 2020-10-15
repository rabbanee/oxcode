<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attractions')->insert([
            [
                'name' => 'Dufan',
                'description' => 'Internationally themed amusement park offering roller coasters, interactive rides, flumes & shows.',
                'city_id' => '1',
                'address' => 'Dunia Fantasi, Jl. Lodan Timur No.7, RW.10, Ancol, Pademangan, North Jakarta City, Jakarta 14430',
                'phone' => '(021) 29222222',
                'rating' => 4,
                'traveler_review_id' => 4,
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bromo',
                'description' => 'Mount Bromo, is an active volcano and part of the Tengger massif, in East Java, Indonesia. At 2,329 meters it is not the highest peak of the massif, but is the best known. The massif area is one of the most visited tourist attractions in East Java, Indonesia.',
                'city_id' => '2',
                'address' => 'Mt Bromo, Area Gn. Bromo, Podokoyo, Tosari, Pasuruan, East Java',
                'phone' => '087 784 300 500',
                'rating' => 5,
                'traveler_review_id' => 5,
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
