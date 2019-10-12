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
            $table->string('cpf');
            $table->integer('tipo_documento')->default(1);
            $table->string('nome');
            $table->string('dt_nascimento');
            $table->integer('genero');
            $table->integer('id_endereco');
            $table->string('id_telefone');
            $table->string('email');

            $table->foreign('id_endereco')
                ->references('id')
                ->on('endereco');
            
            $table->foreign('id_telefone')
                ->references('id')
                ->on('telefone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
}
