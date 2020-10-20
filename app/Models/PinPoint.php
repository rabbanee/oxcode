<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinPoint extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attraction()
    {
        return $this->belongsTo('App\Models\Attraction');
    }

    public function sortBy($latitude, $longitude, $radius)
    {
        return $this->select('pinPoints.*')
            ->selectRaw(
                '( 6371 *
                    acos( cos( radians(?) ) *
                        cos( radians( latitude ) ) *
                        cos( radians( longitude ) - radians(?)) +
                        sin( radians(?) ) *
                        sin( radians( latitude ) )
                    )
                ) AS distance',
                [$latitude, $longitude, $latitude]
            )
            ->havingRaw("distance < ?", [$radius])
            ->orderBy('distance', 'asc');
    }
}
