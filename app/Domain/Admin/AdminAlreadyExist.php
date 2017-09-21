<?php

namespace App\Domain\Admin;

use Illuminate\Http\Response;
use \Exception;

final class AdminAlreadyExist extends Exception
{
    protected $code = Response::HTTP_NOT_ACCEPTABLE;
}