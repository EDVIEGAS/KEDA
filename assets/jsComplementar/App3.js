
$('#actividade555').on('click', function(event) {

    $('#modal-default-actividade').modal({ show: true });

    $('#AddActividade777').on('submit', function(event) {

        event.preventDefault();

        let dados = $(this).serialize();

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/actividade/cadastrar_actividade',
            beforeSend: function(event) {
                $('#conteudoCarregar5555').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-3x fa-sync-alt fa-spin"></i><h5> Gravando...</h5></div>');
            },
            success: function(event) {
                window.location.href = "http://localhost/KEDA/actividade/listar";
            }
        })
    })

});

$('a[data-editar-actividade]').on('click', function(event) {

    event.preventDefault();

    let nome = $(this).attr('data-nome');
    let data_inicio = $(this).attr('data-inicio');
    let data_fim = $(this).attr('data-fim');
    let local = $(this).attr('data-local');
    let id_actividade = $(this).attr('data-editar-actividade');

    $('#nome_completo_id1').val(nome);
    $('#local_id1').val(local);
    $('#data_fim').val(data_fim);
    $('#id_actividade1').val(id_actividade);

    $('#modal-default-actividade1').modal({ show: true });

    $('#AddActividade999').on('submit', function(event) {

        event.preventDefault();

        let dados = $(this).serialize();

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/actividade/Editar_Actividade1',
            beforeSend: function(event) {
                $('#conteudoCarregar5555').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-3x fa-sync-alt fa-spin"></i><h5> Gravando...</h5></div>');
            },
            success: function(event) {
                window.location.href = "http://localhost/KEDA/actividade/listar";

            }
        })

    })

});

var modaladicionarActividade = `<div class="modal fade text-sm pb-5 hide" id="modal-default-actividade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> ADICIONAR ACTIVIDADE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="AddActividade777">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregar555">
                              <div class="col-md-12" id="conteudoCarregarActividade" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Nome da Actividade</label>
                                      <input name="nome_actividade" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Local da Actividade</label>
                                      <input name="nome_local" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label>Data de Inicio</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" name="data_inicio">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label>Data de Fim</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" name="data_fim">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                              <div>

                              <div class="col-md-4" style="padding-right: 0.5px">
                                  <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                              </div>
                          </div>
                          </div>
              </div>
            </form>
          </div>
        </div>   
      </div>
</div>`;

$('#actividadeAdicionar666').on('click', function(event) {

    if (!$('modal-default-actividade').length) {
        $('body').append(modaladicionarActividade);
    }

    $('#modal-default-actividade').modal({ show: true });

    event.preventDefault();

    $('#AddActividade777').on('submit', function(event) {

        event.preventDefault();

        let dados = $(this).serialize();

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/actividade/cadastrar_actividade',
            beforeSend: function(event) {
                $('#conteudoCarregarActividade').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-3x fa-sync-alt fa-spin"></i><h5> Gravando...</h5></div>');
            },
            success: function(event) {

                window.location.href = "http://localhost/KEDA/actividade/listar/" + event;
            }
        })
    })

});
var modal_detalhe = `<div class="modal fade text-sm pb-5 hide" id="modal-detalhe-actividade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-sm"><i class="fas fa-eye"></i> VER DETALHE DE EVENTO </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div id="bodyMensagem89" class="modal-body bg-dark">
            <div id="mensagem89"></div>
        </div>
        <div class="modal-footer justify-content-between">
            <a href="" id="dataComfirmEvente978" class="btn btn-primary btn-sm"> GERENCIAR </a>
        </div>
    </div>
</div>   
</div>`;

var modalEliminarActividade77 = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-actividade77">
    <div class="modal-dialog">
    <div class="modal-content">
   
      <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> ELIMINAR ACTIVIDADE</h4>
      
            <div class="modal-body alert alert-warning alert-dismissible m-3">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem77"></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <a href="#" id="dataComfirmActividade77" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i> Confirmar</a>
            </div>
          </div>
         
        </div>
       
