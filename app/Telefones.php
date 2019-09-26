<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefones extends Model
{
    protected $fillable = [
        'ddtel',
        'ddcel',
        'telefone',
        'celular'
    ];

}
