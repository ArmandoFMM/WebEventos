<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    public function eventos(){
        return $this->belongsToMany('App\Evento');
    }
}
