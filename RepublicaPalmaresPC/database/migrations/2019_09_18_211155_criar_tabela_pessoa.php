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
            $table->integerIcrements('id');
            $table->string('cpf');
            $table->integer('tipo_documento')->default(1);
            $table->string('nome');
            $table->string('dt_nascimento');
            $table->integer('genero');
            $table->integer('endereco_id');
            $table->string('email');
            $table->string('telefone_id')

            $table->foreign('endereco_id')
                ->references('id')
                ->on('endereco');
            $table->foreing('telefone_id')
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
        Schema::drop('pessoa');
    }
}
