<?php

namespace App\Controllers\Api;

use Framework\Definitions\Abstracts\Api;
use Framework\Definitions\Annotations\HttpMethods\Get;
use App\Models\MyApi as MyApiModel;

class MyApi extends Api
{
  public $model;
  function __construct(MyApiModel $model)
  {
    $this->model = $model;
  }
  #[Get]
  function index()
  {
    return json($this->model->getAll());
  }
}
