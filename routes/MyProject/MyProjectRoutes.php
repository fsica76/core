<?php


//    Route::group(['prefix'=> 'profiles'], function(){


        Route::get('index', [
            'as' => 'myProject.index',
            'uses' => 'MyProject\MyProjectController@index'
        ]);

        Route::get('create', [
            'as' => 'myProject.create',
            'uses' => 'MyProject\MyProjectController@create'
        ]);

        Route::post('store', [
            'as' => 'myProject.store',
            'uses' => 'MyProject\MyProjectController@store'
        ]);

        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'myProject.edit',
                'uses' => 'MyProject\MyProjectController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'myProject.update',
                'uses' => 'MyProject\MyProjectController@update'
            ]);

            Route::get('destroy', [
                'as' => 'myProject.destroy',
                'uses' => 'MyProject\MyProjectController@destroy'
            ]);

        });

//    });
