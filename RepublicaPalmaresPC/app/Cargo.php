<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{   
    protected $table = 'cargo';
    public $timestamps = false;

    public function depto()
    {
        return $this->belongsTo(Depto::class);
    }

    public function colaboradores()
    {
        return $this->hasMany(Colaborador::class)->using('App/ColaboradorCargo')->withPivot(['cargo_id']);
    }
}