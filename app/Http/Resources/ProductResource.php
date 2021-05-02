<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'product_id' => $this->product_id,
            'code' => $this->code,
            'name' => $this->name,
            'price' => $this->price,
        ];
    }
}