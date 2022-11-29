$('.provincia').on('change', function() {

    var id_provincia = $('.provincia').val();

    if (id_provincia === '{0}') {
        $('#municipio').attr('disabled', 'disabled');
        $('#municipio').html('');
    } else {
        $.ajax({
                url: 'http://localhost/KEDA/App/getMunicipio',
                type: 'POST',
                data: { id_provincia: id_provincia },

                beforeSend: function(data) {
                    $('#municipio').html('ioioioi');
                }
            })
            .done(function(msg) {
                $('#municipio').removeAttr('disabled');
                $('#municipio').html(msg);
            })
            .fail(function(jqXHR, textStatus, msg) {
                console.log(msg);
                //$('#municipio').addAttr('disabled');
            });
    }
});

$('#Categoria_arbitro').on('change', function() {

    var id_categoria_arbitro = $('#Categoria_arbitro').val();

    if (id_categoria_arbitro === '{0}') {
        $('#sub-categoria_Arbitro').attr('disabled', 'disabled');
        $('#sub-categoria_Arbitro').html('');
    } else {
        $.ajax({
                url: 'http://localhost/KEDA/App/getSub_categoria',
                type: 'POST',
                data: { id_provincia: id_provincia },

                beforeSend: function(data) {
                    $('#sub-categoria_Arbitro').html('ioioioi');
                }
            })
            .done(function(msg) {
                $('#sub-categoria_Arbitro').removeAttr('disabled');
                $('#sub-categoria_Arbitro').html(msg);
            })
            .fail(function(jqXHR, textStatus, msg) {
                console.log(msg);
                //$('#municipio').addAttr('disabled');
            });
    }
});


$('#Academia').on('change', function() {
    var id_academia = $(this).val();

    $.ajax({
        url: 'http://localhost/KEDA/App/getEstilo',
        type: 'post',
        data: { id_academia: id_academia },

        beforeSend: function() {
            $('#inputEstilo55').html('carregando...');
        },
        success: function(response) {

            $('#inputEstilo55').attr('value', response);

        }
    })
})



controMessagem();

function controMessagem() {

    let imagem = $('#imagemMensagem77').attr('src');
    let control = $('#imagemMensagem77').attr('data_variavel_control');
    let nomerole = $('#nomeRole77').text();
    let role = $('#imagemMensagem88').text();

    if (control != undefined && control === 'true') {
        $(document).Toasts('create', {
            body: '<strong>' + nomerole + '</strong>seja bem vindo ao sistema KEDA.',
            title: role,
            subtitle: '',
            // autohide: true,
            image: imagem,
            imageAlt: 'User Picture',
        })
    }

}


var modalAdicionarFotoAtleta = `<div class="modal fade text-sm" id="modal-default-adicionar-foto">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-images text-red"></i> Fotografia</h4>

            <div class="modal-body m-1 pt-0 text-center">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoAtleta768" style="cursor: pointer;font-weight: 500;">
              <i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label>
              </li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              </div>
              <div class="modal-footer">
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Sair</a>
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal" id="cancelarFotoAtleta"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
          </div>

        </div>

      </div>`;


$('#mudarFotoAtleta').on('click', function() {

    var legenda = $('#id57').text();

    if (!$('modal-default-adicionar-foto').length) {
        $('body').append(modalAdicionarFotoAtleta);
    }

    $('#modal-default-adicionar-foto').modal({ show: true });

    if (legenda == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }

    $('#cancelarFotoAtleta').on('click', function() {

        let teste55 = $('#mudarFotoAtleta').attr('src');

        $('#mudarFotoAtleta').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
        $('input[name=arquivoFotoAtleta]').val("");

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

            var dado = {
                idAtleta: idAtleta
            }

            $.ajax({
                type: 'POST',
                data: dado,
                url: 'http://localhost/KEDA/Atleta/ApagarFoto',
                success: function(dada) {

                    if (dado = 1) {
                        $('##modal-without-animationfoto').modal('hide');
                        $('#mudarFotoAtleta').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
                    } else {
                        $('##modal-without-animationfoto').modal('show');
                    }
                }
            })

        })

        $('#cancelar555').on('click', function() {
            $('##modal-without-animationfoto').modal('hide');
            $('#modal-without-animation').modal('show');
        })

    })

    return false;
})

