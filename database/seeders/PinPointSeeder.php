<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pin_points')->insert([
            [
                'attraction_id' => 1,
                'latitude' => '-6.123718',
                'longitude' => '106.833065',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 2,
                'latitude' => '-7.928780',
                'longitude' => '112.943703',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 3,
                'latitude' => '-8.718329',
                'longitude' => '115.168678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 4,
                'latitude' => '-7.607704',
                'longitude' => '110.203741',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 5,
                'latitude' => '-3.069207',
                'longitude' => '119.741419',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 6,
                'latitude' => '2.797289',
                'longitude' => '98.617569',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 7,
                'latitude' => '-0.564079',
                'longitude' => '130.270814',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 8,
                'latitude' => '-8.411083',
                'longitude' => '116.457220',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 9,
                'latitude' => '-4.545389',
                'longitude' => '129.852746',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 10,
                'latitude' => '-8.370055',
                'longitude' => '115.131372',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
