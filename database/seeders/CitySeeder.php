<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'name' => 'Jakarta',
                'description' => 'Jakarta, Indonesia\'s massive capital, sits on the northwest coast of the island of Java. A historic mix of cultures – Javanese, Malay, Chinese, Arab, Indian and European – has influenced its architecture, language and cuisine.',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Malang',
                'description' => 'Malang is a city in East Java, Indonesia. Prized by the Dutch for its mild highland climate, the city retains much of its colonial architecture. The Balai Kota building blends Indonesian and Dutch styles, and grand mansions line the main boulevard, Jalan Besar Ijen.',
                'popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
