<?php

namespace App\Application\Admin;

use App\Domain\Admin\AdminId;
use App\Utils\Bus\Command;

class GetAdminById implements Command
{
    /**
     * @var AdminId
     */
    private $id;

    /**
     * GetAdminById constructor.
     *
     * @param AdminId $id
     */
    public function __construct(AdminId $id) {
        $this->id = $id;
    }

    /**
     * @return AdminId
     */
    public function id()
    {
        return $this->id;
    }
}