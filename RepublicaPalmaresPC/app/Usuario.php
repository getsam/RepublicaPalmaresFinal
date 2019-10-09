<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{   
    protected $table = 'usuario';
    public $timestamps = false;

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}