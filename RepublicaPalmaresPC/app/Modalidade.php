<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{   
    protected $table = 'modalidade';
    public $timestamps = false;

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}