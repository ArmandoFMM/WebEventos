<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    public $timestamps = false;
    public function eventos(){
        return $this->belongsToMany('App\Evento');
    }
}
