<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{   
    protected $table = 'colaborador';
    public $timestamps = false;

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class, ColaboradorCargo::class);
    }
}