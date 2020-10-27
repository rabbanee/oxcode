<?php

namespace App\Search;

use App\Http\Resources\Attraction\ListCollection;
use App\Http\Resources\Attraction\ListResource;
use App\Models\Attraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttractionSearch
{
    public static function apply(Request $filters)
    {
        $attraction = (new Attraction)->newQuery();

        // Search for attractions based on their name.
        if ($filters->has('name')) {
            $name = $filters->input('name');

            $attraction->where('name', 'ilike', "%$name%");
        }

        // Search for attractions based on their city.
        if ($filters->has('city')) {
            $city = $filters->input('city');

            $attraction->whereHas('city', function ($query) use ($city) {
                $query->where('name', 'ilike', "%$city%");
            });
        }

        // Search for attractions based on their hours of operation.
        if ($filters->has('hours_of_operation')) {
            $attraction->whereHas('hoursOfOperation', function ($query) use ($filters) {
                $query->where('from', $filters->input('hours_of_operation')['from'] ?? '');
                $query->where('to', $filters->input('hours_of_operation')['to'] ?? '');
            });
        }

        // Search for attractions based on their categories.
        if ($filters->has('categories') && is_array($filters->input('categories'))) {
            $attraction->whereHas('category', function ($query) use ($filters) {
                $query->where(function ($query) use ($filters) {
                    for ($i = 0; $i < count($filters->input('categories')); $i++) {
                        $query->orWhere('name', 'ilike',  '%' . $filters->input('categories')[$i] . '%');
                    }
                });
            });
        }

        // Attractions Sort By
        if ($filters->has('sort_by')) {
            switch ($filters->input('sort_by')) {
                case 'alphabet':
                    $attraction->orderBy('name');
                    break;

                case 'reviews':
                    $result = collect($attraction->get());
                    $sorted = $result->sortByDesc(function ($attraction, $key) {
                        return $attraction->travelerReviews->avg('rating');
                    });
                    return response()->successWithKey(ListResource::collection($sorted), 'attractions');
                    break;

                case 'distance':
                    $latitude = $filters->input('latitude');
                    $longitude = $filters->input('longitude');

                    $attraction->distance($latitude, $longitude);

                    $attraction->orderBy('distance', 'ASC');
                    break;

                default:
                    $attraction->orderBy('name');
                    break;
            }
        }

        return response()->successWithKey(ListResource::collection($attraction->get()), 'attractions');
    }
}
