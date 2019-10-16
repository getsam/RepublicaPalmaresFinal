<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{   
    protected $table = 'pessoa';
    public $timestamps = false;
    protected $fillable = [
        'cpf','tipo_documento','nome','dt_nascimento','genero','email'
    ];

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }

    public function telefone()
    {
        return $this->hasOne(Telefone::class);
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }
}