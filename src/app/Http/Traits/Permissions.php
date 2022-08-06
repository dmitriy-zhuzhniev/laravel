<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait Permissions
{
    protected function isAdmin()
    {
        return Auth::guard('admin')->user();
    }
}
