<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{   
    protected $table = 'presenca';
    public $timestamps = false;

    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}