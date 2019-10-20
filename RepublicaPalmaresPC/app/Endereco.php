<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{   
    protected $table = 'endereco';
    public $timestamps = false;
    protected $fillable = [
        'logradouro','numero','complemento','bairro','cidade','cep','uf'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class,'id_endereco');
    }
}