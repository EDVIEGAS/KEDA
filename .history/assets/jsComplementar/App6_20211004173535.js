var modalAdionarIntervaloGraduacao = `<div class="modal fade text-sm pb-5 hide" id="modal-default-campeonato-4567">
<div class="modal-dialog" style="max-width:678px">
  <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title text-sm"><i class="fas fa-user-plus"></i> CADASTRAR CAMPEONATO</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <form method="post" id="AddCampeonatoEvente874">
        <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3 row">
           
            <div class="col-md-12" id="conteudoCarregar5955">                     
                    
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="text-nowrap">Tipo de Campeonato</label>
                            <select id="tipoCampeonato" class="form-control form-control-sm" name="campeonatoNome">
                                <option value="Provincial">Provincial</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="text-nowrap">Edicao</label>
                            <input type="hidden" name="fk_actividadeC" value="" id="fk_actividadeC">
                            <input type="hidden" name="id_associacao_pro" value="" id="id_associacao_pro">
                            <input name="Edicao" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                        </div>
                    </div>
                    <div class="form-row"> 
                        <div class="form-group col-sm-12">
                            <label class="text-nowrap">Prova</label>
                            <input name="Campeonato" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                        </div>
                    </div>
                    <div class="form-row"> 
                        <div class="form-group col-sm-12">
                            <label class="text-nowrap">Director da Prova</label>
                            <input name="Director" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                            <input type="hidden" name="actividade" id="actividade_id" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="text-nowrap">Local da Prova</label>
                            <input name="localDaProva" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                            <input type="hidden" name="actividade" id="actividade_id" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="text-nowrap">Hora inicio da Prova</label>
                            <input type="time" name="horaDeInicioProva" id="actividade_id"  class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="form-row"> 
                        <div class="form-group col-sm-6" disabled="true">
                            <label class="col-form-label text-md-left"> Pais <span class="text-danger"></span></label>
                            <select id="pais" class="form-control form-control-sm" name="pais">
                                <option value="Angola">Angola</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-form-label text-md-right"> Provincia <span class="text-danger"></span></label>
                            <select id="provincia343" class="form-control form-control-sm" name="provincia">
                                
                            </select>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Adicionar </button>        
            </div>
        </div>
        
    </form>
  </div>
</div>   
</div>`;

//-------------------------------------------------------------------------------------------------------------------
var modalAdionarIntervaloGraduacao2 = `<div class="modal fade text-sm pb-5 hide" id="modal-default-campeonato-45672">
<div class="modal-dialog" style="max-width:678px">
  <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title text-sm"><i class="fas fa-user-plus"></i> GRADUACAO </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <form method="post" id="AddCampeonatoEvente874">
        <div id="bodyMensagem89127358" class="modal-body m-2 pt-2 pb-3 row">
           
            <div class="col-md-12" id="conteudoCarregar5955">                     
                    
            <div class="card-body">
            <!-- Minimal style -->
            <div class="row">
              <div class="col-sm-6">
                <!-- checkbox -->
                <div class="form-group clearfix">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" class="radio" id="checkboxPrimary1" value="OFICIALIZACAO DE FAIXAS NEGRAS">
                    <label for="checkboxPrimary1">
                    </label>
                  </div>
                 
                  <div class="icheck-primary d-inline">
                    <label for="checkboxPrimary3">
                      OFICIALIZACAO DE FAIXAS NEGRAS
                    </label>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- Minimal red style -->
            <div class="row">
              <div class="col-sm-6">
                <!-- checkbox -->
                <div class="form-group clearfix">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" class="radio" id="checkboxDanger1" value="RECICLAGEM">
                    <label for="checkboxDanger1">
                    </label>
                  </div>
                  
                  <div class="icheck-primary d-inline">
                    <label for="checkboxDanger3">
                     RECICLAGEM
                    </label>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- Minimal red style -->
            <div class="row">
              <div class="col-sm-6">
                <!-- checkbox -->
                <div class="form-group clearfix">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" class="radio" id="checkboxSuccess1" value="GRADUACAO">
                    <label for="checkboxSuccess1">
                    </label>
                  </div>
                  
                  <div class="icheck-primary d-inline">
                    <label for="checkboxSuccess3">
                      GRADUACAO
                    </label>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
                    
                          
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Adicionar </button>        
            </div>
        </div>
        
    </form>
  </div>
</div>   
</div>`;

var modalEliminarParticipante909 = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-participante909">
                <div class="modal-dialog">
                <div class="modal-content">
            
                <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> ELIMINAR PARTICIPANTE GRADUACAO</h4>
                
                        <div class="modal-body alert alert-warning alert-dismissible m-3">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                        <p id="mensagem77"></p>
                        </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                        <a href="#" id="dataComfirmParticipanteSeminarioElim" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i> Confirmar</a>
                        </div>
                    </div>
                    
                    </div>
                
</div>`;

var modalCategoriaNacional67 = `<div class="modal fade text-sm pb-5 hide" id="categoria_Nacional_12389767">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> EDITAR TIPO </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" id="AddTipoSeminario777">
                <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                    <div class="col-md-12" id="conteudoCarregarAdicionarCategoria">
                                <div class="col-md-12" id="conteudoCarregarCategoria" style="padding-left: 0.5px;padding-right: 0.5px;"></div>

                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label class="text-nowrap">Tipo</label>
                                        <select name="id_categoria" class="form-control form-control-sm" id="categoriaid123">
                                            <option value="Oficiaizacao de Faixas Negras">Oficiaizacao de Faixas Negras</option>
                                            <option value="Graduacao">Graduacao</option>
                                            <option value="Reciclagem">Reciclagem</option>
                                        </select>                             
                                    </div>
                                </div>

                               
                                <div class="col-md-4" style="padding-right: 0.5px;left: -7px">
                                    <button type="submit" class="btn btn-primary" name="enviar-formulario" id="conteudoCarregarBT123"><i class="fa fa-save"></i> Cadastrar </button>
                                </div>
                            </div>
                            </div>
                </div>
                </form>
            </div>
            </div>   
            </div>
</div>`;

selected67 = [];

function carregarAllParticipanteSeminario() {

    let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

    $.post('http://localhost/KEDA/actividade/verSeminarioTipo', { idEvento2 }, function(event3) {

        if (event3 === 2) {
            $('#controlPainel123').attr('hidden', 'hidden');
        } else {
            $('#controlPainel123').removeAttr('hidden');
        }

        $.post('http://localhost/KEDA/actividade/getParticipantesEvento', { idEvento2 }, function(retorno) {


            $teste = JSON.parse(retorno);

            

            let tableCategoria = `<table id="example1" class="table table-striped table-sm text-sm">
                              <thead>
                                <tr>
                                  <th style="width: 10px">N-</th>
                                  <th>Nome Completo</th>
                                  <th>Data de Nascimento</th>
                                  <th>Genero</th>
                                  <th>Graduacao</th>
                                  <th>tipo</th>
                                  <th class="text-center project-actions">Accoes</th>
                                </tr>
                              </thead>`;

            tableCategoria += `<tbody>`;
            let soma = 0;
            $.each($teste, function(i, retorno1) {
                tableCategoria += `<tr>
                                  <td>${ soma = soma + 1}</td>
                                  <td>${retorno1.nome_participante}</td>
                                  <td>${retorno1.dataNascimento}</td>
                                  <td>${retorno1.genero}</td>
                                  <td>${retorno1.graduacao}</td>
                                  <td>${retorno1.tipo}</td>
                                  <td class="text-center project-actions">
                                    <button data-editar-participante="${retorno1.id_participanteActividade}" data-editar-id_campeonato="${retorno1.id_campeonato_fk}" data-editar-genero="${retorno1.genero}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                    <button data-eliminar-participante="${retorno1.id_participanteActividade}" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                                  </td>
                                </tr>`
            });
            tableCategoria += `</tbody>`
            tableCategoria += `</table>`;

            $('.verAllParticipante789P23').html(tableCategoria);

         
            $('button[data-editar-participante]').on('click', function(event) {

                event.preventDefault();

                if (!$('categoria_Nacional_12389767').length) {
                    $('body').append(modalCategoriaNacional67);
                }

                $('#categoria_Nacional_12389767').modal('show');

                let id_participanteActividade2 = $(this).attr('data-editar-participante');

                $('#AddTipoSeminario777').on('submit',function(event){
                   event.preventDefault();

                    let tipo2 = $('select[name=id_categoria]').val();

                    let dados = {
                        id_participanteActividade:id_participanteActividade2,
                        tipo: tipo2
                    }

                    $.ajax({
                        type: 'post',
                        data: dados,
                        url: 'http://localhost/KEDA/actividade/OpdateTipoParticipante',
                        beforeSend: function() {
                            $('#conteudoCarregarAdicionarCategoria').html('<div class="text-center"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only">Loading...</span></div></div>');
                        },
                        success: function(event) {
                            location.reload();
                        }
                    });
                })

            })

            
            $('button[data-eliminar-participante]').on('click', function(event){

                let id_participanteActividade8 = 0;
                event.preventDefault();

                if (!$('modal-default-eliminar-participante909').length) {
                    $('body').append(modalEliminarParticipante909);
                }

                id_participanteActividade8 = $(this).attr('data-eliminar-participante');

                let dados = {
                    id_participanteActividade:id_participanteActividade8,
                    id_actividade: idEvento2
                }

                $('#dataComfirmParticipanteSeminarioElim').on('click', function(event){
                    
                
                    event.preventDefault();

                    $.ajax({
                        type: 'post',
                        data: dados,
                        url: 'http://localhost/KEDA/actividade/eliminarParticipanteActividade',
                        success: function(event){
                           
                        },
                        beforeSend: function(){

                        }
                    })
                    
                })

                $('#modal-default-eliminar-participante909').modal('show');
            })

        });
    });
}

//metodo para carregar os participantes do campeonato
function carregarAllParticipanteCampeonato() {

  
    let idEvento2 = $('#me-md-graduacao12').attr('id_actividade');


    $.post('http://localhost/KEDA/actividade/verSeminarioTipo', { idEvento2 }, function(event3) {


        if (event3 === 2) {
            $('#controlPainel123').attr('hidden', 'hidden');
        } else {
            $('#controlPainel123').removeAttr('hidden');
        }

        let idEvento3 = 1;

        $.post('http://localhost/KEDA/Campeonato/getParticipantes', { idEvento3 }, function(retorno) {


            $teste = JSON.parse(retorno);
            

            let tableCategoria = `<table id="example1" class="table table-striped table-sm text-sm">
                              <thead>
                                <tr>
                                  <th style="width: 10px">N-</th>
                                  <th>Nome Completo</th>
                                  <th>Bilhete de Identidade</th>
                                  <th>Data de Nascimento</th>
                                  <th>Categoria</th>
                                  <th>Provincia</th>
                                  <th>Genero</th>
                                  <th class="text-center project-actions project-actions234">Funcao</th>
                                </tr>
                              </thead>`;

            tableCategoria += `<tbody>`;
            let soma = 0;
            $.each($teste, function(i, retorno1) {

                tableCategoria += `<tr>
                <td>${ soma = soma + 1}</td>
                <td>${retorno1.nome_participante}</td>
                <td>${retorno1.bilhete_identidade}</td>
                <td>${retorno1.dataNascimento}</td>
                <td>${retorno1.categoria}</td>
                <td>${retorno1.provincia}</td>
                <td>${retorno1.genero}</td>
                <td class="text-center project-actions project-actions234">${retorno1.funcao}</td>`;
               
            });
            
            tableCategoria += `</tbody>`
            tableCategoria += `</table>`;

            $('#mostrarSeminarioFinal455677').html(tableCategoria);

            // $('a[id-participante]').on('click', function(event) {
            //     event.preventDefault();
            //     let id_participante = $(this).attr('id-participante');
            //     let statusparticipante = $(this).attr('status-participante75');

            //     let dados = {
            //         id_participante: id_participante,
            //         statusparticipante: statusparticipante
            //     }

            //     $.ajax({
            //         type: 'post',
            //         data: dados,
            //         url: 'http://localhost/KEDA/actividade/controlarStatuParticipante',
            //         success: function(event) {
            //             carregarAllParticipanteSeminarioFinal();
            //         },
            //         beforeSend: function() {
            //             $('button[id=' + id_participante + ']').html('<div class="spinner-border spinner-border-sm" role = "status"><span class="sr-only"> Loading... </span></div>');
            //         }
            //     })

            // })

        });
    });

}

carregarAllParticipanteCampeonato();

//fim do metodo

function carregarAllParticipanteSeminarioFinal() {
   
    let idEvento2 = $('#me-md-graduacao12').attr('id_actividade');


    $.post('http://localhost/KEDA/actividade/verSeminarioTipo', { idEvento2 }, function(event3) {

        if (event3 === 2) {
            $('#controlPainel123').attr('hidden', 'hidden');
        } else {
            $('#controlPainel123').removeAttr('hidden');
        }

        $.post('http://localhost/KEDA/actividade/getParticipantesEvento', { idEvento2 }, function(retorno) {


            $teste = JSON.parse(retorno);

            let tableCategoria = `<table id="example1" class="table table-striped table-sm text-sm">
                              <thead>
                                <tr>
                                  <th style="width: 10px">N-</th>
                                  <th>Nome Completo</th>
                                  <th>Graduacao Atual</th>
                                  <th>Graduacao</th>
                                  <th>Exame</th>
                                  <th>Status</th>
                                  <th class="text-center project-actions project-actions234">Accoes</th>
                                </tr>
                              </thead>`;

            tableCategoria += `<tbody>`;
            let soma = 0;
            $.each($teste, function(i, retorno1) {
                tableCategoria += `<tr>
                <td>${ soma = soma + 1}</td>
                <td>${retorno1.nome_participante}</td>
                <td>${retorno1.graduacao}</td>
                <td>${retorno1.graduacao}</td>`;
                tableCategoria += `<td>${retorno1.tipo}</td>`;
                tableCategoria += `<td>`;
                if (retorno1.status !== 'Aprovado') {
                    tableCategoria += `<small class="badge badge-danger"><i class="fa fa-user-times"></i> ${retorno1.status}</small>`;
                } else {
                    tableCategoria += `<small class="badge badge-success"><i class="fa fa-user-check"></i> ${retorno1.status}</small>`;
                }

                tableCategoria += `</td>
                <td class="text-center project-actions project-actions234">
                  
                      <div class="btn-group">
                          <button type="button" class="btn btn-info dropdown-toggle btn-sm loading4756" data-toggle="dropdown" id="${retorno1.id_participanteActividade}" aria-expanded="false" style="right: 15px;"><i class="fa fa-bars"></i></button>
                          <div class="dropdown-menu" role="menu" style="">
                              <a class="dropdown-item" href="#" id-participante="${retorno1.id_participanteActividade}" status-participante75="Aprovado"><i class="fas fa-user-check fa-fw"></i> Aprovado </a>
                              <a class="dropdown-item" href="#" id-participante="${retorno1.id_participanteActividade}" status-participante75="Reprovado"><i class="fas fa-user-times fa-fw"></i> Reprovado </a>
                          </div>
                      </div>
                  
                </td>
              </tr>`
            });
            tableCategoria += `</tbody>`
            tableCategoria += `</table>`;

            $('#mostrarSeminarioFinal45567').html(tableCategoria);

            $('a[id-participante]').on('click', function(event) {
                event.preventDefault();
                let id_participante = $(this).attr('id-participante');
                let statusparticipante = $(this).attr('status-participante75');

                let dados = {
                    id_participante: id_participante,
                    statusparticipante: statusparticipante
                }

                $.ajax({
                    type: 'post',
                    data: dados,
                    url: 'http://localhost/KEDA/actividade/controlarStatuParticipante',
                    success: function(event) {
                        carregarAllParticipanteSeminarioFinal();
                    },
                    beforeSend: function() {
                        $('button[id=' + id_participante + ']').html('<div class="spinner-border spinner-border-sm" role = "status"><span class="sr-only"> Loading... </span></div>');
                    }
                })

            })

        });
    });

}

carregarAllParticipanteSeminarioFinal();

function pegarViaBilheteParticipanteEventoSeminario() {

    let modalAdicionarParticipantePesquisas = `<div class="modal fade text-sm pb-5 hide" id="modal-default-participante-Pesquisa-4567">
    <div class="modal-dialog" style="max-width:678px">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title text-sm"><i class="fas fa-user-plus"></i> ADICIONAR PARTICIPANTE</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form method="post" id="AddParticipanteEvente874">
            <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3 row">
                <div class="col-md-4">
                    <img class="img-bordered-sm img-bordered-sm23" src="http://localhost/KEDA/assets/images/3.JPG" alt="user image" style="height:180px; width:150px;border-radius:24px;">
                </div>
                <div class="col-md-8" id="conteudoCarregar5955">                     
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label class="text-nowrap">Nome Completo</label>
                                <input name="Nome" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_bilhete" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label class="text-nowrap">Genero</label>
                                <input name="genero" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="" readonly="readonly">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="text-nowrap">Numero de Bilhete</label>
                                <input name="bilheteNome" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="bilhete_completo_id" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-row"> 
                            <div class="form-group col-sm-6">
                                <label class="text-nowrap">Provincia</label>
                                <input name="provincia" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="" readonly="readonly">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="text-nowrap">Graduacao</label>
                                <input name="graduacao" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="graduacao" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-row" hidden> 
                            <div class="form-group col-sm-12">
                                <input name="data" id="datadeNascimento" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label class="text-nowrap">Tipo</label>
                                <select name="tipo" class="form-control form-control-sm">
                                    <option value="Oficiaizacao de Faixas Negras">Oficiaizacao de Faixas Negras</option>
                                    <option value="Graduacao">Graduacao</option>
                                    <option value="Reciclagem">Reciclagem</option>
                                </select>
                            </div>
                        </div>
                              
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Adicionar </button>        
                </div>
            </div>
            
        </form>
      </div>
    </div>   
    </div>`;

    let modalPesquisaVazia = `<div class="modal fade text-sm pb-5 hide" id="modal-default-Pesquisa-vazia">
        <div class="modal-dialog" style="max-width:578px">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
         
                <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                    <div class="col-md-12 text-center" id="conteudoCarregar5955">
                        <p class="text-muted" id="bilhete2">addadadasdasd</p>
                        <span class="text-muted">NENHUMA INFORMACAO ASSOCIADA A ESSE NUMERO DE BILHETE</span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>  
                </div>
            </div>
        </div>
    </div>`;

    let numeroBI = document.getElementById("table_search876").value;

    let id_associacao_pro = $('#table_search876').attr('dataid-id_associacao_pro');

    let dados = {
        numero: numeroBI
    }

    if (numeroBI.length === 14) {
        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/actividade/BuscaByBilheteMestreGraduacao',
            beforeSend: function() {
                $('#input-group-sm-1234').html('<div class="spinner-grow text-primary" role="status"></div>');
            },
            success: function(event) {
                setTimeout(function() {

                        $('#input-group-sm-1234').html('<i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" id="table_search876" name="table_search" class="form-control float-left" dataid-id_associacao_pro="<?php echo $id_associacao_pro;?>" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteEvento()">');

                        $('#verAllParticipante789P23231354567').html('');
                        let event2 = JSON.parse(event);


                        let numeroBI = event2.n_bilhete;
                        let nomeComplet = event2.nome;
                        let dataNascimento = event2.data_nascimento;
                        let imagem = event2.imagem;
                        let genero = event2.genero;
                        let provincia = event2.descricao_associacao;
                        let graduacao = event2.graduacao;

                        if (event2 == 7) {

                            if (!$('modal-default-Pesquisa-vazia').length) {
                                $('body').append(modalPesquisaVazia);
                            }

                            $('#bilhete2').html(dados.numero);

                            $('#modal-default-Pesquisa-vazia').modal({ show: true });



                        } else {

                            $(document).ready(function() {

                                let id_associacao_pro2 = $('#categoriaNacional768').attr('data-id_associacao_pro2');
                                let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

                                let dado90 = {
                                    id_associacao_pro2: id_associacao_pro2,
                                    idEvento2: idEvento2
                                }

                                if (!$('modal-default-participante-Pesquisa-4567').length) {
                                    $('body').append(modalAdicionarParticipantePesquisas);
                                }

                                let imagem24 = 'http://localhost/KEDA/uploads/product/' + imagem;


                                $('#nome_completo_bilhete').val(nomeComplet);
                                $('#datadeNascimento').val(dataNascimento);
                                $('#genero_completo_id').val(genero);
                                $('#bilhete_completo_id').val(numeroBI);
                                $('#provincia_bilhete').val(provincia);

                                if (graduacao === '0') {
                                    $('#graduacao').val("Faixa Preta");
                                } else {
                                    $('#graduacao').val(graduacao + "º DAN");
                                }

                                if (imagem24 !== '') {
                                    $('.img-bordered-sm23').attr('src', imagem24);
                                }

                                $('#modal-default-participante-Pesquisa-4567').modal({ show: true });

                                $('#AddParticipanteEvente874').on('submit', function(event) {

                                    event.preventDefault();

                                    let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

                                    let graduacao2 = $('input[name=graduacao]').val();
                                    let tipo = $('select[name=tipo]').val();
                                    let bilhete = $('input[name=bilheteNome]').val();
                                    let nome = $('input[name=Nome]').val();
                                    let provincia = $('input[name=provincia]').val();
                                    let genero = $('input[name=genero]').val();
                                    let data = $('input[name=data]').val()

                                    let dados = {
                                        id_actividade: idEvento2,
                                        nome: nome,
                                        bilhete: bilhete,
                                        data: data,
                                        genero: genero,
                                        provincia: provincia,
                                        graduacao: graduacao2,
                                        tipo: tipo
                                    }

                                    $.ajax({
                                        type: 'POST',
                                        data: dados,
                                        url: 'http://localhost/KEDA/actividade/setVParticipanteEventoGraduacao',
                                        beforeSend: function() {
                                            $('#bodyMensagem89').html('<div class="spinner-grow text-primary text-center" style="margin-left:300px" role="status"></div>');
                                        },
                                        success: function(event) {

                                            location.reload();

                                        }
                                    })

                                })
                            })
                        }
                    },
                    1000);
            }
        })
    } else {

    }

}

carregarAllParticipanteSeminario();

$('#me-md-graduacao12').on('click', function() {
alert('olamundo');
    let controlLayout = $(this).attr('nome_actividade');

    if (controlLayout !== 'Campeonato') {

        if (!$('modal-default-campeonato-45672').length) {
            $('body').append(modalAdionarIntervaloGraduacao2);
        }

        let id_actividade = $(this).attr('id_actividade');

        $('.radio').on('click', function() {

            if (!$(this).is(":checked")) {

                selected67.splice(selected67.indexOf($(this).val()), 1);

            } else {

                selected67.push($(this).val());

            }

        })

        $('#AddCampeonatoEvente874').submit(function(event) {

            event.preventDefault();

            $.post('http://localhost/KEDA/actividade/setSeminario', { id_actividade }, function(event) {

                selected67.push(id_actividade);
                selected67.push(event);

                $.ajax({
                    type: 'post',
                    data: { dado: selected67 },
                    url: 'http://localhost/KEDA/actividade/setSeminarioTipo',
                    beforeSend: function(event) {
                        $('#bodyMensagem89127358').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;margin-left:226px" role="status"><span class="sr-only"> Loading... </span></div></div>');
                    },
                    success: function(event) {
                        location.reload();
                    }
                })

            })
        })
        

        $('#modal-default-campeonato-45672').modal('show');

    } else {
        

        if (!$('modal-default-campeonato-4567').length) {
            $('body').append(modalAdionarIntervaloGraduacao);
        }

        $('#modal-default-campeonato-4567').modal('show');

        $.ajax({
            type: 'POST',
            url: 'http://localhost/KEDA/Campeonato/getProvincia',
            beforeSend: function() {
                $('#funcaoCaid2113').html('aaddasdasd');
            },
            success: function(event) {
                $('#provincia343').html(event);
            }
        })

        
        let id_actividade = $(this).attr('id_actividade');

        // $.post('http://localhost/KEDA/Campeonato/verificarCampeonatoId', {id_actividade}, function(event){
            // alert(event);
        // })
        
        $('#fk_actividadeC').val(id_actividade);

        let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');

        $('#id_associacao_pro').val(id_associacao_pro2);

        if(id_associacao_pro2 == 0){
            // $('#id_associacao_pro2').val(id_associacao_pro2);
            $('#tipoCampeonato').html('<option value="Nacional">Nacional</option><option value="Africano">Africano</option><option value="Mundial">Mundial</option>');
        }

        $('#actividade_id').val(actividade_id);

        $('#AddCampeonatoEvente874').submit(function(event) {
            event.preventDefault();

            let dados = $(this).serialize();

            // alert(dados);

            $.ajax({
                type: 'post',
                data: dados,
                url: 'http://localhost/KEDA/Campeonato/addCampeonato',
                beforeSend: function(event) {
                    $('#conteudoCarregar5955').html('<div class="text-center"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                },
                success: function(event) {
                    location.reload();
                }
            })

        })

    }
})


$('#id_associacao_pro1989').on('click', function(event) {

    id_associacao_pro = $(this).attr('id_associacao_pro');

    event.preventDefault();

    let dado = {
        id_associacao_pro: id_associacao_pro
    }

    $.ajax({
        type: 'post',
        data: dado,
        url: 'http://localhost/KEDA/Orgao_Social/adicionarMandato',
        success: function(event) {

        },
        beforeSend: function(event) {

        }
    })

})

var modalverMembroOrgao123 = `<div class="modal fade text-sm pb-5" id="modal-default-modalverMembroOrgao123">
    <div class="modal-dialog modal-lg" style="" id="MOSMDAAA576">
        <div class="modal-content">
   
                <div class="card-header border-0">
                    <h3 class="card-title mem23">Products</h3>
                </div>
                <div class="row col-lg-12">
                    <div class="card-body table-responsive p-0 col-lg-12 col-12" style="" id="MOSMD576">
                        <table class="table table-striped table-valign-middle table-sm">
                            <thead>
                            <tr>
                            <th>CARGO</th>
                            <th>NOME COMPLETO</th>
                            <th>TELEFONE</th>
                            <th>More</th>
                            </tr>
                            </thead>
                            <tbody class="p03">
                            
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body table-responsive col-lg-4 p-0 col-12" id="mostrarIdMembro" hidden>
                      
                    </div>
                    
                </div>
           
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm fecharModal5674" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                </div>
          
        </div>
        </div>  
    </div>`;


$('button[data-id_orgao2]').on('click', function() {

    $('#mostrarIdMembro').attr('hidden','hidden')

    let classe = 'card-body table-responsive p-0 col-lg-12 col-12';

    $('#MOSMD576').attr('class',classe);
    $('#MOSMDAAA576').attr('style','max-width:800px');

    let id_orgao = $(this).attr('data-id_mandato2');
    let id_orgao_social = $(this).attr('data-id_orgao2');

    if (!$('modal-default-modalverMembroOrgao123').length) {
        $('body').append(modalverMembroOrgao123);
    }

    let dados = {
        id_orgao: id_orgao,
        id_orgao_social: id_orgao_social
    }

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Orgao_Social/listarMandatoOrgaoMembroView',
        beforeSend: function(event) {
            $('button[data-id_orgao2 = '+ id_orgao_social +']').html('<div class="spinner-border spinner-border-sm" role = "status"><span class="sr-only"> Loading... </span></div>');
        },
        success: function(event) {
            $('button[data-id_orgao2 = '+ id_orgao_social +']').html('<span class="badge font-weight-bold" style="font-size:130%;right:9px">+<?php echo $numero?></span>');
            $('.p03').html('');

            let event2 = JSON.parse(event);

            let mostra = '';


            for (let i = 0; i < event2.length; i++) {
                $('.mem23').html(event2[i].descricao);


                mostra = `<tr>`;
                if(event2[i].imagem_membro === null){
                    mostra += `<td>
                                <img src="http://localhost/KEDA/assets/dist/img/avatar.png" alt="Product 1"  style="height:32px;weight:32px" class="img-circle img-size-32 mr-2" id="imgcircle678">${event2[i].nome_cargo_membro}</td>
                                <td>${event2[i].nome} 
                            </td>`;
                }else{
                    mostra += `<td>
                                <img src="http://localhost/KEDA/uploads/product/${event2[i].imagem_membro}" alt="Product 1"  style="height:32px;weight:32px" class="img-circle img-size-32 mr-2" id="imgcircle678">${event2[i].nome_cargo_membro}</td>
                                <td>${event2[i].nome} 
                            </td>`;   
                }
                mostra +=`<td>
                            
                           ${event2[i].telefone}
                        </td>
                        <td>
                            <a href="#" class="text-muted" id_membro="${event2[i].id_membro}">
                                <i class="fas fa-eye"></i> 
                            </a> 
                        </td>
                         
                    </tr>`;


                $('.p03').append(mostra);

            };


            $('a[id_membro]').click(function(){

                let id_membro = $(this).attr('id_membro');

                let dado = {
                    id_membro:id_membro
                }

                $.ajax({
                    type: 'post',
                    data: dado,
                    url: 'http://localhost/KEDA/Orgao_Social/listarMandatoOrgaoMembroView2',
                    beforeSend: function(){

                    },
                    success: function(event){
                        let dado = JSON.parse(event);

                        let classe = 'card-body table-responsive p-0 col-lg-8 col-12';

                        $('#MOSMD576').attr('class',classe);
                        $('#MOSMDAAA576').attr('style','max-width:900px');

                        let mostrar = " ";

                        mostrar += `<div class="card-body box-profile">`;
                        mostrar +=    `<div class="text-center">`;
                        if(dado[0].imagem_membro === null){
                            mostrar +=         `<img class="profile-user-img img-fluid img-circle" src="http://localhost/KEDA/assets/dist/img/avatar.png" alt="User profile picture" style="height:170px;width:170px;border:none">`;
                        }else{
                            mostrar +=         `<img class="profile-user-img img-fluid img-circle" src="http://localhost/KEDA/uploads/product/${dado[0].imagem_membro}" alt="User profile picture" style="height:170px;width:170px;border:none">`;
                        }
                        mostrar +=    `</div>
                                        <h3 class="profile-username text-center upppercase">${dado[0].nome}</h3>
                                        <h4 class="profile-username text-center">${dado[0].telefone}</h4>
                                        <p class="text-muted text-center">${dado[0].nome_cargo_membro}</p>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm m-3" id="botaoPo123"> Ocultar </button>`;

                        $('#mostrarIdMembro').removeAttr('hidden').html(mostrar);

                        $('#botaoPo123').on('click', function(event){

                            event.preventDefault();

                            $('#mostrarIdMembro').attr('hidden','hidden')

                            let classe = 'card-body table-responsive p-0 col-lg-12 col-12';

                            $('#MOSMD576').attr('class',classe);
                            $('#MOSMDAAA576').attr('style','max-width:800px');

                            $('#mostrarIdMembro').html(" ");

                        })
                    }
                })

            })


        }
    })

    $('#modal-default-modalverMembroOrgao123').modal('show');
})


