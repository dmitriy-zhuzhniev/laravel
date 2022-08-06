<?php

namespace App\Services\Auth;

use App\Components\Store\Repositories\StoreRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BasicUserAuthenticationService implements UserAuthenticationServiceContract
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var Request
     */
    private $request;

    public function __construct(
        UserRepository $userRepository,
        Request $request
    ) {
        $this->userRepository = $userRepository;
        $this->request = $request;
    }

    public function attempt()
    {
        $username = $this->request->header('php-auth-user');
        $password = $this->request->header('php-auth-pw');

//        if (!$token = $this->request->bearerToken()) {
//            throw new \Exception('Token not provided', 403);
//        }
//
//        if (!$user = $this->userRepository->byToken($token)) {
//            throw new \Exception('Token is invalid', 403);
//        }
//
//        $userContext = new UserContext($user->id, $user->email);
//
//        App::instance(UserContext::class, $userContext);
    }
}
