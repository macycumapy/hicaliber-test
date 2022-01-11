<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HousesListRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['sometimes', 'string'],
            'price_from' => ['sometimes', 'numeric'],
            'price_to' => ['sometimes', 'numeric'],
            'bedrooms' => ['sometimes', 'integer'],
            'bathrooms' => ['sometimes', 'integer'],
            'storeys' => ['sometimes', 'integer'],
            'garages' => ['sometimes', 'integer'],
        ];
    }
}
