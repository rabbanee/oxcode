<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traveler_reviews')->insert([
            [
                'review' => 'This place is nice with a lot of Aqua activities..Therez Segarra..A rest that has a very nice, romantic atmosphere..!',
                'rating' => 3,
                'user_id' => rand(1, 12),
                'attraction_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Ancol is a very nice attraction for Jakarta people, has everything really for the whole family. It is now also filled with wonderful restaurants, you can easily spend a whole day here and experience many things. The entrance ticket is well worth it.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'It was nice landscape but poor accommodation. No coffee shop, no shop. You should not spend over night there.',
                'rating' => 3,
                'user_id' => rand(1, 12),
                'attraction_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'The sunrise was totally overrated. There was an insane crowd at the viewpoint... and as I went in February, it was clouded, foggy, and there was no great sunrise to see.',
                'rating' => 3,
                'user_id' => rand(1, 12),
                'attraction_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Went to watch the sunrise and it was cold. You need a good jacket and scarf. After sunrise viewing, we took the jeep that brought us to the jeep lot. From there, you walk about 15-20 mins to reach the staircase point towards the summit. It\'s very doable but make sure you bring a mask and hat/cap/scarf because once the sand blows, it can mess you up a little.',
                'rating' => 4,
                'user_id' => rand(1, 12),
                'attraction_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'not so many people were around, guess due to pandemi. beach is never been this clean before. there\'s a good thing about the pandemic after all.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Kuta Beach is very hectic. I used to have a long stroll here. Nice for people watching.',
                'rating' => 4,
                'user_id' => rand(1, 12),
                'attraction_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'As a result of tourism, the beach is a rubbish tip each morning. Getting worse every year and have decided not the frequent Kuta anymore because of this. Better places to holiday that care for their environment more.',
                'rating' => 3,
                'user_id' => rand(1, 12),
                'attraction_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Its like indonesian pyramid.... Biggest budhist temple.... Climbed up to the top would be good for exercize, and a better view as well....',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'I had wanted to visit since I was a teenager. Maybe I had built up my expectations too much. The size of the temple seemed small. Maybe my visit to Angkor in Cambodia before this influences my opinion.',
                'rating' => 3,
                'user_id' => rand(1, 12),
                'attraction_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Toraja is situated in the north of makassar the capital of south sulawesi and has a culture that is still unique to be seen until nowdays also has beautiful natural scenery.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Indonesia is welknown with its diversity. One of superb site that you may visit is Toraja in South Sulawesi. Toraja is not only welknown with its coffee production, Toraja is also welknown for its Rambusolo ceremony to honor the respected person who died. The dead body after somedays or months to be put in a special house, the body later on will be put in the slope of the mountain.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'We have seen huge funeral ceremony in this region. The culture is still well preserved.we recommend this place.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'It is a great place to escape and just enjoy the view of the lake. very windy and chill at night. All of the locals here are very friendly. No problems whatsoeveer.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Toba is spectacularly beautiful. A huge lake surrounded by hills and mountains that descend sharply to form the lake. There is not a great deal to do there beside go for walks or sit taking in the great views. But it is very relaxing.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'this area is an absolute beauty. The lake and its surrounding hills are beautiful just to watch. What is lacking is the infrastructure to make this place a real tourist spot. Also, cleanliness must be improved.',
                'rating' => 3,
                'user_id' => rand(1, 12),
                'attraction_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Pianemo Islands are well worth a visit when you are going to Raja Ampat. I recommend to arrange snorkeling or scuba diving there.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'You have to visit on a good day to appreciate the views. Its getting touristy now but still gorgeous and worth a visit.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'big municipal staircases up the peaks and accumulating rubbish are wrecking Pianemo/Fam. Someone needs to take the situation in hand.',
                'rating' => 3,
                'user_id' => rand(1, 12),
                'attraction_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'The trail was sandy and dry. It was quiet tough to walk on the sandy trail but the view was so much worth it. However, there were many trash on the way. Hopefully the authorities will do something about it as the trash may harm the nature and pollute the beauty of this wonderful mountain.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'Did the 2d 1n as the top is currently closed. The walk is reasonably nice and the views at the top are lovely. More difficult than many people realise. Take a few snickers with you.',
                'rating' => 4,
                'user_id' => rand(1, 12),
                'attraction_id' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'I love this island. When u open the door and you see a blue ocean. Saw Flying Ray flipping on the air. Certainly, a good place to snorkel and the view itself is beautiful. The island itself is a wall (drop-down wall which I am not really sure the depth. But It just so beautifulllll.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'While you can stay overnight at Hatta, we just went for a day trip and had a divine time. Superb snorkelling, fresh coconuts, and lots of collecting hermit crabs. Loads of fun. We saw turtles and dolphins, great coral gardens and plenty of fish.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'This is by far one the remotest locations to get, basic accommodations, virtually no electricity or internet, but superb snorkelling right of the beach.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'There were only a view people when we visited this place. So we could really enjoy the green view without being disturbed by number of visitors. This UNESCO World Heritage site was unique. It shows the Balinese traditional agricultural system that applies multilevel irrigation for rice fields that we couldn\'t find at the other place.',
                'rating' => 4,
                'user_id' => rand(1, 12),
                'attraction_id' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'review' => 'This is a beautiful UNESCO heritage site with rice fields at different levels all around you. The visual is magnificent.',
                'rating' => 5,
                'user_id' => rand(1, 12),
                'attraction_id' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
