<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\GenericController as GenericController;
use App\Nucleos;
use Illuminate\Support\Facades\Validator;

class NucleoController extends GenericController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarTodos() {
        $nucleos = Nucleos::all();

        return $this->mensagemSucesso($nucleos->toArray(), "Nucleos retornados com sucesso");
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
            'nome' => 'required'
        ]);

        if($validator->fails()){
            return $this->messagemErro('Erro de validação.', $validator->errors());
        }

        $nucleos = Nucleos::create($input);

        return $this->mensagemSucesso($nucleos->toArray(), "Nucleos criados com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id) {
        $nucleos = Nucleos::find($id);

        if (is_null($nucleos)){
            return $this->messagemErro("Nucleo não encontrado");
        }
        return $this->mensagemSucesso($nucleos->toArray(), "Nucleos retornados com sucesso");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, Nucleos $nucleos) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required'
        ]);

        if($validator->fails()){
            return $this->messagemErro('Erro de validação.', $validator->errors());
        }

        $nucleos->name = $input['nome'];
        $nucleos->save();

        return $this->mensagemSucesso($nucleos->toArray(), 'Nucleos atualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destrot(Nucleos $nucleos){
        $nucleos->delete();
        return $this->mensagemSucesso($nucleos->toArray(),'Nucleo deletado com sucesso');
    }
}
