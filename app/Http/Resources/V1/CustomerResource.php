<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * 
     * The keys are the property names that we want in the JSON response and we just 
     * provide the values for those properties
     */
    public function toArray($request) //Where the request is the Eloquent model
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "type" => $this->type,
            "email" => $this->email,
            "address" => $this->address,
            "city" => $this->city,
            "state" => $this->state,
            "postalCode" => $this->postal_code
        ];
    }
}
