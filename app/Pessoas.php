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
        return $this->hasOne(Nucleos::class);
    }

    public function endereco(){
        return $this->hasOne(Enderecos::class);
    }

    public function telefone(){
        return $this->hasOne(Telefones::class);
    }
}
