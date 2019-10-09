<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{   
    protected $table = 'aluno';
    public $timestamps = false;

    public function cursos(){
        return $this->belongsToMany(Curso::class,AlunoCurso::class,'aluno_id','curso_id');
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}