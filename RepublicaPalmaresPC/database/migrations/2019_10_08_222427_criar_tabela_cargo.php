<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->integer('depto_id');
            $table->date('dt_entrada');

            $table->foreign('depto_id')
                ->references('id')
                ->on('depto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargo');
    }
}
