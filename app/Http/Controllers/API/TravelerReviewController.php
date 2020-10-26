<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTravelerReview;
use App\Http\Resources\TravelerReview\TravelerReviewResource;
use App\Models\TravelerReview;
use Illuminate\Http\Request;

class TravelerReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreTravelerReview  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTravelerReview $request)
    {
        $input = $request->only(['review', 'rating', 'attraction_id']);

        if (TravelerReview::where('user_id', $request->user()->id)->where('attraction_id', $request->attraction_id)->exists()) {
            return response()->error('User has reviewed', 422);
        }

        try {
            TravelerReview::create(array_merge($input, ['user_id' => $request->user()->id]));
        } catch (\Throwable $th) {
            return response()->error('Failed to add review');
        }

        return response()->successWithMessage('Success to add review');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $review = TravelerReview::findOrFail($id);
        } catch (\Throwable $th) {
            return response()->error('Traveler Review is not found');
        }
        return response()->successWithKey(new TravelerReviewResource($review), 'traveler_review');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
