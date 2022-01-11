<?php

namespace App\Repositories;

use App\Models\House;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class HouseRepository
{
    private Builder $query;

    public function __construct(House $house)
    {
        $this->query = $house::query();
    }

    public function getList(array $filters = []): Collection
    {
        if (!empty($filters)) {
            $this->setFilters($filters);
        }

        return $this->query->get();
    }

    private function setFilters(array $filters): void
    {
        if (isset($filters['name'])) {
            //don't know which DBMS will u use, implemented both variants
            //'ilike' in postgres is an analogue of 'like' in mysql
            if (env('DB_CONNECTION') === 'pgsql') {
                $this->query->where('name', 'ilike', '%' . $filters['name'] . '%');
            } else {
                $this->query->where('name', 'like', '%' . $filters['name'] . '%');
            }
            unset($filters['name']);
        }

        if (isset($filters['price_from'])) {
            $this->query->where('price', '>=', $filters['price_from']);
            unset($filters['price_from']);
        }

        if (isset($filters['price_to'])) {
            $this->query->where('price', '<=', $filters['price_to']);
            unset($filters['price_to']);
        }

        if (!empty($filters)) {
            $this->query->where($filters);
        }
    }
}
