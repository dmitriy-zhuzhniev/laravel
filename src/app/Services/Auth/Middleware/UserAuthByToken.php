<?php

namespace App\Services\Auth\Middleware;

use App\Services\Auth\HttpUserAuthenticationService;
use Closure;
use Illuminate\Http\Request;

class UserAuthByToken
{
    /**
     * @var \App\Services\Auth\HttpUserAuthenticationService
     */
    private $authenticationService;

    public function __construct(HttpUserAuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    /**
     * @param Request $request
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $this->authenticationService->attempt();
        } catch (\Exception $e) {
            return response(['error' => $e->getMessage()], $e->getCode());
        }

        return $next($request);
    }
}
