<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Attraction\ListResource;
use App\Models\Attraction;
use App\Http\Controllers\Controller;
use App\Http\Resources\Attraction\DetailResource;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = Attraction::paginate(12);
        return ListResource::collection($attractions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
    {
        // return $attraction->pinPoint;
        return new DetailResource($attraction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attraction $attraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        //
    }

    public function popular()
    {
        $attractions = Attraction::where('popular', true)->get();

        return ListResource::collection($attractions);
    }

    public function search(Request $request, Attraction $attraction)
    {
        $attraction = $attraction->newQuery();
        $rules = [
            'categories' => 'array',
            'hours_of_operation' => 'array',
            'longitude' => 'required_if:sort_by,distance',
            'latitude' => 'required_if:sort_by,distance',
        ];
        // Attractions Sort By 
        if ($request->has('sort_by')) {
            switch ($request->input('sort_by')) {
                case 'alphabet':
                    $attraction->orderBy('name');
                    break;

                case 'reviews':
                    $attraction->orderBy('rating', 'desc');
                    break;

                case 'distance':
                    $latitude = $request->input('latitude');
                    $longitude = $request->input('longitude');

                    $attraction = Attraction::distance($latitude, $longitude);

                    $attraction->orderBy('distance', 'DESC');
                    break;

                default:
                    $attraction->orderBy('name');
                    break;
            }
        }

        // Search for attractions based on their name.
        if ($request->has('name')) {
            $name = $request->input('name');

            $attraction->where('name', 'ilike', "%$name%");
        }

        // Search for attractions based on their city.
        if ($request->has('city')) {
            $city = $request->input('city');

            $attraction->whereHas('city', function ($query) use ($city) {
                $query->where('name', 'ilike', "%$city%");
            });
        }

        // Search for attractions based on their hours of operation.
        if ($request->has('hours_of_operation')) {
            $attraction->whereHas('hoursOfOperation', function ($query) use ($request) {
                $query->where('from', $request->input('hours_of_operation')['from'] ?? '');
                $query->where('to', $request->input('hours_of_operation')['to'] ?? '');
            });
        }

        // Search for attractions based on their categories.
        if ($request->has('categories') && is_array($request->input('categories'))) {
            $attraction->whereHas('category', function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    for ($i = 0; $i < count($request->input('categories')); $i++) {
                        $query->orWhere('name', 'ilike',  '%' . $request->input('categories')[$i] . '%');
                    }
                });
            });
        }

        $customMessages = [
            'hours_of_operation.array' => 'The :attribute field must be an object.'
        ];
        $request->validate($rules, $customMessages);
        return $attraction->get();
    }
}
