<?php

namespace App\Http\Controllers\Api;

use App\Components\Store\Repositories\StoreRepository;
use App\Components\Store\Repositories\StoreRepositoryContract;
use App\Http\Resources\StoreResource;
use Illuminate\Http\Request;

class StoreApiController extends BaseController
{
    public function getStores(StoreRepositoryContract $repository)
    {
        return StoreResource::collection($repository->all());
    }

    public function getStore(int $id, StoreRepository $repository)
    {
        if (!$store = $repository->modelById($id)) {
            abort(404);
        }

        return new StoreResource($store);
    }

    public function postStores(Request $request, StoreRepository $repository)
    {
        $data = $request->validate(
            [
                'title' => 'required',
                'address' => 'required',
                'status' => 'required',
            ]
        );

        $store = $repository->create($data);

        return new StoreResource($store);
    }

    public function putStore(int $id, Request $request, StoreRepository $repository)
    {
        $data = $request->validate(
            [
                'title' => 'nullable',
                'address' => 'nullable',
                'status' => 'nullable',
            ]
        );

        if (!$store = $repository->modelById($id)) {
            abort(404);
        }

        $store = $repository->update($store, $data);

        return new StoreResource($store);
    }

    public function deleteStore(int $id, StoreRepository $repository)
    {
        if (!$store = $repository->modelById($id)) {
            abort(404);
        }

        $repository->delete($store);

        return response([]);
    }
}
