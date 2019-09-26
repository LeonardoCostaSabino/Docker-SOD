<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTriagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triagem', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->date("data");
            $table->time("hora");
            $table->string('registrador',50);
            $table->string('supervisor',50);
            $table->boolean('desistencia');
            $table->string('motivo',140);
            $table->unsignedBigInteger('pessoas_id');
            $table->timestampsTz();

            $table->foreign("pessoas_id")
                ->on("pessoas")
                ->references("id")
                ->onDelete("cascade")
                ->onUpdate("cascade");

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
        Schema::drop('triagem');
    }
}
