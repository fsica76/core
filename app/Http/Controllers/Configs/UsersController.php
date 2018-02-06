<?php

namespace app\http\Controllers\Configs;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\UsersRepo as Repo;
use Illuminate\Routing\Route;

class UsersController extends BaseController
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $this->confFile = 'configs.users';
    }
}
