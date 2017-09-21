<?php

namespace App\Application\Admin;

use App\Domain\Admin\Admin;
use App\Domain\Admin\AdminRepository;
use App\Utils\Bus\Command;
use App\Utils\Bus\Handler;

class GetAdminListHandler implements Handler
{
    /**
     * @var AdminRepository
     */
    private $adminRepository;

    /**
     * GetAdminListHandler constructor.
     *
     * @param AdminRepository $adminRepository
     */
    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * @param GetAdminList|Command $command
     *
     * @return Admin[]
     */
    public function handle(Command $command)
    {
        return $this->adminRepository->all($command->filter(), $command->pagination());
    }
}