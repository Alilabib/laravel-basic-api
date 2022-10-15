<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'desc'=>$this->desc,
            'price'=>$this->price,
            'created_at'=>$this->created_at->format('Y-d-m H:i'),
            'category'=>new CategoryResource($this->category),
        ];
    }
}
