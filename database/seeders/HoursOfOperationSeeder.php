<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoursOfOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hours_of_operations')->insert([
            [
                'attraction_id' => '1',
                'from' => '10:00',
                'to' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '2',
                'from' => '04:00',
                'to' => '00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '3',
                'from' => '00:00',
                'to' => '00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '4',
                'from' => '6:00',
                'to' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '5',
                'from' => '00:00',
                'to' => '00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '6',
                'from' => '00:00',
                'to' => '00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '7',
                'from' => '10:00',
                'to' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '8',
                'from' => '00:00',
                'to' => '00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '9',
                'from' => '00:00',
                'to' => '23:59',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '10',
                'from' => '07:00',
                'to' => '17:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
