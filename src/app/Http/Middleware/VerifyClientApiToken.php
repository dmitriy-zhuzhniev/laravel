<?php

namespace App\Http\Middleware;

use App\Repositories\ClientRepository;
use Closure;
use Illuminate\Http\Request;

class VerifyClientApiToken
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $apiToken = $request->header('api-token');

        if (!$apiToken || !$this->clientRepository->byApiToken($apiToken)) {
            return response()->json(['error' => 'Client is not verified'], 403);
        }

        return $next($request);
    }
}
