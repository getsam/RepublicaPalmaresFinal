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
        return $this->belongsToMany(Colaborador::class, ColaboradorCargo::class, 'colaborador_id', 'cargo_id');
    }
}