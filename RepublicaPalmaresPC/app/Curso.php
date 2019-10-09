<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{   
    protected $table = 'curso';
    public $timestamps = false;

    public function modalidade()
    {
        return $this->hasOne(Modalidade::class);
    }
}