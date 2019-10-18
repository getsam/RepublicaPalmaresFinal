<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{   
    protected $table = 'departamento';
    public $timestamps = false;

    public function cargo()
    {
        return $this->hasOne(Cargo::class);
    }
}