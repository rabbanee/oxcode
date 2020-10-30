<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;

class Attraction extends Model
{
    use Geographical;
    use HasFactory;

    protected $protected = ['id'];

    protected $perPage = 12;

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function hoursOfOperation()
    {
        return $this->hasOne('App\Models\HoursOfOperation');
    }

    public function pinPoint()
    {
        return $this->hasOne('App\Models\PinPoint');
    }

    public function ticketPrice()
    {
        return $this->hasOne('App\Models\TicketPrice');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }

    public function travelerReviews()
    {
        return $this->hasMany('App\Models\TravelerReview');
    }
}
