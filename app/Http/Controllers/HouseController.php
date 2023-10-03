<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Builders\Data\HouseFilterData;
use App\Http\Requests\HouseListRequest;
use App\Http\Resources\HouseResource;
use App\Models\House;
use Illuminate\Http\JsonResponse;

class HouseController extends Controller
{
    public function index(HouseListRequest $request): JsonResponse
    {
        $filter = HouseFilterData::from($request->validated());

        $collection = HouseResource::collection(House::getFilteredList($filter));

        return response()->json($collection);
    }
}
