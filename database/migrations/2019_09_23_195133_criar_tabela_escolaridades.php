<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEscolaridades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis.escolaridades', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('tipo');
            $table->string('instituicao');
            $table->string('nivel');
            $table->enum('status',['concluido','interrompido','cursando']);
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sis.escolaridades');
    }
}
