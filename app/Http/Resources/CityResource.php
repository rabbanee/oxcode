<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
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

            'name' => $this->name,
            'description' => $this->description,
            'popular' => $this->popular,
            'image' => ImageResource::collection($this->image),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