</div>`;


$('a[data-id_actividade]').on('click', function(event) {

    if (!$('modal-detalhe-actividade').length) {
        $('body').append(modal_detalhe);
    }

    $('#modal-detalhe-actividade').modal({ show: true });

    event.preventDefault();

    let id_actividade = $(this).attr('data-id_actividade');
    let id_associacao = $(this).attr('data-id_associacao');

    // let dados89 = {
    //     id_actividade: id_actividade,
    //     id_associacao: id_associacao
    // }

    // $.post('http://localhost/KEDA/actividade/controlTelasEsconder56',{id_actividade},function(){
    // })

    $.ajax({
        type: 'POST',
        data: { id_actividade },
        url: 'http://localhost/KEDA/actividade/modalVisualizar',
        beforeSend: function() {
            $('#mensagem89').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-3x fa-sync-alt fa-spin"></i><h5> Gravando...</h5></div>');
        },
        success: function(event) {
            $('#mensagem89').html(event);

            let href2 = 'http://localhost/KEDA/actividade/gerirEvento/' + id_actividade + '/' + id_associacao;
            $('#dataComfirmEvente978').attr('href', href2);

        }
    })


    var href = $(this).attr('href2');
    var nome = $(this).attr('data-confirm-mestre');

    $('#dataComfirmActividade').on('click', function() {

        if (!$('modal-default-eliminar-actividade77').length) {
            $('body').append(modalEliminarActividade77);
        }

        $('#mensagem77').html('Tem certeza que pretende eliminar Esta actividade');

        $('#dataComfirmActividade77').attr('href', href);
        $('#modal-default-eliminar-actividade77').modal({ show: true });
        return false;

    })

})

/* ELIMINAR ACTIVIDADE */


var modalEliminarActividade = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-actividade">
<div class="modal-dialog">
  <div class="modal-content">
   
      <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> ELIMINAR ACTIVIDADE</h4>
      
            <div class="modal-body alert alert-warning alert-dismissible m-3">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23"></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <a href="#" id="dataComfirmActividade" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
            </div>
          </div>
         
        </div>
       
      </div>`;

$('a[data-confirm-actividade]').click(function(ev) {

    var href = $(this).attr('href');

    var nome = $(this).attr('data-confirm-mestre');

    if (!$('modal-default-eliminar-actividade').length) {
        $('body').append(modalEliminarActividade);
    }

    $('#mensagem23').html('Tem certeza que pretende eliminar Esta actividade');

    $('#dataComfirmActividade').attr('href', href);
    $('#modal-default-eliminar-actividade').modal({ show: true });
    return false;
});

//ELIMINAR PERFIL--------------------------------------------------------------------------------------------------------------------------------------------------

var modalEliminarPerfil = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-Perfi-234">
<div class="modal-dialog">
  <div class="modal-content">
   
      <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> ELIMINAR PERFIL</h4>
      
            <div class="modal-body alert alert-warning alert-dismissible m-3">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23"></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <a href="#" id="dataComfirmPerfil" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
            </div>
          </div>
         
        </div>
       
      </div>`;

$('a[data-confirm-perfil]').click(function(ev) {
    var href = $(this).attr('href');
    var nome = $(this).attr('data-confirm-mestre');

    if (!$('modal-default-eliminar-Perfi-234').length) {
        $('body').append(modalEliminarPerfil);
    }

    $('#mensagem23').html('Tem certeza que pretende eliminar Esta Perfil');

    $('#dataComfirmPerfil').attr('href', href);
    $('#modal-default-eliminar-Perfi-234').modal({ show: true });
    return false;
});


//adicionar um novo perfil-----------------------------------------------------------------------------------------------------------------------------------------
let modalAdicionarPerfil = `<div class="modal fade text-sm pb-5 hide" id="modal-default-perfil-123">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> ADICIONAR PERFIL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="AddPerfil888">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregar5955">
                              <div class="col-md-12" id="conteudoCarregarPerfil345" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Nome do Perfil</label>
                                      <input name="Nome" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Sigla</label>
                                      <input name="Sigla" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="">
                                  </div>
                              </div>

                              <div class="col-md-4" style="padding-right: 0.5px">
                                  <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                              </div>
                          </div>
                          </div>
              </div>
            </form>
          </div>
        </div>   
      </div>
