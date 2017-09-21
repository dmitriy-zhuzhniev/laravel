<?php

namespace App\Application\Admin;

use App\Domain\Admin\Admin;
use App\Domain\Admin\AdminAlreadyExist;
use App\Domain\Admin\AdminRepository;
use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;

class UpdateAdminHandler implements Handler
{
    /**
     * @var AdminRepository
     */
    private $adminRepository;

    /**
     * UpdateAdminHandler constructor.
     *
     * @param AdminRepository $adminRepository
     */
    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * @param UpdateAdmin|Command $command
     *
     * @return Admin
     *
     * @throws AdminAlreadyExist
     */
    public function handle(Command $command)
    {
        $admin = $this->adminRepository->byId($command->adminId());

        $admin->setName($command->name());
        $admin->setEmail($command->email());

        $this->adminRepository->store($admin);

        return $admin;
    }
}