<?php

namespace App\Search;

use App\Http\Resources\Attraction\ListResource;
use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionSearch
{
  public static function apply(Request $filters)
  {
    $attraction = (new Attraction)->newQuery();

    $rules = [
      'categories' => 'array',
      'hours_of_operation' => 'array',
      'longitude' => 'required_if:sort_by,distance',
      'latitude' => 'required_if:sort_by,distance',
    ];

    // Attractions Sort By 
    if ($filters->has('sort_by')) {
      switch ($filters->input('sort_by')) {
        case 'alphabet':
          $attraction->orderBy('name');
          break;

        case 'reviews':
          $attraction->orderBy('rating', 'desc');
          break;

        case 'distance':
          $latitude = $filters->input('latitude');
          $longitude = $filters->input('longitude');

          $attraction = Attraction::distance($latitude, $longitude);

          $attraction->orderBy('distance', 'DESC');
          break;

        default:
          $attraction->orderBy('name');
          break;
      }
    }

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

    $customMessages = [
      'hours_of_operation.array' => 'The :attribute field must be an object.'
    ];

    $filters->validate($rules, $customMessages);
    return ListResource::collection($attraction->get());
  }
}
