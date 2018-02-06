<?php

namespace app\http\Controllers\MyProject;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\MyProject\MyProjectRepo as Repo;
use Illuminate\Routing\Route;

class MyProjectController extends BaseController
{
    protected $repo;
    protected $module;
    protected $route;

    public function __construct( Repo $repo, Route $route)
    {
        $this->repo = $repo;
        $this->route = $route;
        $this->confFile = 'myProject.myProject';
        $this->data['confFile'] = 'myProject.myProject';

    }
}
