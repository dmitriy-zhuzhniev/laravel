<?php

namespace App\Components\Store\Exceptions;

class ExternalServerApiException extends \RuntimeException
{
    public static function unexpectedResponse($response)
    {
        return new self("Unexpected external server response: " . $response);
    }
}
