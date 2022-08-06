<?php

namespace App\Components\Store\ExternalServer;

class ExternalServerService
{
    public function getStore(int $id): ExternalServerStoreResponse
    {
        return new ExternalServerStoreResponse($this->api()->getStore($id));
    }

    private function api()
    {
        return env('MOCK_EXTERNAL_STORE_SERVER')
            ? app(ExternalServerApiMock::class)
            : app(ExternalServerApi::class);
    }
}
