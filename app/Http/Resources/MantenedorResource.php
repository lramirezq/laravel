<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MantenedorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            
            'tipo' => $this->tipo,
            'valor' => $this->valor,
            'misc' => $this->misc,

        ];
    }
}