//------------------------------------------------------inicio modal get competidor----------------------------------------------------------------------------------

var modalAddCompetidor = `<div class="modal fade text-sm pb-5" id="modal-default-modalAddCompetidor">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase">Competidor</h3>
            </div>
            <div id="control65289074rw">
                <div class="msg-3457 text-danger ml-3 mb-3">
                        
                </div>

                <div class="alert alert-danger alert-dismissible msg-34572 rounded-0" hidden>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5 class="msg-345info45"><i class="icon fas fa-ban"></i> Alerta! Esses dados ja foram inseridos</h5>

                    <div class="msg-34579 ml-3 mb-3">
                        
                    </div>

                </div>

                <form id="formEscalaoEnviar56">
                <div class="row col-lg-12" style="left: 12px">
                
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Selecione o Escalao Etario</label>
                            <select class="form-control form-control-sm" id="escalaoCampeonato78" name="escalaoCampeonato78">
                            
                            </select>
                        </div>
                    </div>
                
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Genero</label> 
                        <select class="form-control form-control-sm" id="genero78" name="genero78">
                        
                        </select>
                    </div>
                    </div>

                    <div class="col-sm-4">
                    <div class="form-group" hidden>
                        <label>Categoria de Peso</label> 
                        <select class="form-control form-control-sm" id="genero78" name="genero78">
                        
                        </select>
                    </div>
                    <div class="form-group" hidden>
                        <label>Genero</label> 
                        <select class="form-control form-control-sm" id="idadeInicial78" name="idadeInicial78">
                        
                        </select>
                    </div>
                    <div class="form-group" hidden>
                        <label>Genero</label> 
                        <select class="form-control form-control-sm" id="idadeLimite78" name="idadeLimite78">
                        
                        </select>
                    </div>
                    </div>
                
                </div>
                </form>

                <div class="row col-lg-12">
                    <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234COMP">
                        <table class="table table-striped table-sm table-valign-middle">
                            <thead>
                            <tr>
                            <th>Foto</th>
                            <th>Nome Completo</th>
                            <th>Peso</th>
                            <th>Categoria de Peso</th>
                            <th>Academia</th>
                            <th class="text-center">More</th>
                            </tr>
                            </thead>
                            <tbody class="p034COMP">
                            
                            </tbody>
                        </table>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddTodosEscolha321COMP"><i class="fas fa-user-plus"></i> Adicionar Todos </button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0 col-lg-6 p-0 col-6 mostrar7648COMP mostrar7648COMP234" id="primeira1234COMP" hidden>
                        <table class="table table-striped table-sm table-valign-middle">
                            <thead>
                            <tr>
                            <th>Foto</th>
                            <th>Nome Completo</th>
                            <th>Peso</th>
                            <th>Categoria de Peso</th>
                            <th>Academia</th>
                            <th class="text-center">More</th>
                            </tr>
                            </thead>
                            <tbody class="p0348COMP">
                            
                            </tbody>
                        </table>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-success btn-sm mostrar76489 AddTodosEscolha32190"><i class="fas fa-user-plus"></i> Adicionar Selecionado </button>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm fechar4572" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321COMP" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div> 
</div>`;


let arraygetPat = [];

arrayADDparticipanteCompetidor = [];

