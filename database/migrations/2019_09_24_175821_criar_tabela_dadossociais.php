<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDadossociais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dadossociais', function (Blueprint $table){
            $table->bigIncrements('id')->primary();
            $table->string("renda");
            $table->integer("filhos");
            $table->string("composicaofamiliar");
            $table->string("meiodetransporte");
//            $table->string("planodesaude");
//            $table->string("planodesaude");
            $table->string('programasocial.id')->index();
            $table->timestampTz();

            $table->foreign("programasocial.id")
                ->on("programasociais")
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
