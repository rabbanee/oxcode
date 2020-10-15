<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Mountain',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Waterfall',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Museum',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Lake',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Recreation',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Fruits Garden',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Zoo',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Waterpark',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Flowers Garden',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
