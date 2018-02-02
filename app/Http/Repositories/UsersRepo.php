<?php
namespace App\Http\Repositories;

use App\Users;

class UsersRepo extends BaseRepo
{
    public function getModel()
    {
        return new Users();
    }

}