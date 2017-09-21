<?php

namespace App\Domain\Admin;

use Illuminate\Http\Response;
use \Exception;

final class AdminNotActive extends Exception
{
    protected $code = Response::HTTP_FORBIDDEN;
}