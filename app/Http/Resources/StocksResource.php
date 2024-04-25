<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StocksResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $result =  [
            'stock_id'=>$this->id,
            'quantity'=>$this->quantity,
        ];
        return $this->getAttributes($result);

    }
    protected function getAttributes(array $result):array
    {
        $attributes = json_decode($this->attributes);
        foreach ($attributes as $list)
        {
            $attribute = Attribute::find($list->attribute_id);
            $value = Value::find($list->value_id);
            $result[$attribute->name] = $value->getTranslations('name');
        }
        return $result;
    }
}
