<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $this->data['datas'] = $this->repo->getAllPaginated(config($this->confFile.".paginate"));
        return view(config($this->confFile.".viewIndex"))->with($this->data);
    }

    public function create()
    {
        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function store(Request $request)
    {
        //validacion del formulario
        $request->validate(config($this->confFile.'.validationsStore'));

        $this->repo->create($request->all());

        return redirect()->route(config($this->confFile.".viewIndex"))->withErrors('Registro Creado.');
    }

    public function edit()
    {
        $this->data['model']= $this->repo->find($this->route->id);

        return view(config($this->confFile.".viewForm"))->with($this->data);
    }

    public function update(Request $request)
    {
        $request->validate(config($this->confFile.'.validationsUpdate'));

        $model = $this->repo->find($this->route->id);

        $model->fill($request->all());
        $model->save();

        return redirect()->route(config($this->confFile.".viewIndex"))->withErrors('Registro Editado.');
    }

    public function destroy()
    {
        $model = $this->repo->find($this->route->id);

        $model->delete();

        return redirect()->route(config($this->confFile.".viewIndex"))->withErrors('Registro Editado.');
    }
}
