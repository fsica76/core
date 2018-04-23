<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('auth/login', [
    'as' => 'auth.login',
    'uses' => 'Auth\AuthController@login'
]);

Route::get('auth', [
    'as' => 'auth.validate',
    'uses' => 'Auth\AuthController@validateLogin'
]);

// (env('SSO_AUTH')? 'auth_sso':'auth' ) valida si usa sso o validacion local
Route::group(['middleware'=> (env('SSO_AUTH')? 'auth.sso':'auth' )],function(){

    Route::get('usr',function (){
       $u = \Illuminate\Support\Facades\Auth::user();

       $u->assignRole('Administrador');
    });

    Route::get('/', 'HomeController@index')->name('home');


    // Core
    Route::group(['prefix'=> 'core'], function(){

        Route::get('index', [
            'as' => 'core.index',
            'uses' => 'CoreController@index'
        ]);

        Route::get('create', [
            'as' => 'core.create',
            'uses' => 'CoreController@create'
        ]);

        Route::post('store', [
            'as' => 'core.store',
            'uses' => 'CoreController@store'
        ]);

        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'core.edit',
                'uses' => 'CoreController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'core.update',
                'uses' => 'CoreController@update'
            ]);

            Route::get('destroy', [
                'as' => 'core.destroy',
                'uses' => 'UsersController@destroy'
            ]);
        });
    });
});

Route::view('setup','configs.setup.form');

Route::post('setup',function(\Illuminate\Http\Request $request) {

   $module = $request->module;

   try{

       \Illuminate\Support\Facades\Artisan::call('make:model',['name'=> $module]);

   }catch (Exception $e)
   {
       dd($e->getMessage());
   }


})->name('setup.post');