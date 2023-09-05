<?php

use Framework\Utils\Url\DefaultUrl;

session_start();
DefaultUrl::$pattern = "{Auth}/{index}";
