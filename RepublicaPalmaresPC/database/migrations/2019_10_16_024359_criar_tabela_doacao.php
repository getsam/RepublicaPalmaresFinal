<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDoacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->date('dt_doacao');
            $table->string('valor');
            $table->text('observacao')->nullable();
            $table->integer('pessoa_id')->unsigned();

            $table->foreign('pessoa_id')
                ->references('id')
                ->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doacao');
    }
}