$('.idCompetidor').on('click', function(event) {
    
    if (!$('modal-default-modalAddCompetidor').length) {
        $('body').append(modalAddCompetidor);
    }

    let id_ddd = $('#pegarListaCategoria7645390').attr('data_id_campeonato');

    alert();

    $.post('http://localhost/KEDA/Campeonato/getEscalaoCampeonato',{id_ddd},function(event){

       if(event == 0){
        $('#control65289074rw').html('<div class="text-center p-5">CLIQUE EM <i class="fa fa-edit text-info">Inscricao</i> PARA DEFINIR O ESCALAO ETARIO</div>');
       }
       
        $('#escalaoCampeonato78').html('<option></option>');
        $('#escalaoCampeonato78').append(event);

    })

    $('.fechar4572').click(function(){
        location.reload();
        $('.msg-34572').attr('hidden','hidden');
    })    

    $('#escalaoCampeonato78').on('change', function(event){
       event.preventDefault();

       $('.p034COMP').html("");

       let teste = $('select[name=escalaoCampeonato78]').val();
     
        if(teste === "sub16"){

            let dados = {
                id_ddd:id_ddd,
                teste:teste
            };

           $('#idadeInicial78').html('<option>16</option>');
           $('#idadeLimite78').html('<option>14</option>');
      
           $.post('http://localhost/KEDA/Campeonato/getEscalaogenero55',dados,function(event){

                let event5 = JSON.parse(event);
                

                let mostra;

                $('#genero78').html('');

                $('#genero78').html('<option> ------------//------------- </option>');

                for(let i in event5){
                    mostra = `<option value="${event5[i].genero}">${event5[i].genero}</option>`;
                    $('#genero78').removeAttr('disabled').append(mostra);
                }
        
            })

        }

        if(teste === "sub21") {

            let dados = {
                id_ddd:id_ddd,
                teste:teste
            };

            $('#idadeInicial78').html('<option>21</option>');
            $('#idadeLimite78').html('<option>18</option>');

            $.post('http://localhost/KEDA/Campeonato/getEscalaogenero55',dados,function(event){
                let event5 = JSON.parse(event);

                let mostra;

                $('#genero78').html('');

                $('#genero78').html('<option> ------------//------------- </option>');

                for(let i in event5){
                    mostra = `<option value="${event5[i].genero}">${event5[i].genero}</option>`;
                    $('#genero78').removeAttr('disabled').append(mostra);
                }
            
            })
          
            // mostra = `<option> ------------//------------- </option>
            //         <option value="Femenino">Femenino</option>
            //         <option value="Masculino">Masculino</option>
            //         <option value="Todos">Todos</option>`;

            // $('#genero78').removeAttr('disabled').html(mostra);
        }
        
        if(teste === "Veterano Absoluto") {

            let dados = {
                id_ddd:id_ddd,
                teste:teste
            };

            $('#idadeInicial78').html('<option>36</option>');
            $('#idadeLimite78').html('<option>36</option>');
                
            let mostra = '';
          
            $.post('http://localhost/KEDA/Campeonato/getEscalaogenero55',dados,function(event){
               
                $('#genero78').removeAttr('disabled').append(event);
            })

           
            $('#idadeLimite78').html("").attr('disabled','disabled');

         }

         if(teste === "Adultos") {

            // $('#idadeInicial78').html('<option>36</option>');
            let mostra = '';
            mostra = `<option></option>
                      <option>22</option>
                      `;
 
            $('#idadeLimite78').html(mostra);

            let data = new Date();
            let anoAtual = data.getFullYear();
    
            let anoInicial = anoAtual-21;
            let anoFinal = anoAtual-35;
            
            let dados = {
                escalao : "Adultos",
                anoInicial: anoInicial,
                anoFinal:anoFinal
            }

            $.ajax({
                type: 'post',
                data: dados,
                url: 'http://localhost/KEDA/Atleta/listarAtletaCompetidor',
                beforeSend: function() {
                    $('.p034COMP').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                },
                success: function(event) {
                    $('.p034COMP').html('');
                    let event2 = JSON.parse(event);

                    console.log(event2);
                    arraygetPat = event2;

                    arraygetPat.push();
        
                    let titulo = $('.idCompetidor').text();
        
                    $('.mem23').html('<i class="fas fa-user-plus"></i>' + titulo);
        
                    let mostra = '';
        
                    for (let i = 0; i < event2.length; i++) {
                        mostra = `<tr>
                                <td>`;
                        if((event2[i].imagem).length !== 0){
                            mostra +=`<img src="http://localhost/KEDA/uploads/product/${event2[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">`;
                        }else{
                            mostra +=`<img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">`;
                        }
                        mostra +=`</td> 
                                <td>
                                ${event2[i].nome}
                                </td>
                                <td>
                                ${event2[i].peso} kg
                                </td>
                                <td>
                                ${event2[i].nome_academia}
                                </td>
                            
                                <td class="text-center">
                                    <a href="#" data-add-id_atleta="${event2[i].id_atleta}" class="btn btn-sm btn-info width-60 m-r-2"> + </a> 
                                </td>  
                            </tr>`;
        
        
                        $('.p034COMP').append(mostra);
                    }
        
                    $('a[data-add-id_atleta]').on('click', function(event) {
        
                        event.preventDefault();
        
                        let id_atleta = $(this).attr('data-add-id_atleta');
        
                        $.post('http://localhost/KEDA/Atleta/getIDAtletaCompetidor23', { id_atleta }, function(e) {
        
                            let ee = JSON.parse(e);

                            console.log(ee);

        
                            if (arrayADDparticipanteCompetidor.length === 0) {
        
                                arrayADDparticipanteCompetidor.push(
                                    ee[0]
                                );
        
                                mostrarADDCompetidor(arrayADDparticipanteCompetidor);
        
                            } else {
        
                                if (arrayADDparticipanteCompetidor.findIndex(x => x.id_atleta === id_atleta) < 0) {
                                    $('.msg-3457').html('');
                                    arrayADDparticipanteCompetidor.push(
                                        ee[0]
                                    );
        
                                    mostrarADDCompetidor(arrayADDparticipanteCompetidor);
        
                                } else {
                                    let mostra = `<h3 class="card-title text-bold text-uppercase"> O Competidor ${ee[0].nome} ja foi Adicionado a lista </h3>`;
                                    $('.msg-3457').html(mostra);
        
                                    mostrarADDCompetidor(arrayADDparticipanteCompetidor);
                                }
        
                            }
        
                        });
                    })
        
                    $('#limparEscolha321COMP').click(function() {
                        arrayADDparticipanteCompetidor = [];
                        mostrarADDCompetidor(arrayADDparticipanteCompetidor);
                    })
        
                    $('#AddTodosEscolha321COMP').unbind('click').click(function(event) {

                        event.preventDefault();

                            let dados90 = [];
        
                            for (let i = 0; i < arraygetPat.length; i++) {
                                dados90.push(event2[i]);
                            }

                            let escalao = $('select[name=escalaoCampeonato78]').val();

                            dados90.push({escalao:escalao})

                            $.ajax({
                                type: 'POST',
                                data: { dados: dados90 },
                                url: 'http://localhost/KEDA/Campeonato/setParticipanteCompEvento',
                                beforeSend: function() {
                                    $('#primeira1234COMP').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                                },
                                success: function(event) {

                                    let inf = JSON.parse(event);

                                   alert(inf);
                                    // carregarAllParticipanteSeminario();
                                        // location.reload();
                                }
                            })
                    
                    })
        
                    $('.AddTodosEscolha32190').unbind('click').click(function(event){

                        event.preventDefault();

                        let escalao = $('select[name=escalaoCampeonato78]').val();

                        arrayADDparticipanteCompetidor.push({escalao:escalao});

                        $.ajax({
                            type: 'POST',
                            data: { dados: arrayADDparticipanteCompetidor },
                            url: 'http://localhost/KEDA/Campeonato/setParticipanteCompEvento',
                            beforeSend: function() {
                                $('.mostrar7648COMP234').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                            },
                            success: function(event) {
                                carregarAllParticipanteSeminario();
                                location.reload();
                            }
                        })
        
                    })
        
        
        
                }
            })  

         }
       
    })

    $('#genero78').on('change', function(event){

    
        let escalao = $('select[name=escalaoCampeonato78]').val();

        let idadeFinal = $('select[name=idadeInicial78]').val();
        let idadeInicial = $('select[name=idadeLimite78]').val();
        let genero = $('select[name=genero78]').val();

        let controlPega = {
            escalao:escalao,
            genero:genero
        }


        $.post('http://localhost/KEDA/Campeonato/buscarSelectCategoriaPeso2',controlPega,function(event){
            let eventCategoriasPeso = JSON.parse(event);
            console.log(eventCategoriasPeso);   
            // control = event2;

            let data = new Date();
            let anoAtual = data.getFullYear();
    
            let anoFinal = anoAtual-idadeInicial;
            let anoInicial = anoAtual-idadeFinal;
            
            let dados = {
                anoInicial:anoInicial,
                anoFinal:anoFinal,
                genero:genero
            }

            console.log(dados);
      
            function verificarCategoria(peso, sexo, escalao){
    
                if(sexo === "Masculino" && escalao === "sub16"){
                   if(peso <= 38){
                        return "-38";
                   }
                   if(peso >= 38 && peso <= 42){
                        return "-42";
                   }
                   if(peso >= 42 && peso <= 46){
                        return "-46";
                   }
                   if(peso >= 46 && peso <= 50){
                        return "-50";
                   }
                   if(peso >= 50 && peso <= 55){
                        return "-55";
                   }
                   if(peso >= 55 && peso <= 60){
                        return "-60";
                   }
                   if(peso >= 60 && peso <= 66){
                        return "-66";
                   }
                   if(peso >= 66 && peso <= 73){
                        return "-73";
                   }
                   if(peso >= 73){
                        return "+73";
                   }
                }
            
                if(sexo === "Femenino" && escalao === "sub16"){
                  if(peso <= 38){
                       return "-38";
                  }
                  if(peso >= 38 && peso <= 42){
                       return "-42";
                  }
                  if(peso >= 42 && peso <= 46){
                       return "-46";
                  }
                  if(peso >= 46 && peso <= 50){
                       return "-50";
                  }
                  if(peso >= 50 && peso <= 55){
                       return "-55";
                  }
                  if(peso >= 55 && peso <= 60){
                       return "-60";
                  }
                  if(peso >= 60 && peso <= 66){
                       return "-66";
                  }
                  if(peso >= 66 && peso <= 73){
                       return "-73";
                  }
                  if(peso >= 73 && peso <= 79){
                       return "+73";
                  }
                }
            
                if(sexo === "Masculino" && escalao === "sub21"){
                  if(peso <= 56){
                      return "-56";
                  }
                  if(peso >= 56 && peso <= 62){
                      return "-62";
                  }
                  if(peso >= 62 && peso <= 69){
                      return "-69";
                  }
                  if(peso >= 69 && peso <= 77){
                      return "-77";
                  }
                  if(peso >= 77 && peso <= 85){
                      return "-85";
                  }
                  if(peso >= 85 && peso <= 94){
                      return "-94";
                  }
                  if(peso >= 94){
                      return "+94";
                  }
                  
                }
            
                if(sexo === "Femenino" && escalao === "sub21"){
                  if(peso >= 45 && peso <= 48){
                      return "-48";
                  }
                  if(peso >= 48 && peso <= 52){
                      return "-52";
                  }
                  if(peso >= 52 && peso <= 57){
                      return "-57";
                  }
                  if(peso >= 57 && peso <= 63){
                      return "-63";
                  }
                  if(peso >= 63 && peso <= 70){
                      return "-70";
                  }
                  if(peso >= 73){
                      return "+70";
                  }
                
                }
            
                if(sexo === "Masculino" && escalao === "Veterano Absoluto"){
                  if(peso <= 56){
                      return "-56";
                  }
                  if(peso >= 56 && peso <= 62){
                      return "-62";
                  }
                  if(peso >= 62 && peso <= 69){
                      return "-69";
                  }
                  if(peso >= 69 && peso <= 77){
                      return "-77";
                  }
                  if(peso >= 77 && peso <= 85){
                      return "-85";
                  }
                  if(peso >= 85 && peso <= 94){
                      return "-94";
                  }
                  if(peso >= 94){
                      return "+94";
                  }
                
                }
            
                if(sexo === "Femenino" && escalao === "Veterano Absoluto"){
                  if(peso >= 45 && peso <= 48){
                      return "-48";
                  }
                  if(peso >= 48 && peso <= 52){
                      return "-52";
                  }
                  if(peso >= 52 && peso <= 57){
                      return "-57";
                  }
                  if(peso >= 57 && peso <= 63){
                      return "-63";
                  }
                  if(peso >= 63 && peso <= 70){
                      return "-70";
                  }
                  if(peso >= 73){
                      return "+70";
                  }
                
                }
              
            }

    
            $.ajax({
                type: 'post',
                data: dados,
                url: 'http://localhost/KEDA/Atleta/listarAtletaCompetidor',
                beforeSend: function() {
                    $('.p034COMP').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                },
                success: function(event) {
                    $('.p034COMP').html('');
                    let event2 = JSON.parse(event);
                    console.log(event2);
                
                            let titulo = $('.idCompetidor').text();
                
                            $('.mem23').html('<i class="fas fa-user-plus"></i>' + titulo);
                
                            let mostra = '';
    
                                for (let i = 0; i < event2.length; i++) {
    
                                     let categoriaPeso = verificarCategoria(event2[i].peso, event2[i].genero, escalao);
console.log(categoriaPeso);
    
                                        if (eventCategoriasPeso.findIndex(x => x.descricao_categoriaPeso == categoriaPeso) < 0){
                                            
                                            // arraygetPat.push(event2[i]);
    
                                            // mostra = `<tr>
                                            // <td>`;
                                            // if((event2[i].imagem).length !== 0){
                                            //     mostra +=`<img src="http://localhost/KEDA/uploads/product/${event2[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">`;
                                            // }else{
                                            //     mostra +=`<img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">`;
                                            // }
                                            // mostra +=`</td> 
                                            //         <td>
                                            //         ${event2[i].nome}
                                            //         </td>
                                            //         <td>
                                            //         ${event2[i].peso} kg
                                            //         </td>
                                            //         <td>
                                            //         ${categoriaPeso} kg
                                            //         </td>
                                            //         <td>
                                            //         ${event2[i].nome_academia}
                                            //         </td>
                                                
                                            //         <td class="text-center">
                                            //             <a href="#" data-add-id_atleta="${event2[i].id_atleta}" class="btn btn-sm btn-info width-60 m-r-2"> + </a> 
                                            //         </td>  
                                            //     </tr>`;


                                            // $('.p034COMP').append(mostra);
                                            // console.log(arraygetPat);

                                        }else{
                                      
                                            arraygetPat.push(event2[i]);
    
                                            mostra = `<tr>
                                            <td>`;
                                            if((event2[i].imagem).length !== 0){
                                                mostra +=`<img src="http://localhost/KEDA/uploads/product/${event2[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">`;
                                            }else{
                                                mostra +=`<img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">`;
                                            }
                                            mostra +=`</td> 
                                                    <td>
                                                    ${event2[i].nome}
                                                    </td>
                                                    <td>
                                                    ${event2[i].peso} kg
                                                    </td>
                                                    <td>
                                                    ${categoriaPeso} kg
                                                    </td>
                                                    <td>
                                                    ${event2[i].nome_academia}
                                                    </td>
                                                
                                                    <td class="text-center">
                                                        <a href="#" data-add-id_atleta="${event2[i].id_atleta}" class="btn btn-sm btn-info width-60 m-r-2"> + </a> 
                                                    </td>  
                                                </tr>`;
                            
                            
                                            $('.p034COMP').append(mostra);
    
                                        }
                                }
                            
                
                            $('a[data-add-id_atleta]').on('click', function(event) {
               
                                event.preventDefault();
                
                                let id_atleta = $(this).attr('data-add-id_atleta');
                
                                $.post('http://localhost/KEDA/Atleta/getIDAtletaCompetidor23', { id_atleta }, function(e) {
                
                                    let ee = JSON.parse(e);

                                    console.log(ee);
    
                
                                    if (arrayADDparticipanteCompetidor.length === 0) {
                
                                        arrayADDparticipanteCompetidor.push(
                                            ee[0]
                                        );
                
                                        mostrarADDCompetidor(arrayADDparticipanteCompetidor);
                
                                    } else {
                
                                        if (arrayADDparticipanteCompetidor.findIndex(x => x.id_atleta === id_atleta) < 0) {
                                            $('.msg-3457').html('');
                                            arrayADDparticipanteCompetidor.push(
                                                ee[0]
                                            );
                
                                            mostrarADDCompetidor(arrayADDparticipanteCompetidor);
                
                                        } else {
                                            let mostra = `<h3 class="card-title text-bold text-uppercase" style="font-size:11px"> O Competidor ${ee[0].nome} ja foi Adicionado a lista </h3>`;
                                            $('.msg-3457').html(mostra);
                
                                            mostrarADDCompetidor(arrayADDparticipanteCompetidor);
                                        }
                
                                    }
                
                                });
                            })
                
                            $('#limparEscolha321COMP').click(function() {
                                arrayADDparticipanteCompetidor = [];
                                mostrarADDCompetidor(arrayADDparticipanteCompetidor);
                            })
                
                            $('#AddTodosEscolha321COMP').unbind('click').click(function(event) {
                                $('.msg-34579').html(" ");
                                event.preventDefault();
    
                                    let dados90 = [];

                                    console.log(arraygetPat);
                
                                    for (let i = 0; i < arraygetPat.length; i++) {
                                        dados90.push(arraygetPat[i]);
                                    }
    
                                    let escalao = $('select[name=escalaoCampeonato78]').val();
                                    
                                    let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');
    
                                    dados90.push({idcampeonato:idcampeonato}); 
                                    dados90.push({escalao:escalao}); 
    
                                    console.log(dados90);
    
                                    $.ajax({
                                        type: 'POST',
                                        data: { dados: dados90 },
                                        url: 'http://localhost/KEDA/Campeonato/setParticipanteCompEvento',
                                        beforeSend: function() {
                                            // $('#primeira1234COMP').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                                            $('.p034COMP').html('<div class="d-flex justify-content-center" style="margin-top: 29px;margin-bottom: 29px;"><div class="spinner-border" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
    
                                        },
                                        success: function(event) {

                                            if(event != 0){
                                                $('.p034COMP').html('');
                                                let inf24 = JSON.parse(event);
                                                let mostra;
                                                let classes = 'alert alert-danger alert-dismissible msg-34572 rounded-0';
                                                $('.msg-345info45').html('<h5><i class="icon fas fa-ban"></i> Erro! Esses dados ja foram inseridos </h5>');
                                                $('.msg-34572').attr('class', classes).removeAttr("hidden","hidden");
                                                for(let i in inf24){
                                                    mostra = `<div>${inf24[i].nome} - ${inf24[i].bilhete}</div>`
                                                    $('.msg-34579').append(mostra);
                                                }
                                            }else{

                                                $('.p034COMP').html('');
                                                let inf24 = JSON.parse(event);
                                                let mostra;
                                                let classes = 'alert alert-success alert-dismissible msg-34572 rounded-0';
                                                $('.msg-345info45').html('<h5><i class="icon fas fa-check"></i> Sucesso! Os dados foram inseridos </h5>');
                                                $('.msg-34572').attr('class', classes).removeAttr("hidden","hidden");
                                               
                                            }
                                          
                                        }
                                    })
                            
                            })
                
                            $('.AddTodosEscolha32190').unbind('click').click(function(event){
   
                                event.preventDefault();
    
                                let escalao = $('select[name=escalaoCampeonato78]').val();

                                let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');
    
                                arrayADDparticipanteCompetidor.push({idcampeonato:idcampeonato});
                                arrayADDparticipanteCompetidor.push({escalao:escalao});

                                console.log(arrayADDparticipanteCompetidor);
    
                                $.ajax({
                                    type: 'POST',
                                    data: { dados: arrayADDparticipanteCompetidor },
                                    url: 'http://localhost/KEDA/Campeonato/setParticipanteCompEvento',
                                    beforeSend: function() {
                                        $('.p034COMP').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                                    },
                                    success: function(event) {
                                        carregarAllParticipanteSeminario();
                                        location.reload();
                                    }
                                })
                
                            })  
        
                }
            }) 
            
        });


    })

    $('#modal-default-modalAddCompetidor').modal('show');

})

function mostrarADDCompetidor(arrayADDparticipanteCompetidor) {

    // console.log(arrayADDparticipanteCompetidor);

    if (arrayADDparticipanteCompetidor === '' || arrayADDparticipanteCompetidor.length === 0) {

        $('.p0348COMP').html('');
        $('.msg-3457').html('');

        let classe = 'card-body table-responsive col-lg-12 p-0 col-12';
        let estilo = 'max-width:800px';
        $('.primeiro123COMP').attr('style', estilo);
        $('#primeira1234COMP').attr('class', classe);
        $('.mostrar7648COMP').attr('hidden', 'hidden');

        $('#AddTodosEscolha321').removeAttr('hidden');

    } else {

        let classe = 'card-body table-responsive col-lg-6 p-0 col-6';
        let estilo = 'max-width:1334px';
        $('.primeiro123COMP').attr('style', estilo);
        $('#primeira1234COMP').attr('class', classe);
        $('.mostrar7648COMP').removeAttr('hidden');


        $('#AddTodosEscolha321').attr('hidden', 'hidden');

        let mostra = '';

        for (let i = 0; i < arrayADDparticipanteCompetidor.length; i++) {
            let nome_subcategoria_fk = '';
            let url = '';


            mostra += `<tr>`;
            if (arrayADDparticipanteCompetidor[i].imagem == '') {
                mostra += `<td>
            <img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;
            } else {
                mostra += `<td>
            <img src="http://localhost/KEDA/uploads/product/${arrayADDparticipanteCompetidor[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;

            }
            mostra += `<td>
           ${arrayADDparticipanteCompetidor[i].nome}
        </td>`;
            mostra += `<td>
           ${arrayADDparticipanteCompetidor[i].peso}
        </td>
        <td>
           ${arrayADDparticipanteCompetidor[i].nome_academia}
        </td>
        <td class="text-center">
            <a href="#" data-remove-id_atleta="${arrayADDparticipanteCompetidor[i].id_atleta}" class="btn btn-sm btn-danger width-60 m-r-2"> - </a> 
        </td> 
        </tr>`;

            $('.p0348COMP').html(mostra);
        }
    }

    $('a[data-remove-id_atleta]').click(function(event) {

        event.preventDefault();

        let id_atleta = $(this).attr('data-remove-id_atleta');

        let posicaoRemove = arrayADDparticipanteCompetidor.findIndex(function(wizard) {
            return wizard.id_atleta === id_atleta;
        });

        arrayADDparticipanteCompetidor.splice(posicaoRemove, 1);

        mostrarADDCompetidor(arrayADDparticipanteCompetidor);

    });


}


//------------------------------------------------------fim modal get competidor----------------------------------------------------------------------------------

var modalAdJuiz = `<div class="modal fade text-sm pb-5" id="modal-default-modalAdJuiz" style="padding-right: 17px; display: block;">
<div class="modal-dialog modal-lg primeiro123" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
        <div class="card-header border-0">
          <h3 class="card-title mem23 text-bold text-uppercase">Products</h3>          
        </div>
        <div class="msg-3457 text-danger ml-3 mb-3">
                    
        </div>
        <form id="formEscalaoEnviar56">
        <div class="row col-lg-12" style="left: 12px">
        
            <div class="col-sm-6">
            <!-- select -->
                <div class="form-group">
                    <label>Selecione a Categoria</label>
                    <select class="form-control form-control-sm" id="categoriaArbitroCampeonato7823" name="categoriaArbitroCampeonato7823">
                        <option value="empty">Todos</option>
                        <option value="Internacional">Internacional</option>
                        <option value="Nacional">Nacional</option>
                        <option value="Provincial">Provincial</option>
                    </select>
                </div>
            </div>
        
            <div class="row col-sm-6" style="left:8px">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
           
            </div>
        
            </div>
        
        </div>
    </form>
        <div class="row col-lg-12">
            <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234">
                <table class="table table-striped table-sm table-valign-middle">
                    <thead>
                    <tr>
                    <th>Foto</th>
                    <th>Nome Completo</th>
                    <th>Categoria</th>
                    <th>SubCategoria</th>
                    <th class="text-center">More</th>
                    </tr>
                    </thead>
                    <tbody class="p034">
                    
                    </tbody>
                </table>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddTodosEscolha321ARBITROS"><i class="fas fa-user-plus"></i> Adicionar Todos </button>
                </div>
            </div>
           
            <div class="card-body table-responsive col-lg-6 p-0 col-6 mostrar7648 m-l-12" id="primeira123490" hidden>
                <table class="table table-striped table-sm table-valign-middle">
                    <thead>
                    <tr>
                    <th>Foto</th>
                    <th>Nome Completo</th>
                    <th>Categoria</th>
                    <th>SubCategoria</th>
                    <th class="text-center">More</th>
                    </tr>
                    </thead>
                    <tbody class="p0348">
                    
                    </tbody>
                </table>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-success btn-sm mostrar76489" id="AddTodosEscolha32190ARBITROS"><i class="fas fa-user-plus"></i> Adicionar Selecionado </button>
                </div>
            </div>
           
        </div>
      </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648" id="limparEscolha321" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>
    </div>
</div> 
</div>`;

arrayADDparticipante = [];


function mostrarADD(arrayADDparticipante) {
    // alert(arrayADDparticipanteCompetidor.length);
    if (arrayADDparticipante === '' || arrayADDparticipante.length === 0) {
    alert('oioioi');
        $('.p0348').html('');
        $('.msg-3457').html('');

        let classe = 'card-body table-responsive col-lg-12 p-0 col-12';
        let estilo = 'max-width:800px';

        $('.primeiro123').attr('style', estilo);
        $('#primeira1234').attr('class', classe);
        // $('.mostrar7648').attr('hidden', 'hidden');
        $('#primeira123490').attr('hidden', 'hidden');

        $('#AddTodosEscolha321').removeAttr('hidden');

    } else {

        let classe = 'card-body table-responsive col-lg-6 p-0 col-6';
        let estilo = 'max-width:1334px';
        $('.primeiro123').attr('style', estilo);
        $('#primeira1234').attr('class', classe);
        $('.mostrar7648').removeAttr('hidden');

        $('#AddTodosEscolha321').attr('hidden', 'hidden');

        let mostra = '';

        for (let i = 0; i < arrayADDparticipante.length; i++) {
            let nome_subcategoria_fk = '';
            let url = '';

            if (arrayADDparticipante[i].nome_subcategoria_fk == 'NULL') {
                nome_subcategoria_fk = '--------------';
            } else {
                nome_subcategoria_fk = arrayADDparticipante[i].nome_subcategoria_fk;
            }

            mostra += `<tr>`;
            if (arrayADDparticipante[i].imagem == '') {
                mostra += `<td>
            <img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;
            } else {
                mostra += `<td>
            <img src="http://localhost/KEDA/uploads/product/${arrayADDparticipante[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;

            }
            mostra += `<td>
           ${arrayADDparticipante[i].nome}
        </td>`;
            mostra += `<td>
           ${arrayADDparticipante[i].nome_categoria_fk}
        </td>
        <td>
           ${nome_subcategoria_fk}
        </td>
        <td class="text-center">
            <a href="<?= base_url('ExcluirArbitro/' . $Arbitro->id_arbitro);?>" data-remove-id_arbitro="${arrayADDparticipante[i].id_arbitro}" class="btn btn-sm btn-danger width-40 m-r-2"> - </a> 
        </td> 
        </tr>`;

            $('.p0348').html(mostra);
        }
    }

    $('a[data-remove-id_arbitro]').click(function(event) {

        event.preventDefault();

        let id_arbitro = $(this).attr('data-remove-id_arbitro');

        let posicaoRemove = arrayADDparticipante.findIndex(function(wizard) {
            return wizard.id_arbitro === id_arbitro;
        });

        arrayADDparticipante.splice(posicaoRemove, 1);

        mostrarADD(arrayADDparticipante);

    });


}

