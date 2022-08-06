<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $casts = [
        'super_admin' => 'bool',
    ];

    public function isSuperAdmin(): bool
    {
        return $this->super_admin;
    }

    public function isActive(): bool
    {
        return $this->status == UserStatus::ACTIVE && $this->emailVerified();
    }

    public function emailVerified(): bool
    {
        return (bool) $this->email_verified;
    }
}
