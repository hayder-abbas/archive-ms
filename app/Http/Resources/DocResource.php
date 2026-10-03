<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'subject' => $this->subject,
            'date' => $this->date,
            'type' => $this->type,
            'security' => $this->security,
            'description' =>  $this->description,
            'box' => BoxResource::make($this->whenLoaded('box')),
            'entity' => EntityResource::make($this->whenLoaded('entity'))
        ];
    }
}
