<?php

namespace App\Http\Repositories\MyProject;


use App\Entities\MyProject\MyProject;
use App\Http\Repositories\BaseRepo;

class MyProjectRepo extends BaseRepo
{
    public function getModel()
    {
        return new MyProject();
    }
}