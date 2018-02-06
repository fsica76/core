<?php

namespace App\Entities\MyProject;


use Illuminate\Database\Eloquent\Model;

class MyProject extends Model
{

    protected  $table ='my_project';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'string', 'double', 'text','date','tiny'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
