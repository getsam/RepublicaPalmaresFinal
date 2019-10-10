<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{   
    protected $table = 'telefone';
    public $timestamps = false;

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}