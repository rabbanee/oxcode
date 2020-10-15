<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function attraction()
    {
        return $this->hasMany('App\Models\Attraction');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
