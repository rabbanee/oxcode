<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoursOfOperation extends Model
{
    use HasFactory;

    protected $protected = ['id'];

    public function attraction()
    {
        $this->belongsTo('App\Models\Attraction', 'attraction_id');
    }
}
