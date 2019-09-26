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
            $table->bigIncrements('id');
            $table->integer("renda");
            $table->integer("filhos");
            $table->string("composicaofamiliar",50);
            $table->string("meiodetransporte",50);
            $table->unsignedBigInteger('programasociais_id');
            $table->timestampsTz();

            $table->foreign("programasociais_id")
                ->on("programasociais")
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
        Schema::drop('dadossociais');
    }
}
