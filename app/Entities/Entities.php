<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    public function updateables()
    {
        return $this->morphMany(Updateables::class,'entities');
    }

}


