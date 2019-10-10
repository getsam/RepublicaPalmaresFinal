<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depto extends Model
{   
    protected $table = 'depto';
    public $timestamps = false;

    public function cargo()
    {
        return $this->hasOne(Cargo::class);
    }
}