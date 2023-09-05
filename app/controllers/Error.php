<?php

namespace App\Controllers;

use Framework\Definitions\Abstracts\Controller;

class Error extends Controller
{
    function index($message)
    {
        return view(false,['message' => $message]);
    }
    function apiNotFound($message)
    {
        return json(['error' => $message]);
    }
}