function mostrarREM(e) {
    let classe = 'card-body table-responsive col-lg-6 p-0 col-6';
    let estilo = 'max-width:1334px';
    $('.primeiro123').attr('style', estilo);
    $('#primeira1234').attr('class', classe);
    $('.mostrar7648').removeAttr('hidden');
}

//Modal carregar todos os arbitros

$('.idArbitroJuizo').on('click', function(event) {

    if (!$('modal-default-modalAdJuiz').length) {
        $('body').append(modalAdJuiz);
    }

    //SELECIONAR APARTIR DA CATEGORIA
    $('#categoriaArbitroCampeonato7823').on('change', function(){
      
        let categoria = $('select[name=categoriaArbitroCampeonato7823]').val();

        let type2;
        let url2;

        if(categoria === 'empty'){

            type2 = 'get';
            url2 = 'http://localhost/KEDA/arbitro/listarArbitroCampeonato'

        }else{

            type2 = 'post';
            url2 = 'http://localhost/KEDA/arbitro/listarArbitroCategoria'

        }
    
        $.ajax({
            type: type2,
            data: {categoria},
            url: url2,
            beforeSend: function(){
                // $('#categoriaArbitroCampeonato7823').html('Carregando.....');
            },
            success: function(feedback){
                // alert(feedback);

                let event2 = JSON.parse(feedback);
                

                let titulo = $('.idArbitroJuizo').text();

                $('.mem23').html('<i class="fas fa-user-plus"></i>' + titulo);

                let mostra = ' ';

                for (let i = 0; i < event2.length; i++) {
                    let nome_subcategoria_fk = '';
                    let url = '';

                    if (event2[i].nome_subcategoria_fk == 'NULL') {
                        nome_subcategoria_fk = '--------------';
                    } else {
                        nome_subcategoria_fk = event2[i].nome_subcategoria_fk;
                    }

                    mostra += `<tr>`;
                    if (event2[i].imagem == '') {
                        mostra += `<td>
                        <img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
                    </td>`;
                    } else {
                        mostra += `<td>
                        <img src="http://localhost/KEDA/uploads/product/${event2[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
                    </td>`;

                    }
                    mostra += `<td>
                    ${event2[i].nome}
                    </td>`;
                    mostra += `<td>
                    ${event2[i].nome_categoria_fk}
                    </td>
                    <td>
                    ${nome_subcategoria_fk}
                    </td>
                    <td class="text-center">
                        <a href="<?= base_url('mostrarArbl/' . $Arbitro->id_arbitro);?>" data-add-id_arbitro="${event2[i].id_arbitro}" class="btn btn-sm btn-info width-60 m-r-2"> + </a> 
                    </td> 
                    </tr>`;

                    $('.p034').html(mostra);
                }
                
//adicionar arbitros na lista

            $('a[data-add-id_arbitro]').click(function(event) {

                event.preventDefault();

                let id_arbitro = $(this).attr('data-add-id_arbitro');

                $.post('http://localhost/KEDA/arbitro/getArbitroID', { id_arbitro }, function(e) {

                    let ee = JSON.parse(e);

                    if (arrayADDparticipante.length === 0) {

                        arrayADDparticipante.push(
                            ee[0]
                        );

                        mostrarADD(arrayADDparticipante);

                    } else {


                        if (arrayADDparticipante.findIndex(x => x.id_arbitro === id_arbitro) < 0) {
                            $('.msg-3457').html('');
                            arrayADDparticipante.push(
                                ee[0]
                            );

                            mostrarADD(arrayADDparticipante);

                        } else {
                            let mostra = `<h3 class="card-title text-bold text-uppercase"> O Arbitro ${ee[0].nome} ja foi Adicionado a lista </h3>`;
                            $('.msg-3457').html(mostra);

                            mostrarADD(arrayADDparticipante);
                        }

                    }

                });


            })

            $('#limparEscolha321').click(function() {
                arrayADDparticipante = [];
                mostrarADD(arrayADDparticipante);
            })
            
            //adicionar selecionar todos 

            $('#AddTodosEscolha321ARBITROS').unbind('click').click(function(event) {
            
             
                event.preventDefault();

                let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');

                    let dados100 = [];

                    console.log(dados100);
               
                    for (let i = 0; i < event2.length; i++) {

                        dados100.push(
                            event2[i]
                        );

                    }

                    dados100.push(idcampeonato);

                    $.ajax({
                        type: 'POST',
                        data: { dados: dados100 },
                        url: 'http://localhost/KEDA/Campeonato/setVParticipanteEventoArbitro',
                        beforeSend: function() {
                            $('#primeira1234').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                        },
                        success: function(event) {
                            location.reload();
                        }
                    })

            });



            $('#AddTodosEscolha32190ARBITROS').unbind('click').click(function(event) {
               
                event.preventDefault();

                let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');

                    arrayADDparticipante.push(idcampeonato);

                    $.ajax({
                        type: 'POST',
                        data: { dados: arrayADDparticipante },
                        url: 'http://localhost/KEDA/Campeonato/setVParticipanteEventoArbitro',
                        beforeSend: function() {
                            $('#primeira123490').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                        },
                        success: function(event) {
                            location.reload();
                        }
                    })
               
            })
            }
        })
        
    })


    $('#modal-default-modalAdJuiz').modal('show');

    $('.p034').html('');
})

//fim modal carregar todos os arbitros

function adicionarParticipante(dados) {

    let escalao = $('select[name=escalaoCampeonato78]').val();
    let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');

    dados.push({escalao:escalao});
    dados.push(idcampeonato);

    console.log(dados);

    $.ajax({
        type: 'POST',
        data: { dados: dados },
        url: 'http://localhost/KEDA/Campeonato/setVParticipanteEvento',
        beforeSend: function() {
            $('#primeira123490').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
        },
        success: function(event) {

            // let teste = JSON.parse(event);
                location.reload();

        }

    })

}

//--------------------------------------------------------------------------------------------------------------------------------

$.post('http://localhost/KEDA/actividade/controlTelas2', function(event28) {

    if (event28 == '1') {
     
        carregarAllParticipanteSeminarioFinal();
       
    }
    if (event28 == '2') {
        carregarAllParticipanteSeminarioFinal90();
    }

});

var modalConfirmarLista = `<div class="modal fade text-sm pb-5" id="modal-default-modalConfirmarLista" style="top:122px">
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-body m-3 pt-2 text-center pb-5 mt-5" id="bodyMensagemTrocarEstadoUsuario">
                <p> Tem certeza que pretende validar a lista <strong id="oi"></strong>?</p>
                <button type="button" class="btn btn-danger pull-right" id="aceitarSim678"><i class="fas fa-ban"></i> Sim</button>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>
         
        </div>
       
      </div>`;


$('#me-md-graduacaoListaValidar12').on('click', function() {


    if (!$('modal-default-modalConfirmarLista').length) {
        $('body').append(modalConfirmarLista);
    }

    $('#aceitarSim678').on('click', function() {

        // let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
        let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

        let variavelConrol;
        // let idEvento5 = $('#me-md-graduacao12').attr('id_actividade');

        let dados = {
            variavelConrol: 1,
            idEvento5:idEvento2
        }

        // console.log(dados);

        $.post('http://localhost/KEDA/actividade/controlTelasEsconder',dados, function(event) {
            location.reload();
        });

    })


    $('#modal-default-modalConfirmarLista').modal('show');

})

// $(document).ready(function(){
   
//     carregarAllParticipanteSeminarioFinal();
// })


$('#noopener345').on('click', function(event) {

    event.preventDefault();

    let variavelConrol;
        let idEvento5 = $('#me-md-graduacao12').attr('id_actividade');

        let dados = {
            variavelConrol: 0,
            idEvento5:idEvento5
        }

    $.post('http://localhost/KEDA/actividade/controlTelasEsconder',dados, function(event) {
        location.reload();
    });
})

$('#geradorDeDiploma78').on('click', function() {
    $.ajax({
        type: 'post',
        url: 'http://localhost/KEDA/actividade/GerarPDF2',
        beforeSend: function() {

        },
        success: function() {

        }
    })
})

//---------------------------------------------------------------------MODAL PARA ADICIONAR ACTIVIDADE--------------------------------------------------

let modalCadastraraActividade = `<div class="modal fade" id="modal-AddActividade789">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-sm"><i class="fa fa-edit"></i> CADASTRAR ACTIVIDADE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" id="AddActividade45692" enctype="multipart/form-data">
              <div id="bodyMensagemUsuario" class="modal-body m-2 pt-2 pb-3">
                <div class="col-md-12" id="conteudoCarregarCadastrarUsuario">
                    <div class="col-md-12" id="conteudoCarregarCadastroUsuario" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                        <input type="hidden" class="form-control form-control-sm" id="id_associacao_pro456" name="id_associacao_pro" placeholder="04/1/2014" value="">
                          <!-- begin form-group -->
                        <div class="form-row">
                          <div class="form-group col-sm-12" hidden>
                              <label class="col-form-label text-md-left">Ablitacao Literaria<span class="text-danger"></span></label>
                              <select id="peso" class="form-control form-control-sm" name="peso">
                              <option> Selecione o tipo de Actividade </option>
                                <?php foreach($actividade as $actividade): ?>
                                      <option value="<?= $actividade->id_tipoActividade;?>"> <?= $actividade->nome_tipoActividade?> </option>
                                <?php endforeach;?>
                              </select>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label class="text-nowrap">Nome da Actividade</label>
                                <input name="ano_actividade" placeholder="Escrever aqui" id="nome_completo_id" value="<?= date('Y')?>" hidden>
                                <input name="nome_actividade" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label class="text-nowrap">Local da Actividade</label>
                                <input name="nome_local" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="local_completo_id" value="">
                            </div>
                        </div>
                  
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label>Data de Inicio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="teste2" class="input-group-text"><i class="far fa-calendar-alt"></i></label>
                                        </div>
                                        <input id="teste2" type="date" class="form-control form-control-sm" name="data_inicio">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Data de Fim</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                         <label for="teste3" class="input-group-text"><i class="far fa-calendar-alt"></i></label>
                                        </div>
                                        <input id="teste3" type="date" class="form-control form-control-sm" im-insert="false" name="data_fim">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                          </div>

                        <div class="col-5 pt-3 pl-0">
                            <button type="submit" class="btn btn-primary" name="enviar-formulario" id="gravarAtividade76459"><i class="fa fa-save"></i> Cadastrar </button>
                        </div>
                    </div>
                </div>
              </div>
            </form>
            </div>
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>`;

$('.adicionarActividade789').on('click', function(event) {

    // alert('ola mundo animal da toyota');
    event.preventDefault();

    if (!$('modal-AddActividade789').length) {
        $('body').append(modalCadastraraActividade);
    }

    $('#AddActividade45692').submit(function(event) {

        event.preventDefault();

        let id = $('#idassociacaoPro89').attr('data_id_associacao');

        $('#id_associacao_pro456').val(id);

        let dados = $(this).serialize();

        $.ajax({
            type: 'post',
            data: dados,
            url: 'http://localhost/KEDA/actividade/cadastrar_actividade',
            beforeSend: function() {
                $('#gravarAtividade76459').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-1x fa-sync-alt fa-spin"></i><h5> Gravando...</h5></div>');
            },
            success: function() {
                window.location.href = 'http://localhost/KEDA/actividade/listar';
            }
        });

    })

    $('#modal-AddActividade789').modal('show');

})

$('#floatRight456').on('click', function(){
    $('.project-actions234').attr('hidden','hidden');
})

function carregarAllParticipanteSeminarioFinal90() {

    let idEvento2 = $('#me-md-graduacao1267').attr('id_actividade');

        $.post('http://localhost/KEDA/actividade/getParticipantesEvento7', { idEvento2 }, function(retorno) {


            let teste = JSON.parse(retorno);

            let tableCategoria = `<table id="example1" class="table table-striped table-sm">
                              <thead>
                                <tr>
                                  <th style="width: 10px">N-</th>
                                  <th>Nome Completo</th>
                                  <th>Data de Nascimento</th>
                                  <th>Genero</th>
                                  <th>Graduacao</th>
                                  <th>tipo</th>
                                  <th>Status</th>
                                </tr>
                              </thead>`;

            tableCategoria += `<tbody>`;
            let soma = 0;
            $.each(teste, function(i, retorno1) {
                tableCategoria += `<tr>
                <td>${ soma = soma + 1}</td>
                <td>${retorno1.nome_participante}</td>
                <td>${retorno1.dataNascimento}</td>
                <td>${retorno1.genero}</td>
                <td>${retorno1.graduacao}</td>`;
                tableCategoria += `<td>${retorno1.tipo}</td>`;
                tableCategoria += `<td><small class="badge badge-success"><i class="fa fa-user-check"></i> ${retorno1.status}</small></td>`;
                tableCategoria += `<td>`;
            });
            tableCategoria += `</tbody>`
            tableCategoria += `</table>`;

            $('#mostrarSeminarioFinal45').html(tableCategoria);

    });

}



$('.floatright789').on('click', function(event){
   event.preventDefault();

   let idEvento5 = $('#me-md-graduacao12').attr('id_actividade');

   let variavelConrol;

   $dados = {
       variavelConrol:2,
       idEvento5:idEvento5
   }

        $.post('http://localhost/KEDA/actividade/controlTelasEsconder', $dados , function(event) {
            location.reload();
        });

})

pesoCategoria = [];
idadeCategoria = [];
idadeCategoriaFinal = [];
escalao = [];
escalaoFinal = [];
sistemaLuta = [];
sistemaLutaFinal = [];
arrayTotal = [];


// carregarInfoCampeonato();

function carregarInfoCampeonato(){

    // console.log('-----' + pesoCategoria);getcategoriaPeso2
    $.get('http://localhost/KEDA/Campeonato/getcategoriaPeso2',function(event){
        // let teste = JSON.parse(event);
        console.log(event["descricao_escalao"]);

       for(let i in event["descricao_escalao"]){
        console.log(event["descricao_escalao"]);
       }
        // console.log(teste["genero"]);
   

            let mostrar = `<table class="table table-sm table-borderless table-dark rounded text-sm">`;
                mostrar += `<tbody class="border-0">`;

                mostrar += `<tr>
                        <th>Escalao Etario:</th>`;
                for(let i=0;i < escalaoFinal.length;i++){
                mostrar += `<td>${escalaoFinal[i]}</td>`;
                };
                mostrar += `</tr>`;
        
                mostrar += `<tr>
                        <th>Categoria de Peso:</th>`;
                for(let i=0;i < pesoCategoria.length;i++){
                mostrar += `<td>${pesoCategoria[i]}</td>`;
                };
                mostrar += `</tr>`;

                mostrar +=`<tr>
                        <th>Categoria de Idade:</th>`;
                for(let i=0;i < idadeCategoriaFinal.length;i++){
                mostrar +=`<td>${idadeCategoriaFinal[i]}</td>`;
                }
                mostrar +=`</tr>`;

                mostrar +=`<tr>
                        <th>Sistema de Luta:</th>`;
                for(let i=0;i < sistemaLutaFinal.length;i++){
                mostrar +=`<td>${sistemaLutaFinal[i]}</td>`;
                }
                mostrar +=`</tr>`
                mostrar +=`</tbody>
            </table>`;

    $('.mostrarInfoCampeonato45').html(mostrar);

    });

}

function carregarInfoCampeonato34(escala = [],n_existe = []){
// console.log(escala);

        let mostrar = '';
        let mostrar2 = '';
        let controlgenero = new Object();
        let controlgenero2 = [];
        let arrayObject = [];
        mostrarcatPeso = new Object();
        let generoPesoarray = [];

        let genero = [
            {
                "id": 1,
                "descricao_genero": "Masculino"
            },
            {
                "id": 2,
                "descricao_genero": "Femenino"
            }
        ];

        if(n_existe.length != 0){
            mostrar2 = `<div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h6><i class="icon fas fa-ban"></i> Atencao!</h6>
                  <span>Essas categorias ja foram adicionadas : ${n_existe}</span>
                </div>
              </div>`;
              
              $("#mostrarInfoCampeonato45adas").append(mostrar2);
        }


        escala.forEach(element => {
            let n_descricao = element['escalao'] == "9056as34" ? " " : element['escalao'];
            mostrar +=`<div class="card collapsed-card card-sm">

                <div class="card-header card-header-sm border">
                
                    <h3 class="card-title">${element['genero']} - ${n_descricao}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body p-0" style="display: none;">
                    <ul class="nav nav-pills flex-column" style="margin-left:24px">
                        <li class="nav-item active">`;
                 
                 mostrar +=`<a href="#" class="nav-link nav-link_escalao_genero" data-genero="${element['genero']}" data-escalao="${element}" control2312345="fechado">
                               Categoria de Peso`;
                    for(let i in element['categoriaPeso']){
                      mostrar +=`<span class="badge bg-primary float-right ml-1" style="font-size:90%">${element['categoriaPeso'][i]}</span>`;
                    }
                mostrar +=`</a>`;
             
                mostrar +=`</li>
                       
                    </ul>
                </div>
            
            </div>`;
        });

        $('.mostrarInfoCampeonato45').html(mostrar);
    

}

function carregarInfoCampeonato345(){

    let mostrar1 = "";

mostrar1 +=`<div class="card collapsed-card card-sm">

            <div class="card-header card-header-sm border">
                <h3 class="card-title">Sistema de Luta</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>`;

 mostrar1 +=`<div class="card-body p-0" style="display: none;">
                <ul class="nav nav-pills flex-column" style="margin-left:24px">`;
                for(let i in sistemaLutaFinal){
        mostrar1 +=`<li class="nav-item active">
                        <a href="#" class="nav-link nav-link_escalao_genero" data-genero="${sistemaLutaFinal[i]}" data-escalao="" control2312345="fechado">
                            ${sistemaLutaFinal[i]}
                        </a>
                    </li>`;
        };    
    mostrar1 +=`</ul>
            </div>
        
        </div>`;
   
   
    $('#mostrarInfoCampeonato45457').html(mostrar1);
}

//adicionar escalao
$('select[name=escalaoSelect34]').on('change',function(event){

    let escalao = $(this).val();

    if(escalao !== undefined){
        $('#escalaoGneroSelect34').removeAttr('disabled');
    }else{
        $('#escalaoGneroSelect34').attr('disabled','disabled');
    }

})

EscalaoGeneroCatergoriaArray = [];


var modalCategoriaPeso = `<div class="modal fade text-sm pb-5" id="confirm-genero-peso" style="">
<div class="modal-dialog">
    <div class="modal-content">
        <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-plus"></i> CATEGORIA DE PESO PARA O GENERO <span class="text-uppercase genero5345"></span> - <span id="escalao234" class="text-uppercase"></span></h4>
      
            <div class="modal-body alert">
                <div class="form-group form-control456categoriaPeso3424">
                
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                    <a href="#" id="formchecklabel45" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
                </div>
            </div>
       
    </div>
</div>
</div>`;

