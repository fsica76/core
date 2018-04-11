<?php



$module = 'permissions';

return [

'paginate' => '50',

//directorio de las vistas

    'viewIndex' => 'configs.'.$module . '.index',
    'viewForm' => 'configs.'.$module . '.form',

    //rutas del modulo

    'routeCreate' => 'configs.'.$module . '.create',
    'routeEdit' => 'configs.'.$module . '.edit',
    'routeUpdate' => 'configs.'.$module . '.update',
    'routeStore' => 'configs.'.$module . '.store',
    'routeDestroy' => 'configs.'.$module . '.destroy',


    //validaciones de creación

    'validationsStore' =>
        [
            'name' => 'required',
            'slug' =>'required',
            'level'=>'required',
//            'tiny' =>  'required|boolean',
//            'date'=> 'required|date',
//            'email'=> 'required|email'
        ],

    //validaciones de edición

    'validationsUpdate' => [
        'name' => 'required',
        'slug' =>'required',
           'level'=>'required',
//        'tiny' =>  'required|boolean',
//        'date'=> 'required|date',
//        'email'=> 'required|email'
    ],

];