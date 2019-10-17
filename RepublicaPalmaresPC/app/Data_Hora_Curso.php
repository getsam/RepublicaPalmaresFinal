<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_Hora_Curso extends Model
{
    protected $table = 'data_hora_curso';

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
