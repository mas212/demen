<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropinsiResource extends JsonResource
{
    public function authorize(){
        return true;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function rules()
    {
        return [
            'nama'      => 'required'
        ];
    }
}
