<?php

namespace MoySklad\Exceptions;

use \Exception;

class RequestFailedException extends Exception{
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct(
            $message,
            $code,
            $previous);
    }
}