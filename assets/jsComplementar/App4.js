let modalAdicionarFuncao = `<div class="modal fade text-sm pb-5 hide" id="modal-default-funcao-4567">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> ADICIONAR FUNCAO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="AddFuncaol8987">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregar5955">
                              <div class="col-md-12" id="conteudoCarregarPerfil345" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Descricao</label>
                                      <input name="descricaoFuncao" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                  </div>
                              </div> 
                              </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>        
                  </div>
              </div>
              
            </form>
          </div>
        </div>   
      </div>
</div>`;

$('#CriarFuncao879').on('click', function(event2) {
    if (!$('modal-default-funcao-4567').length) {
        $('body').append(modalAdicionarFuncao);
    }

    $('#modal-default-funcao-4567').modal({ show: true });

    $('#AddFuncaol8987').on('submit', function(event) {
        event.preventDefault();

        let dados = $(this).serialize();

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/Campeonato/setFuncao',
            beforeSend: function() {

            },
            success: function() {

            }
        })

    })
})

let modalAdicionarParticipante = `<div class="modal fade text-sm pb-5 hide" id="modal-default-participante-4567">
        <div class="modal-dialog" style="max-width:578px">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> ADICIONAR PERFIL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="AddParticipante888">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregar5955">
                              <div class="col-md-12" id="conteudoCarregarPerfil345" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Nome Completo</label>
                                      <input name="Nome" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Genero</label>
                                      <select name="genero_categoria" class="form-control form-control-sm">
                                        <option value="Misto">Misto</option>
                                        <option value="Masculina">Masculina</option>
                                        <option value="Femenina">Femenina</option>
                                      </select>
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Funcao</label>
                                      <select name="funcao" id="funcaoCaid2113" class="form-control form-control-sm">
                                      </select>
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Categoria</label>
                                      <select name="categoria" id="genero_categoria231" class="form-control form-control-sm">
                                      </select>
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Data de Nascimento</label>
                                      <input type="date" name="dataNasc" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Numero de Bilhete</label>
                                      <input name="bilheteNome" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Provincia</label>
                                      <select name="provincia_categoria" id="provincia_categoria980" class="form-control form-control-sm">
                                      </select>
                                  </div>
                              </div>
                              
                          </div>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>        
                          </div>
              </div>
            </form>
          </div>
        </div>   
      </div>
</div>`;

$('#CriarParticipante768').on('click', function() {
    if (!$('modal-default-participante-4567').length) {
        $('body').append(modalAdicionarParticipante);
    }

    $('#modal-default-participante-4567').modal({ show: true });

    let id_associacao_pro2 = $('#categoriaNacional768').attr('data-id_associacao_pro2');
    let idEvento2 = $('#categoriaNacional768').attr('idEvento2');

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
                    // $('#genero_categoria231').html(event);

                    alert(event);
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
        url: 'http://localhost/KEDA/Campeonato/getProvincia',
        beforeSend: function() {
            $('#funcaoCaid2113').html('aaddasdasd');
        },
        success: function(event) {
            $('#provincia_categoria980').html(event);
        }
    })

    $('#AddParticipante888').on('submit', function(event) {
        event.preventDefault();

        let dados = $(this).serialize();

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/Campeonato/'
        })
    })


})


