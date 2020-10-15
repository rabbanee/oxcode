<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function popular()
    {
        $cities = City::where('popular', true)->get();
        return CityResource::collection($cities);
    }
}
