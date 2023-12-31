<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "patronymic" => $this->patronymic,
            "speciality" => $this->speciality->name,
            "cabinet" => $this->cabinet->id,
            "phone" => $this->cabinet->phone
        ];
    }
}
