<?php

namespace App\Application\Admin;

use App\Domain\Admin\Admin;
use App\Domain\Admin\AdminAlreadyExist;
use App\Domain\Admin\AdminRepository;
use App\Infrastructure\PasswordHasher;
use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;

class UpdateAdminPasswordHandler implements Handler
{
    /**
     * @var AdminRepository
     */
    private $adminRepository;
    /**
     * @var PasswordHasher
     */
    private $passwordHasher;

    /**
     * UpdateAdminPasswordHandler constructor.
     *
     * @param AdminRepository $adminRepository
     * @param PasswordHasher $passwordHasher
     */
    public function __construct(
        AdminRepository $adminRepository,
        PasswordHasher $passwordHasher
    ) {
        $this->adminRepository = $adminRepository;
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * @param UpdateAdminPassword|Command $command
     *
     * @return Admin
     *
     * @throws AdminAlreadyExist
     */
    public function handle(Command $command)
    {
        $admin = $this->adminRepository->byId($command->adminId());

        $admin->setHashedPassword(
            $this->passwordHasher->hash($command->password())
        );

        $this->adminRepository->store($admin);

        return $admin;
    }
}