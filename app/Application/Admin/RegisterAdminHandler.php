<?php

namespace App\Application\Admin;

use App\Domain\Admin\Admin;
use App\Domain\Admin\AdminAlreadyExist;
use App\Domain\Admin\AdminRepository;
use App\Infrastructure\PasswordHasher;
use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;

class RegisterAdminHandler implements Handler
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
     * RegisterAdminHandler constructor.
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
     * @param RegisterAdmin|Command $command
     *
     * @return Admin
     *
     * @throws AdminAlreadyExist
     */
    public function handle(Command $command)
    {
        if ($this->adminRepository->byEmail($command->email())) {
            throw new AdminAlreadyExist();
        }

        $admin = Admin::register(
            $this->adminRepository->nextId(),
            $command->name(),
            $command->email(),
            $this->passwordHasher->hash($command->password())
        );

        $this->adminRepository->store($admin);

        return $admin;
    }
}