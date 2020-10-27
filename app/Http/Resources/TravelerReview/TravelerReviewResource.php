<?php

namespace App\Http\Resources\TravelerReview;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TravelerReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'review' => $this->review,
            'rating' => $this->rating,
            'user' => new UserResource($this->user),
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
