<?php

namespace App\Middlewares;

use Framework\Definitions\Interfaces\IMiddleware;
use Framework\Request\Body;

class Authentication implements IMiddleware
{
    public function handle(Body $body)
    {
        $body->user .= " Cool";
    }
}
