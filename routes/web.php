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

    Route::view('index','template.layout');

    Route::group(['prefix'=>'configs'],function()
    {
        Route::group(['prefix'=> 'users'], function(){

            Route::get('index', [
                'as' => 'configs.users.index',
                'uses' => 'Configs\UsersController@index'
            ]);

            Route::get('create', [
                'as' => 'configs.users.create',
                'uses' => 'Configs\UsersController@create'
            ]);

            Route::post('store', [
                'as' => 'configs.users.store',
                'uses' => 'Configs\UsersController@store'
            ]);

                Route::group(['prefix' => '{id?}'], function() {

                    Route::get('edit', [
                        'as' => 'configs.users.edit',
                        'uses' => 'Configs\UsersController@edit'
                    ]);

                    Route::post('udpate', [
                        'as' => 'configs.users.update',
                        'uses' => 'Configs\UsersController@update'
                    ]);

                    Route::get('destroy', [
                        'as' => 'configs.users.destroy',
                        'uses' => 'Configs\UsersController@destroy'
                    ]);

                });

            });
    });

Route::group(['prefix'=>'configs'],function()
{
    Route::group(['prefix'=> 'profiles'], function(){

        $module = 'profiles';

        Route::get('index', [
            'as' => 'configs.'.$module.'.index',
            'uses' => 'Configs\ProfilesController@index'
        ]);

        Route::get('create', [
            'as' => 'configs.profiles.create',
            'uses' => 'Configs\ProfilesController@create'
        ]);

        Route::post('store', [
            'as' => 'configs.profiles.store',
            'uses' => 'Configs\ProfilesController@store'
        ]);

        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'configs.profiles.edit',
                'uses' => 'Configs\ProfilesController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'configs.profiles.update',
                'uses' => 'Configs\ProfilesController@update'
            ]);

            Route::get('destroy', [
                'as' => 'configs.profiles.destroy',
                'uses' => 'Configs\ProfilesController@destroy'
            ]);

        });

    });
});


