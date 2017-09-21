<?php

namespace App\Domain\Admin;

use App\Domain\Core\EntityNotFound;

final class AdminNotFound extends EntityNotFound
{
    /**
     * @param $id
     *
     * @return AdminNotFound
     */
    public static function fromId($id)
    {
        return new AdminNotFound("Admin with id #{$id} not found.");
    }

    /**
     * @param $email
     *
     * @return AdminNotFound
     */
    public static function fromEmail($email)
    {
        return new AdminNotFound("Admin with email {$email} not found.");
    }
}