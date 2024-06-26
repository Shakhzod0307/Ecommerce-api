<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'delivery_method_id'=>'required|numeric',
            'address_id'=>'required|numeric',
            'product.*.product_id'=>'required',
            'product.*.quantity'=>'required',
            'product.*.stock_id'=>'nullable|numeric',
            'comment'=>'nullable|max:300',
        ];
    }
}
