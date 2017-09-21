<?php

namespace App\Application\Admin;

use App\Domain\Admin\AdminId;
use App\Utils\Bus\Command;

class UpdateAdminPassword implements Command
{
    /**
     * @var AdminId
     */
    private $adminId;

    /**
     * @var string
     */
    private $password;

    /**
     * UpdateAdminPassword constructor.
     *
     * @param AdminId $adminId
     * @param string $password
     */
    public function __construct(AdminId $adminId, $password)
    {
        $this->adminId = $adminId;
        $this->password = $password;
    }

    /**
     * @return AdminId
     */
    public function adminId()
    {
        return $this->adminId;
    }

    /**
     * @return string
     */
    public function password()
    {
        return $this->password;
    }
}