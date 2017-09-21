<?php

namespace App\Application\Admin;

use App\Domain\Admin\AdminNotFound;
use App\Domain\Admin\AdminRepository;
use App\Domain\Admin\AdminNotActive;
use App\Infrastructure\PasswordHasher;
use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthManager;

class SignInAsAdminHandler implements Handler
{
    /**
     * @var PasswordHasher
     */
    private $passwordHasher;

    /**
     * @var AuthManager
     */
    private $authManager;

    /**
     * @var AdminRepository
     */
    private $adminRepository;

    /**
     * @param AdminRepository $adminRepository
     * @param PasswordHasher $passwordHasher
     * @param AuthManager $authManager
     */
    public function __construct(
        AdminRepository $adminRepository,
        PasswordHasher $passwordHasher,
        AuthManager $authManager
    ) {
        $this->passwordHasher = $passwordHasher;
        $this->authManager = $authManager;
        $this->adminRepository = $adminRepository;
    }

    /**
     * @param SignInAsAdmin|Command $command
     *
     * @return void
     *
     * @throws AuthorizationException|AdminNotActive
     */
    public function handle(Command $command)
    {
        try {
            $admin = $this->adminRepository->byEmail($command->email());

            if (!$admin || !$this->passwordHasher->check($command->password(), $admin->hashedPassword())) {
                throw new AuthorizationException;
            }

            $this->adminRepository->store($admin);

            $this->authManager->guard('admin')->login($admin);

        } catch (AdminNotFound $e) {
            throw new AuthorizationException;
        }
    }
}