</div>`;

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucessoPerfil = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso-perfil-453">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Perfil foi Cadastrado.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------


$('#addPerfil345').on('click', function(event) {
    event.preventDefault();

    if (!$('modal-default-perfil-123').length) {
        $('body').append(modalAdicionarPerfil);
    }

    $('#AddPerfil888').on('submit', function(event) {
        event.preventDefault();

        let dados = $(this).serialize();

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/role/cadastrar',
            beforeSend: function(event) {
                $('#conteudoCarregarPerfil345').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-3x fa-sync-alt fa-spin"></i><h5> Gravando...</h5></div>');
            },
            success: function(event) {

                $('#modal-default-perfil-123').modal('hide');

                if (!$('modal-default-sucesso-perfil-453').length) {
                    $('body').append(modalSucessoPerfil);
                }

                $('#modal-default-sucesso-perfil-453').modal({ show: true });

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/role/listar';
                }, 2000);

            }
        })
    })

    $('#modal-default-perfil-123').modal({ show: true });
});

$('#addPerfil786').on('click', function(event) {
    event.preventDefault();

    if (!$('modal-default-perfil-123').length) {
        $('body').append(modalAdicionarPerfil);
    }

    $('#AddPerfil888sfds').on('submit', function(event) {
        event.preventDefault();

        let dados = $(this).serialize();

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/role/cadastrar',
            beforeSend: function(event) {

            },
            success: function(event) {
                alert(event + 'dfgdfgdgfgdf');
            }
        })
    })

    $('#modal-default-perfil-123').modal({ show: true });
});

//and adicionar um novo perfil-----------------------------------------------------------------------------------------------------------------------------------------

//editar dados perfil.............................................................................................................................................

let modalEditarPerfil = `<div class="modal fade text-sm pb-5 hide" id="modal-editar-perfil-123">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> EDIATR PERFIL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="AddEditarPerfil888">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregarEditar456">
                             <input name="id" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="id_perfil_role" value="" hidden>
                              <div class="col-md-12" id="conteudoCarregarPerfil345" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Nome do Perfil</label>
                                      <input name="Nome" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_perfil_role" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Sigla</label>
                                      <input name="Sigla" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_sigla_role" value="">
                                  </div>
                              </div>

                              <div class="col-md-4" style="padding-right: 0.5px">
                                  <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                              </div>
                          </div>
                          </div>
              </div>
            </form>
          </div>
        </div>   
      </div>
</div>`;

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucessoPerfilEditar = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso-perfil-editar-453">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Perfil foi Editado.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------


$('a[data-id_role]').on('click', function(event) {
        event.preventDefault();

        let id_role = $(this).attr('data-id_role');
        let nome_role = $(this).attr('data-nome_role');
        let sigla_role = $(this).attr('data_sigla_role');
        let data_criacao = $(this).attr('data_criacao');

        if (!$('modal-editar-perfil-123').length) {
            $('body').append(modalEditarPerfil);
        }

        $('#modal-editar-perfil-123').modal({
            show: true
        });

        $('#nome_perfil_role').val(nome_role);
        $('#nome_sigla_role').val(sigla_role);
        $('#id_perfil_role').val(id_role);

        $('#AddEditarPerfil888').on('submit', function(event) {
            event.preventDefault();

            let dados = $(this).serialize();

            $.ajax({
                type: 'POST',
                data: dados,
                url: 'http://localhost/KEDA/role/editar',
                beforeSend: function() {
                    $('#conteudoCarregarEditar456').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-2x fa-sync-alt fa-spin"></i><h6> Alterando...</h6></div>');
                },
                success: function() {

                    $('#modal-editar-perfil-123').modal('hide');

                    if (!$('modal-default-sucesso-perfil-editar-453').length) {
                        $('body').append(modalSucessoPerfilEditar);
                    }

                    $('#modal-default-sucesso-perfil-editar-453').modal({ show: true });

                    setTimeout(function() {
                        window.location.href = 'http://localhost/KEDA/role/listar';
                    }, 2000);
                }
            });
        })

    })
    //end.............................................................................................................................................................