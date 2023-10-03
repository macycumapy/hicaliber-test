<?php

declare(strict_types=1);

namespace App\Builders\Data;

use Spatie\LaravelData\Data;

class HouseFilterData extends Data
{
    public function __construct(
        public ?string $name = null,
        public ?int $bedrooms = null,
        public ?int $bathrooms = null,
        public ?int $storeys = null,
        public ?int $garages = null,
        public ?float $price_from = null,
        public ?float $price_to = null,
    ) {
    }
}
