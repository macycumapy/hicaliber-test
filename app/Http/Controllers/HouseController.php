<?php

namespace App\Http\Controllers;

use App\Http\Requests\HousesListRequest;
use App\Http\Resources\HouseResource;
use App\Repositories\HouseRepository;
use Illuminate\Http\JsonResponse;

class HouseController extends Controller
{
    public function __construct(private HouseRepository $repository)
    {
    }

    public function getList(HousesListRequest $request): JsonResponse
    {
        $filters = $request->validated();
        $collection = HouseResource::collection($this->repository->getList($filters));

        return response()->json($collection);
    }
}
