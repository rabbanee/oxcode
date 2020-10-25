<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Attraction\ListResource;
use App\Models\Attraction;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchAttraction;
use App\Http\Resources\Attraction\DetailResource;
use App\Search\AttractionSearch;
use Illuminate\Http\Request;

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
        return response()->successWithKey(ListResource::collection($attractions), 'attractions');
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
        $attraction = new DetailResource($attraction);
        return response()->successWithKey($attraction, 'attraction');
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

        return response()->successWithKey(ListResource::collection($attractions), 'attractions');
    }

    public function search(SearchAttraction $request)
    {
        return AttractionSearch::apply($request);
    }
}
