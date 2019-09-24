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
            $table->bigIncrements('id')->primary();
            $table->date("data");
            $table->time("hora");
            $table->string('registrador');
            $table->string('supervisor');
            $table->boolean('desistencia');
            $table->string('motivo');
            $table->timestampTz();

            $table->foreign("acesso.id")
                ->on("acessos")
                ->references("id")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
