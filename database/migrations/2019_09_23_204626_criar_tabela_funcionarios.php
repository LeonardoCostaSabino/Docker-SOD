<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table){
            $table->bigIncrements('id')->primary();
            $table->integer('ctps');
            $table->integer('matricula');
            $table->date('dtadmissao');
            $table->unsignedBigInteger('fisica.id')->index();
            $table->unsignedBigInteger('usuario.id')->index();
            $table->timestampsTz();

            $table->foreign('fisica.id')
            ->references('id')
            ->on('fisicas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('usuario.id')
            ->references('id')
            ->on('usuarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionarios');
    }
}
