<?php

namespace App\Domain\Admin;

interface AdminRepository
{
    /**
     * @return AdminId
     */
    public function nextId();

    /**
     * @param AdminFilter $filter
     *
     * @return Admin[]
     */
    public function all(AdminFilter $filter);

    /**
     * @param string $email
     *
     * @return Admin|null
     */
    public function byEmail($email);

    /**
     * @param AdminId $adminId
     *
     * @return Admin|null
     */
    public function byId(AdminId $adminId);

    /**
     * @param Admin $admin
     */
    public function store(Admin $admin);

    /**
     * @param Admin $admin
     */
    public function delete(Admin $admin);
}