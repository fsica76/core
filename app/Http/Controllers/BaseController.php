<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;
use Illuminate\Http\Request;


class BaseController extends Controller
{
    protected $data;
    protected $request;

    public function index()
    {
        $this->data['datas'] = $this->repo->getAll();
        return view(config($this->confFile.".viewIndex"))->with($this->data);
    }

    public function create()
    {
        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function store(Request $request)
    {
        $this->repo->create($request->all());

        return redirect()->route(config($this->confFile.".viewIndex"));
    }

    public function edit()
    {
        $this->data['model']= $this->repo->find($this->route->id);

        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function update(Request $request)
    {
        $model = $this->repo->find($this->route->id);

        $model->fill($request->all());
        $model->save();

        return redirect()->route(config($this->confFile.".viewIndex"));
    }

    public function destroy()
    {
        $model = $this->repo->find($this->route->id);

        $model->delete();

        return redirect()->route(config($this->confFile.".viewIndex"));
    }
}
