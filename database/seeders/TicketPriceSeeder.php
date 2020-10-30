<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_prices')->insert([
            [
                'attraction_id' => 1,
                'weekday' => 200000,
                'weekend' => 295000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 2,
                'weekday' =>  220000,
                'weekend' => 320000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 3,
                'weekday' => 0,
                'weekend' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 4,
                'weekday' =>  339500,
                'weekend' => 339500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 5,
                'weekday' =>  10000,
                'weekend' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 6,
                'weekday' =>  0,
                'weekend' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 7,
                'weekday' =>  1000000,
                'weekend' => 1000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 8,
                'weekday' =>  150000,
                'weekend' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 9,
                'weekday' =>  0,
                'weekend' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 10,
                'weekday' =>  40000,
                'weekend' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 11,
                'weekday' =>  50000,
                'weekend' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 12,
                'weekday' =>  25000,
                'weekend' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 13,
                'weekday' =>  50000,
                'weekend' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 14,
                'weekday' =>  160000,
                'weekend' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => 15,
                'weekday' =>  18500,
                'weekend' => 18500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
