<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{   
    protected $table = 'curso';
    public $timestamps = false;

    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class);
    }

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, AlunoCurso::class);
    }

    public function graduacoes()
    {
        return $this->hasMany(Graduacao::class);
    }

    public function dt_hr_cursos()
    {
        return $this->hasMany(dataHoraCurso::class);
    }
}