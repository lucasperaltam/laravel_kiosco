<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //Acá va lo que retorna 
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'icono' => $this->icono
        ];
    }
}