function PreviewImagemAtletaIns() {
    //if(teste55 == 0){

    var imagem = document.querySelector('input[name=arquivoFotoAtleta768]').files[0];

    var preview = $('#mudarFotoAtleta')[0];

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

//================================================================== MUDAR FOTO ARBITRO ==========================================================

var modalAdicionarFotoArbitro = `<div class="modal fade text-sm" id="modal-default-adicionarArbitro-foto">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-images text-red"></i> Fotografia</h4>

            <div class="modal-body m-1 pt-0 text-center">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoArbitro" style="cursor: pointer;font-weight: 500;">
              <i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label>
              </li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              </div>
              <div class="modal-footer">
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Sair</a>
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal" id="cancelarFotoArbitro"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
          </div>

        </div>

      </div>`;


$('#mudarFotoArbitro').on('click', function() {

    var legenda = $('#id57').text();

    if (!$('modal-default-adicionarArbitro-foto').length) {
        $('body').append(modalAdicionarFotoArbitro);
    }

    $('#modal-default-adicionarArbitro-foto').modal({ show: true });

    if (legenda == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }

    $('#cancelarFotoArbitro').on('click', function() {

        let teste55 = $('#mudarFotoArbitro').attr('src');

        $('#mudarFotoArbitro').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
        $('input[name=arquivoFotoArbitro]').val("");

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

            var dado = {
                idAtleta: idAtleta
            }

            $.ajax({
                type: 'POST',
                data: dado,
                url: 'http://localhost/KEDA/Atleta/ApagarFoto',
                success: function(dada) {

                    if (dado = 1) {
                        $('##modal-without-animationfoto').modal('hide');
                        $('#mudarFotoAtleta').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
                    } else {
                        $('##modal-without-animationfoto').modal('show');
                    }
                }
            })

        })

        $('#cancelar555').on('click', function() {
            $('##modal-without-animationfoto').modal('hide');
            $('#modal-without-animation').modal('show');
        })

    })

    return false;
})

function PreviewImagemArbitro() {

    var imagem = document.querySelector('input[name=arquivoFotoArbitro]').files[0];

    var preview = $('#mudarFotoArbitro')[0];

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

//=================================================================== Modal cadastro foto Mestre =================================================

var modalAdicionarFotoMestre = `<div class="modal fade text-sm" id="modal-default-adicionar-foto">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-images text-red"></i> Fotografia</h4>

            <div class="modal-body m-1 pt-0 text-center">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoMestre" style="cursor: pointer;font-weight: 500;">
              <i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label>
              </li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              </div>
              <div class="modal-footer">
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Sair</a>
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal" id="cancelarFotoAtleta"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
          </div>

        </div>

      </div>`;


$('#mudarFotoMestre').on('click', function() {

    var legenda = $('#id57').text();

    if (!$('modal-default-adicionar-foto').length) {
        $('body').append(modalAdicionarFotoMestre);
    }

    $('#modal-default-adicionar-foto').modal({ show: true });

    if (legenda == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }



    $('#cancelarFotoMestre').on('click', function() {

        let teste55 = $('#mudarFotoMestre').attr('src');

        $('#mudarFotoMestre').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
        $('input[name=arquivoFotoMestre]').val("");

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


            var dado = {
                idAtleta: idAtleta
            }

            $.ajax({
                type: 'POST',
                data: dado,
                url: 'http://localhost/KEDA/Atleta/ApagarFoto',
                success: function(dada) {

                    if (dado = 1) {
                        $('##modal-without-animationfoto').modal('hide');
                        $('#mudarFotoAtleta').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
                    } else {
                        $('##modal-without-animationfoto').modal('show');
                    }
                }
            })

        })

        $('#cancelar555').on('click', function() {
            $('##modal-without-animationfoto').modal('hide');
            $('#modal-without-animation').modal('show');
        })

    })

    return false;
})

