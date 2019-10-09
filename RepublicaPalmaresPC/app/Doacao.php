<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{   
    protected $table = 'doacao';
    public $timestamps = false;

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}