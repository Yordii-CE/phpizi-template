<?php

namespace App\Controllers;

use Framework\Definitions\Abstracts\Controller;
use Framework\Definitions\Annotations\Request\Middlewares;
use Framework\Request\Body;
use App\Middlewares\Authentication;

use App\Models\Auth as ModelAuth;

class Auth extends Controller
{
   public $modelAuth;

   function __construct(ModelAuth $modelAuth)
   {
      $this->modelAuth = $modelAuth;
   }

   function index()
   {
      return view(false, ["title" => $this->modelAuth->getTitle()]);
   }
   function register()
   {
      return view(false);;
   }
   function reset()
   {
      return view(false);
   }

   #[Middlewares([Authentication::class])]
   function login(Body $body)
   {
      $user = $body->user;
      echo "Hi user: " . $user;
   }
}
