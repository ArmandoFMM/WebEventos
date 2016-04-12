<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $timestamps = false;
    public function fotos(){

        return $this->hasMany('App\Foto');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }


    public function locals(){
        return $this->belongsToMany('App\Local');
    }

    public function convidados(){
        return $this->belongsToMany('App\Convidado');
    }

    public function participantes(){
        return $this->belongsToMany('App\Participante');
    }

}
