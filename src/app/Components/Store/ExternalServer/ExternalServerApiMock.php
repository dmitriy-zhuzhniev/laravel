<?php

namespace App\Components\Store\ExternalServer;

class ExternalServerApiMock
{
    public function getStore(int $id): object
    {
        return (object) [
            'status' => 'success',
            'data' => [
                'id' => $id,
                'title' => 'Silpo',
                'address' => 'Kyiv',
                'status' => 1,
            ],
        ];
    }
}
