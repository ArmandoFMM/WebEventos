<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    protected $table = "roles";
    protected $fillable = [
        'designacao'
    ];


    public function users()
    {

        return $this->hasMany('App\User');
    }

}
