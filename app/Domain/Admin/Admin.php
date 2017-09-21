<?php

namespace App\Domain\Admin;

use App\Domain\Admin\AdminId;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use LaravelDoctrine\ORM\Auth\Authenticatable;

class Admin implements AuthenticatableContract
{
    use Authenticatable;

    /**
     * @var int
     */
    private $id;

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
    private $hashedPassword;

    /**
     * @var Carbon
     */
    private $deletedAt;

    /**
     * @param AdminId $id
     * @param string $name
     * @param string $email
     * @param string $hashedPassword
     */
    public function __construct(AdminId $id, $name, $email, $hashedPassword)
    {
        $this->id = $id->getValue();
        $this->name = $name;
        $this->email = $email;
        $this->hashedPassword = $hashedPassword;
    }

    /**
     * @param AdminId $userId
     * @param string $name
     * @param string $email
     * @param string $password
     *
     * @return Admin
     */
    public static function register(AdminId $userId, $name, $email, $password)
    {
        return new Admin($userId, $name, $email, $password);
    }

    /**
     * @return AdminId
     */
    public function id()
    {
        return new AdminId($this->id);
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
     * @return string
     */
    public function hashedPassword()
    {
        return $this->hashedPassword;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->hashedPassword;
    }

    /**
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->hashedPassword;
    }

    /**
     * @return Carbon
     */
    public function deletedAt()
    {
        return $this->deletedAt;
    }

    public function delete()
    {
        $this->deletedAt = new Carbon('now');
    }
}