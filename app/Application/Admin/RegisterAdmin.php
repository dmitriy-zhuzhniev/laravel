<?php

namespace App\Application\Admin;

use App\Utils\Bus\Command;

class RegisterAdmin implements Command
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * UpdateAdmin constructor.
     *
     * @param string $name
     * @param string $email
     * @param $password
     * @param bool $isSuperAdmin
     */
    public function __construct(
        $name, $email, $password, $isSuperAdmin = false
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
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

    /**
     * @return mixed
     */
    public function password()
    {
        return $this->password;
    }
}