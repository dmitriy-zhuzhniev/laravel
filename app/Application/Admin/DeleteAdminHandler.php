<?php

namespace App\Application\Admin;

use App\Domain\Admin\AdminRepository;
use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;

class DeleteAdminHandler implements Handler
{
    /**
     * @var AdminRepository
     */
    private $adminRepository;

    /**
     * DeleteAdminHandler constructor.
     *
     * @param AdminRepository $adminRepository
     */
    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * @param DeleteAdmin|Command $command
     *
     * @return void
     */
    public function handle(Command $command)
    {
        $admin = $this->adminRepository->byId($command->adminId());
        $this->adminRepository->delete($admin);
    }
}