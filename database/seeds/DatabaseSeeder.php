<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Pessoas::class, 10)->create()->each(function ($pessoas){

//            $pessoas->nucleo()->save(factory(\App\Nucleo::class)->make());
//
//            $pessoas->endereco()->save(factory(\App\Enderecos::class)->make());
//
//            $pessoas->telefone()->save(factory(\App\Telefones::class)->make());

        });
    }
}
