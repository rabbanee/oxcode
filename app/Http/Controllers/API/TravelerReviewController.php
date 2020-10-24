<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTravelerReview;
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
        try {
            $input = $request->only(['review', 'rating', 'attraction_id']);
            if (TravelerReview::where('user_id', $request->user()->id)->where('attraction_id', $request->attraction_id)->exists()) {
                return response()->json([
                    'error' => true,
                    'message' => 'User has reviewed'
                ], 422);
            }
            $query = TravelerReview::create(array_merge($input, ['user_id' => $request->user()->id]));
            return $query;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return TravelerReview::findOrFail($id);
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
