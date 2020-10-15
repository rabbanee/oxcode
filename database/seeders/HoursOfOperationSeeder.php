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
                'from' => '10.00',
                'to' => '17.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'attraction_id' => '2',
                'from' => '04.00',
                'to' => '24.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
