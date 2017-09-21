<?php

namespace App\Application\Admin;

use App\Domain\Admin\Admin;
use App\Domain\Admin\AdminRepository;
use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;

class GetAdminByIdHandler implements Handler
{
    /**
     * @var AdminRepository
     */
    private $adminRepository;

    /**
     * GetAdminByIdHandler constructor.
     *
     * @param AdminRepository $adminRepository
     */
    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * @param GetAdminById|Command $command
     *
     * @return Admin
     */
    public function handle(Command $command)
    {
        return $this->adminRepository->byId($command->id());
    }
}