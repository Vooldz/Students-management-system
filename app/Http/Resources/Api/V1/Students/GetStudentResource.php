<?php

namespace App\Http\Resources\Api\V1\Students;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetStudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'birthday' => $this->birthday,
            'phone_number' => $this->phone_number,
            'attendance' => $this->attendance,
            'location' => $this->location,
        ];
    }
}
