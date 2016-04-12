<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
    public function eventos(){
        return $this->belongsToMany('App\Evento');
    }
}
