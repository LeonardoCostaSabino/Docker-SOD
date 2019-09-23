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
            $table->bigIncrements('id')->primary();
            $table->string('modalidade');
            $table->string('bandeira');
            $table->float('valor');
            $table->unsignedBigInteger('funcionario.id')->index();
            $table->unsignedBigInteger('juridica.id')->index();
            $table->timestampTz();

            $table->foreign("funcionario.id")
                  ->references("id")
                  ->on("funcionarios")
                  ->onUpdate("cascade")
                  ->onDelete("cascade");

            $table->foreign("juridica.id")
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
