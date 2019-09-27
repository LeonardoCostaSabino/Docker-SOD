<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class GenericController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function mensagemSucesso($result, $mensagem) {
        $resposta = [
            'sucesso' => true,
            'data' => $result,
            'mensagem' => $mensagem
        ];

        return response()->json($resposta, 200);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function messagemErro($erro, $erroMensagem = [], $codigo = 404){
        $resposta = [
            'sucesso' => false,
            'mensagem' => $erro
        ];

        if(!empty($erroMensagem)) {
            $resposta['data'] = $erroMensagem;
        }
        return response()->json($resposta, $codigo);
    }
}
