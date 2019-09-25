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
        Schema::create('financeiros', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('modalidade',100);
            $table->string('bandeira',50);
            $table->float('valor');
            $table->unsignedBigInteger('funcionario_id');
            $table->unsignedBigInteger('juridica_id');
            $table->timestampsTz();

            $table->foreign("funcionario_id")
                ->references("id")
                ->on("funcionarios")
                ->onUpdate("cascade")
                ->onDelete("cascade");

            $table->foreign("juridica_id")
                ->references("id")
                ->on("juridicas")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('financeiros');
    }
}
