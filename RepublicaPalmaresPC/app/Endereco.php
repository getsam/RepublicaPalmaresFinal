<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{   
    protected $table = 'endereco';
    public $timestamps = false;

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}