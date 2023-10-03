<?php

declare(strict_types=1);

namespace App\Builders;

use App\Builders\Data\HouseFilterData;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class HouseBuilder extends Builder
{
    public function getFilteredList(HouseFilterData $filter): Collection
    {
        return $this->when(
            $filter->name,
            fn (Builder $q) => $q->whereRaw('lower(name) like ?', '%' . mb_strtolower($filter->name) . '%')
        )->when(
            $filter->bedrooms,
            fn (Builder $q) => $q->where('bedrooms', $filter->bedrooms)
        )->when(
            $filter->bathrooms,
            fn (Builder $q) => $q->where('bathrooms', $filter->bathrooms)
        )->when(
            $filter->garages,
            fn (Builder $q) => $q->where('garages', $filter->garages)
        )->when(
            $filter->storeys,
            fn (Builder $q) => $q->where('storeys', $filter->storeys)
        )->when(
            $filter->price_from && $filter->price_to,
            fn (Builder $q) => $q->whereBetween('price', [$filter->price_from, $filter->price_to])
        )
            ->get();
    }
}
