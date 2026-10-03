<?php

namespace App\Http\Resources;

use App\Models\Box;
use App\Models\Entity;
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
            'box' => Box::findOrFail($this->box_id)->toResource(),
            'entity' => Entity::findOrFail($this->entity_id)->toResource()
        ];
    }
}
