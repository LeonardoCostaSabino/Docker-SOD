<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis.usuarios', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string("nickname",50);
            $table->string("senha",30);
            $table->unsignedBigInteger('sis_acessos_id');
            $table->timestampsTz();

            $table->foreign("sis_acessos_id")
                ->on("sis.acessos")
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
        Schema::drop('sis.usuarios');
    }
}
