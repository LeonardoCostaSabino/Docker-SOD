<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class head extends Controller
{
    public function mostrar(){
        $nucleo = "Ola";
        $usuário = "Teste";
        $acesso = "Admin";
        return view('layouts.header',compact('nucleo', 'usuário','acesso'));
    }
}