function PreviewImagemMestre() {
    //if(teste55 == 0){

    var imagem = document.querySelector('input[name=arquivoFotoMestre]').files[0];

    var preview = $('#mudarFotoMestre')[0];

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

//=================================================================== Modal cadastro foto Mestre end=================================================
//=================================================================== Modal eliminar mestre ========================================================

//=================================================================== Modal eliminar mestre ========================================================

var modalEliminarMestre = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-mestre">
<div class="modal-dialog">
  <div class="modal-content">

      <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> ELIMINAR MESTRE</h4>

            <div class="modal-body alert alert-warning alert-dismissible m-3">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23">One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <a id="dataComfirmMestre" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
            </div>
          </div>

        </div>

      </div>`;

$('a[data-confirm-mestre]').click(function(ev) {
    var href = $(this).attr('href');
    var nome = $(this).attr('data-confirm-mestre');

    if (!$('modal-default-eliminar-mestre').length) {
        $('body').append(modalEliminarMestre);
    }

    $('#mensagem23').html('Tem certeza que pretende eliminar o atleta ' + '<strong>' + nome + '</strong> ?');

    $('#dataComfirmMestre').attr('href', href);
    $('#modal-default-eliminar-mestre').modal({ show: true });
    return false;
});

//=================================================================== Modal eliminar academia ========================================================

var modalEliminarAcademia = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-academia">
<div class="modal-dialog">
  <div class="modal-content">

      <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> ELIMINAR ACADEMIA</h4>

            <div class="modal-body alert alert-warning alert-dismissible m-3">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23">One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <a id="dataComfirmMestre" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
            </div>
          </div>

        </div>

      </div>`;

$('a[data-confirm-academia]').click(function(ev) {

    var href = $(this).attr('href');
    var nome = $(this).attr('data-confirm-academia');

    if (!$('modal-default-eliminar-academia').length) {
        $('body').append(modalEliminarAcademia);
    }

    $('#mensagem23').html('Tem certeza que pretende eliminar o atleta ' + '<strong>' + nome + '</strong> ?');

    $('#dataComfirmMestre').attr('href', href);
    $('#modal-default-eliminar-academia').modal({ show: true });
    return false;
});



//=======================================================================Modal eliminar Arbitro =============================================

$('a[data-confirm-arbitro]').click(function(ev) {
    var href = $(this).attr('href');
    var nome = $(this).attr('data-confirm-arbitro');

    if (!$('modal-default-eliminar-mestre').length) {
        $('body').append(modalEliminarMestre);
    }

    $('#mem23').html('<i class="fas fa-trash-alt"></i> ELIMINAR ARBITRO');
    $('#mensagem23').html('Tem certeza que pretende eliminar o atleta ' + '<strong>' + nome + '</strong> ?');

    $('#dataComfirmMestre').attr('href', href);
    $('#modal-default-eliminar-mestre').modal({ show: true });
    return false;
});


//=================================================================== Modal eliminar mestre =================================================

var modalEliminarAtleta = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-atleta">
<div class="modal-dialog">
  <div class="modal-content">

      <h4 class="modal-title p-3 text-sm"><i class="fas fa-trash-alt"></i> ELIMINAR ATLETA</h4>

            <div class="modal-body alert alert-danger m-3">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23">One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <a id="dataComfirmAtleta" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
            </div>
          </div>

        </div>

      </div>`;

$('a[data-confirm-atleta]').click(function(ev) {
    var href = $(this).attr('href');
    var nome = $(this).attr('data-confirm-atleta');

    if (!$('modal-default-eliminar-atleta').length) {
        $('body').append(modalEliminarAtleta);
    }

    $('#mensagem23').html('Tem certeza que pretende eliminar o atleta ' + '<strong>' + nome + '</strong> ?');

    $('#dataComfirmAtleta').attr('href', href);
    $('#modal-default-eliminar-atleta').modal({ show: true });
    return false;
});

//modal ver detalhe atleta academia ------------------------------------------------------------------------------------------------------------------------
var modalDetalheAcademiaAtleta = `<div class="modal fade text-sm" id="modal-detalhe-academia-atleta">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-eye"></i> Detalhe Atleta</h4>

            <div class="modal-body m-0 pt-0 text-sm">
              <p class="" id="nome_academia">Tem certeza que pretende sair do sistema ?</p>
              <div class="pull-right">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              </div>
            </div>
          </div>

        </div>

      </div>`

$('a[id_atleta_academia]').on('click', function() {

    let id_atleta_academia = $(this).attr('id_atleta_academia');

    if (!$('modal-detalhe-academia-atleta').length) {
        $('body').append(modalDetalheAcademiaAtleta);
    }

    $('#modal-detalhe-academia-atleta').modal({ show: true });

    $.ajax({
        type: 'post',
        data: { id_atleta_academia },
        url: 'http://localhost/KEDA/Academia/pegarAtletaAcademia',
        beforeSend: function(event) {
            $('#nome_academia').html('CARREGANDO...');
        },
        success: function(event) {
            $('#nome_academia').html(event);
        }
    })

    return false;
})


//moda sair do sistema -----------------------------------------------------------------------------------------
var modalSairDoSistema = `<div class="modal fade text-sm" id="modal-default-sair-sistema">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-power-off text-red"></i> Sair do Sistema</h4>

            <div class="modal-body alert alert-warning alert-dismissible m-3 pt-2">
              <h5 class="text-sm"><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p class="text-center">Tem certeza que pretende sair do sistema ?</p>
              <div class="text-center">
                <button type="button" class="btn btn-default text-center" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
                <a class="btn btn-primary text-center" href="" id="dataComfirmSair"><i class="fas fa-thumbs-up"></i> Sim</a>
              </div>
            </div>
          </div>

        </div>

      </div>`;

$('#sairdoSistema').on('click', function() {

    let sair = $(this).attr('href');
    if (!$('modal-default-sair-sistema').length) {
        $('body').append(modalSairDoSistema);
    }

    $('#dataComfirmSair').attr('href', sair);
    $('#modal-default-sair-sistema').modal({ show: true });
    return false;
})

// modal para trocar foto===============================================================================================

var modalTrocarFotoAtleta = `<div class="modal fade text-sm" id="modal-default-trocar-foto">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-images text-red"></i> ADASDADASDASD Sair do Sistema</h4>

            <div class="modal-body m-1 pt-0 text-center">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoAtleta" style="cursor: pointer;font-weight: 500;">
              <i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label></li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              </div>
              <div class="modal-footer">
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Sair</a>
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal" id="cancelarFotoAtleta"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
          </div>

        </div>

      </div>`;

var modalTrocarFotoUsuario = `<div class="modal fade text-sm" id="modal-default-trocar-foto">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-images text-red"></i> Sair do Sistema</h4>

            <div class="modal-body m-1 pt-0 text-center">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoUsuario" style="cursor: pointer;font-weight: 500;">
              <i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label></li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              </div>
              <div class="modal-footer">
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Sair</a>
              <a href="javascript:;" class="btn btn-default" data-dismiss="modal" id="cancelarFotoAtleta"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
          </div>

        </div>

      </div>`;

//modal trocar fotografia usuario ======================================================================================================================
$('#trocarfotoUsuario55').on('click', function() {
    let conteudo = $(this).text();

    if (!$('modal-default-trocar-foto').length) {
        $('body').append(modalTrocarFotoUsuario);
    }

    $('#modal-default-trocar-foto').modal({ show: true });

    if (conteudo == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }


    // $('#mudarFotoAtleta').on('click', function() {

    //     $('input[name=arquivo]').ready(function() {
    //         PreviewImagem();
    //     })
    // });

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

        $('#cancelar555').on('click', function() {
            $('#modal-without-animationfoto').modal('hide');
            $('#modal-without-animation').modal('show');
        })

    })

    return false;
})

$('a[id=idTrocarFotoAtleta]').on('click', function() {
    let conteudo = $(this).text();

    if (!$('modal-default-trocar-foto').length) {
        $('body').append(modalTrocarFotoAtleta);
    }

    $('#modal-default-trocar-foto').modal({ show: true });

    if (conteudo == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }


    // $('#mudarFotoAtleta').on('click', function() {

    //     $('input[name=arquivo]').ready(function() {
    //         PreviewImagem();
    //     })
    // });

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

        $('#cancelar555').on('click', function() {
            $('#modal-without-animationfoto').modal('hide');
            $('#modal-without-animation').modal('show');
        })

    })

    return false;
})

function PreviewImagemAtleta2() {
    //if(teste55 == 0){


    var imagem = document.querySelector('input[name=arquivoFotoAtleta]').files[0];

    var preview = $('#123')[0];

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

// modal para trocar o estado===========================================================================================
// modal editar usuario...................................................................................................................................................................
$('a[data-editar-usuario]').on('click', function(event) {
        event.preventDefault();

        let nome = $(this).attr('data-editar-usuario');
        let nome_usuario = $(this).attr('data-editar-usuario_username');

        $('#nome_completo_usuario').val(nome);
        $('#nome_usuario_user').val(nome_usuario);
        $('#perfi12312').html('12123123');
        $('#modal-lg1231').modal({ show: true });

        $.ajax({
            url: 'http://localhost/KEDA/usuario/pegarStatus',
            beforeSend: function() {
                // $('#perfilUsuario').html('Carregando....');
            },
            success: function(event) {
                // $('#perfilUsuario').html(event);
            }
        })
    })
    // end....................................................................................................................................................................................
    // MODAL ADICIONAR USUARIO................................................................................................................................................................
let modalCadastrarUsuario = `<div class="modal fade" id="modal-lg56748uSUARIO">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-sm"><i class="fa fa-edit"></i> CADASTRAR USUARIO</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" id="AddUsuario45692" enctype="multipart/form-data">
              <div id="bodyMensagemUsuario" class="modal-body m-2 pt-2 pb-3">
                <div class="col-md-12" id="conteudoCarregarCadastrarUsuario">
                          <div class="col-md-12" id="conteudoCarregarCadastroUsuario" style="padding-left: 0.5px;padding-right: 0.5px;"></div>
                                <div class="form-row">
                                    <div class="form-group col-sm-8">
                                        <label class="text-nowrap">Nome Completo</label>
                                        <input name="nome_completo" placeholder="Nome" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_usuario">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-nowrap">Nome de Utilizador</label>
                                        <input name="NomeUtilizador" placeholder="Nome de Utilizador" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="NomeUtilizador12w34">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label class="text-nowrap">Senha</label>
                                        <input name="senha1" type="password" placeholder="senha" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="senha_usuario">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="text-nowrap">Confirmar Senha</label>
                                        <input name="confirmar_senha" type="password" placeholder="Confirmar Senha" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="senha_usuario2">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                      <label class="col-form-label text-md-left">Perfil<span class="text-danger"></span></label>
                                      <select id="perfilUsuario-2341" class="form-control form-control-sm" name="perfil">

                                      </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                      <label class="col-form-label text-md-left">status<span class="text-danger"></span></label>
                                      <select id="status" class="form-control form-control-sm" name="status">
                                          <option value="Activo">Activo</option>
                                          <option value="Nao Activo">Nao Activo</option>
                                      </select>
                                    </div>
                                <div>

                                <div class="col-md-4" style="left: 67%;margin-left: 50px;position: relative;top: 6px;">
                                      <img id="trocarfotoUsuario55" src="http://localhost/KEDA/assets/images/3.jpg" width="300" height="300" class="img-thumbnail rounded mx-auto d-block p-0"/><br>

                                      <input type="file" name="arquivoFotoUsuario" id="arquivoFotoUsuario" class="rounded mx-auto d-block form-control hide" onchange="PreviewImagemUsuario5()">

                                </div>

                                <div class="col-5" style="padding-right: 0.5px">
                                    <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
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

$('#adicionarUsuario23478').on('click', function() {

    if (!$('modal-lg56748uSUARIO').length) {
        $('body').append(modalCadastrarUsuario);
    }

    $('#modal-lg56748uSUARIO').modal({ show: true });

    // $('#trocarfotoUsuario55').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');

    $.ajax({
        url: 'http://localhost/KEDA/usuario/pegarPerfil',
        beforeSend: function() {
            // $('#perfilUsuario').html('Carregando....');
        },
        success: function(event) {
            $('#perfilUsuario-2341').html(event);
        }
    })

    $('#trocarfotoUsuario55').on('click', function() {
        let conteudo = $(this).text();

        if (!$('modal-default-trocar-foto').length) {
            $('body').append(modalTrocarFotoUsuario);
        }

        $('#modal-default-trocar-foto').modal({ show: true });

        if (conteudo == 'Editar') {
            $('#Apagar67').removeClass('hide');
        } else {
            $('#Apagar67').addClass('hide');
        }


        // $('#mudarFotoAtleta').on('click', function() {

        //     $('input[name=arquivo]').ready(function() {
        //         PreviewImagem();
        //     })
        // });

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

            $('#cancelar555').on('click', function() {
                $('#modal-without-animationfoto').modal('hide');
                $('#modal-without-animation').modal('show');
            })

        })

        return false;
    })

    $('#AddUsuario45692').on('submit', function(event) {
        event.preventDefault();

        let dados = $(this).serialize();

        console.log(dados);

        $.ajax({
            type: 'POST',
            data: dados,
            url: 'http://localhost/KEDA/usuario/Cadastrar',
            beforeSend: function(event) {

            },
            success: function(event) {
                alert(event);
            }
        })
    })
})

