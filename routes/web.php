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

    Route::view('/','template.layout');

    Route::group(['prefix'=>'configs'],function()
    {
        Route::group(['prefix'=> 'users'], function(){

            Route::get('index', [
                'as' => 'configs.users.index',
                'uses' => 'ConfigsController@index'
            ]);

            Route::get('create', [
                'as' => 'configs.users.create',
                'uses' => 'ConfigsController@create'
            ]);

            Route::post('store', [
                'as' => 'configs.users.store',
                'uses' => 'ConfigsController@store'
            ]);

            Route::group(['prefix' => '{id?}'], function() {

                Route::get('edit', [
                    'as' => 'configs.users.edit',
                    'uses' => 'ConfigsController@edit'
                ]);

            });

            });
    });


