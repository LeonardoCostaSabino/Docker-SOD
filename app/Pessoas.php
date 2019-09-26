<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $fillable = [
        'nome',
        'email',
    ];

    public function nucleo(){
        return $this->hasOne(Nucleos::class,'nucleo_id');
    }

    public function endereco(){
        return $this->hasOne(Enderecos::class,'endereco_id');
    }

    public function telefone(){
        return $this->hasOne(Telefones::class,'telefone_id');
    }
}
