<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property float $price
 * @property int $bedrooms
 * @property int $bathrooms
 * @property int $storeys
 * @property int $garages
 */
class House extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $casts = [
      'price' => 'float',
    ];

    public $fillable = [
      'name',
      'price',
      'bedrooms',
      'bathrooms',
      'storeys',
      'garages',
    ];
}