$('#formEscalaoSelect4').on('submit',function(event){

    event.preventDefault();

    let escalao = $('select[name=escalaoSelect34]').val();
    let genero = $('select[name=escalaoGneroSelect34]').val();

    let arrayEscala = [];
    let CategoriaPeso67 = [];

    arrayEscala.push(genero);
    arrayEscala.push(escalao);
    
    $('.form-control456categoriaPeso3424').html('<div class="text-center p-5"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
      
    $.post('http://localhost/KEDA/Campeonato/getcategoriaPeso',{arrayEscala}, function(event){

        if(event.length === 0){
            $('.form-control456categoriaPeso3424').html("Nenhum Informacao encontrada");
        }else{
            $('.form-control456categoriaPeso3424').html(event);
        }
        
    })

    if (!$('confirm-genero-peso').length) {
        $('body').append(modalCategoriaPeso);
    }
    
    $('#confirm-genero-peso').modal('show');


    $('#formchecklabel45').unbind('click').click(function(event){

        event.preventDefault();

        let checkeds = $(".formchecklabel45");
        // console.log($(checkeds).val());

        $.each(checkeds, function(i, checkbox) {
            
            if($(checkbox).is(":checked")){
                CategoriaPeso67.push($(checkbox).val());
                // EscalaoGeneroCatergoriaArray.categoriaPeso.push((checkbox).val());
            }

        })

        console.log(CategoriaPeso67);
        existeArray = [];

        if(EscalaoGeneroCatergoriaArray.length != 0){
           
            for(let i=0;i < CategoriaPeso67.length;i++){
                if(EscalaoGeneroCatergoriaArray[0]["categoriaPeso"].includes(CategoriaPeso67[i]) == true){
                    existeArray.push(CategoriaPeso67[i]);
                }else{
                    EscalaoGeneroCatergoriaArray[0]["categoriaPeso"].push(CategoriaPeso67[i]);
                }
            }

        }else{
            EscalaoGeneroCatergoriaArray.push({
                    "escalao": escalao,
                    "genero": genero,
                    "categoriaPeso": CategoriaPeso67
            })
        }

        console.log(EscalaoGeneroCatergoriaArray);

        if(EscalaoGeneroCatergoriaArray.length !== 0 ){
            $('#esconderBotao98131213327').removeAttr('hidden');
        }

        carregarInfoCampeonato34(EscalaoGeneroCatergoriaArray,existeArray);

    });

   
})

$('#adicionarSistemaLuta7645').on('click', function(event){

    alert('ola mundo animal da toyota');

    event.preventDefault();

    sistemaLutaFinal = [];

    let checkeds = $(".input-sistLuta234");

    $.each(checkeds, function(i, checkbox) {
        
        if($(checkbox).is(":checked")){
            sistemaLutaFinal.push($(checkbox).val());
            // EscalaoGeneroCatergoriaArray.categoriaPeso.push((checkbox).val());
        }

    })

    if(sistemaLutaFinal.length !== 0 ){
        $('#esconderBotao98131213327').removeAttr('hidden');
    }

    carregarInfoCampeonato345();

})



//-----------------------------------------------------------------------------------------------------------------------------------------

exameDraduacao = [];
exameDraduacaoFinal = [];

function carregarInfoGraduacao(){

    
    let mostrar = `<table class="table table-sm table-borderless table-dark rounded text-sm">`;
        mostrar += `<tbody class="border-0">`;

        mostrar += `<tr>
                <th>FAIXA DE GRADUACAO:</th>`;
        for(let i=0;i < exameDraduacaoFinal.length;i++){
        mostrar += `<td>${exameDraduacaoFinal[i]}ªDan</td>`;
        };
        mostrar += `</tr>`;
  
        mostrar +=`</tbody>
    </table>`;

    $('#mostrarInfoGraduacao67').html(mostrar);

}

$('.input-graduacaoExame234').on('click', function(event){

    if(!$(this).is(":checked")){
        exameDraduacao.splice(exameDraduacao.indexOf($(this).val()), 1);
    }else{
        $('#mensagemVazioAdicionar89').html('');
        exameDraduacao.push($(this).val());
    }

})

$('#adicionarGraduacaoExame7645').on('click', function(){
    exameDraduacaoFinal = exameDraduacao;

    if(exameDraduacaoFinal.length === 0){
        $('#mensagemVazioAdicionar89').html('<p style="color:red">Selecione pelo menos um elemento</p>');
    }else{
        carregarInfoGraduacao();
    }
})

//-----------------------------------------------------------------------------------------------------------------------------------------

$('.input-sistLuta234').on('click', function(event){

    if(!$(this).is(":checked")){
        sistemaLuta.splice(sistemaLuta.indexOf($(this).val()), 1);
    }else{
        $('#mensagemVazioAdicionar89').html('');
        sistemaLuta.push($(this).val());
    }

})

// $('#adicionarSistemaLuta7645').on('click', function(){
//     sistemaLutaFinal = sistemaLuta;

//     if(sistemaLutaFinal.length === 0){
//         $('#mensagemVazioAdicionar89').html('<p style="color:red">Selecione pelo menos um elemento</p>');
//     }else{
//         carregarInfoCampeonato();
//     }
// })

$('#customCheckbox1SistemaLutaSelTodos89').on('click', function(){

    if(!$(this).is(":checked")){

        let checkeds = $(".input-sistLuta234");

        $.each(checkeds, function(i, checkbox) {
            sistemaLuta.splice(sistemaLuta.indexOf($(checkbox).val()), 1);
        })

        $.each(checkeds, function(i,checkbox){
            $('input:checkbox').prop('checked', false);
        })


    }else{
        $('#mensagemVazioAdicionar89').html('');
        let checkeds = $(".input-sistLuta234");

        $.each(checkeds, function(i, checkbox) {
            sistemaLuta.push($(checkbox).val());
        })

        $.each(checkeds, function(i,checkbox){
            $('input:checkbox').prop('checked', true);
        })
    }
})

//------------------------------------------------fim sistema de luta----------------------------------------------------------------------
var checkboxs = $('.escalao-input789');

$.each(checkboxs, function(i, checkbox) {
    $('input:checkbox').prop('checked', false);
})

$('.escalao-input789').on('click', function(event){

    if(!$(this).is(":checked")){
        escalao.splice(escalao.indexOf($(this).val()), 1);
    }else{
        $('#mensagemVazioAdicionar89').html('');
        escalao.push($(this).val());
    }

})

// $('#adicionarEscalao567 ').on('click', function(){
//     console.log(escalao);
//     escalaoFinal = escalao;

//     if(escalaoFinal.length === 0){
//         $('#mensagemVazioAdicionar89').html('<p style="color:red">Selecione pelo menos um elemento</p>');
//     }else{
//         carregarInfoCampeonato34(escalaoFinal);
//         // console.log(escalaoFinal);
//     }

// })

$('#customCheckbox1escalaoSelTodos89').on('click', function(){

    if(!$(this).is(":checked")){

        let checkeds = $(".escalao-input789");

        $.each(checkeds, function(i, checkbox) {
            escalao.splice(escalao.indexOf($(checkbox).val()), 1);
        })

        $.each(checkeds, function(i,checkbox){
            $('input:checkbox').prop('checked', false);
        })


    }else{
        $('#mensagemVazioAdicionar89').html('');
        let checkeds = $(".escalao-input789");

        $.each(checkeds, function(i, checkbox) {
            escalao.push($(checkbox).val());
        })

        $.each(checkeds, function(i,checkbox){
            $('input:checkbox').prop('checked', true);
        })
    }
})

//-----------------------------------------------fim escalao--------------------------------------------------------

$('#categoriaPeso67').on('submit', function(event){

    $('#msnPesoError789').html('');

    event.preventDefault();

    let peso = '';
    let i;

    peso = $('input[name=categoriaPeso]').val();

    let teste = peso.split();

    if(peso.substr(0, 1) === '+' || peso.substr(0, 1) === '-'){

        if(peso.split().every(elem => Number(elem)) === true){
            if(pesoCategoria.length === 0){
                pesoCategoria.push(peso);
            }else{
               
                    if(pesoCategoria.includes(peso) == true){
                        $('#msnPesoError789').html('Esta categoria ja foi inserida');
                    }else{
                        pesoCategoria.push(peso);
                    }
            }
            carregarInfoCampeonato();
        }else{
            $('#msnPesoError789').html('Valor Invalido');
        }

    }else{
        $('#msnPesoError789').html('A categoria Precisa ser negativa ou Positiva Ex:+50');

    }

   

})

$('.peso-input785').on('click', function(event){

    if(!$(this).is(":checked")){
        idadeCategoria.splice(idadeCategoria.indexOf($(this).val()), 1);
    }else{
        $('#mensagemVazioAdicionar89').html('');
        idadeCategoria.push($(this).val());
    }

})

$('#adicionarCategoria908').on('click', function(){

    idadeCategoriaFinal = idadeCategoria;

    if(idadeCategoriaFinal.length === 0){
        $('#mensagemVazioAdicionar89').html('<p style="color:red">Selecione pelo menos um elemento</p>');
    }else{

        carregarInfoCampeonato();
    }

})

$('#customCheckbox1SelecionarTodos').on('click', function(){

    if(!$(this).is(":checked")){

        let checkeds = $(".peso-input785");

        $.each(checkeds, function(i, checkbox) {
            idadeCategoria.splice(idadeCategoria.indexOf($(checkbox).val()), 1);
        })

        $.each(checkeds, function(i,checkbox){
            $('input:checkbox').prop('checked', false);
        })


    }else{
        $('#mensagemVazioAdicionar89').html('');
        let checkeds = $(".peso-input785");

        $.each(checkeds, function(i, checkbox) {
            idadeCategoria.push($(checkbox).val());
        })

        $.each(checkeds, function(i,checkbox){
            $('input:checkbox').prop('checked', true);
        })
    }
})

$('#salvarInformacoesCampeonato765').on('click', function(){ 

    let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
    let id_actividade = $('#pegarListaCategoria76453').attr('idEvento');

    actividade = [];

    actividade.push(id_actividade);

    arrayTotal = {EscalaoGeneroCatergoriaArray,sistemaLuta,actividade};

    console.log(arrayTotal);

    $.ajax({
        type:'post',
        data: {arrayTotal2: arrayTotal},
        url:'http://localhost/KEDA/Campeonato/setInformacaoCamp',
        success: function(event){
            if(event.length == 0){
                let event99 = JSON.parse(event);
                
                let mt = [];

                for(let i=1;i < event99.length;i++){
                    mt.push(event99[i]);
                }

                arrayTotal = [];

                if(event99[0] == 99){
                    $('.conteudo2567').html(`<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fas fa-ban"></i> erro!. O(s) sistema(s) de luta ${mt} ja foram adicionados.</h6></div>`);
                    // carregarInfoCampeonato();
                    reload.location();
                }else{
                    $('.conteudo2567').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram adicionados.</h6></div>');
                    // carregarInfoCampeonato();
                    reload.location();
                }
            }else{
                $('.conteudo2567').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram adicionados.</h6></div>');
                // carregarInfoCampeonato();
                reload.location();
            }
        },
        beforeSend: function(event){
           
            $('#mostrarInfoCampeonato45').html('<div class="text-center p-5"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
        }
    });

})

$('#salvarInformacoesSeminario765').on('click', function(){ 

    // let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
    let id_actividade = $('#pegarListaCategoria76453').attr('idEvento');

    // let id_actividade = $(this).attr('id_actividade');

    exameDraduacaoFinal.push(id_actividade);
  
    $.ajax({
        type:'post',
        data: {dado : exameDraduacaoFinal},
        url:'http://localhost/KEDA/actividade/setSeminarioFaixas',
        success: function(event){
            
            $('.conteudo2567').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram adicionados.</h6></div>');
            carregarInfoCampeonato();
        },
        beforeSend: function(){
            // location.reload();
            $('#mostrarInfoCampeonato45').html('<div class="text-center p-5"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
        }
    });

})


    $.ajax({
        type:'get',
        url:'http://localhost/KEDA/Campeonato/getParticipantes2',
        beforeSend: function(){

        },
        success: function(event){
            // let event2 = JSON.parse(event);
            
            // for(let i in event){
            //     $('#conteiner8968').append(event["escalao"]);
            // }
            
        }
    })

$('.idCompetidorGerarChaves').on('click', function(event){

    event.preventDefault();

    $.ajax({
        type:'get',
        url:'http://localhost/KEDA/Campeonato/getParticipantes2',
        beforeSend: function(){

        },
        success: function(event){
            let event2 = JSON.parse(event);
           
         
        $.each(event2, function(i, retorno1) {
            console.log(retorno1.escalao);
            $.each(retorno1['generos'], function(i, retorno2) {
                console.log(retorno2.genero);
                
                $.each(retorno2['categoriaPesos'], function(i, retorno3) {
                    if(retorno2['categoriaPesos'].length !== 0){
                        console.log(retorno3.categoriaPeso);
                        $.each(retorno3['participantes'], function(i, retorno4) {
                            console.log(retorno4.nome_participante);
                        });
                    }
                });
            });
        });

            
        }
    })
})

//---------------------------------------------------------------------------------------------------------------------------------------------------

let modalImprimirLista = `<div class="modal fade" id="modallg76540" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lista dos Competidores</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="card-body table-responsive p-0" style="height: 550px;">
                <div class="modal-body" id="conteudoLista5638">
                    <div>
                        <img style="width:160px; height:160px; margin-top: 20px; padding-button: 10px;border-radius: 100%;margin-left:60px" src="http://localhost/KEDA/assets/images/12.jpeg">
                    </div>
                    <h2 style="font-size: 22px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
                    <hr>
                    <h2 style="font-size: 20px;text-align: center;">Lista do competidores organizados em Escalao - Sexo - Categoria</h2>
                </div>
                <div class="modal-body" id="conteudoLista56384">
                <p>One fine body…</p>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>`;

$('.idCompetidorImprimirLista').on('click', function(event){
    event.preventDefault();

    let idactividade = $('#me-md-graduacao12').attr('id_actividade');
    let idcampeonato = $('#pegarListaCategoria764539450').attr('data_id_campeonato');

    // alert(idactividade);
    let dado = {
        idactividade:idactividade,
        idcampeonato:idcampeonato
    }

    console.log(dado);

    $.ajax({
        type:'post',
        data: dado,
        url:'http://localhost/KEDA/Campeonato/getParticipantes3',
        beforeSend: function(){
          
            $('#conteudoLista56384').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram adicionados.</h6></div>');
       
        },
        success: function(event){

            $('#conteudoLista56384').html(event);
        }
    })

    if (!$('modallg76540').length) {
        $('body').append(modalImprimirLista);
    }
    
    $('#modallg76540').modal('show');  
    
})

let modalImprimirListaParticipante = `<div class="modal fade" id="modallgParticipante76540" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lista dos Competidores</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="card-body table-responsive p-4" style="height: 550px;" id="conteudoLista56387242638">
                <div class="modal-body" id="conteudoLista5638">
                    <div>
                        <img style="width:160px; height:160px; margin-top: 10px; padding-button: 10px;border-radius: 100%;margin-left:60px" src="http://localhost/KEDA/assets/images/12.jpeg">
                    </div>
                    <h2 style="font-size: 22px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
                    <hr>
                    <h2 style="font-size: 20px;text-align: center;">LISTA DE PARTICIPANTES AO NACIONAL DE JU-JITSU</h2>
                </div>
                <div class="modal-body">
                <div class="card-body table-responsive p-0 table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describeddy="example1_info">
                <table class="table table-sm">
                
                    <tbody>
                        <tr>
                            <td><strong>Pais/Cidade:</strong> Angola/<span id="paiscidade"></td>
                            <td>Total de Membros: <span id="totaldemembros"></td>
                         
                        </tr>
                        <tr>
                            <td><strong>Director da Prova:</strong> <span id="directorprova"></td>
                            <td></td>
                           
                        </tr>
                        <tr>
                            <td><strong>Data de Chegada:</strong> <span id="iniciodaprova"></span></td>
                            <td></td>
                           
                        </tr>
                        <tr>
                            <td><strong>Fim da Prova:</strong> <span id="fimdaprova"></span></td>
                            <td></td>
                           
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
                <div class="modal-body">
                    <div class="card-body table-responsive p-0 conteudoLista56384Lista table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describeddy="example1_info">
                        fsdfsdffsdfssdfsdf
                    </div
                </div>
            </div>
           
          </div>
          <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <a href="http://localhost/KEDA/Campeonato/GerarPDF" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Criar Pdf</a>
        </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>`;

      $('.idLista5429').on('click', function(event){

        event.preventDefault();
    
        if (!$('modalmodallgParticipante76540lg76540').length) {
            $('body').append(modalImprimirListaParticipante);
        }

        let id_campeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');

        $.post('http://localhost/KEDA/Campeonato/getInfoCabecalhoLista',{id_campeonato},function(event){
        
            let dados = JSON.parse(event);

            $.each(dados, function(i,retorno){
                $('#fimdaprova').html(retorno.data_fim);
                $('#iniciodaprova').html(retorno.data_inicio);
                $('#directorprova').html(retorno.director_prova);
                $('#paiscidade').html(retorno.cidade_campeonato);
                $('#totaldemembros').html(retorno.data_fim);
            })

        })

        carregarAllParticipanteLista();
        
        $('#modallgParticipante76540').modal('show');  
        
    })

    //criar credencias campeonato-------------------------------------------------------------------------------------

    
var modalgetCredencias564 = `<div class="modal fade text-sm pb-5" id="modal-default-modalgetCredencias564">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase">credencias</h3>
            </div>
            <div class="msg-3457 text-danger ml-3 mb-3">
                    
            </div>
            <form type="submit" id="enviarBilhete435">
            <div class="row col-lg-12" style="left: 12px">
                <div class="col-sm-6">
                <!-- select -->
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="text" placeholder="Selecionar apartir do Bilhete de Identidade" name="categoriaPeso" id="pegarBilheteDeIdentidadeCredencial">
                    </div>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-success btn-sm mostrar7648" id=""> Enviar </button>
                </div>
            </div>
            </form>
            <div class="row col-lg-12">

                <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234CREDENCIASpARTICIPANTE" style="height:400px">
                   
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddTodosEscolha321p034COMPDIRIGENTE"><i class="fas fa-user-plus"></i> Adicionar Todos </button>
                </div>
            </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321p034COMPDIRIGENTE" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div> 
</div>`;



    $('.idCriarCredenciais5429').unbind('click').on('click', function(event){

        event.preventDefault();

        let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
        let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

        let dado90 = {
            id_associacao_pro2: id_associacao_pro2,
            idEvento2: idEvento2
        };

        if (!$('modal-default-modalgetCredencias564').length) {
            $('body').append(modalgetCredencias564);
        }

        $.ajax({
            type: 'post',
            data: dado90,
            url: 'http://localhost/KEDA/credencial/gerar',
            beforeSend: function(){

            },
            success: function(event){
                let event2 = JSON.parse(event);
                if(event2.length === 0){
                    $('#loadingP189').html('<div class="text-center p-5">Nenhuma Informacao Encontrada para gerar as credencias</div>');
                }else{
                    criarDiploma(event2);
                }
               
            }
        });

        $('#modal-default-modalgetCredencias564').modal('show'); 

        // window.location.href = 'http://localhost/KEDA/credencial/gerar';

    })


    function criarDiploma(arrayDados){

        $('#primeira1234CREDENCIASpARTICIPANTE').html("");
        
        let mostra;
        
        $.each(arrayDados, function(i,retorno){

            let imagem2 = retorno.imagem !== "" ? 'http://localhost/KEDA/uploads/product/'+retorno.imagem : 'http://localhost/KEDA/assets/images/3.jpg';

            mostra = `<div class="content ml-3">
            <div class="card border" style="height: 527px;width: 358px;background-color: #fff;">
                <!-- <div class="card-header border-0" style="background-image: url('http://localhost/KEDA/assets/images/QWS21.jpg');">
                    <div class="d-flex justify-content-between">
                    <h3 class="card-title">Campeonato Provincial de Bengo</h3>
                    </div>
                </div> -->
                <div class="card-body">
                    <div class="d-flex">
                    <div class="d-flex flex-column">
                        <img src="${imagem2}" alt = "Product 1" style="width: 130px;height: 150px;border-radius:0%">
                    </div>
                    <div class="d-flex flex-column" style="margin-left: 18px">
                        <div class="bg-light mb-1" style="width: 164px;height:96px;">
                        <img src="http://localhost/KEDA/assets/images/A22.PNG" alt = "Product 1" style="width: 164px;height: 96px;border-radius:0%;box-shadow: 0 0 1px #f8f9fa,0 1px 3px #f8f9fa;">
                        </div>
                        <div class="bg-danger bt-2 text-center" style="display: block; width: 164px;height:50px;box-shadow: 0 0 1px #dc3545,0 1px 3px #dc3545;"><h2><strong>APb</strong></h2></div>
                    </div>
                    </div>
                    
                    <div class="d-flex flex-column pt-3 pb-3">
                        <div class="text-left text-bold" style="font-weight: 700;font-size: larger;">
                            <span class="text-uppercase">${retorno.nome_participante}</span>
                        </div>
                        <div class="text-left text-bold" style="font-weight: 700;font-size: larger;">
                            <span class="text-uppercase">${retorno.categoriaPeso}</span>
                        </div>
                        <div class="text-left text-bold pt-2">
                            <span class="text-uppercase">${retorno.funcao}</span>
                        </div>
                        <!-- <div class="text-left text-bold pt-2">
                            Edson <span class="text-uppercase">Viegas</span>
                        </div> -->
                    </div>
                
                
                    <div class="d-flex flex-row pb-4">
                    <span class="mr-2">
                        <img src="http://localhost/KEDA/assets/images/PNG12.png" alt = "Product 1" style="width: 95px;height: 102px;border-radius:0%">
                    </span>

                    <span>
                        <i class="fas fa-square text-gray"></i> Last Week
                    </span>
                    </div>

                    <div class="d-flex flex-row">
                    <div class="mr-2 text-center" style="background-color:#212529;width: 78px;height: 45px;color:white;box-shadow: 0 0 1px #212529,0 1px 3px #212529;">
                        <h6><strong>FAJUJ-DAO</strong></h6>
                    </div>
                    <div class="mr-2 text-center" style="width: 78px;height: 45px;color:white">
                        <img src="http://localhost/KEDA/assets/images/bandera123.png" alt = "Product 1" style="width: 78px;height: 50px;border-radius:0%">
                    </div>
                    </div>

                    <div class="d-flex flex-row pt-3">
                        <div class="mr-2 text-center text-uppercase" style="background-color:#212529;width: 400px;height: 45px;color:white;box-shadow: 0 0 1px #212529,0 1px 3px #212529;">
                            <h2><strong>${retorno.funcao}</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
            </div>`;

            $('#primeira1234CREDENCIASpARTICIPANTE').append(mostra);

        });

       

    }

    //GERAR CHAVES DE CAMPEONATO---------------------------------------------------------------------

        
    let modalGerarChavesCampeonato = `<div class="modal fade" id="modalGerarChavesCampeonato76540" style="padding-right: 17px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title"> Chaves </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="card-body table-responsive p-0" style="height: 550px;">
           
            <div class="modal-body">
                <div class="card bg-light p-0" id="conteudoGerir56384">
                    <ul class="nav nav-pills flex-column">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            United States of America
                            <span class="float-right text-danger">
                                <i class="fas fa-arrow-down text-sm"></i>
                                12%</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>    
            </div>

        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>`;

    $('.idCompetidorGerarChaves').unbind('click').click(function(event){

        event.preventDefault();

        if (!$('modalGerarChavesCampeonato76540').length) {
            $('body').append(modalGerarChavesCampeonato);
        }

        $.ajax({
            type:'get',
            url:'http://localhost/KEDA/Campeonato/getCampeonatoChaves',
            beforeSend: function(){
              
                $('#conteudoGerir56384').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram adicionados.</h6></div>');
           
            },
            success: function(event){
                $('#conteudoGerir56384').html(event);
            }
        })
        
        $('#modalGerarChavesCampeonato76540').modal('show'); 

    })

//------------------------
//------------------------

//ADICIONAR DIRIGENTES----------------------------------------------------------------------------


var modalAddDirigente564 = `<div class="modal fade text-sm pb-5" id="modal-default-modalAddDirigente564">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase">Products</h3>
            </div>
            <div class="msg-3457 text-danger ml-3 mb-3">
                    
            </div>
            <form id="formEscalaoEnviar56">
            <div class="row col-lg-12" style="left: 12px">
               
                <div class="col-sm-6" hidden>
                <!-- select -->
                    <div class="form-group">
                        <label>Selecione o Escalao Etario</label>
                        <select class="form-control form-control-sm" id="escalaoCampeonato78" name="escalaoCampeonato78">
                          
                        </select>
                    </div>
                </div>
               
                <div class="row col-sm-6" style="left:8px">
               
                <div class="col-sm-12">
                  
                  <div class="form-group" hidden>
                    <label>Genero</label> 
                    <select class="form-control form-control-sm" id="idadeInicial78" name="idadeInicial78">
                     
                    </select>
                  </div>
                  <div class="form-group" hidden>
                    <label>Genero</label> 
                    <select class="form-control form-control-sm" id="idadeLimite78" name="idadeLimite78">
                     
                    </select>
                  </div>
                </div>
              
                </div>
               
            </div>
            </form>

            <div class="row col-lg-12">
                <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234COMP" style="height:400px">
                    <table class="table table-striped table-sm table-valign-middle">
                        <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome Completo</th>
                        <th class="text-center">More</th>
                        </tr>
                        </thead>
                        <tbody class="p034COMPDIRIGENTE">
                        
                        </tbody>
                    </table>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddTodosEscolha321p034COMPDIRIGENTE"><i class="fas fa-user-plus"></i> Adicionar Todos </button>
                    </div>
                </div>

                <div class="card-body table-responsive p-0 col-lg-6 p-0 col-6 mostrar7648COMP mostrar7648COMP234" id="primeira1234COMP" hidden>
                    <table class="table table-striped table-sm table-valign-middle">
                        <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome Completo</th>
                        <th class="text-center">More</th>
                        </tr>
                        </thead>
                        <tbody class="p0348COMPDIRIGENTE">
                        
                        </tbody>
                    </table>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-success btn-sm mostrar76489 AddTodosEscolha32190p034COMPDIRIGENTE"><i class="fas fa-user-plus"></i> Adicionar Selecionado </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321p034COMPDIRIGENTE" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div> 
</div>`;

arrayADDparticipanteDirigente = [];

$('.idDirigente').unbind('click').on('click', function(event){

    event.preventDefault();

    if (!$('modal-default-modalAddDirigente564').length) {
        $('body').append(modalAddDirigente564);
    }

    let id_associacao_pro = $('#table_search876').attr('dataid-id_associacao_pro');

    $.ajax({
        type: 'post',
        data: {id_associacao_pro},
        url: 'http://localhost/KEDA/Orgao_Social/getListaMemmbrosMandatosDirigentes',
        beforeSend: function() {
            $('.p034COMPDIRIGENTE').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
        },
        success: function(event) {

            $('.p034COMPDIRIGENTE').html('');

            let event2 = JSON.parse(event);

            arraygetPatDirigente = event2;

            let titulo = 'Dirigente';

            $('.mem23').html('<i class="nav-icon fa fa-briefcase"></i> ' + titulo);

            let mostra = '';

            for (let i = 0; i < event2.length; i++) {

                mostra += `<tr>
               
                        <td>
                            <img src="http://localhost/KEDA/uploads/product/${event2[i].imagem_membro}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
                        </td>
                        <td>
                        ${event2[i].nome}
                        </td>
                       
                        <td class="text-center">
                            <a href="#" data-add-id_membro="${event2[i].id_membro}" class="btn btn-sm btn-info width-60 m-r-2"> + </a> 
                        </td>  
                    </tr>`;


                $('.p034COMPDIRIGENTE').append(mostra);
            }

            $('a[data-add-id_membro]').on('click', function(event) {

                event.preventDefault();

                let id_membro = $(this).attr('data-add-id_membro');

                $.post('http://localhost/KEDA/Orgao_Social/getIDParticipanteDirigente23', { id_membro }, function(e) {

                    let ee = JSON.parse(e);

                    console.log(ee[0]);

                    if (arrayADDparticipanteDirigente.length === 0) {

                        arrayADDparticipanteDirigente.push(
                            ee[0]
                        );

                        mostrarADDirigente(arrayADDparticipanteDirigente);

                    } else {

                        if (arrayADDparticipanteDirigente.findIndex(x => x.id_membro === id_membro) < 0) {
                            $('.msg-3457').html('');

                            arrayADDparticipanteDirigente.push(
                                ee[0]
                            );

                            mostrarADDirigente(arrayADDparticipanteDirigente);

                        } else {
                            let mostra = `<h3 class="card-title text-bold text-uppercase"> O Competidor ${ee[0].nome} ja foi Adicionado a lista </h3>`;
                            $('.msg-3457').html(mostra);

                            mostrarADDirigente(arrayADDparticipanteDirigente);
                        }

                    }

                });
            })

            $('#limparEscolha321p034COMPDIRIGENTE').click(function() {
                arrayADDparticipanteDirigente = [];
                mostrarADDirigente(arrayADDparticipanteDirigente);
            })

            $('#AddTodosEscolha321p034COMPDIRIGENTE').unbind('click').click(function(event) {
alert('ola mundo animal');
                let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');

                event.preventDefault();

                    let dados90 = [];

                    for (let i = 0; i < arraygetPatDirigente.length; i++) {
                        dados90.push(event2[i]);
                    }

                    let escalao = $('select[name=escalaoCampeonato78]').val();

                    dados90.push({idcampeonato:idcampeonato})
                    console.log(dados90);
                 
                    $.ajax({
                        type: 'POST',
                        data: { dados: dados90 },
                        url: 'http://localhost/KEDA/Campeonato/setParticipanteCompEventoDirigente',
                        beforeSend: function() {
                            $('#primeira1234COMP').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                        },
                        success: function(event) {
                            // carregarAllParticipanteSeminario();
                                location.reload();
                        }
                    })
               
            })

            $('.AddTodosEscolha32190p034COMPDIRIGENTE').unbind('click').click(function(event){

                event.preventDefault();

                let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');

                arrayADDparticipanteDirigente.push({idcampeonato:idcampeonato})

                $.ajax({
                    type: 'POST',
                    data: { dados: arrayADDparticipanteDirigente },
                    url: 'http://localhost/KEDA/Campeonato/setParticipanteCompEventoDirigente',
                    beforeSend: function() {
                        $('.mostrar7648COMP234').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                    },
                    success: function(event) {
                        carregarAllParticipanteSeminario();
                        location.reload();
                    }
                })

            })



        }
    }) 

    $('#modal-default-modalAddDirigente564').modal('show');

})



function mostrarADDirigente(arrayADDparticipanteCompetidor) {

    // console.log(arrayADDparticipanteCompetidor);

    if (arrayADDparticipanteCompetidor === '' || arrayADDparticipanteCompetidor.length === 0) {

        $('.p0348COMP').html('');
        $('.msg-3457').html('');

        let classe = 'card-body table-responsive col-lg-12 p-0 col-12';
        let estilo = 'max-width:800px';
        $('.primeiro123COMP').attr('style', estilo);
        $('#primeira1234COMP').attr('class', classe);
        $('.mostrar7648COMP').attr('hidden', 'hidden');

        $('#AddTodosEscolha321').removeAttr('hidden');

    } else {

        let classe = 'card-body table-responsive col-lg-6 p-0 col-6';
        let estilo = 'max-width:1334px';
        $('.primeiro123COMP').attr('style', estilo);
        $('#primeira1234COMP').attr('class', classe);
        $('.mostrar7648COMP').removeAttr('hidden');


        $('#AddTodosEscolha321').attr('hidden', 'hidden');

        let mostra = '';

        for (let i = 0; i < arrayADDparticipanteCompetidor.length; i++) {
            let nome_subcategoria_fk = '';
            let url = '';


            mostra += `<tr>`;
            if (arrayADDparticipanteCompetidor[i].imagem_membro == '') {
                mostra += `<td>
            <img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;
            } else {
                mostra += `<td>
            <img src="http://localhost/KEDA/uploads/product/${arrayADDparticipanteCompetidor[i].imagem_membro}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;

            }
            mostra += `<td>
           ${arrayADDparticipanteCompetidor[i].nome}
        </td>
           
        <td class="text-center">
            <a href="#" data-remove-id_membro="${arrayADDparticipanteCompetidor[i].id_membro}" class="btn btn-sm btn-danger width-60 m-r-2"> - </a> 
        </td> 
        </tr>`;

            $('.p0348COMPDIRIGENTE').html(mostra);
        }
    }

    $('a[data-remove-id_membro]').click(function(event) {

        event.preventDefault();

        let id_membro = $(this).attr('data-remove-id_membro');

        let posicaoRemove = arrayADDparticipanteCompetidor.findIndex(function(wizard) {
            return wizard.id_membro === id_membro;
        });

        arrayADDparticipanteDirigente.splice(posicaoRemove, 1);

        mostrarADDirigente(arrayADDparticipanteDirigente);

    });


}


function pegarViaBilheteDadosMestre() {

    let modalPesquisaVazia = `<div class="modal fade text-sm pb-5 hide" id="modal-default-Pesquisa-vazia">
        <div class="modal-dialog" style="max-width:578px">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
         
                <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                    <div class="col-md-12 text-center" id="conteudoCarregar5955">
                        <p class="text-muted" id="bilhete2">addadadasdasd</p>
                        <span class="text-muted">NENHUMA INFORMACAO ASSOCIADA A ESSE NUMERO DE BILHETE</span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>  
                </div>
            </div>
        </div>
    </div>`;

    let numeroBI = document.getElementById("bilhete_id_mestre23").value;

    let id_associacao_pro = $('#table_search876').attr('dataid-id_associacao_pro');

    let dados = {
        numero: numeroBI
    }

    if (numeroBI.length === 14) {
        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/mestre/BuscaByBilheteMestre',
            beforeSend: function() {
                $('#table_search876').attr('placeholder','<div class="spinner-grow text-primary" role="status"></div>');
            },
            success: function(event) {
                        
                        $('#input-group-sm-1234').html('<i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" id="table_search876" name="table_search" class="form-control float-left" dataid-id_associacao_pro="<?php echo $id_associacao_pro;?>" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteEvento()">');

                        $('#verAllParticipante789P23231354567').html('');
                        let event2 = JSON.parse(event);

                        console.log(event2);


                        let numeroBI = event2.n_bilhete;
                        let nomeComplet = event2.nome;
                        let dataNascimento = event2.data_nascimento;
                        let imagem = event2.imagem;
                        let genero = event2.genero;
                        let provincia = event2.descricao_associacao;
                        let graduacao = event2.graduacao;
                        let nome_pai = event2.nome_pai;
                        let nome_mae = event2.nome_mae;
                        let telefone = event2.telefone;
                        let telefone2 = event2.telefone2;
                        let email = event2.email;
                        let provincia_e = event2.provincia_e;
                        let municipio = event2.municipio;
                        let id_mestre = event2.id_mestre;

                        if (event2 == 7) {

                            if (!$('modal-default-Pesquisa-vazia').length) {
                                $('body').append(modalPesquisaVazia);
                            }

                            $('#bilhete2').html(dados.numero);

                            $('#modal-default-Pesquisa-vazia').modal({ show: true });



                        } else {

                            // $(document).ready(function() {

                                let id_associacao_pro2 = $('#categoriaNacional768').attr('data-id_associacao_pro2');
                                let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

                                let dado90 = {
                                    id_associacao_pro2: id_associacao_pro2,
                                    idEvento2: idEvento2
                                }

                                let imagem24 = 'http://localhost/KEDA/uploads/product/' + imagem;
                                
                                $('#id_mestre456').val(id_mestre);
                                $('#nomeMae').val(nome_mae);
                                $('#telefone11').val(telefone);
                                $('#telefone22').val(telefone2);
                                $('#nome_completo_bilhete').val(nomeComplet);
                                $('#datadeNascimento').val(dataNascimento);
                                $('#genero').val(genero);
                                $('#bilhete_completo_id').val(numeroBI);
                                $('#provincia_bilhete').val(provincia_e);
                                $('#nomePai').val(nome_pai);
                                $('#email23').val(email);
                                $('#municipio').val(municipio);

                                let foto = 'http://localhost/KEDA/uploads/product/'+imagem;

                                $('#mudarFotoAtleta').attr('src',foto);

                                if (graduacao === '0') {
                                    $('#graduacao').val("Faixa Preta");
                                } else {
                                    $('#graduacao').val(graduacao + "º DAN");
                                }

                                if (imagem24 !== '') {
                                    $('.img-bordered-sm23').attr('src', imagem24);
                                }
                                

                                $('#AddParticipanteTreinador874').unbind('click').on('submit', function(event) {

                                    event.preventDefault();

                                    let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

                                    let graduacao2 = $('input[name=graduacao]').val();
                                    let categoriatreinador = $('select[name=categoriatreinador]').val();
                                    let bilhete = $('input[name=bilheteNome]').val();
                                    let nome = $('input[name=Nome]').val();
                                    let provincia = $('input[name=provincia]').val();
                                    let genero = $('input[name=genero]').val();
                                    let data = $('input[name=data]').val();
                                    let id_mestre = $('input[name=id_mestre]').val();

                                    let dados = {
                                        id_mestre:id_mestre,
                                        categoriatreinador:categoriatreinador
                                    }

                                    // alert(type.categoriat);

                                        $.ajax({
                                            type: 'POST',
                                            data: dados,
                                            url: 'http://localhost/KEDA/treinador/setTreinador',
                                            beforeSend: function() {
                                                $('#bodyMensagem89').html('<div class="spinner-grow text-primary text-center" style="margin-left:300px" role="status"></div>');
                                            },
                                            success: function(event) {

                                                window.location.href = 'http://localhost/KEDA/treinador/listar';

                                            }
                                        })


                                })
                            // })
                        }
            }
        })
    } else {

    }

}

//TREINADOR


var modalAddTreinador564 = `<div class="modal fade text-sm pb-5" id="modal-default-modalAddTreinador564">
<div class="modal-dialog modal-lg primeiro123TREINA" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase">Products</h3>
            </div>
            <div class="msg-3457 text-danger ml-3 mb-3">
                    
            </div>
            <form id="formEscalaoEnviar56">
            <div class="row col-lg-12" style="left: 12px">
               
                <div class="col-sm-6">
                <!-- select -->
                    <div class="form-group">
                        <label>Selecione o Nivel do treinador</label>
                        <select class="form-control form-control-sm" id="treinadorNivel234" name="treinadorNivel234">
                            <option value="1"> Treinador Nivel 1 </option>
                            <option value="2"> Treinador Nivel 2 </option>
                            <option value="3"> Treinador Nivel 3 </option>
                            <option value="4"> Treinador Nivel 4 </option>
                            <option value="5"> Treinador Nivel 5 </option>
                            <option value="empty"> Todos Treinadores </option>
                        </select>
                    </div>
                </div>
               
                <div class="row col-sm-6" style="left:8px">
               
                </div>
               
            </div>
            </form>

            <div class="row col-lg-12">
                <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234TREINA">
                    <table class="table table-striped table-sm table-valign-middle">
                        <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome Completo</th>
                        <th>Nivel Treinador</th>
                        <th class="text-center">More</th>
                        </tr>
                        </thead>
                        <tbody class="p034COMPTREINADOR">
                        
                        </tbody>
                    </table>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddTodosEscolha321p034COMPTREINADOR"><i class="fas fa-user-plus"></i> Adicionar Todos </button>
                    </div>
                </div>

                <div class="card-body table-responsive p-0 col-lg-6 p-0 col-6 mostrar7648COMP mostrar7648COMP234" id="primeira1234TREINA" hidden>
                    <table class="table table-striped table-sm table-valign-middle">
                        <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome Completo</th>
                        <th class="text-center">More</th>
                        </tr>
                        </thead>
                        <tbody class="p0348TREINADOR">
                        
                        </tbody>
                    </table>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-success btn-sm mostrar76489" id="AddTodosEscolha32190p034COMPTREINADOR"><i class="fas fa-user-plus"></i> Adicionar Selecionado </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321p034COMPTREINADOR" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div> 
</div>`;

arrayADDparticipanteDirigente = [];
    

$('.idTreinador').unbind('click').on('click', function(event) {


    if (!$('modal-default-modalAddTreinador564').length) {
        $('body').append(modalAddTreinador564);
    }

    //SELECIONAR APARTIR DA CATEGORIA
    $('#treinadorNivel234').on('change', function(){
      
        let nivelTreinador = $('select[name=treinadorNivel234]').val();

        let type2;
        let url2;

        if(nivelTreinador === 'empty'){

            type2 = 'get';
            url2 = 'http://localhost/KEDA/treinador/geTALLtreinador'

        }else{

            type2 = 'post';
            url2 = 'http://localhost/KEDA/treinador/GetTreinadorNivel'

        }
    
        $.ajax({
            type: type2,
            data: {nivelTreinador},
            url: url2,
            beforeSend: function(){
                // $('#categoriaArbitroCampeonato7823').html('Carregando.....');
            },
            success: function(feedback){
                // alert(feedback);

                let event2 = JSON.parse(feedback);

                let titulo = $('.idArbitroJuizo').text();

                $('.mem23').html('<i class="fas fa-user-plus"></i>' + titulo);

                let mostra = ' ';

            if(event2.length !== 0){

                for (let i = 0; i < event2.length; i++) {
                    let nome_subcategoria_fk = '';
                    let url = '';

                    if (event2[i].nome_subcategoria_fk == 'NULL') {
                        nome_subcategoria_fk = '--------------';
                    } else {
                        nome_subcategoria_fk = event2[i].nome_subcategoria_fk;
                    }

                    mostra += `<tr>`;
                    if (event2[i].imagem == '') {
                        mostra += `<td>
                        <img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
                    </td>`;
                    } else {
                        mostra += `<td>
                        <img src="http://localhost/KEDA/uploads/product/${event2[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
                    </td>`;

                    }
                    mostra += `<td>
                    ${event2[i].nome}
                    </td>`;
                    mostra += `<td>
                    Treinador Nivel ${event2[i].categoriaTreinador}
                    </td>
                   
                    <td class="text-center">
                        <a href="" data-add-id_treinador="${event2[i].id_treinador}" class="btn btn-sm btn-info width-60 m-r-2"> + </a> 
                    </td> 
                    </tr>`;

                    $('.p034COMPTREINADOR').html(mostra);
                }

            }else{
                $('.p034COMPTREINADOR').html('<div class="text-center"> Nenhuma Informacao Disponivel</div>');
            }
                
                
            $('a[data-add-id_treinador]').click(function(event) {

                event.preventDefault();

                let id_treinador = $('a[data-add-id_treinador]').attr('data-add-id_treinador');

                $.post('http://localhost/KEDA/arbitro/getTreinadorID', { id_treinador }, function(e) {

                    let ee = JSON.parse(e);

                    if (arrayADDparticipante.length === 0) {

                        arrayADDparticipante.push(
                            ee[0]
                        );

                        mostrarADDTreinador(arrayADDparticipante);

                    } else {


                        if (arrayADDparticipante.findIndex(x => x.id_treinador === id_treinador) < 0) {
                            $('.msg-3457').html('');
                            arrayADDparticipante.push(
                                ee[0]
                            );

                            mostrarADDTreinador(arrayADDparticipante);

                        } else {
                            let mostra = `<h3 class="card-title text-bold text-uppercase"> O Arbitro ${ee[0].nome} ja foi Adicionado a lista </h3>`;
                            $('.msg-3457').html(mostra);

                            mostrarADDTreinador(arrayADDparticipante);
                        }

                    }

                });

            })

            $('#limparEscolha321').click(function() {
                arrayADDparticipante = [];
                mostrarADDTreinador(arrayADDparticipante);
            })
            
            //adicionar selecionar todos 

            $('#AddTodosEscolha321p034COMPTREINADOR').unbind('click').click(function(event) {
            
                alert('estou aqui');
                event.preventDefault();

                let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');


                    let dados100 = [];

                    console.log(dados100);
               
                    for (let i = 0; i < event2.length; i++) {

                        dados100.push(
                            event2[i]
                        );

                    }

                    dados100.push(idcampeonato);

                    console.log(dados100);

                    $.ajax({
                        type: 'POST',
                        data: { dados: dados100 },
                        url: 'http://localhost/KEDA/Campeonato/setVParticipanteEventoTreinador',
                        beforeSend: function() {
                            $('.p0348TREINADOR').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                        },
                        success: function(event) {

                            location.reload();
                         
                        }
                    })

            });

            $('#AddTodosEscolha32190p034COMPTREINADOR').unbind('click').click(function(event) {
            
                event.preventDefault();

                let idcampeonato = $('#pegarListaCategoria7645390').attr('data_id_campeonato');


                    arrayADDparticipante.push(idcampeonato);

                    $.ajax({
                        type: 'POST',
                        data: { dados: arrayADDparticipante },
                        url: 'http://localhost/KEDA/Campeonato/setVParticipanteEventoTreinador',
                        beforeSend: function() {
                            $('#primeira1234').html('<div class="d-flex justify-content-center" style="margin-top: 29px;"><div class="spinner-grow" style="width: 6rem; height: 6rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
                        },
                        success: function(event) {

                            location.reload();
                         
                        }
                    })

            })

            }
        })
        
    })

   
    $('#modal-default-modalAddTreinador564').modal('show');

    $('.p034').html('');

})

//funcao para adicionar treinadores a lista


function mostrarADDTreinador(arrayADDparticipante) {
    console.log(arrayADDparticipante);
    if (arrayADDparticipante === '' || arrayADDparticipante.length === 0) {

        $('.p0348TREINADOR').html('');
        $('.msg-3457').html('');

        let classe = 'card-body table-responsive col-lg-12 p-0 col-12';
        let estilo = 'max-width:800px';

        $('.primeiro123TREINA').attr('style', estilo);
        $('#primeira1234TREINA').attr('class', classe);
        // $('.mostrar7648').attr('hidden', 'hidden');
        $('.mostrar7648COMP234').attr('hidden', 'hidden');
        
        $('#primeira123490').attr('hidden', 'hidden');

        $('#AddTodosEscolha321').removeAttr('hidden');

    } else {

        let classe = 'card-body table-responsive col-lg-6 p-0 col-6';
        let estilo = 'max-width:1334px';
        $('.primeiro123TREINA').attr('style', estilo);
        $('#primeira1234TREINA').attr('class', classe);
        $('.mostrar7648COMP234').removeAttr('hidden');

        $('#AddTodosEscolha321').attr('hidden', 'hidden');

        let mostra = '';

        for (let i = 0; i < arrayADDparticipante.length; i++) {
            let nome_subcategoria_fk = '';
            let url = '';

            if (arrayADDparticipante[i].nome_subcategoria_fk == 'NULL') {
                nome_subcategoria_fk = '--------------';
            } else {
                nome_subcategoria_fk = arrayADDparticipante[i].nome_subcategoria_fk;
            }

            mostra += `<tr>`;
            if (arrayADDparticipante[i].imagem == '') {
                mostra += `<td>
            <img src="http://localhost/KEDA/assets/images/3.JPG" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;
            } else {
                mostra += `<td>
            <img src="http://localhost/KEDA/uploads/product/${arrayADDparticipante[i].imagem}" alt = "Product 1" class = "img-circle img-size-32 mr-2" style="width: 32px;height: 32px;">
        </td>`;

            }
            mostra += `<td>
           ${arrayADDparticipante[i].nome}
        </td>`;
            mostra += `<td>
           ${arrayADDparticipante[i].nome_categoria_fk}
        </td>
        <td>
           ${nome_subcategoria_fk}
        </td>
        <td class="text-center">
            <a href="" data-remove-id_treinador="${arrayADDparticipante[i].id_treinador}" class="btn btn-sm btn-danger width-40 m-r-2"> - </a> 
        </td> 
        </tr>`;

            $('.p0348TREINADOR').html(mostra);
        }
    }

    $('a[data-remove-id_treinador]').click(function(event) {

        event.preventDefault();

        let id_treinador = $(this).attr('data-remove-id_treinador');

        let posicaoRemove = arrayADDparticipante.findIndex(function(wizard) {
            return wizard.id_treinador === id_treinador;
        });

        arrayADDparticipante.splice(posicaoRemove, 1);

        mostrarADDTreinador(arrayADDparticipante);

    });


}



$('#maisInfomestreTreinador3').unbind('click').click(function(event){

    event.preventDefault();
    
    alert("ola mundo animal");
})

//--------------------------------



var modalAddClassificacaoFinal = `<div class="modal fade text-sm pb-5" id="modal-default-modalAddClassificacaoFinal">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase">Classificacao Final</h3>
            </div>
            <div class="msg-3457 text-danger ml-3 mb-3">
                    
            </div>
            <form id="formEscalaoEnviar56">
            <div class="row col-lg-12" style="left: 12px">
               
                <div class="col-sm-4">
                <!-- select -->
                    <div class="form-group">
                        <label>Escalao</label>
                        <select class="form-control form-control-sm" id="classificacaoEscalaoFinal234" name="classificacaoEscalaoFinal234">
                    
                        </select>
                    </div>
                </div>
               
                <div class="row col-sm-4" style="left:8px">
               
                    <div class="col-sm-12">
                    <div class="form-group">
                        <label>Genero</label> 
                        <select class="form-control form-control-sm" id="classificacaoGeneroFinal234" name="classificacaoGeneroFinal234" disabled="true">
                        
                        </select>
                    </div>
                    
                    </div>
              
                </div>

                <div class="row col-sm-4" style="left:8px">
               
                    <div class="col-sm-12">
                    <div class="form-group">
                        <label>Subcategoria</label> 
                        <select class="form-control form-control-sm" id="classificacaoCategoriaFinal234" name="classificacaoCategoriaFinal234" disabled="true">
                        
                        </select>
                    </div>
                    
                    </div>
              
                </div>
               
            </div>
            </form>

            <div class="row col-lg-12">
                <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234COMPGRE12">
                    <div class="table table-striped table-sm table-valign-middle p034CLASSIFICACAOCAMPEONATOGRE12">
                   
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddSalvarClassificacaoCampeonato56" hidden><i class="fas fa-user"></i> Salvar </button>
                    </div>
                </div>

                <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234COMP">
                    <div class="table table-sm p034CLASSIFICACAOCAMPEONATOPOSICAO456">
                    </div>
                </div>
                <span class="text-danger p-2" id="mensagem764feedback"></span>
            </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" id="fecharEscolha321p034COMPDIRIGENTE"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321p034COMPDIRIGENTE" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div> 
</div>`;

function mostrarClassificacaoFinal(listaClassificacao = null){

   

    let mostra;
    let posicao;

    mostra = `<table class="table table-striped table-valign-middle">`;

    $.each(listaClassificacao,function(i,retorno){

            if(retorno.posicao === "1"){
                posicao = '<span class="badge badge-warning p-2" style="font-size:12px;background:#ffc107;">'+retorno.posicao+' ª Lugar'+'</span>';
            }

            if(retorno.posicao === "2"){
                posicao = '<span class="badge badge-gray p-2 border" style="font-size:12px;background:#c2c7d0;">'+retorno.posicao+' ª Lugar'+'</span>';
            }

            if(retorno.posicao === "3"){
                posicao = '<span class="badge badge-info p-2" style="font-size:12px;background:#ff8f31;">'+retorno.posicao+' ª Lugar'+'</span>';
            }
     
            mostra +=`<tbody>
                <tr>
                    <td>${retorno.name_participante}</td>
                    <td>
                        ${posicao}
                    </td>
                </tr>
            </tbody>`;
    });
        mostra +=`</table>`;

    $('.p034CLASSIFICACAOCAMPEONATOGRE12').html(mostra);
}

listaClassificacao = [];

$('#definirVencedore756').unbind('click').click(function(event){

    event.preventDefault();

    let idactividade = $(this).attr('id_actividadeUIO67');
    let idactividadeIO = $(this).attr('id_actividade');
    
    
    if (!$('modal-default-modalAddClassificacaoFinal').length) {
        $('body').append(modalAddClassificacaoFinal);
    }

    let id_ddd = $('#pegarListaCategoria764539450').attr('data_id_campeonato');

    $.post('http://localhost/KEDA/Campeonato/getEscalaoCampeonato',{id_ddd},function(event){
        $('#classificacaoEscalaoFinal234').html('<option></option>');
        $('#classificacaoEscalaoFinal234').append(event);
    });

    $("#fecharEscolha321p034COMPDIRIGENTE").click(function(){
        location.reload();
    });

    $('#classificacaoEscalaoFinal234').change(function(){

        listaClassificacao = [];

        let escalaoer = $(this).val();

        mostrarClassificacaoFinal(listaClassificacao);
        $('.p034CLASSIFICACAOCAMPEONATOPOSICAO456').html("");
        $('.classificacaoCategoriaFinal234').html("");

        let dado = {
            escalao : escalaoer,
            id_campeonato : id_ddd
        };

        $.post('http://localhost/KEDA/Campeonato/buscarSelectGenero',dado,function(event){
            $('#classificacaoGeneroFinal234').html('<option></option>');
            $('#classificacaoCategoriaFinal234').html('<option></option>');
            $('#classificacaoGeneroFinal234').removeAttr('disabled');
            $('#classificacaoGeneroFinal234').append(event);
        });

        $('#classificacaoGeneroFinal234').change(function(){

            let genero = $(this).val();
            alert(id_ddd+escalaoer+genero);
    
            $.post('http://localhost/KEDA/Campeonato/buscarSelectCategoriaPeso',{genero,escalaoer,id_ddd},function(event){
                console.log(event);
                $('#classificacaoCategoriaFinal234').html('<option></option>');
                $('#classificacaoCategoriaFinal234').removeAttr('disabled');
                $('#classificacaoCategoriaFinal234').append(event);
            });
            
        })
        
    })

    $('#classificacaoCategoriaFinal234').change(function(){

        let categoriaPeso = $(this).val();
        let escalao = $('#classificacaoEscalaoFinal234').val();
        let genero = $('#classificacaoGeneroFinal234').val();
        // let escalao = $('#classificacaoEscalaoFinal234').val();

        let dados = {
            categoriaPeso : categoriaPeso,
            escalao : escalao,
            genero : genero,
            id_actividade : idactividade,
            idactividadeIO : idactividadeIO
        }

        console.log(dados);

        $.post('http://localhost/KEDA/Campeonato/buscarSelectCategoriaPesoClassificacao', dados ,function(event){

            console.log(event);
            if(event === "0"){
                $('.p034CLASSIFICACAOCAMPEONATOPOSICAO456').html('<div class="text-center">Nenhum Atleta participou nessa categoria</div>');
            }else{
                $('.p034CLASSIFICACAOCAMPEONATOPOSICAO456').html(event);
            }

            $('select[id_participante45980]').change(function(){
                
                $('#AddSalvarClassificacaoCampeonato56').removeAttr('hidden');

                let id_participante = $(this).attr('id_participante45980');
                let name_participante = $(this).attr('name_participante');

                let valorSelect = $(this).val();

                $.post('http://localhost/KEDA/Campeonato/buscarSelectCategoriaPeso5',dados,function(event){

                    let dados2 = {
                        id_categoriapeso : event,
                        id_participante : id_participante,
                        name_participante : name_participante,
                        posicao : valorSelect
                    };
    
                    if(valorSelect !== "0"){
                        if (listaClassificacao.findIndex(x => x.posicao === valorSelect) < 0) {
                            if (listaClassificacao.findIndex(x => x.id_participante === id_participante) < 0) {
                                listaClassificacao.push(dados2);
                            }
                        }else{
                            $('#mensagem764feedback').html('O '+valorSelect+' ª lugar ja foi inserido');
                        }

                    }else{
                        let posicaoRemove = listaClassificacao.findIndex(function(wizard) {
                            return wizard.id_participante === id_participante;
                        });
                
                        listaClassificacao.splice(posicaoRemove, 1);
                    }
                    
                    // console.log(listaClassificacao.length);
                    mostrarClassificacaoFinal(listaClassificacao);

                });

            })
            
            $('#AddSalvarClassificacaoCampeonato56').unbind('click').click(function(event){

               event.preventDefault();

               console.log(listaClassificacao);

               $.ajax({
                   type:'post',
                   data: {dados : listaClassificacao},
                   url:'http://localhost/KEDA/Campeonato/getClassificacaoCategoriaFinal',
                    success: function(event){

                        
                        let mensagemRetorno = `<div class="text-center p-5 col-12"><div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" id="teste1298635">×</button>Success alert preview. This alert is dismissable.
                          </div></div>`;

                        let mensagemRetorno2 = `<div class="text-center p-5 col-12"><div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Sucesso. A Classificacao foi definida.
                        </div></div>`;

                        if(event != 55){

                            if(event == 1){
                                $('.p034CLASSIFICACAOCAMPEONATOGRE12').html('<div class="text-center p-2 col-12">'+mensagemRetorno+'</div>');
                                
                                    $('#teste1298635').click(function(){
                                        listaClassificacao = [];
                                        mostrarClassificacaoFinal(listaClassificacao);
                                    })

                            }else{
                                $('.p034CLASSIFICACAOCAMPEONATOGRE12').html('<div class="text-center p-2 col-12"><span>'+mensagemRetorno2+'</span></div>');
                            }

                        }else{
                            $('.p034CLASSIFICACAOCAMPEONATOGRE12').html('<div class="text-center p-2 col-12"><span class="text-danger"> Esses dados ja foram adicionados </span></div>');
                            listaClassificacao = [];
                            // mostrarClassificacaoFinal(listaClassificacao);
                        }
                    },
                    beforeSend: function(){
                        $('.p034CLASSIFICACAOCAMPEONATOGRE12').html('<div class="text-center p-5 col-12"><div>Definindo a classificacao do '+escalao+' - '+genero+' da Categoria de peso de '+categoriaPeso+'</div><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only">Loading...</span></div></div>');
                    }
               })
            })

        });

    });

    $('#modal-default-modalAddClassificacaoFinal').modal('show');

})
//--------------------------------

// $(document).ready(function(){
// $.post('http://localhost/KEDA/Campeonato/buscarSelectCategoriaPeso58',function(event){
//         //    alert('addasdasd');
//    let teste2 = JSON.parse(event);

//    console.log(teste2);

// });
// });



$('#gerarRelatorioCamp567').unbind('click').click(function(event){
    event.preventDefault();

    alert('ola mundo');

})


//carregar apartir de uma lista de participante........................................................


var modalAddListadeParticipante66574 = `<div class="modal fade text-sm pb-5" id="modal-default-modalAddListadeParticipante66574">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase"></h3>
            </div>
            <div class="msg-3457 text-danger ml-3 mb-3">
                    
            </div>
            <form id="formEscalaoEnviar56">
            <div class="row col-lg-12" style="left: 12px">
               
                <div class="col-sm-6">
                <!-- select -->
                    <div class="form-group">
                        <label>Selecione o Escalao Etario</label>
                        <select class="form-control form-control-sm" id="escalaoCampeonato78" name="escalaoCampeonato78">
                          
                        </select>
                    </div>
                </div>
               
                <div class="row col-sm-6" style="left:8px">
               
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Genero</label> 
                    <select class="form-control form-control-sm" id="genero78" name="genero78">
                     
                    </select>
                  </div>
                
                </div>
              
                </div>
               
            </div>
            </form>

            <div class="row col-lg-12">
                <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234COMP">
                    <table class="table table-striped table-sm table-valign-middle">
                        <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome Completo</th>
                        <th class="text-center">More</th>
                        </tr>
                        </thead>
                        <tbody class="p034COMPLISTAPROVINCIAIS">
                        
                        </tbody>
                    </table>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddTodosEscolha321p034COMPDIRIGENTE"><i class="fas fa-user-plus"></i> Adicionar Todos </button>
                    </div>
                </div>

                <div class="card-body table-responsive p-0 col-lg-6 p-0 col-6 mostrar7648COMP mostrar7648COMP234" id="primeira1234COMP" hidden>
                    <table class="table table-striped table-sm table-valign-middle">
                        <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome Completo</th>
                        <th class="text-center">More</th>
                        </tr>
                        </thead>
                        <tbody class="p0348COMPDIRIGENTE">
                        
                        </tbody>
                    </table>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-success btn-sm mostrar76489 AddTodosEscolha32190p034COMPDIRIGENTE"><i class="fas fa-user-plus"></i> Adicionar Selecionado </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321p034COMPDIRIGENTE" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div> 
</div>`;


$('#AdicionarParticipante768').unbind('click').on('click', function(event) {

    $('.p034COMPLISTAPROVINCIAIS').html('');

    event.preventDefault();

    if (!$('modal-default-modalAddListadeParticipante66574').length) {
        $('body').append(modalAddListadeParticipante66574);
    }

    $.post('http://localhost/KEDA/Campeonato/getListaParticipanteNacional', function(event){
       
        let event2 = JSON.parse(event);

        console.log(event2);

        let mostra = '';

        for (let i = 0; i < event2.length; i++) {

            //  let categoriaPeso = verificarCategoria(event2[i].peso, event2[i].genero, escalao);

            //  alert(categoriaPeso);

                // if (control.findIndex(x => x.descricao_categoriaPeso == categoriaPeso) < 0){

                // }else{

                //     arraygetPat.push(event2[i]);

                    mostra = `<tr>
                    <td>`;
                   
                    mostra +=`</td> 
                            <td>
                            ${event2[i].name_participante}
                            </td>
                            <td>
                            ${event2[i].descricao_categoriaPeso}
                            </td>
                            <td>
                            ${event2[i].nome_academia}
                            </td>
                        
                            <td class="text-center">
                                <a href="#" data-add-id_atleta="${event2[i].id_atleta}" class="btn btn-sm btn-info width-60 m-r-2"> + </a> 
                            </td>  
                        </tr>`;
    
    
                    $('.p034COMPLISTAPROVINCIAIS').append(mostra);

                }
        

    $('#modal-default-modalAddListadeParticipante66574').modal('show');

    })
})

$('#pegarListaCategoria7645390').ready(function(){

    let control = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');

    if(control != 0){
        $('#AdicionarParticipante768').attr('hidden','hidden');
    }else{
        $('#AdicionarParticipante768').removeAttr('hidden');
    }

})

var modalgetCarteiraMestre564 = `<div class="modal fade text-sm pb-5" id="modal-default-modalgetCarteiraMestre564">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase">Products</h3>
            </div>
            <div class="msg-3457 text-danger ml-3 mb-3">
                    
            </div>
        
            <div class="row col-lg-12">

                <div class="card-body table-responsive col-lg-12 p-0 col-12" id="primeira1234CARTEIRApARTICIPANTE" style="height:400px">
                   
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-success btn-sm mostrar7648" id="AddTodosEscolha321p034COMPDIRIGENTE"><i class="fas fa-user-plus"></i> Adicionar Todos </button>
                </div>
            </div>
        </div>
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321p034COMPDIRIGENTE" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div> 
</div>`;



    $('#CriarCarteiraMestre45').unbind('click').on('click', function(event){

        event.preventDefault();

        let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
        let idEvento2 = $(this).attr('data_id_mestre');

        let dado90 = {
            id_associacao_pro2: id_associacao_pro2,
            idEvento2: idEvento2
        };

        if (!$('modal-default-modalgetCarteiraMestre564').length) {
            $('body').append(modalgetCarteiraMestre564);
        }

        $.ajax({
            type: 'post',
            data: {idEvento2},
            url: 'http://localhost/KEDA/mestre/verMestreCartao',
            beforeSend: function(){

            },
            success: function(event){
                let event2 = JSON.parse(event);

                console.log(event2);
                criarCARTEIRA(event2);
            }
        })

        $('#modal-default-modalgetCarteiraMestre564').modal('show'); 

        // window.location.href = 'http://localhost/KEDA/credencial/gerar';

    })


    function criarCARTEIRA(arrayDados){
        
        let mostra;

            mostra = `<div class="content ml-3" >
            <div class="card" style="border-radius: 2%;height:286px;width: 482px;background-color: #fff;background-image: url('http://localhost/KEDA/assets/images/1.png');background-size: cover">
             
              <div class="card-body">
                <div class="d-flex pt-3 col-12">
                    
                    
                    <div class="d-flex flex-column col-lg-8">
                        <div class="d-flex">
                            <img src="http://localhost/KEDA/assets/images/A22.PNG" alt = "Product 1" style="width: 70px;height: 70px;border-radius:0%">
                            <div class="d-flex flex-column ml-2 mr-0 text-bold" style="font-weight: 700;font-size: 12px;color:white">
                            <span>FAJUJ - FEDERACAO</span>
                            <span>ANGOLANA DE JIU-JITSU</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="d-flex flex-column ml-2 text-bold" style="font-weight: 700;font-size: 12px;color:white">
                            <span>04-FEF90 - ${arrayDados[0]['graduacao']}ªDAN</span>
                            <span>${arrayDados[0]['nome']}</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="d-flex flex-column ml-2 text-bold" style="font-weight: 700;font-size: 12px;color:white">
                            <span>NASC</span>
                            <span>29-10-1989</span>
                            </div>
                            <div class="d-flex flex-column ml-5 text-bold text-right" style="font-weight: 700;font-size: 12px;color:white">
                            <span>VALIDADE</span>
                            <span>2022</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="d-flex flex-column ml-2 text-bold" style="font-weight: 700;font-size: 12px;color:white;">
                            <span style="border-bottom: 1px solid white" class="text-uppercase">ASSOCIACAO PROVINCIAL DE ${arrayDados[0]['descricao_associacao']}</span>
                            <span>ASSOCIACAO PROVINCIAL DE LUANDA</span>
                            </div>
                            
                        </div>
                    </div>

                    <div class="d-flex flex-column col-lg-4">
                        <div class="bg-light mb-1" style="width: 110px;height:130px;">
                            <img src="http://localhost/KEDA/uploads/product/${arrayDados[0]['imagem']}" alt = "Product 1" style="width: 110px;height: 130px;border-radius:0%;box-shadow: 0 0 1px #f8f9fa,0 1px 3px #f8f9fa;">
                        </div>
                        <div class="bt-3 text-center" style="display: block; width: 90px;height:90px;">
                            <img src="http://localhost/KEDA/assets/images/PNG12.png" alt = "Product 1" style="width: 70px;height: 70px;">
                        </div>
                        <span>MESTRE</span>
                    </div>

                </div>
                <!-- /.d-flex -->
               
                <!-- /.d-flex -->
                
                <!-- /.d-flex -->
              </div>
            </div>

            <div class="card border" style="height:286px;width: 482px;background-color: #fff;background-image: url('http://localhost/KEDA/assets/images/2.png');background-size: cover">
              <div class="card-header border-0">
               
                <div class="card-tools">
                 
                </div>
              </div>
              <div class="card-body">
               
                <!-- /.d-flex -->
    
                <!-- /.d-flex -->
               
                <!-- /.d-flex -->
              </div>
            </div>
            </div>`;

            $('#primeira1234CARTEIRApARTICIPANTE').html(mostra);


    }


    function pegarViaBilheteParticipanteCredencial(numeroBI) {

     
        let modalPesquisaVazia = `<div class="modal fade text-sm pb-5 hide" id="modal-default-Pesquisa-vazia">
            <div class="modal-dialog" style="max-width:578px">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
             
                    <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                        <div class="col-md-12 text-center" id="conteudoCarregar5955">
                            <p class="text-muted" id="bilhete2">addadadasdasd</p>
                            <span class="text-muted">NENHUMA INFORMACAO ASSOCIADA A ESSE NUMERO DE BILHETE</span>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>  
                    </div>
                </div>
            </div>
        </div>`;
    
        // let numeroBI = document.getElementById("table_search876").value;
    
        // let id_associacao_pro = $('#table_search876').attr('dataid-id_associacao_pro');

    
        let dados = {
            numero: numeroBI
        }
    
        if (numeroBI.length === 14) {
            $.ajax({
                type: 'POST',
                data: dados,
                url: 'http://localhost/KEDA/actividade/BuscaByBilheteMestre',
                beforeSend: function() {
                    $('#input-group-sm-1234').html('<div class="spinner-grow text-primary" role="status"></div>');
                },
                success: function(event) {
    
                    alert(event);
                  
                        $('#input-group-sm-1234').html('<i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" id="table_search876" name="table_search" class="form-control float-left" dataid-id_associacao_pro="<?php echo $id_associacao_pro;?>" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteEvento()">');
    
                        $('#verAllParticipante789P23231354567').html('');
                        let event2 = JSON.parse(event);
    
    
                        let numeroBI = event2.n_bilhete;
                        let nomeComplet = event2.nome;
                        let dataNascimento = event2.data_nascimento;
                        let imagem = event2.imagem;
                        let genero = event2.genero;
                        let provincia = event2.descricao_associacao;
    
                        if (event2 == 7) {
    
                            if (!$('modal-default-Pesquisa-vazia').length) {
                                $('body').append(modalPesquisaVazia);
                            }
    
                            $('#bilhete2').html(dados.numero);
    
                            $('#modal-default-Pesquisa-vazia').modal({ show: true });
    
    
    
                        } else {
    
                      
                                let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
                                let idEvento2 = $('#pegarListaCategoria76453').attr('idEvento');
    
                                let dado90 = {
                                    id_associacao_pro2: id_associacao_pro2,
                                    idEvento2: idEvento2
                                }
    
                                $.ajax({
                                    type: 'POST',
                                    data: dado90,
                                    url: 'http://localhost/KEDA/Campeonato/getIdCampeonatoCorrente',
                                    success: function(event) {
    
                                        let dado = {
                                            id: event
                                        }
    
                                        $.ajax({
                                            type: 'POST',
                                            data: dado,
                                            url: 'http://localhost/KEDA/Campeonato/getALLCategoria',
                                            beforeSend: function() {
    
                                            },
                                            success: function(event) {
                                                $('#genero_categoria231').html(event);
                                            }
                                        })
                                    }
                                })
    
                                $.ajax({
                                    type: 'POST',
                                    url: 'http://localhost/KEDA/Campeonato/getFuncao',
                                    beforeSend: function() {
                                        $('#funcaoCaid2113').html('aaddasdasd');
                                    },
                                    success: function(event) {
                                        $('#funcaoCaid2113').html(event);
                                    }
                                })
    
                                $.ajax({
                                    type: 'POST',
                                    data: dado90,
                                    url: 'http://localhost/KEDA/Campeonato/getIdCampeonatoCorrente',
                                    success: function(event) {
    
                                        let dado67 = {
                                            id: event,
                                            genero: genero
                                        }
    
                                        $.ajax({
                                            type: 'POST',
                                            data: dado67,
                                            url: 'http://localhost/KEDA/Campeonato/getIdCategoria',
                                            success: function(event) {
    
                                                $('#genero_categoria231').html(event);
                                            }
                                        })
                                    }
                                })
    
    
                                if (!$('modal-default-participante-Pesquisa-4567').length) {
                                    $('body').append(modalAdicionarParticipantePesquisas);
                                }
    
                                let imagem24 = 'http://localhost/KEDA/uploads/product/' + imagem;
    
    
                                $('#nome_completo_bilhete').val(nomeComplet);
                                $('#datadeNascimento').val(dataNascimento);
                                $('#genero_completo_id').val(genero);
                                $('#bilhete_completo_id').val(numeroBI);
                                $('#provincia_bilhete').val(provincia);
                                if (imagem24 !== '') {
                                    $('.img-bordered-sm23IMAGEM6745').attr('src', imagem24);
                                }
    
                                $('#modal-default-participante-Pesquisa-4567').modal({ show: true });
    
                                $('#AddParticipanteEvente874').on('submit', function(event) {
    
                                    event.preventDefault();
    
                                    // alert(event);
    
                                    // let id_evento = $('#pegarListaCategoria76453').attr('idEvento');
                                    let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
                                    let idEvento2 = $('#pegarListaCategoria76453').attr('idEvento');
    
                                    let dado90 = {
                                        id_associacao_pro2: id_associacao_pro2,
                                        idEvento2: idEvento2
                                    }
    
                                    console.log(dado90);
    
                                    $.post('http://localhost/KEDA/Campeonato/getIdCampeonatoCorrente', dado90, function(event3) {
    
                                        let categoria = $('select[name=categoria]').val();
                                        let funcao = $('select[name=funcao]').val();
                                        let bilhete = $('input[name=bilheteNome]').val();
                                        let nome = $('input[name=Nome]').val();
                                        let provincia = $('input[name=provincia]').val();
                                        let genero = $('input[name=genero]').val();
                                        let data = $('input[name=data]').val()
                                        
                                        let dados = {
                                            id_mestre: event2.id_mestre,
                                            id_campeonato: event3,
                                            categoria: categoria,
                                            funcao: funcao,
                                            bilhete: bilhete,
                                            nome: nome,
                                            provincia: provincia,
                                            genero: genero,
                                            data: data
                                        }
    
                                        $.ajax({
                                            type: 'POST',
                                            data: dados,
                                            url: 'http://localhost/KEDA/Campeonato/setParticipanteEvento',
                                            beforeSend: function() {
                                                $('#bodyMensagem89').html('<div class="spinner-grow text-primary text-center" role="status"></div>');
                                            },
                                            success: function() {
                            
                                                
                                                carregarAllParticipante();
                                                location.reload();
    
                                            }
                                        })
    
                                    })
    
                                })
                        }
                   
                }
            })
        } else {
    
        }
    
    }

    $('.idDiplomaVencedor').click(function(event){
        event.preventDefault();

        $('#divMostrarListaClassificacao45').removeClass("col-12").addClass("col-4");
        $('#idcontroleTelaCertificado67').removeAttr('hidden');

    })

    ///------------------------------------------------------------------------------------------------------------------------

    

var modalRelatorioFinalNacional = `<div class="modal fade text-sm pb-5" id="modal-default-modalRelatorioFinalNacional">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
          
          
            <div class="card-body">
                <div class="modal-body" id="conteudoLista5638">
                    <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao:<?= date('Y-m-d');?></span>
                    <div>
                        <img style="width:130px; height:130px; margin-top: 60px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="http://localhost/KEDA/assets/images/A22.png">
                    </div>
                    <h2 style="font-size: 22px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
                    <hr>
                    <p class="font-weight-bold" style="font-size: 20px;text-align: center;">Comunicado Final nº 005/SG-FAJUJ/2018</p>

                    <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;text-justify: inter-word;text-indent: 35px">Para o conhecimento do secretario de estado para o desporto, a direção nacional do desporto, as direccao Provinciais da juventude e desporto, Associacoes Provinciais de Ju-Jitsu, órgãos de Comunicacao social e os demais interessados,
                    a federação Angolana de Ju-Jitsu comunica que foi realizado no passado dia <span id="iniciodaprova"></span> no <span id="idlocalcampeonato34"></span> a partir das 9h00 local, a <span id="edicaoCampeonato"></span>ª Edicao do Campeonato Nacional de Ju-Jitsu.
                    </p>
                    <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;text-justify: inter-word;text-indent: 35px">O evento reuniu as provinciais de <span class="font-weight-bold" id="listProvinciasCp"></span> num total de <span id="totalCompet45">72</span> competidores, dentre os atletas femininas e masculinos.
                    As competições decorreram nas categorias de <span id="listCategoriaCp"></span> e surgiram os seguintes resultados:
                    </p>

                    <p class="text-justify" id="CF36198ui"></p>
                    <p class="text-justify" id="CF36198uiyu"></p>

                    <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;text-justify: inter-word;text-indent: 35px">
                    As Competições terminaram quando eram 15 horas locais com as premiações e entrega dos certificado de certificado de participações aos participantes a <span id="edicaoCampeonato56"></span>ª Edição do campeonato Nacional de Ju-Jitsu.
                    Nada mais para comunicar.
                    </p>

                    <p class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;">
                    Luanda, aos <span id="fimdaprova12"></span>
                    </p>

                    <p class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;">
                    O Secretario Geral
                    </p>

                    <p class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;" id="secretarioGeral34">
                   
                    </p>

                </div>
            </div>
           
        </div>
       
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-info btn-sm mostrar7648COMP" id="ExportarRelatorioCamp45"><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Relatorio (PDF)</div></button>
        </div>

    </div>
</div> 
</div>`;

//Funcao para converter data para extenso

function formatar(dataIn) {
    
    data = new Date(dataIn);
  
    var day = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"][data.getDay()];
    var date = data.getDate();
    var month = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"][data.getMonth()];
    var year = data.getFullYear();
  
    // console.log(data.getDay());
  
    let dataExtensao = (`${date} de ${month} de ${year}`);

    return dataExtensao;

}

//Fim da Funcao

$('.gerarRelatorioFinalCampeonato').on('click', function(){
     
    let idcampeonato = $('#pegarListaCategoria7645390654321').attr('data_id_campeonato');
    
    if (!$('modal-default-modalRelatorioFinalNacional').length) {
        $('body').append(modalRelatorioFinalNacional);
    }


    provinciaParticipante = [];
    $.post('http://localhost/KEDA/Campeonato/getCampeonatoProvinParti',{idcampeonato},function(event){
        
        let dados = JSON.parse(event);

        $('#listProvinciasCp').html(" ");

        console.log(dados.length);

        for(let i = 0 ; i < (dados.length) - 1 ; i++){

            if((i+1) != dados.length - 2){
                $('#listProvinciasCp').append(dados[i].provincia + ', ');
                provinciaParticipante.push(dados[i].provincia + ', ');
            }else{
                $('#listProvinciasCp').append(dados[i].provincia + ' e ');
                provinciaParticipante.push(dados[i].provincia + ' e ');
            }
        }

    })

    arrayCategorias = [];

    $.post('http://localhost/KEDA/Campeonato/getCampeonatoCategoriaParti',{idcampeonato},function(event){
        
        let dados = JSON.parse(event);
        

        $('#listCategoriaCp').html(" ");

        for(let i = 0 ; i < dados.length ; i++){

            if((i+1) != dados.length - 1){
                $('#listCategoriaCp').append(dados[i].descricao_categoriaPeso + ', ');
                arrayCategorias.push(dados[i].descricao_categoriaPeso + ', ');
            }else{
                $('#listCategoriaCp').append(dados[i].descricao_categoriaPeso + ' e ');
                arrayCategorias.push(dados[i].descricao_categoriaPeso + ' e ');
            }

        }

    })

    $.post('http://localhost/KEDA/Campeonato/getTotalParticipanteCampeonato',{idcampeonato},function(event){
        
       $('#totalCompet45').html(event);
       total_de_participantes = event;

    })

    $.post('http://localhost/KEDA/Campeonato/getSecretarioGeral',function(event){
       $('#secretarioGeral34').html(event);
        nome_secretario = event;
    })

    $.post('http://localhost/KEDA/Campeonato/getInfoRelatorioFinal',{idcampeonato},function(event){
        
        let dados = JSON.parse(event);

        $.each(dados, function(i,retorno){

            let data = retorno.data_inicio;
            let data1 = retorno.data_fim;

            let new_data = formatar(data);
            dataInicioCamp = new_data;
            let new_data_fim = formatar(data1);
            dataFimCamp = new_data;

            $('#fimdaprova').html(retorno.data_fim);
            $('#fimdaprova12').html(new_data_fim);
            $('#iniciodaprova').html(new_data);
            $('#directorprova').html(retorno.director_prova);
            $('#paiscidade').html(retorno.cidade_campeonato);
            $('#totaldemembros').html(retorno.data_fim);
            $('#edicaoCampeonato').html(retorno.edicao_campeonato);
            edicao_campeonato_mostra = retorno.edicao_campeonato;
            $('#edicaoCampeonato56').html(retorno.edicao_campeonato);
            $('#idlocalcampeonato34').html(retorno.local);
            local_campeonato = retorno.local;
        })

    })

    $.ajax({
        type: 'post',
        data: {idcampeonato},
        url: 'http://localhost/KEDA/Campeonato/ClassificacaoFinalRelatorio',
        beforeSend: function(){

        },
        success: function(event){
            $('#CF36198ui').html(event);
            // dados11 = event;
        }
    })

    $.ajax({
        type: 'post',
        data: {idcampeonato},
        url: 'http://localhost/KEDA/Campeonato/ClassificacaoFinalRelatorio2',
        beforeSend: function(){

        },
        success: function(event){
            dados11 = event;
        }
    })

    $.ajax({
        type: 'post',
        data: {idcampeonato},
        url: 'http://localhost/KEDA/Campeonato/ClassificacaoFinalRelatorioProvincia',
        beforeSend: function(){

        },
        success: function(event){
            $('#CF36198uiyu').html(event);
            // dados12 = event;
        }
    })

    $.ajax({
        type: 'post',
        data: {idcampeonato},
        url: 'http://localhost/KEDA/Campeonato/ClassificacaoFinalRelatorioProvincia2',
        beforeSend: function(){

        },
        success: function(event){
            // $('#CF36198uiyu').html(event);
            dados12 = event;
        }
    })

    $('#ExportarRelatorioCamp45').click(function(){
        
        var modalRelatorioFinalNacional2 = `
        <div>
            <img style="width:130px; height:130px; margin-top: 40px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="http://localhost/KEDA/assets/images/A22.png">
        </div>
        <h2 style="font-size: 22px;text-align: center;"><u>FEDERACAO ANGOLANA DE JU-JITSU e DA</u></h2>
        
        <p class="font-weight-bold" style="font-size: 20px;text-align: center;"><b>Comunicado Final nº 005/SG-FAJUJ/2018</b></p>

        <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;text-justify: inter-word;text-indent: 35px">Para o conhecimento do secretario de estado para o desporto, a direção nacional do desporto, as direccao Provinciais da juventude e desporto, Associacoes Provinciais de Ju-Jitsu, órgãos de Comunicacao social e os demais interessados,
        a federação Angolana de Ju-Jitsu comunica que foi realizado no passado dia <span id="iniciodaprova">${dataInicioCamp}</span> no <span id="idlocalcampeonato34">${local_campeonato}</span> a partir das 9h00 local, a <span>${edicao_campeonato_mostra}</span>ª Edicao do Campeonato Nacional de Ju-Jitsu.
        </p>
        <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;text-justify: inter-word;text-indent: 35px">O evento reuniu as provinciais de <span class="font-weight-bold"><b>${provinciaParticipante}</b></span> num total de <span id="totalCompet45">${total_de_participantes}</span> competidores, dentre os atletas femininas e masculinos.
        As competições decorreram nas categorias de ${arrayCategorias} e surgiram os seguintes resultados:
        </p>

        <p class="text-justify">
        ${dados11}
        </p>
        <p class="text-justify">
        ${dados12}
        </p>

        <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;text-justify: inter-word;text-indent: 35px">
        As Competições terminaram quando eram 15 horas locais com as premiações e entrega dos certificado de certificado de participações aos participantes a <span id="edicaoCampeonato56">${edicao_campeonato_mostra}</span>ª Edição do campeonato Nacional de Ju-Jitsu.
        Nada mais para comunicar
        </p>

        <p class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;text-align: center">
        Luanda, aos <span id="fimdaprova12">${dataFimCamp}</span>
        </p>

        <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: center">
        O Secretario Geral
        </p>

        <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: center" id="secretarioGeral34">
        ${nome_secretario}
        </p>`;

        var janela = window.open('','','width=1024,heigth=600');
        janela.document.write('<html><head>');
        janela.document.write('<title>PDF</title>');
        janela.document.write('</head>');
        janela.document.write('<body>');
        janela.document.write(modalRelatorioFinalNacional2);
        janela.document.write('</body></html>');
        janela.document.close();
        janela.print();

        // const event = 'http://localhost/KEDA/Campeonato/gerarRelatorioCampeonato';
        // window.open(event);
   
    })

    $('#modal-default-modalRelatorioFinalNacional').modal('show'); 
})