function PreviewImagemUsuario5() {
    //if(teste55 == 0){


    var imagem = document.querySelector('input[name=arquivoFotoUsuario]').files[0];

    var preview = $('#trocarfotoUsuario55')[0];

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
// END MODAL..............................................................................................................................................................................
// modal trocar estado usuario............................................................................................................................................................
var modalTrocarEstadoUsuario = `<div class="modal fade text-sm pb-5" id="modal-default-trocar-estado-usuario">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> TROCAR ESTADO USUARIO</span></h4>

            <div class="modal-body m-3 pt-2 text-center pb-5" id="bodyMensagemTrocarEstadoUsuario">
                <p> Tem certeza que pretende mudar o estado para <strong id="oi"></strong>?</p>
                <a href="#" name="btn-deletar" class="btn btn-danger" id="dataComfirmaTrocar879"></a>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

        </div>

      </div>`;

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucessoUsuario = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567-usuario">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------

$('a[data-Mudar-usuario]').on('click', function() {

    let estado = $(this).attr('data-Mudar-usuario');
    let id_usuario = $(this).attr('data-mudar-usuario-id');

    if (!$('modal-default-trocar-estado-usuario').length) {
        $('body').append(modalTrocarEstadoUsuario);
    }

    if (estado === 'Activo') {
        var classe = 'btn btn-danger m-l-80';
        $('#dataComfirmaTrocar879').html('Desativar').attr('class', classe);
        $('#oi').html('Nao Activo');
    } else {
        var classe = 'btn btn-success';
        $('#dataComfirmaTrocar879').html('Activar').attr('class', classe);
        $('#oi').html('Activo');
    }

    $('#dataComfirmaTrocar879').click(function() {

        var dado = {
            estado: estado,
            id_usuario: id_usuario
        };

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/usuario/mudarEstado',
            beforeSend: function(retorno) {
                $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
            },
            success: function(retorno) {

                // $("#bodyMensagem89").html("<div class='alert alert-success alert-dismissible'><h6><i class='icon fas fa-check'></i> Sucesso. O estado foi trocado para <strong>" + retorno + "</strong></h6></div>");

                $('#modal-default-trocar-estado-usuario').modal('hide');

                if (!$('modal-default-sucesso567-usuario').length) {
                    $('body').append(modalSucessoUsuario);
                }

                $('#modal-default-sucesso567-usuario').modal({ show: true });

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/usuario/listar';
                }, 1000);

            }
        })

    })

    $('#modal-default-trocar-estado-usuario').modal({ show: true });

    $('#tituloModaltroca77').html(' TROCAR ESTADO MESTRE');

    return false;

});
// end trocar estado usuario..............................................................................................................................................................



