<?php

namespace App\Http\Resources\Attraction;

use App\Http\Resources\HoursOfOperationResource;
use App\Http\Resources\ImageResource;
use App\Http\Resources\PinPointResource;
use App\Http\Resources\TicketPriceResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'city' => $this->city->name,
            'images' => ImageResource::collection($this->image),
            'rating' => $this->rating,
            'phone' => $this->phone,
            'ticket_price' => new TicketPriceResource($this->ticketPrice),
            'address' => $this->address,
            'pin_point' => [
                "latitude" => $this->latitude,
                "longitude" => $this->longitude,
            ],
            'hours_of_operation' => new HoursOfOperationResource($this->hoursOfOperation),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
