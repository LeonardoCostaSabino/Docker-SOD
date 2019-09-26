<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos',function(Blueprint $table){

            $table->bigIncrements('id');
            $table->integer('matricula');
            $table->integer("periodo");
            $table->string("curso");
            $table->date('dtentrada');
            $table->date('dtconclusao');
            $table->enum('status',['concluido','interrompido','cursando']);
            $table->unsignedBigInteger('fisicas_id');
            $table->timestamps();

            $table->foreign('fisicas_id')
            ->references('id')
            ->on('fisicas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alunos');
    }
}
