<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = "locals";
    protected $fillable = ['nome_local','cidade','bairro','','avenida_rua','descricao_local'];


    public function eventos(){
        return $this->belongsToMany('App\Evento');
    }
}
