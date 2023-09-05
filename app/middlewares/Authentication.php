<?php

namespace App\Middlewares;

use Framework\Definitions\Interfaces\IMiddleware;

class Authentication implements IMiddleware
{
    public function handle($body)
    {
        $body->user .= " Cool";
    }
}
