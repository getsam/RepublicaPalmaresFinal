<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{   
    protected $table = 'telefone';
    public $timestamps = false;
    protected $fillable = [
        'telefone','telefone2'
    ]; //salvar atributso em massa no metodo create

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class,'id_telefone');
    }
}