<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    public $timestamps = false;
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function eventos(){
        return $this->belongsToMany('App\Evento');
    }
}
