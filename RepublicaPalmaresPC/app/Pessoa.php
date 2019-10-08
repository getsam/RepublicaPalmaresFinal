<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{   
    protected $table = 'pessoa';
    public $timestamps = false;

    // RELACIONAMENTO UM PRA UM
    public function endereco()
    {
        return this->hasOne('App/Endereco');
    }
}