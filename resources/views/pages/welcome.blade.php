@extends('layouts.public')

@section('content')
<main role=main>
    <carrosel-component imagem1="{{asset('images/1.jpg')}}"
                        imagem2="{{asset('images/2.jpg')}}"
                        imagem3="{{asset('images/3.jpg')}}"
    ></carrosel-component>
      <div class=" marketing">
      <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid img-responsive" style="width:auto%;" src="{{asset('images/npj.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p class="text-justify">
            O núcleo permite aos alunos dos cursos de Direito e Serviço Social relacionarem
             conhecimentos teóricos à prática, e, assim, desenvolverem habilidades necessárias ao exercício profissional. Orientados por advogados e professores,
              os alunos atendem pessoas carentes das comunidades do entorno das Unidades.
O NPJ prioriza o atendimento nas áreas de Direito Civil, da Família, do Trabalho e
Previdenciário, abordando o Direito Penal em casos de delitos de menor
 potencial ofensivo.</p>
            <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
              Abrir modal de demonstração
            </button></p>

            <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-justify">
                      O núcleo permite aos alunos dos cursos de Direito e Serviço Social relacionarem conhecimentos teóricos à prática, e, assim, desenvolverem habilidades necessárias ao exercício profissional. Orientados por advogados e professores, os alunos atendem pessoas carentes das comunidades do entorno das Unidades.
                      O NPJ prioriza o atendimento nas áreas de Direito Civil, da Família, do Trabalho e Previdenciário, abordando o Direito Penal em casos de delitos de menor potencial ofensivo.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                  </div>
                </div>
              </div>
            </div>


          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded" src="{{asset('images/clesam.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p class="text-justify">
              DA CLESAM tem seu principal enfoque no treinamento e
              capacitação prática dos alunos, sendo estes devidamente
              orientados e supervisionados por professores da UNISUAM,
               em suas áreas específicas de abrangência, orientando os
                pacientes e usuários desde a prevenção, tratamento
                propriamente dito, até reabilitação e manutenção da
                qualidade de vida. O serviço é prestado à comunidade
                carente da Zona da Leopoldina e adjacências, oferecendo
                campo de prática profissional aos alunos dos cursos de
                 Graduação e Pós-Graduação em Saúde.

</p>

<p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
              Abrir modal de demonstração
            </button></p>

            <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-justify">
                    A CLESAM tem seu principal
                    enfoque no treinamento e capacitação
                    prática dos alunos, sendo estes devidamente
                     orientados e supervisionados por professores
                      da UNISUAM, em suas áreas específicas
                      de abrangência, orientando os pacientes e
                      usuários desde a prevenção, tratamento
                      propriamente dito, até reabilitação e manutenção
                      da qualidade de vida. O serviço é prestado à
                       comunidade carente da Zona da Leopoldina e
                       adjacências, oferecendo campo de prática
                       profissional aos alunos dos cursos de Graduação
                       e Pós-Graduação em Saúde.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded" src="{{asset('images/napp.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p class="text-justify">
            A educação se modificou e vem se transformando. Por isso, a UNISUAM tem um
             núcleo que estuda os atos de aprender e de ensinar. Dentro da UNISUAM, a
              atuação do NAPP é entender e eliminar os fatores que interferem no
               processo educacional, participando, junto com as lideranças
               (coordenadores de curso, professores e representantes de turma) da
               remoção destas barreiras. O professor deve estar preparado para
               lidar com a questão da inclusão,
             precisando ter consciência que o educando hoje é agente ativo no
             processo educacional.</p>
            <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
              Abrir modal de demonstração
            </button></p>

            <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-justify">
                    A educação se modificou e vem se transformando. Por isso, a UNISUAM tem um núcleo que estuda os atos de aprender e de ensinar. Dentro da UNISUAM, a atuação do NAPP é entender e eliminar os fatores que interferem no processo educacional, participando, junto com as lideranças (coordenadores de curso, professores e representantes de turma) da remoção destas barreiras. O professor deve estar preparado para lidar com a questão da inclusão, precisando ter consciência que o educando hoje é agente ativo no processo educacional.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        </div>
      </main>
@stop

