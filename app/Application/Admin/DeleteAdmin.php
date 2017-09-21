<?php

namespace App\Application\Admin;

use App\Domain\Admin\AdminId;
use App\Utils\Bus\Command;

class DeleteAdmin implements Command
{
    /**
     * @var AdminId
     */
    private $adminId;

    /**
     * DeleteAdmin constructor.
     *
     * @param AdminId $adminId
     */
    public function __construct(AdminId $adminId)
    {
        $this->adminId = $adminId;
    }

    /**
     * @return AdminId
     */
    public function adminId()
    {
        return $this->adminId;
    }
}