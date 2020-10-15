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
        ]);
    }
}
