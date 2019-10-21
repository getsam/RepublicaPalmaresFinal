<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ColaboradorCargo extends Pivot
{   
    protected $table = 'colaborador_cargo';
    public $timestamps = false;

    // public function colaboradores()
    // {
    //     return $this->belongsToMany(Colaborador::class);
    // }

    // public function cargos()
    // {
    //     return $this->belongsToMany(Cargo::class);
    // }
}