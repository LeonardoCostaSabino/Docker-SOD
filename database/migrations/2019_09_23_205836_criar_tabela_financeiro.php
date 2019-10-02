<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFinanceiro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis.financeiros', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('modalidade',100);
            $table->string('bandeira',50);
            $table->float('valor');
            $table->unsignedBigInteger('sis_funcionarios_id');
            $table->unsignedBigInteger('sis_juridicas_id');
            $table->timestampsTz();

            $table->foreign("sis_funcionarios_id")
                ->references("id")
                ->on("sis.funcionarios")
                ->onUpdate("cascade")
                ->onDelete("cascade");

            $table->foreign("sis_juridicas_id")
                ->references("id")
                ->on("sis.juridicas")
                ->onUpdate("cascade")
                ->onDelete("cascade");

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
        Schema::drop('sis.financeiros');
    }
}