//trocar estado mestre ================================================================================================================================

var modalTrocarEstadoMestre = `<div class="modal fade text-sm pb-5" id="modal-default-trocar-estado-mestre">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> TROCAR ESTADO MESTRE</span></h4>

            <div class="modal-body m-3 pt-2 text-center pb-5" id="bodyMensagemTrocarEstadoMestre">
                <p> Tem certeza que pretende mudar o estado para <strong id="oi"></strong>?</p>
                <a href="#" name="btn-deletar" class="btn btn-danger" id="dataComfirmaTrocar879"></a>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

        </div>

      </div>`;

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
// var modalSucessoMestre = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567-mestre">
//       <div class="modal-dialog">
//             <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
//                 <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado.</h6>
//             </div>
//       </div>
//     </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------

$('a[data-Mudar-mestre]').on('click', function() {

    let estado = $(this).attr('data-Mudar-mestre');
    let id_mestre = $(this).attr('data-mudar-mestre-id');

    if (!$('modal-default-trocar-estado-mestre').length) {
        $('body').append(modalTrocarEstadoMestre);
    }

    if (estado === 'Activo') {
        var classe = 'btn btn-danger m-l-80';
        $('#dataComfirmaTrocar879').html('Desativar').attr('class', classe);
        $('#oi').html('Nao Activo');
    } else {
        var classe = 'btn btn-success';
        $('#dataComfirmaTrocar879').html('Activar').attr('class', classe);
        $('#oi').html('Activo');
    }

    $('#dataComfirmaTrocar879').click(function() {

        var dado = {
            estado: estado,
            id_mestre: id_mestre
        };

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/mestre/mudarEstado',
            beforeSend: function(retorno) {
                $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
            },
            success: function(retorno) {


                window.location.href = 'http://localhost/KEDA/mestre/listar';

            }
        })

        // $('#modal-default-trocar-estado').modal('hide');

        // return false;

    })

    $('#modal-default-trocar-estado-mestre').modal({ show: true });

    $('#tituloModaltroca77').html(' TROCAR ESTADO MESTRE');

    return false;

});


