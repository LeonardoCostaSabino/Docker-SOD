<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisicas extends Model
{
    protected $fillable = [
        'cpf',
        'sexo',
        'genero',
        'datanascimento',
        'nacionalidade',
        'naturalidade',
        'estadocivil',
    ];
}
