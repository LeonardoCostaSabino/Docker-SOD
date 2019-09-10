@extends('layouts.default')

@section('content')
<div class="text-center">
    <h1>BEM VINDO AO SOD</h1>
    <small>Sistema Organizacional de dados</small>
</div>
<home-component></home-component>
<div class="card text-center">
    <div class="card-header">
        Help Desk
    </div>
    <div align="center" class="card-body">
        <h5 class="card-title">Olá! Encontrou algum erro ou está com dificuldade? Fale conosco!</h5>
        <form>
            <input class="form-control mb-3 w-25" type="text" placeholder="Email" name="email">
            <input class="form-control mb-3 w-25" type="text" placeholder="Nome" name="nome">
            <textarea class="form-control h-50 w-25 mb-3" placeholder="Descrição de erro" name="erro"></textarea>
        </form>

        <button class="btn btn-primary">Enviar</button>
    </div>
    <div class="card-footer text-muted">
        {{now()}}
    </div>
</div>
    @stop
