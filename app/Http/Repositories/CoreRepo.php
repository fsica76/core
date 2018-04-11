<?php

namespace App\Http\Repositories;

use App\Entities\Core;
use App\Http\Repositories\BaseRepo;

class CoreRepo extends BaseRepo
{
    public function getModel()
    {
        return new Core();
    }

    public function searchByUsername($username)
    {
        return $this->model
            ->where('name', $username)
            ->first();
    }
}