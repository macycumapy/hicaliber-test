<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseListRequest extends FormRequest
{
    public function rules(): array
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
