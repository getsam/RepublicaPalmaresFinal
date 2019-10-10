<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('logradouro');
            $table->char('numero',50);
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->char('uf',3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('endereco');
    }
}
