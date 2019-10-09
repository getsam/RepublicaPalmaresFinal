<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduacao extends Model
{   
    protected $table = 'graduacao';
    public $timestamps = false;

    public function curso()
    {
        return $this->belongsTo(Cruso::class);
    }
}