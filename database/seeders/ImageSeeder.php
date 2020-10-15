<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'url' => 'attractions/1.jpg',
                'imageable_id' => '1',
                'imageable_type' => 'App\Models\Attraction',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'attractions/2.png',
                'imageable_id' => '1',
                'imageable_type' => 'App\Models\Attraction',
                'thumbnail' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'attractions/dufan.jpg',
                'imageable_id' => '1',
                'imageable_type' => 'App\Models\Attraction',
                'thumbnail' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'attractions/bromo.jpg',
                'imageable_id' => '2',
                'imageable_type' => 'App\Models\Attraction',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'cities/jakarta.jpg',
                'imageable_id' => '1',
                'imageable_type' => 'App\Models\City',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/mountain.png',
                'imageable_id' => '1',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/waterfall.png',
                'imageable_id' => '2',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/museum.png',
                'imageable_id' => '3',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/lake.png',
                'imageable_id' => '4',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/recreation.png',
                'imageable_id' => '5',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/fruits_garden.png',
                'imageable_id' => '6',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/zoo.png',
                'imageable_id' => '7',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/waterpark.png',
                'imageable_id' => '8',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'url' => 'categories/flowers_garden.png',
                'imageable_id' => '9',
                'imageable_type' => 'App\Models\Category',
                'thumbnail' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
