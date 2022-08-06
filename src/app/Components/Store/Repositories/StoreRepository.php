<?php

namespace App\Components\Store\Repositories;

use App\Components\Store\StoreEntity;
use App\Models\Store;

class StoreRepository implements StoreRepositoryContract
{
    public function all()
    {
        return Store::all();
    }

    public function byId(int $id): StoreEntity
    {
        $store = Store::find($id);

        return new StoreEntity(
            $store->title,
            $store->address,
            $store->status
        );
    }

    public function modelById(int $id): ?Store
    {
        return Store::find($id);
    }

    public function create(array $data): ?Store
    {
        $store = new Store();

        $store->title = $data['title'];
        $store->address = $data['address'];
        $store->status = $data['status'];

        $store->save();

        return $store;
    }

    public function update(Store $store, array $data): ?Store
    {
        if (isset($data['title'])) {
            $store->title = $data['title'];
        }
        if (isset($data['address'])) {
            $store->address = $data['address'];
        }
        if (isset($data['status'])) {
            $store->status = $data['status'];
        }

        $store->save();

        return $store;
    }

    public function delete(Store $store)
    {
        return $store->delete();
    }
}
