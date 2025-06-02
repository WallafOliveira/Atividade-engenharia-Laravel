<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AutorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'dt_nasc'=> $this->dt_nasc,
            'biografia'=> $this->biografia,
            'autores'=> AutorResource::collection($this->whenLoaded('autores')) 
        ];
    }
}
