<?php

namespace App\Infrastructure;

interface PasswordHasher
{
    /**
     * @param $password
     * @return string
     */
    public function hash($password);

    /**
     * @param $password
     * @param $hashed
     *
     * @return bool
     */
    public function check($password, $hashed);
}