var modalCategoriaNacional = `<div class="modal fade text-sm pb-5 hide" id="categoria_Nacional_123897">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> ADICIONAR CATEGORIA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <form method="post" id="AddCategoria777">
      <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
          <div class="col-md-12" id="conteudoCarregarAdicionarCategoria">
                      <div class="col-md-12" id="conteudoCarregarCategoria" style="padding-left: 0.5px;padding-right: 0.5px;"></div>

                      <div class="form-row">
                          <div class="form-group col-sm-12">
                              <label class="text-nowrap">Categoria</label>
                              <select name="id_categoria" class="form-control form-control-sm" id="categoriaid123">
                              </select>                             
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-sm-12">
                        <label>Genero</label>
                            <select name="genero_categoria" class="form-control form-control-sm">
                                <option value="Misto">Misto</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-md-4" style="padding-right: 0.5px">
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

$('#categoriaNacional768').on('click', function(event) {

    event.preventDefault();

    if (!$('categoria_Nacional_123897').length) {
        $('body').append(modalCategoriaNacional);
    }

    $.ajax({

        type: 'POST',
        url: 'http://localhost/KEDA/Campeonato/getCategorias',
        beforeSend: function() {

        },
        success: function(event) {
            $('#categoriaid123').html(event);
        }
    })

    let id_associacao_pro2 = $(this).attr('data-id_associacao_pro2');


    $('#AddCategoria777').on('submit', function(event) {

        event.preventDefault();

        let id_associacao_pro2 = $('#categoriaNacional768').attr('data-id_associacao_pro2');
        let idEvento2 = $('#categoriaNacional768').attr('idEvento2');

        let dado90 = {
            id_associacao_pro2: id_associacao_pro2,
            idEvento2: idEvento2
        }

        $.ajax({
            type: 'POST',
            data: dado90,
            url: 'http://localhost/KEDA/Campeonato/getIdCampeonatoCorrente',
            success: function(event) {

                // alert(event);

                let dados = {
                    id_categoria_fk: $('select[name=id_categoria]').val(),
                    generoCategoriaCamp: $('select[name=genero_categoria]').val(),
                    id_campeonato_fk: event
                };

                console.log(dados)

                $.ajax({
                    type: 'POST',
                    data: dados,
                    url: 'http://localhost/KEDA/Campeonato/addCategoria',
                    beforeSend: function(event) {
                        $('#conteudoCarregarBT123').html('<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>');
                    },
                    success: function(event) {
                        $('#conteudoCarregarBT123').html('<i class="fa fa-save"></i> Cadastrar');
                        carregar();
                    }
                })
            }
        })
    })

    $('#categoria_Nacional_123897').modal({ show: true });
})

function carregarAllParticipante() {

    $.post('http://localhost/KEDA/Campeonato/getParticipantes', function(retorno) {
        $teste = JSON.parse(retorno);

        let tableCategoria = `<table class="table table-sm">
                              <thead>
                                <tr>
                                  <th style="width: 10px">N-</th>
                                  <th>Nome Completo</th>
                                  <th>Funcao</th>
                                  <th>Genero</th>
                                  <th>Data de Nascimento</th>
                                  <th>Categoria</th>
                                  <th>Provincia</th>
                                </tr>
                              </thead>`;

        tableCategoria += `<tbody>`;
        $.each($teste, function(i, retorno1) {
            tableCategoria += `<tr>
                                  <td>1.</td>
                                  <td>${retorno1.nome_participante}</td>
                                  <td>${retorno1.funcao}</td>
                                  <td>${retorno1.genero}</td>
                                  <td>${retorno1.dataNasc}</td>
                                  <td>${retorno1.descricao_categoriaCamp}</td>
                                  <td>${retorno1.generoCategoriaCamp}</td>
                                </tr>`
        });
        tableCategoria += `</tbody>`
        tableCategoria += `</table>`;

        $('#verAllParticipante789P23').append(tableCategoria);
    });
}

carregarAllParticipante();

function carregar() {

    let id_associacao_pro2 = $('#categoriaNacional768').attr('data-id_associacao_pro2');
    let idEvento2 = $('#categoriaNacional768').attr('idEvento2');

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

            $.post('http://localhost/KEDA/Campeonato/getCategoria', dado, function(retorno) {

                let teste = JSON.parse(retorno);

                let tableCategoria = `<table class="table table-sm">
                                    <thead>
                                        <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Categoria</th>
                                        <th>Genero</th>
                                        <th style="width: 40px">Accao</th>
                                        </tr>
                                    </thead>`;

                tableCategoria += `<tbody>`;
                $.each(teste, function(i, retorno1) {
                    tableCategoria += `<tr>
                                        <td>1.</td>
                                        <td>${retorno1.categoria}</td>
                                        <td>${retorno1.generoCategoriaCamp}</td>
                                        <td><a href="#" class="btn btn-sm btn-danger" data_idCategoria="${retorno1.id_categoriaCampeonato}"><i class="fa fa-trash-alt"></i></a></td>
                                        </tr>`
                });
                tableCategoria += `</tbody>`
                tableCategoria += `</table>`;

                $('#teste123').html(tableCategoria);

                $('a[data_idCategoria]').on('click', function() {
                    let id = $(this).attr('data_idCategoria');

                    $.ajax({
                        type: 'post',
                        data: { id },
                        url: 'http://localhost/KEDA/Campeonato/removeCategoria',
                        success: function(event) {
                            carregar();
                        }
                    })


                })
            });
        }
    })
}

carregar();



$('#pegarListaCategoria76453').on('click', function() {

    let conteudo = $(this).text();

    if (conteudo === 'Fechar') {
        $('#MostrarPossivel789P23').attr('hidden', 'hidden');
        $('#pegarListaCategoria76453').html('<i class="fas fa-user" style="display:;font-size:13px"></i> Lista');
        $('#verAllParticipantePossivel789P23').html(tableCategoria);
    } else {

        let id_associacao_pro = $(this).attr('data-id_associacao_pro');
        let dado = {
            id_associacao_pro: id_associacao_pro
        }

        $.ajax({
            type: 'POST',
            data: dado,
            url: 'http://localhost/KEDA/Campeonato/listar_atleta_id',
            beforeSend: function() {
                $('#verAllParticipantePossivel789P23').html('<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>');
            },
            success: function(event) {
                let event2 = JSON.parse(event);

                console.log(event2);
                let tableCategoria = `<table class="table table-sm table-striped">
                                <thead>
                                    <tr>
                                    <th>Nome Completo</th>
                                    <th>Bilhete</th>
                                    <th>Genero</th>
                                    <th>Clube</th>
                                    <th class="text-center">Accao</th>
                                </tr>
                                </thead>`;

                tableCategoria += `<tbody>`;
                $.each(event2, function(i, retorno1) {
                    tableCategoria += `<tr>
                                        <td>${retorno1.nome}</td>
                                        <td>${retorno1.n_bilhete}</td>
                                        <td>${retorno1.genero}</td>
                                        <td>${retorno1.nome_academia}</td>
                                        <td class="text-center">
                                            <a href="" class="badge bg-success"><i class="fa fa-user-plus"></i> Adicionar </a>
                                            <a href="" data-confirm-arbitro="<?php echo $Arbitro->nome;?>" class="badge bg-danger"><i class="fa fa-trash-alt"> Remover </i></a>
                                        </td>
                                        </tr>`
                });
                tableCategoria += `</tbody>`
                tableCategoria += `</table>`;

                $('#MostrarPossivel789P23').removeAttr('hidden');
                $('#pegarListaCategoria76453').html('Fechar');
                $('#verAllParticipantePossivel789P23').html(tableCategoria);
            }
        })
    }
})

$('#profile-detail23718').on('click', function() {

    let control = $(this).text();

    if (control === 'Editar') {
        $('#profile-detail453278').css('display', 'block');
        $('#form-control-static3849674').css('display', 'none');
    } else {
        $('#profile-detail453278').css('display', 'none');
        $('#form-control-static3849674').css('display', 'block');
    }
})

$('a[data-edit=profile-detail]').on('click', function() {
    $('#profile-detail453278').css('display', 'none');
    $('#form-control-static3849674').css('display', 'block');
})


$('#meetingid-detailEditar7364820').on('click', function() {
    $('#form-control-staticIE4650').css('display', 'none');
    $('#profile-detailIE625448').css('display', 'block');
})

$('#profile-detailCancelIE64589').on('click', function() {
    $('#form-control-staticIE4650').css('display', 'block');
    $('#profile-detailIE625448').css('display', 'none');
})

//INFORMACAO DE CONTACTO

$('#meetingid-detailEditarIC7364820').on('click', function() {
    $('#form-control-staticIC4650').css('display', 'none');
    $('#profile-detailICXSA12349').css('display', 'block');
})

$('#profile-detailCancelICWE3589').on('click', function() {
    $('#form-control-staticIC4650').css('display', 'block');
    $('#profile-detailICXSA12349').css('display', 'none');
})

//INFORMACAO TECNICA

$('#meetingid-detailIT2340').on('click', function() {
    $('#form-control-staticITeds23410').css('display', 'none');
    $('#profile-detailITswe2341').css('display', 'block');
})

$('#profile-detailCancelITesw64589').on('click', function() {
    $('#form-control-staticITeds23410').css('display', 'block');
    $('#profile-detailITswe2341').css('display', 'none');
})

//INFORMACAO FILIACAO

$('#meetingid-detailEditarIFsew820').on('click', function() {
    $('#form-control-staticIF4650').css('display', 'none');
    $('#profile-detailIFesd625448').css('display', 'block');
})

$('#profile-detailCancelIFes589').on('click', function() {
    $('#form-control-staticIF4650').css('display', 'block');
    $('#profile-detailIFesd625448').css('display', 'none');
})

//formulario de editar Atleta

$('#info-formElIP111').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idAltleta = $('input[name=idAtleta]').val();

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Atleta/editar_sert',
        beforeSend: function(event) {
            $('#loadingIP21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIP21').css('display', 'none');
            $('#content_success_msg').css('display', 'block');
            setTimeout(function() {
                window.location.href = 'http://localhost/KEDA/Atleta/Editar/' + idAltleta;
            }, 2000);
        }
    })
})

$('#info-formElIE111').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idAltleta = $('input[name=idAtleta]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Atleta/editar_sert',
        beforeSend: function(event) {
            $('#loadingIP21').css('display', 'block');
        },
        success: function(event) {
            alert(event);
            // $('#loadingIP21').css('display', 'none');
            // $('#content_success_msg').css('display', 'block');
            // setTimeout(function() {
            //     window.location.href = 'http://localhost/KEDA/Atleta/Editar/' + idAltleta;
            // }, 2000);
        }
    })
})

$('#info-formElIF111').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idAltleta = $('input[name=idAtleta]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Atleta/editar_sert',
        beforeSend: function(event) {
            $('#loadingIF21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIF21').css('display', 'none');
            $('#content_success_msgIF').css('display', 'block');
            setTimeout(function() {
                window.location.href = 'http://localhost/KEDA/Atleta/Editar/' + idAltleta;
            }, 1000);
        }
    })
})

$('#info-formElIC111').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idAltleta = $('input[name=idAtleta]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Atleta/editar_sert',
        beforeSend: function(event) {
            $('#loadingIC21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIC21').css('display', 'none');
            $('#content_success_msgIF').css('display', 'block');
            setTimeout(function() {
                window.location.href = 'http://localhost/KEDA/Atleta/Editar/' + idAltleta;
            }, 1000);
        }
    })
})

$('#info-formElIT111').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idAltleta = $('input[name=idAtleta]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Atleta/editar_sert',
        beforeSend: function(event) {
            $('#loadingIT21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIT21').css('display', 'none');
            $('#content_success_msgIF').css('display', 'block');
            setTimeout(function() {
                window.location.href = 'http://localhost/KEDA/Atleta/Editar/' + idAltleta;
            }, 1000);
        }
    })
})


$('a[id=idTrocarFotoAtleta]').on('click', function() {
    let conteudo = $(this).text();

    $('#profile-EditarFoto453278').css('display', 'block')
    $('#profile-detail453278').css('display', 'none');
    $('#form-control-static3849674').css('display', 'none');

    // $('#AlterarFotoAtleta').on('click', function() {
    //     var imagem = document.querySelector('input[name=arquivoFotoAtleta]').files[0];

    //     let foto = {
    //         arquivoFotoAtleta: imagem
    //     };

    //     $.ajax({
    //         type: 'POST',
    //         data: foto,
    //         contentType: false,
    //         processData: false,
    //         url: 'http://localhost/KEDA/Atleta/gravarFoto',
    //         beforeSend: function(event) {

    //         },
    //         success: function(event) {
    //             alert(event);
    //         }
    //     })

    // })

    if (conteudo == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }

    $('#cancelarFotoAtleta').on('click', function() {
        let imagem = $('#123').attr('data_imagem');

        let teste55 = $('#mudarFotoMestre').attr('src');

        if (conteudo === 'Trocar Fotografia') {
            $('#123').attr('src', 'http://localhost/KEDA/uploads/product/' + imagem);
            $('input[name=arquivoFotoAtleta]').val("");
        } else {
            $('#123').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
            $('input[name=arquivoFotoAtleta]').val("");

        }
    })


    $('#ApagarFoto').on('click', function() {

        if (!$('modal-without-animationfoto').length) {
            $('body').append(Apagarfotografia);
        }
        $('#modal-without-animationfoto').modal('show');
        $('#modal-without-animation').modal('hide');

        var dado55 = 0;

        $('#ApagarFoto2').on('click', function() {
            var idAtleta = $('input[name=idpessoa]').val();
            //alert(idAtleta);

            var dado = {
                idAtleta: idAtleta
            }

            $.ajax({
                type: 'POST',
                data: dado,
                url: 'http://localhost/KEDA/Atleta/ApagarFoto',
                success: function(dada) {

                    if (dado = 1) {
                        $('#modal-without-animationfoto').modal('hide');
                        $('#mudarFotoAtleta').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
                    } else {
                        $('#modal-without-animationfoto').modal('show');
                    }
                }
            })

        })

    })

    return false;
})

//EDITAR MESTRE---------------------------------------------------------------------------------------------------

// $('#gravarFotoAlterar123').on('submit', function(event) {
//     event.preventDefault();

//     // let dados = {
//     //     $('input[name=arquivoFotoAtleta]').val()
//     // }

//     let dados = $(this).serialize();

//     $.ajax({
//         type: 'POST',
//         data: dados,
//         url: 'http://localhost/KEDA/Atleta/gravarFoto',
//         beforeSend: function() {

//         },
//         success: function() {

//         }
//     })

// })




// modal para trocar foto===============================================================================================

var modalTrocarFotoAtleta = `<div class="modal fade text-sm" id="modal-default-trocar-foto-Atleta">
        <div class="modal-dialog">
          <div class="modal-content">
           
              <h4 class="modal-title p-3 text-sm"><i class="fas fa-images text-red"></i> Sair do Sistema</h4>
            
            <div class="modal-body m-1 pt-0 text-center">
              <ul class="list-group list-group-flush">
              <img class="card-img-top width-200 height-150" data_imagem="" src="" id="127" style="height:120px; width:120px;border-radius:24px;vertical-align: middle;">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
                <label for="arquivoFotoAtleta" style="cursor: pointer;font-weight: 500;"><i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label>
              </li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              </div>
              <div class="modal-footer">
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Sair</a>
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal" id="cancelarFotoAtleta"><i class="fa fa-ban"></i> Cancelar</a>
              <a href="#" class="btn btn-success" data-dismiss="modal" id="AlterarFotoAtleta"> Alterar</a>
              </div>
            </div>
          </div>
         
        </div>
       
      </div>`;

// $('a[id=idTrocarFotoAtleta]').on('click', function() {
//     let conteudo = $(this).text();

//     if (!$('modal-default-trocar-foto-Atleta').length) {
//         $('body').append(modalTrocarFotoAtleta);
//     }

//     $('#modal-default-trocar-foto-Atleta').modal({ show: true });

//     $('#AlterarFotoAtleta').on('click', function() {
//         var imagem = document.querySelector('input[name=arquivoFotoAtleta]').files[0];

//         let foto = {
//             arquivoFotoAtleta: imagem
//         };

//         $.ajax({
//             type: 'POST',
//             data: foto,
//             contentType: false,
//             processData: false,
//             url: 'http://localhost/KEDA/Atleta/gravarFoto',
//             beforeSend: function(event) {

//             },
//             success: function(event) {
//                 alert(event);
//             }
//         })

//     })

//     if (conteudo == 'Editar') {
//         $('#Apagar67').removeClass('hide');
//     } else {
//         $('#Apagar67').addClass('hide');
//     }


//     // $('#mudarFotoAtleta').on('click', function() {

//     //     $('input[name=arquivo]').ready(function() {
//     //         PreviewImagem();
//     //     })
//     // });

//     $('#cancelarFotoAtleta').on('click', function() {
//         let imagem = $('#123').attr('data_imagem');

//         let teste55 = $('#mudarFotoMestre').attr('src');

//         if (conteudo === 'Trocar Fotografia') {
//             $('#123').attr('src', 'http://localhost/KEDA/uploads/product/' + imagem);
//             $('input[name=arquivoFotoAtleta]').val("");
//         } else {
//             $('#123').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
//             $('input[name=arquivoFotoAtleta]').val("");

//         }
//     })


//     $('#ApagarFoto').on('click', function() {

//         if (!$('modal-without-animationfoto').length) {
//             $('body').append(Apagarfotografia);
//         }
//         $('#modal-without-animationfoto').modal('show');
//         $('#modal-without-animation').modal('hide');

//         var dado55 = 0;

//         $('#ApagarFoto2').on('click', function() {
//             var idAtleta = $('input[name=idpessoa]').val();
//             //alert(idAtleta);

//             var dado = {
//                 idAtleta: idAtleta
//             }

//             $.ajax({
//                 type: 'POST',
//                 data: dado,
//                 url: 'http://localhost/KEDA/Atleta/ApagarFoto',
//                 success: function(dada) {

//                     if (dado = 1) {
//                         $('#modal-without-animationfoto').modal('hide');
//                         $('#mudarFotoAtleta').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
//                     } else {
//                         $('#modal-without-animationfoto').modal('show');
//                     }
//                 }
//             })

//         })

//         $('#cancelar555').on('click', function() {
//             $('#modal-without-animationfoto').modal('hide');
//             $('#modal-without-animation').modal('show');
//         })

//     })

//     return false;
// })

function PreviewImagemAtleta2() {
    //if(teste55 == 0){
    $('#botaoEsconder231').css('display', 'none');
    $('#12323524').css('display', 'block');
    $('#botaoEsconder231CG').css('display', 'block');

    var imagem = document.querySelector('input[name=arquivoFotoAtleta]').files[0];

    var preview = $('#12323524')[0];

    var reader = new FileReader();

    reader.onloadend = function() {
        preview.src = reader.result;
    }

    if (imagem) {
        reader.readAsDataURL(imagem);
    } else {
        preview.src = '';
    }

}