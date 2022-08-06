<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as Controller;
use App\Services\Auth\UserContext;

class BaseController extends Controller
{
    protected function userContext(): UserContext
    {
        return app(UserContext::class);
    }

    protected function userId(): ?int
    {
        return $this->userContext()->userId ?? null;
    }
}
