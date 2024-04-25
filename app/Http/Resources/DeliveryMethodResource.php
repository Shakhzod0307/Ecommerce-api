<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryMethodResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->getTranslations('name'),
            'estimated_time'=>$this->getTranslations('estimated_time'),
            'price'=>$this->price,
        ];
    }
}
