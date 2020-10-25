<?php

namespace App\Http\Resources\Attraction;

use App\Http\Resources\ImageResource;
use App\Http\Resources\TravelerReview\TravelerReviewResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $images = ImageResource::collection($this->images->where('thumbnail', true));
        $reviews = TravelerReviewResource::collection($this->travelerReviews);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'city' => $this->city->name,
            'images' => $images,
            'rating' => $reviews->avg('rating'),
            'popular' => $this->popular,
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->updated_at->diffForHumans(),
        ];
    }
}
