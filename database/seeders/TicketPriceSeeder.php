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
                'weekday' =>  0,
                'weekend' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
