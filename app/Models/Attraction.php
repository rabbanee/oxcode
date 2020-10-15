<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $protected = ['id'];

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function hoursOfOperation()
    {
        return $this->hasOne('App\Models\HoursOfOperation');
    }

    public function pinPoint()
    {
        return $this->hasOne('App\Models\PinPoint');
    }

    // public function image()
    // {
    //     return $this->hasMany('App\Models\Image', 'foreign_id');
    // }

    public function ticketPrice()
    {
        return $this->hasOne('App\Models\TicketPrice');
    }

    public function image()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
