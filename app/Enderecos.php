<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $fillable = [
        'cep',
        'complemento',
        'bairro',
        'estado',
        'cidade',
        'logradouro',
        'construcao',
        'situacao',
        'tempo',
        'qtdcomodos',
        'agua',
        'saneamento'
    ];

}
