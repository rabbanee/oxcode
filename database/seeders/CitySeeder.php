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
            [
                'name' => 'Bali',
                'description' => 'Bali is an Indonesian island known for its forested volcanic mountains, iconic rice paddies, beaches and coral reefs. The island is home to religious sites such as cliffside Uluwatu Temple. To the south, the beachside city of Kuta has lively bars, while Seminyak, Sanur and Nusa Dua are popular resort towns.',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yogyakarta',
                'description' => 'Yogyakarta (often called “Jogja”) is a city on the Indonesian island of Java known for its traditional arts and cultural heritage. Its ornate 18th-century royal complex, or kraton, encompasses the still-inhabited Sultan’s Palace. Also within the kraton are numerous open-air pavilions that host classical Javanese dance shows and concerts of gamelan music, characterized by gongs, chimes and plucked string instruments.',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makale',
                'description' => 'Makale is the capital city of Tana Toraja Regency, South Sulawesi, Indonesia. The city has about 30,000 inhabitants. It is in the northern part of South Sulawesi and can be reached by bus from Makassar.',
                'popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pematang Siantar',
                'description' => 'Pematangsiantar is an independent city in North Sumatra, Indonesia, surrounded by, but not part of, the Simalungun Regency, making Pematangsiantar an enclave within Simalungun Regency. Pematangsiantar formerly had the status of a second level district and was the administrative centre of the surrounding Regency, but it has recently been elevated to City and separated from the Regency.',
                'popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Waisai',
                'description' => 'Waisai is a town in the south of the island of Waigeo in the Raja Ampat Islands, Indonesia. Founded in 2003, it is the capital of the Raja Ampat Regency and is home to a little over 8,000 people. It is a transit point for tourists visiting the rest of the archipelago, and its airport is reachable by plane from the larger cities of Manado and Sorong, or ferry from the latter.',
                'popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'East Lombok',
                'description' => 'East Lombok Regency is an eastern district on the Indonesian island of Lombok. In nearby Gunung Rinjani National Park, Mount Rinjani is an active volcano with trails to the summit and views of Segara Anak crater lake. Off Lombok\'s northeast coast, coral reefs fringe Sulat Island, where wooden walkways lead through mangrove forests. Southeast, Tanjung Ringgit cape has limestone cliffs and pink-sand Tangsi Beach.',
                'popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Central Maluku',
                'description' => 'Central Maluku Regency is a regency of Maluku, Indonesia. The principal town lies at Masohi, on Seram Island. The regency is composed of the central part of the island of Seram, the Banda Islands, and the Lease Islands.',
                'popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
