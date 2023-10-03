<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\HouseBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property float $price
 * @property int $bedrooms
 * @property int $bathrooms
 * @property int $storeys
 * @property int $garages
 * @mixin HouseBuilder
 */
class House extends Model
{
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

    public function newEloquentBuilder($query): HouseBuilder
    {
        return new HouseBuilder($query);
    }
}
