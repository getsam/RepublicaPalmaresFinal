<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CPF');
            $table->string('nome');
            $table->dateTime('Nascimento');
            $table->integer('Idade');
            $table->string('Endereço');
            $table->string('Bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('DDD');
            $table->string('Fone1');
            $table->string('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pessoa');
    }
}
