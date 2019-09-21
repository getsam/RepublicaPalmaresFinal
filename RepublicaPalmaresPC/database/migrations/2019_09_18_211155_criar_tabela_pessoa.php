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
            $table->integerIncrements('id');
            $table->string('CPF');
            $table->string('Tipo_documento')->default('Pessoa Fisica');
            $table->string('nome');
            $table->string('Nascimento');
            $table->string('idade');
            $table->string('Nome_responsavel');
            $table->string('Genero');
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