//trocar estado arbitro ==================================================================================================================================================

var modalTrocarEstadoArbitro = `<div class="modal fade text-sm pb-5" id="modal-default-trocar-estado-arbitro">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> TROCAR ESTADO ARBITRO</span></h4>

            <div class="modal-body m-3 pt-2 text-center pb-5" id="bodyMensagemTrocarEstadoArbitro">
                <p> Tem certeza que pretende mudar o estado para <strong id="oi"></strong>?</p>
                <a href="#" name="btn-deletar" class="btn btn-danger" id="dataComfirmaTrocar879Arbitro"></a>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

        </div>

      </div>`;

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucessoArbitro4567 = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567-arbitro-4567">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------


$('a[data-Mudar-Arbitro]').on('click', function() {

    let estado = $(this).attr('data-Mudar-Arbitro');
    let id_arbitro = $(this).attr('data-mudar-Arbitro-id');

    if (!$('modal-default-trocar-estado-arbitro').length) {
        $('body').append(modalTrocarEstadoArbitro);
    }

    if (estado === 'Activo') {
        var classe = 'btn btn-danger m-l-80';
        $('#dataComfirmaTrocar879Arbitro').html('Desativar').attr('class', classe);
        $('#oi').html('Nao Activo');
    } else {
        var classe = 'btn btn-success';
        $('#dataComfirmaTrocar879Arbitro').html('Activar').attr('class', classe);
        $('#oi').html('Activo');
    }

    $('#dataComfirmaTrocar879Arbitro').click(function() {

        var dado = {
            estado: estado,
            id_arbitro: id_arbitro
        };

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/arbitro/mudarEstado',
            beforeSend: function(retorno) {
                $('#bodyMensagemTrocarEstadoArbitro').html('<i class="fas fa-4x fa-sync-alt fa-spin"></i>');
            },
            success: function(retorno) {

                $('#modal-default-trocar-estado-arbitro').modal('hide');

                if (!$('modal-default-sucesso567-arbitro-4567').length) {
                    $('body').append(modalSucessoArbitro4567);
                }

                $('#modal-default-sucesso567-arbitro-4567').modal({ show: true });

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/arbitro/listar';
                }, 2000);

            }
        })

        // $('#modal-default-trocar-estado').modal('hide');

        // return false;

    })

    $('#modal-default-trocar-estado-arbitro').modal({ show: true });

    return false;

});
//trocar estado Atleta ================================================================================================================================
var modalTrocarEstadoAtleta = `<div class="modal fade text-sm pb-5" id="modal-default-trocar-estado-atleta">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> TROCAR ESTADO</span></h4>

            <div class="modal-body m-3 pt-2 text-center pb-5" id="bodyMensagemTrocarEstadoAtleta">
                <p> Tem certeza que pretende mudar o estado para <strong id="oi"></strong>?</p>
                <a href="#" name="btn-deletar" class="btn btn-danger" id="dataComfirmaTrocar879"></a>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

        </div>

      </div>`;

