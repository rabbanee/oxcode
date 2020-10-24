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
                'latitude' => '-6.123718',
                'longitude' => '106.833065',
                'category_id' => '5',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mount Bromo',
                'description' => 'Mount Bromo, is an active volcano and part of the Tenggxer massif, in East Java, Indonesia. At 2,329 meters it is not the highest peak of the massif, but is the best known. The massif area is one of the most visited tourist attractions in East Java, Indonesia.',
                'city_id' => '2',
                'address' => 'Mt Bromo, Area Gn. Bromo, Podokoyo, Tosari, Pasuruan, East Java',
                'latitude' => '-7.928780',
                'longitude' => '112.943703',
                'phone' => '087 784 300 500',
                'category_id' => '1',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kuta Beach',
                'description' => 'Kuta is a tourist area, administratively an urban village (kelurahan), and the capital of Kuta District, Badung Regency, southern Bali, Indonesia. A former fishing village, it was one of the first towns on Bali to see substantial tourist development, and as a beach resort remains one of Indonesia\'s major tourist destinations.',
                'city_id' => '3',
                'address' => 'Kuta Beach, Kuta, Badung Regency, Bali',
                'latitude' => '-8.718329',
                'longitude' => '115.168678',
                'phone' => '+62 361 754 396',
                'category_id' => '10',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Borobudur Temple',
                'description' => 'This ancient temple is one of the most famous and culturally significant landmarks in Indonesia. Borobudur was built in the 8th century and constructed in the shape of a traditional Buddhist mandala. It is one of the top UNESCO World Heritage sites, and is considered one of the greatest Buddhist sites in the world.',
                'city_id' => '4',
                'address' => 'Taman Wisata Candi Borobudur, Borobudur, Magelang 56553 Indonesia',
                'latitude' => '-7.607704',
                'longitude' => '110.203741',
                'phone' => '(021) 39832154',
                'category_id' => '5',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toraja Village',
                'description' => 'Indonesia is welknown with its diversity. One of superb site that you may visit is Toraja in South Sulawesi. Toraja is not only welknown with its coffee production, Toraja is also welknown for its Rambusolo ceremony to honor the respected person who died. The dead body after somedays or months to be put in a special house, the body later on will be put in the slope of the mountain. The ceremony takes some days as the family usually will have to prepare a white buffalo which is very expensive in term of the price,accompanied by some buffalo to prepare the food for everyone who attend the ceremony.',
                'city_id' => '4',
                'address' => 'Tana Toraja Regency, South Sulawesi',
                'latitude' => '-3.069207',
                'longitude' => '119.741419',
                'phone' => '+62 821 9296 7444',
                'category_id' => '5',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lake Toba',
                'description' => 'Another of Indonesia\'s natural wonders, Lake Toba is both a body of water and super volcano. The lake, which sits in a crater, was formed between 69,000 and 77,000 years ago and is believed to have been the result of a catastrophic eruption.

                The lake is 1,145 square kilometers and 450 meters deep. Volcanic activity is still regularly recorded here and has pushed some islands above the water\'s surface.

                Lake Toba is a study in beauty and the powerful forces at work on the planet. Here, you can go swimming, water skiing, canoeing, or fishing, or stick to wandering the surrounding area on foot or bike.',
                'city_id' => '6',
                'address' => 'Lake Toba, North Sumatra',
                'latitude' => '2.797289',
                'longitude' => '98.617569',
                'phone' => '+62 813 6163 0586',
                'category_id' => '4',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pianemo Islands',
                'description' => 'Despite the small size, Pianemo Island is worth an exploration. Hiking becomes the most popular thing to do, after all. Thanks to the existence of several karst hills, on which tourists can climb. The thing is everyone should be careful when hiking, as the landscape is considered uncomfortable and slippery. Not to mention sharp stones are scattered there. That means tourists can get hurt for being careless when exploring the karst hills. With a little bit effort and awareness, they can reach the top of the hills, though. The views have got no parallel, for sure.',
                'city_id' => '7',
                'address' => 'Raja Ampat Regency, West Papua',
                'latitude' => '-0.564079',
                'longitude' => '130.270814',
                'phone' => '+62 821 2170 6069',
                'category_id' => '11',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mount Rinjani',
                'description' => 'Another of Indonesia\'s famed volcanoes, Mount Rinjani is a top attraction on Lombok. Rinjani itself does not see the eruptions and activity that some of the others have, but its caldera-forming eruption in the late 13th century is believed to have been one of the most powerful in human history. A lake sits in Rinjani\'s caldera, and within the lake sits Mt. Baru, another active volcano.',
                'city_id' => '8',
                'address' => 'Mount Rinjani, Sembalun Lawang, Sembalun, East Lombok Regency, West Nusa Tenggara',
                'latitude' => '-8.411083',
                'longitude' => '116.457220',
                'phone' => '+62 838 3460 4765',
                'category_id' => '1',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hatta Island',
                'description' => 'Hatta island is so beautiful with white sand beach and do not doubt the beauty underwater. The corals are so full and beautiful. Lots of fishes and sea creatures. The water is so clear. This place is more than amazing.',
                'city_id' => '9',
                'address' => 'Banda, Maluku',
                'latitude' => '-4.591818',
                'longitude' => ' 130.037403',
                'phone' => '+62 361 880 361',
                'category_id' => '11',
                'popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jatiluwih Rice Terrace',
                'description' => 'The Jatiluwih rice terraces in the namesake upland village in West Bali are most famous for their dramatic and exotic landscapes. The cool highlands and the breathtaking scenery of this village at the foot of Mount Batukaru makes for wonderful photo opportunities, and serves as a soothing retreat away from the island’s crowded south.

                Once a UNESCO Cultural Heritage Site candidate, the Jatiluwih rice terraces comprise over 600 hectares of rice fields that follow the flowing topography of the Batukaru mountain range. These are maintained by a traditional water management cooperative known as subak, which dates back to the 9th century. The cooperative itself eventually won recognition as a dominant factor in Bali’s ‘cultural landscape’ entry on the heritage list.
                ',
                'city_id' => '3',
                'address' => 'Village, Jl. Jatiluwih Kawan No.Desa, Jatiluwih, Penebel, Kabupaten Tabanan, Bali 82152',
                'latitude' => '-8.370055',
                'longitude' => '115.131372',
                'phone' => '+62 856 9238 1416',
                'category_id' => '5',
                'popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
