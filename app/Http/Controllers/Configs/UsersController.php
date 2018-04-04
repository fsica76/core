<?php

namespace app\http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\UsersRepo as Repo;
use Illuminate\Routing\Route;

class UsersController extends Controller
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $confFile = 'configs.users';
        // nombre de archivo de configuracion

        $this->confFile = $confFile;
        $this->data['confFile'] = $confFile;

    }
}