//MODAL DE SUCESSO
var modalSucesso = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado.</h6>
            </div>
      </div>

    </div>`;

$('a[data-Mudar-atleta]').on('click', function() {

    let estado = $(this).attr('data-Mudar-atleta');
    let id_atleta = $(this).attr('data-mudar-atleta-id');

    if (!$('modal-default-trocar-estado-atleta').length) {
        $('body').append(modalTrocarEstadoAtleta);
    }

    if (estado === 'Activo') {
        var classe = 'btn btn-danger m-l-80';
        $('#dataComfirmaTrocar879').html('Desativar').attr('class', classe);
        $('#oi').html('Nao Activo');
    } else {
        var classe = 'btn btn-success';
        $('#dataComfirmaTrocar879').html('Activar').attr('class', classe);
        $('#oi').html('Activo');
    }

    $('#tituloModaltroca77').html('oalaolaoalo');

    $('#dataComfirmaTrocar879').click(function() {

        var dado = {
            estado: estado,
            id_atleta: id_atleta
        };

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/Atleta/mudarEstado',
            beforeSend: function(retorno) {
                $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
            },
            success: function(retorno) {

                $("#bodyMensagemTrocarEstadoAtleta").html("<div class='alert alert-success alert-dismissible'><h6><i class='icon fas fa-check'></i> Sucesso. O estado foi trocado para <strong>" + retorno + "</strong></h6></div>");

                $('#modal-default-trocar-estado-atleta').modal('hide');

                if (!$('modal-default-sucesso567').length) {
                    $('body').append(modalSucesso);
                }

                $('#modal-default-sucesso567').modal({ show: true });

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/Atleta/listar';
                }, 2000);

            }
        })

    })

    $('#modal-default-trocar-estado-atleta').modal({ show: true });

    $('#tituloModaltroca77').html(' TROCAR ESTADO ATLETA');

    return false;

});

//======================================================================modal trocar estado associacao provincial======================\

$('a[data-Mudar-associacaollll]').on('click', function() {

    let estado = $(this).attr('data-Mudar-associacao');
    let id_associacao = $(this).attr('data-mudar-associacao-id');

    if (!$('modal-default-trocar-estado').length) {
        $('body').append(modalTrocarEstadoAtleta);
    }

    if (estado === 'Activo') {
        var classe = 'btn btn-danger m-l-80';
        $('#dataComfirmaTrocar129').html('Desativar').attr('class', classe);
        $('#oi').html('Nao Activo');
    } else {
        var classe = 'btn btn-success';
        $('#dataComfirmaTrocar129').html('Activar').attr('class', classe);
        $('#oi').html('Activo');
    }

    $('#dataComfirmaTrocar129').click(function() {

        var dado = {
            estado: estado,
            id_associacao: id_associacao
        };

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/associacao/mudarEstado',
            beforeSend: function(retorno) {
                $('#bodyMensagem89').html('trocando o estado...<i class="fas fa-1x fa-sync-alt fa-spin"></i>');
            },
            success: function(retorno) {

                $("#bodyMensagem89").html("<div class='alert alert-success alert-dismissible'><h5><i class='icon fas fa-check'></i> Sucesso. O estado foi trocado para <strong>" + retorno + "</strong></h5></div>");

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/associacao/listar';
                }, 1000)

            }
        })

        // $('#modal-default-trocar-estado').modal('hide');

        // return false;

    })

    $('#modal-default-trocar-estado').modal({ show: true });

    $('#tituloModaltroca77').html(' TROCAR ESTADO ASSOCIACAO');

    return false;

});

//======================================================================modal adicionar fotografia======================

var fotografiaAtleta90 = '<ul class="list-group list-group-flush">' +
    '          <div><video id="video" width="640" height="480" autoplay></video></div>' +
    '          <li class="list-group-item text-center" style="padding-bottom: 1px" id="snap"><label style="cursor: pointer;"><i class="fa fa-camera fa-lg m-r-5"></i> Tirar Fotografia </label></li>' +
    '          <li class="list-group-item text-center" style="padding-bottom: 1px" id="save"><label style="cursor: pointer;"><i class="fa fa-camera fa-lg m-r-5"></i> Salvar Fotografia </label></li>' +
    '          <div><canvas id="canvas" width="640" height="480"></canvas></div>' +
    '         </ul>';

var fotografiaAtleta = '<div class="modal" id="modal-without-animationfoto" style="margin-top:140px">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h4 class="modal-title" id="fotografia54"></h4>' +
    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' +
    '</div>'
    //+'<div class="modal-body">'
    +
    '<div class="card" style="margin-bottom: 0px;">' +
    '   <ul class="list-group list-group-flush">' +
    '     <li class="list-group-item text-center" id="oioi">' +
    '        <label style="cursor: pointer;" onclick="verBem();"><i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>' +
    '     </li>' +
    '     <li class="list-group-item text-center" style="padding-bottom: 1px"><label for="arquivoFotoAtleta" style="cursor: pointer;"><i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label></li>' +
    '     <li class="list-group-item text-center hide" style="padding-bottom: 1px"><label id="ApagarFoto" style="cursor: pointer;"><i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label></li>' +
    '   </ul>' +
    ' </div>' +

    '<div class="modal-footer">' +
    '<a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fa fa-ban"></i> Sair</a>' +
    '<a href="javascript:;" class="btn btn-white" data-dismiss="modal" id="cancelarFotoAtleta"><i class="fa fa-ban"></i> Cancelar</a>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';


$('#mudarFotoAtleta12').on('click', function() {

    var legenda = $('#id57').text();

    if (!$('modal-without-animationfoto').length) {
        $('body').append(fotografiaAtleta);
    }

    $('#modal-without-animationfoto').modal({ show: true });

    if (legenda == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }


    // $('#mudarFotoAtleta').on('click', function() {

    //     $('input[name=arquivo]').ready(function() {
    //         PreviewImagem();
    //     })

    // });

    $('#cancelarFotoAtleta').on('click', function() {

        let teste55 = $('#mudarFotoAtleta').attr('src');

        $('#mudarFotoAtleta').attr('src', 'http://localhost/SIS_KEDA/assets/images/3.jpg');
        $('input[name=arquivoFotoAtleta]').val("");

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
                url: 'http://localhost/SIS_KEDAA/Atleta/ApagarFoto',
                success: function(dada) {

                    if (dado = 1) {
                        $('##modal-without-animationfoto').modal('hide');
                        $('#mudarFotoAtleta').attr('src', 'http://localhost/SIS_KEDAA/assets/images/3.jpg');
                    } else {
                        $('##modal-without-animationfoto').modal('show');
                    }
                }
            })

        })

        $('#cancelar555').on('click', function() {
            $('##modal-without-animationfoto').modal('hide');
            $('#modal-without-animation').modal('show');
        })

    })

    return false;
})

function PreviewImagemAtleta() {
    //if(teste55 == 0){

    var imagem = document.querySelector('input[name=arquivoFotoAtleta]').files[0];

    var preview = $('#mudarFotoAtleta')[0];

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


////////////////////////////////////////////////////////////////////////GERIR CAMPEONATO\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

var modalgerirCategoria = `<div class="modal fade text-sm pb-5" id="modal-default-gerir-categoria">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> Adicionar Categoria</span></h4>

            <div id="bodyMensagemCategoria" class="modal-body m-3 pt-2 text-center pb-3">
                <div class="col-4 pb-4" style="display:flex">
                    <input type="text" class="form-control text-center mr-5" placeholder="Categoria">
                    <button type="button" class="btn btn-default pull-right col-4"><i class="fas fa-ban"></i> Nao</button>
                </div>
                <textarea class="form-control mb-3" rows="2"></textarea>
            <a href="#" name="btn-deletar" class="btn btn-danger mr-2" id="dataComfirmaTrocar129"><i class="fa fas-plus"></i> Adicionar</a>
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

        </div>

      </div>`;

$('#adicionarCategoria').on('click', function() {
    if (!$('modal-default-gerir-categoria').length) {
        $('body').append(modalgerirCategoria);
    }

    $('#modal-default-gerir-categoria').modal('show');
})


$('#adicionarParticipantes').on('click', function() {

    let control = $('#adicionarParticipantes4545').attr('style');

    if (control === 'display:none') {
        let style = 'display:block';
        $('#adicionarParticipantes4545').attr('style', style);
    } else {
        let style = 'display:none';
        $('#adicionarParticipantes4545').attr('style', style);
    }
})

//Mudar o estado da Associacao-------------------------------------------------------------------------------------------------------------------------

var modalTrocarEstadoAssociacao = `<div class="modal fade text-sm pb-5" id="modal-default-trocar-estado-Associacao">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> TROCAR ESTADO ASSOCIACAO</span></h4>

            <div class="modal-body m-3 pt-2 text-center pb-5" id="bodyMensagemTrocarEstadoMestre">
                <p> Tem certeza que pretende mudar o estado para <strong id="oi"></strong>?</p>
                <a href="#" name="btn-deletar" class="btn btn-danger" id="dataComfirmaTrocar8798907"></a>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

        </div>

      </div>`;

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
// var modalSucessoMestre = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567-mestre">
//       <div class="modal-dialog">
//             <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
//                 <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado.</h6>
//             </div>
//       </div>
//     </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------

$('a[data-Mudar-Associacao]').on('click', function() {

    let estado = $(this).attr('data-Mudar-Associacao');
    let id_Associacao = $(this).attr('data-mudar-associacao-id');

    if (!$('modal-default-trocar-estado-Associacao').length) {
        $('body').append(modalTrocarEstadoAssociacao);
    }

    if (estado === 'Activo') {
        var classe = 'btn btn-danger m-l-80';
        $('#dataComfirmaTrocar8798907').html('Desativar').attr('class', classe);
        $('#oi').html('Nao Activo');
    } else {
        var classe = 'btn btn-success';
        $('#dataComfirmaTrocar8798907').html('Activar').attr('class', classe);
        $('#oi').html('Activo');
    }

    $('#dataComfirmaTrocar8798907').click(function() {

        var dado = {
            estado: estado,
            id_associacao: id_Associacao
        };

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/associacao/mudarEstado',
            beforeSend: function(retorno) {
                $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
            },
            success: function(retorno) {

                window.location.href = 'http://localhost/KEDA/associacao/listar';

            }
        })

        // $('#modal-default-trocar-estado').modal('hide');

        // return false;

    })

    $('#modal-default-trocar-estado-Associacao').modal({ show: true });

    // $('#tituloModaltroca77').html(' TROCAR ESTADO MESTRE');

    return false;

});
