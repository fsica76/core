<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Repositories\UsersRepo as Repo;



class ConfigsController extends Controller
{
    private $route;
    private $repo;
    private $data;

    public function __construct(Route $route, Repo $repo)
    {
        $this->route = $route;
        $this->repo = $repo;
    }

    public function index(){

        $this->data['users'] = $this->repo->getAll();


        return view('configs.users.index')->with($this->data);
    }

    public function create(){

        return view('configs.users.form');
    }

    public function store(){

        return redirect()->route('configs.users.index');
    }

    public function edit(){
        $id = $this->route->id;

        $this->data['model']= $this->repo->find($id);

        return view('configs.users.form')->with($this->data);
    }
}
