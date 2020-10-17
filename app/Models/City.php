<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $protected = ['id'];

    public function image()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }

    public function attraction()
    {
        return $this->hasMany('App\Models\Attraction');
    }
}
