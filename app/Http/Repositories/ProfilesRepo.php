<?php

namespace App\Http\Repositories;

use App\Users;

class ProfilesRepo extends BaseRepo
{
    public function getModel()
    {
        return new Users();
    }
}