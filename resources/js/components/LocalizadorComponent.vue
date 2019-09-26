<template>
    <div class="container">
        <div class="modal fade " id="localizar" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><b>Localizar</b></h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-inline float-right">
                            <div class="form-group col-md-12 m-4">
                                <div class="col-md-8">
                                    <div class="input-group pb-2">
                                        <input type="text" class="form-control">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 pb-2">
                                    <select class="form-control" id="tipo_busca">
                                        <option selected>Selecione...</option>
                                        <option value="nome">Nome</option>
                                        <option value="matricula">Matrícula</option>
                                        <option value="nucleo">Nucleo</option>
                                        <option value="email">E-mail</option>
                                        <option value="local">Local</option>
                                        <option value="ramal">Ramal</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped table-responsive-lg">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Ramal</th>
                                <th scope="col">Nucleo</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>teste</td>
                                <td>teste@teste.com</td>
                                <td>0000</td>
                                <td>nucleo</td>
                                <td><button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#ver_info">Ver</button></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ver_info" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><b>Informações</b></h5>
                        <button type="button" class="close" data-dismiss="modal" data-toggle="modal" data-target="#localizar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>Nome:</b></p>
                        <p><b>E-mail:</b></p>
                        <p><b>Celular:</b></p>
                        <p><b>Ramal:</b></p>
                        <p><b>Cargo:</b></p>
                        <p><b>Local:</b></p>
                        <p><b>Nucleo:</b></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#localizar">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
    }
</script>

