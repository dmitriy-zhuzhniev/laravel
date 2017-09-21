<?php

namespace App\Application\Admin;

use App\Domain\City\City;
use App\Domain\County\County;
use DateTime;
use App\Domain\Admin\AdminId;
use App\Utils\Bus\Command;

class UpdateAdmin implements Command
{
    /**
     * @var AdminId
     */
    private $adminId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * UpdateAdmin constructor.
     *
     * @param AdminId $adminId
     * @param string $name
     * @param string $email
     * @param bool $isSuperAdmin
     */
    public function __construct(
        AdminId $adminId,
        $name,
        $email
    ) {
        $this->adminId = $adminId;
        $this->name = $name;
        $this->email = $email;
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
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function email()
    {
        return $this->email;
    }
}