<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profissoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissoes',function(Blueprint $table){
            $table->bigIncrements('id')->primary()
            $table->string('nome',55);
            $table->string('tipo',20);
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
        //
    }
}
