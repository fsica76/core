<?php

namespace App\Http\Repositories\Configs;

use App\Entities\Configs\Roles;
use App\Http\Repositories\BaseRepo;

class RolesRepo extends BaseRepo
{
    public function getModel()
    {
        return new Roles();
    }
}