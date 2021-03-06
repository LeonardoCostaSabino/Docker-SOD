<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaProgramasocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis.programasociais', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string("nome",70);
            $table->string("tipo",50);
            $table->string("atividade");
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
        Schema::drop('sis.programasociais');
    }
}
