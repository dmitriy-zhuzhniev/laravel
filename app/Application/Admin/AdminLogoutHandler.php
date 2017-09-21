<?php

namespace App\Application\Admin;

use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;
use Illuminate\Auth\AuthManager;

class AdminLogoutHandler implements Handler
{
    /**
     * @var AuthManager
     */
    private $authManager;

    /**
     * SignInHandler constructor.
     *
     * @param AuthManager $authManager
     * @internal param Guard $auth
     */
    public function __construct(AuthManager $authManager)
    {

        $this->authManager = $authManager;
    }

    /**
     * @param SignInAsAdmin|Command $command
     *
     * @return void
     */
    public function handle(Command $command)
    {
        $this->authManager->guard('admin')->logout();
    }
}