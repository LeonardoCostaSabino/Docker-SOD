<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\GenericController as GenericController;
use App\Pessoas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends GenericController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarTodos() {
        $nucleos = Pessoas::all();

        return $this->mensagemSucesso($nucleos->toArray(), "Pessoas retornadas com sucesso");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function criar(Request $request) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'nome' => 'required',
            'cep' => 'required'
        ]);

        if($validator->fails()){
            return $this->messagemErro('Erro de validação.', $validator->errors());
        }
    }
}
