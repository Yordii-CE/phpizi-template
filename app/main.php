<?php

use App\Controllers\Auth;
use App\Controllers\Api\MyApi;
use App\Controllers\Error;
use Framework\Core\App;

session_start();
App::matchUrl("{Auth}/{index}");
App::controllers([
    Auth::class,
    MyApi::class,
    Error::class
]);
App::startApp();
