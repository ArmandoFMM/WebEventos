<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    public $timestamps = false;
    public function eventos(){
        return $this->belongsTo('App\Evento');
    }
}
