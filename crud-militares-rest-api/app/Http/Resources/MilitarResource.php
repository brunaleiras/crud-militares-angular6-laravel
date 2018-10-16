<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MilitarResource extends JsonResource
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
            'nome' => $this->nome,
            'dataDeNascimento' => $this->dataDeNascimento,
            'servicoObrigatorio' => $this->servicoObrigatorio,
            'patente' => $this->patente,
            'identidade' => $this->identidade
        ];
    }


}
