<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriartabelaPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis.posts', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('titulo',70);
            $table->string('subtitulo');
            $table->string('corpo');
            $table->string('categoria',50);
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
        Schema::drop('sis.posts');
    }
}


