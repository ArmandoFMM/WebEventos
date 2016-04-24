<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Evento extends Model
{
    protected $table = "eventos";
    protected $fillable = ['designacao','imagem','data','hora_inicio','hora_fim','tipo_evento','estado_evento','descricao','user_id'];
    
    public function Imagens(){

        return $this->hasMany('App\Imagem');
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


    public function setImagemAttribute($imagem)
    {
        $this->attributes['imagem'] = Carbon::now()->second.$imagem->getClientOriginalName();
        $nome = Carbon::now()->second.$imagem->getClientOriginalName();
        \Storage::disk('local')->put($nome, \File::get($imagem));
    }

}
