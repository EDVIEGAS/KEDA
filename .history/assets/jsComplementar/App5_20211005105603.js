$(document).ready(function() {

    var classe = 'form-group col-sm-6';
    $('#col-sm-3').attr('class', classe);
    $('#col-sm-4').attr('class', classe);

    $('option[categoria_arbitro]').on('click', function() {

        var categoria = $(this).attr('nome_categoria');

        if (categoria === 'Internacional' || categoria === 'Nacional') {

            var classe = 'form-group col-sm-4';
            $('#col-sm-3').attr('class', classe);
            $('#col-sm-4').attr('class', classe);
            $('#subcategoria').attr('class', classe);

            $('#subcategoria').removeAttr('hidden');

        } else {

            $('#subcategoria').attr('hidden', 'hidden');
            var classe = 'form-group col-sm-6';
            $('#col-sm-3').attr('class', classe);
            $('#col-sm-4').attr('class', classe);
        }
    })
})


var categoria = $('#id_nome_categoria_fk').val();

if (categoria == 'Provincial') {
    $('#subcategoria2').attr('hidden', 'hidden');
}


$('option[categoria_arbitro2]').on('click', function() {

    var categoria = $(this).attr('nome_categoria');

    if (categoria === 'Internacional' || categoria === 'Nacional') {

        $('#subcategoria2').removeAttr('hidden');

    } else {

        $('#subcategoria2').attr('hidden', 'hidden');

    }
})


function PasswordControl() {
    $conteudo = $('input[name=senha]').val();

    if ($conteudo.length == 0) {
        $('#idPasswordFALogin').attr('class', 'fas fa-lock');
    } else {

        $('#idPasswordFALogin').attr('class', 'fas fa-eye-slash');

    }

}

$('#idPasswordVerSenhaLogin').on('click', function() {
    $conteudo = $('input[name=senha]').val();

    if ($conteudo.length > 0) {
        $icone2 = $('#idPasswordFALogin').attr('class');
        if ($icone2 == 'fas fa-eye-slash') {
            $('#idPassword1989').attr('type', 'text');
            $('#idPasswordFALogin').attr('class', 'fas fa-eye');
        } else {
            $('#idPassword1989').attr('type', 'password');
            $('#idPasswordFALogin').attr('class', 'fas fa-eye-slash');
        }
    }
})

//------------------------------------------------------------------------------------------------------------------------

$('#profile-detail23718Mestre').on('click', function() {

    let control = $(this).text();

    if (control === 'Editar') {
        $('#profile-detailMestre453278').css('display', 'block');
        $('#form-control-staticMestre3849674').css('display', 'none');
        $('#profile-EditarFotoMestre453278').css('display', 'none');
    } else {
        $('#profile-detailMestre453278').css('display', 'none');
        $('#form-control-staticMestre3849674').css('display', 'block');
        $('#profile-EditarFotoMestre453278').css('display', 'none');
    }
})

$('a[data-edit=profile-detail]').on('click', function() {
    $('#profile-detailArbitro453278').css('display', 'none');
    $('#form-control-staticArbitro3849674').css('display', 'block');
})


$('#meetingid-detailEditarMestre7364820').on('click', function() {
    $('#form-control-staticIEArbitro4650').css('display', 'none');
    $('#profile-detailIEArbitro625448').css('display', 'block');
})

$('#profile-detailCancelIE64589').on('click', function() {
    $('#form-control-staticIEArbitro4650').css('display', 'block');
    $('#profile-detailIEArbitro625448').css('display', 'none');
})

//INFORMACAO DE CONTACTO

$('#meetingid-detailEditarIC7364820123').on('click', function() {
    $('#form-control-staticIC4650123').css('display', 'none');
    $('#profile-detailICXSA12349123').css('display', 'block');
})

$('#profile-detailCancelICWE3589123').on('click', function() {
    $('#form-control-staticIC4650123').css('display', 'block');
    $('#profile-detailICXSA12349123').css('display', 'none');
})

//INFORMACAO TECNICA

$('#meetingid-detailIT2340123').on('click', function() {
    $('#form-control-staticITeds23410123').css('display', 'none');
    $('#profile-detailITswe2341123').css('display', 'block');
})

$('#profile-detailCancelITesw64589').on('click', function() {
    $('#form-control-staticITeds23410123').css('display', 'block');
    $('#profile-detailITswe2341123').css('display', 'none');
})

//INFORMACAO FILIACAO

$('#meetingid-detailEditarIFsew9020').on('click', function() {
    $('#form-control-staticIF4650890').css('display', 'none');
    $('#profile-detailIFesd62544812313').css('display', 'block');
})

$('#profile-detailCancelIFes589123').on('click', function() {
    $('#form-control-staticIF4650890').css('display', 'block');
    $('#profile-detailIFesd62544812313').css('display', 'none');
})

//formulario de editar Mestre

$('#info-formElIP1Mestre').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idMestre = $('input[name=idMestre]').val();

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Mestre/editar_sert',
        beforeSend: function(event) {
            $('#loadingIP21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIP21').css('display', 'none');

            window.location.href = 'http://localhost/KEDA/Mestre/Editar/' + idMestre;

        }
    })
})

$('#info-formElIE1Mestre').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idMestre = $('input[name=idMestre]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Mestre/editar_sert',
        beforeSend: function(event) {
            $('#loadingIP21').css('display', 'block');
        },
        success: function(event) {

            window.location.href = 'http://localhost/KEDA/Mestre/Editar/' + idMestre;

        }
    })
})

$('#info-formElIF1Mestre').on('submit', function(event) {

    event.preventDefault();

    let dados = $(this).serialize();

    let idMestre = $('input[name=idMestre]').val();
    // let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Mestre/editar_sert',
        beforeSend: function(event) {
            $('#loadingIF21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIF21').css('display', 'none');
            $('#content_success_msgIF').css('display', 'block');
            setTimeout(function() {
                window.location.href = 'http://localhost/KEDA/Mestre/Editar/' + idMestre;
            }, 1000);
        }
    })
})

$('#info-formElIC1Mestre').on('submit', function(event) {

    event.preventDefault();

    let dados = $(this).serialize();

    let idMestre = $('input[name=idMestre]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Mestre/editar_sert',
        beforeSend: function(event) {
            $('#loadingIC21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIC21').css('display', 'none');
            $('#content_success_msgIF').css('display', 'block');

            window.location.href = 'http://localhost/KEDA/Mestre/Editar/' + idMestre;

        }
    })
})

$('#info-formElIT1Mestre').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idMestre = $('input[name=idMestre]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Mestre/editar_sert',
        beforeSend: function(event) {
            $('#loadingIT21').css('display', 'block');
        },
        success: function(event) {

            $('#loadingIT21').css('display', 'none');
            $('#content_success_msgIF').css('display', 'block');

            window.location.href = 'http://localhost/KEDA/Mestre/Editar/' + idMestre;


        }
    })
})

$('a[id=idTrocarFotoMestre]').on('click', function() {

    let conteudo = $(this).text();

    $('#profile-EditarFotoMestre453278').css('display', 'block')
    $('#profile-detailMestre453278').css('display', 'none');
    $('#form-control-staticMestre3849674').css('display', 'none');

    if (conteudo == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }

    $('#cancelarFotoMestre').on('click', function() {
        let imagem = $('#130').attr('data_imagem');

        let teste55 = $('#mudarFotoMestre').attr('src');

        if (conteudo === 'Trocar Fotografia') {
            $('#130').attr('src', 'http://localhost/KEDA/uploads/product/' + imagem);
            $('input[name=arquivoFotoMestre]').val("");
        } else {
            $('#130').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
            $('input[name=arquivoFotoMestre]').val("");

        }
    })

    return false;
})

//Modal confirmacao de deletar foto na edicao
var modalDeletarEditarFotoMestre = `<div class="modal fade text-sm pb-5" id="modal-default-deletar-foto-mestre">
<div class="modal-dialog">
    <div class="modal-content">
   
        <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> EXCLUIR FOTO </h4>
      
            <div class="modal-body alert alert-warning alert-dismissible m-3 text-sm">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23">Tem a certeza que pretende remover a fotografia ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <button type="button" id="dataComfirmDeletarMestre" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i> Confirmar</button>
            </div>
        </div> 
    </div>     
</div>`;

$('.delete-picture-mestre').on('click', function() {

    if (!$('modal-default-deletar-foto-mestre').length) {
        $('body').append(modalDeletarEditarFotoMestre);
    }
    $('#modal-default-deletar-foto-mestre').modal('show');
    $('#modal-without-animation').modal('hide');

    var dado55 = 0;

    $('#dataComfirmDeletarMestre').on('click', function() {
        var idpessoa = $('input[name=idpessoa]').val();
        let idMestre = $('input[name=idMestre]').val();

        var dado = {
            idpessoa: idpessoa,
            idMestre: idMestre
        }

        $.ajax({
            type: 'POST',
            data: dado,
            url: 'http://localhost/KEDA/Mestre/ApagarFoto',
            success: function(dada) {

                window.location.href = 'http://localhost/KEDA/Mestre/Editar/' + idMestre;

            }
        })

    })

})

$('#CancelarGravarFotoMestre1').on('click', function(event) {
    event.preventDefault();

    $('#botaoEsconderMestre231').css('display', 'block');
    $('#12323524Mestre').css('display', 'none');
    $('#botaoEsconderMestre231CG').css('display', 'none');
    $('#botaoEsconderMestre231').css('margin-left', '169px');
})

function PreviewImagemMestre2() {
    //if(teste55 == 0){
    $('#botaoEsconderMestre231').css('display', 'none');
    $('#12323524Mestre').css('display', 'block');
    $('#botaoEsconderMestre231CG').css('display', 'block');

    var imagem = document.querySelector('input[name=arquivoFotoMestre]').files[0];

    var preview = $('#12323524Mestre')[0];

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


//------------------------------------------------------------------------------------------------------------------------

$('#profile-detail23718Arbitro').on('click', function() {

    let control = $(this).text();

    if (control === 'Editar') {
        $('#profile-detailArbitro453278').css('display', 'block');
        $('#form-control-staticArbitro3849674').css('display', 'none');
        $('#profile-EditarFotoArbitro453278').css('display', 'none');
    } else {
        $('#profile-detailArbitro453278').css('display', 'none');
        $('#form-control-staticArbitro3849674').css('display', 'block');
        $('#profile-EditarFotoArbitro453278').css('display', 'none');
    }
})

$('a[data-edit=profile-detail]').on('click', function() { // esta a controlar o botao cancelar
    $('#profile-detailMestre453278').css('display', 'none');
    $('#form-control-staticMestre3849674').css('display', 'block');
})


$('#meetingid-detailEditarArbitro7364820').on('click', function() {
    $('#form-control-staticIEArbitro4650').css('display', 'none');
    $('#profile-detailIEArbitro625448').css('display', 'block');
})

$('#profile-detailCancelIE64589').on('click', function() {
    $('#form-control-staticIEArbitro4650').css('display', 'block');
    $('#profile-detailIEArbitro625448').css('display', 'none');
})

//INFORMACAO DE CONTACTO

$('#meetingid-detailEditarICArbitro7364820123').on('click', function() {
    $('#form-control-staticIArbitroC4650123').css('display', 'none');
    $('#profile-detailICXSAarbitro12349123').css('display', 'block');
})

$('#profile-detailCancelICWEArbitro3589123').on('click', function() {
    $('#form-control-staticIArbitroC4650123').css('display', 'block');
    $('#profile-detailICXSAarbitro12349123').css('display', 'none');
})

//INFORMACAO TECNICA

$('#meetingid-detailITArbitro2340123').on('click', function() {
    $('#form-control-staticITedsArbitro23410123').css('display', 'none');
    $('#profile-detailITsweArbitro2341123').css('display', 'block');
})

$('#profile-detailCancelITesw64589').on('click', function() {
    $('#form-control-staticITedsArbitro23410123').css('display', 'block');
    $('#profile-detailITsweArbitro2341123').css('display', 'none');
})

//INFORMACAO FILIACAO

$('#meetingid-detailEditarIFsewArbitro9020').on('click', function() {
    $('#form-control-staticIFArbitro4650890').css('display', 'none');
    $('#profile-detailIFesdArbitro62544812313').css('display', 'block');
})

$('#profile-detailCancelIFes589123').on('click', function() {
    $('#form-control-staticIFArbitro4650890').css('display', 'block');
    $('#profile-detailIFesdArbitro62544812313').css('display', 'none');
})

//formulario de editar Arbitro

$('#info-formElIP1Arbitro').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idArbitro = $('input[name=idArbitro]').val();

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/Mestre/editar_sert',
        beforeSend: function(event) {
            $('#loadingIP21').css('display', 'block');
        },
        success: function(event) {

            $('#loadingIP21').css('display', 'none');

            window.location.href = 'http://localhost/KEDA/arbitro/Editar/' + idArbitro;

        }
    })
})

$('#info-formElIE1Arbitro').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idArbitro = $('input[name=idArbitro]').val();
    // let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/arbitro/editar_sert',
        beforeSend: function(event) {
            $('#loadingIP21').css('display', 'block');
        },
        success: function(event) {

            $('#loadingIP21').css('display', 'none');

            window.location.href = 'http://localhost/KEDA/arbitro/Editar/' + idArbitro;

        }
    })
})

$('#info-formElIF1Arbitro').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idArbitro = $('input[name=idArbitro]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/arbitro/editar_sert',
        beforeSend: function(event) {
            $('#loadingIF21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIF21').css('display', 'none');

            window.location.href = 'http://localhost/KEDA/arbitro/Editar/' + idArbitro;

        }
    })
})

$('#info-formElIC1Arbitro').on('submit', function(event) {
    event.preventDefault();

    let dados = $(this).serialize();

    let idArbitro = $('input[name=idArbitro]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();


    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/arbitro/editar_sert',
        beforeSend: function(event) {
            $('#loadingIC21').css('display', 'block');
        },
        success: function(event) {
            $('#loadingIC21').css('display', 'none');

            window.location.href = 'http://localhost/KEDA/arbitro/Editar/' + idArbitro;

        }
    })

})

$('#info-formElIT1Arbitro').on('submit', function(event) {

    event.preventDefault();

    let dados = $(this).serialize();

    let idArbitro = $('input[name=idArbitro]').val();
    let id_endereco_fk1 = $('input[name=id_endereco_fk1]').val();

    $.ajax({
        type: 'POST',
        data: dados,
        url: 'http://localhost/KEDA/arbitro/editar_sert',
        beforeSend: function(event) {
            $('#loadingIT21').css('display', 'block');
        },
        success: function(event) {

            $('#loadingIT21').css('display', 'none');

            window.location.href = 'http://localhost/KEDA/arbitro/Editar/' + idArbitro;

        }
    })
})

$('a[id=idTrocarFotoArbitro]').on('click', function() {
    let conteudo = $(this).text();

    $('#profile-EditarFotoArbitro453278').css('display', 'block')
    $('#profile-detailArbitro453278').css('display', 'none');
    $('#form-control-staticArbitro3849674').css('display', 'none');

    if (conteudo == 'Editar') {
        $('#Apagar67').removeClass('hide');
    } else {
        $('#Apagar67').addClass('hide');
    }

    $('#cancelarFotoMestre').on('click', function() {

        let imagem = $('#123').attr('data_imagem');

        let teste55 = $('#mudarFotoMestre').attr('src');

        if (conteudo === 'Trocar Fotografia') {
            $('#123').attr('src', 'http://localhost/KEDA/uploads/product/' + imagem);
            $('input[name=arquivoFotoMestre]').val("");
        } else {
            $('#123').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
            $('input[name=arquivoFotoMestre]').val("");

        }
    })

    //Modal confirmacao de deletar foto na edicao
    var modalDeletarEditarFotoArbitro = `<div class="modal fade text-sm pb-5" id="modal-default-deletar-foto-arbitro">
    <div class="modal-dialog">
      <div class="modal-content">
       
          <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> REMOVER PARTICIPANTE </h4>
          
                <div class="modal-body alert alert-warning alert-dismissible m-3 text-sm">
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                  <p id="mensagem23">One fine body&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                  <a id="dataComfirmMestre" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i> Confirmar</a>
                </div>
              </div>
             
            </div>
           
          </div>`;


    $('#ApagarFoto').on('click', function() {

        if (!$('modal-without-animationfoto').length) {
            $('body').append(Apagarfotografia);
        }
        $('#modal-without-animationfoto').modal('show');
        $('#modal-without-animation').modal('hide');

        var dado55 = 0;

        $('#ApagarFoto2').on('click', function() {
            var idMestre = $('input[name=idpessoa]').val();
            //alert(idMestre);

            var dado = {
                idMestre: idMestre
            }

            $.ajax({
                type: 'POST',
                data: dado,
                url: 'http://localhost/KEDA/Mestre/ApagarFoto',
                success: function(dada) {

                    if (dado = 1) {
                        $('#modal-without-animationfoto').modal('hide');
                        $('#mudarFotoMestre').attr('src', 'http://localhost/KEDA/assets/images/3.jpg');
                    } else {
                        $('#modal-without-animationfoto').modal('show');
                    }
                }
            })

        })

    })

    return false;
})

$('#CancelarGravarFotoMestre1').on('click', function(event) {
    event.preventDefault();

    $('#botaoEsconderMestre231').css('display', 'block');
    $('#12323524Arbitro').css('display', 'none');
    $('#botaoEsconderArbitro231CG').css('display', 'none');
    $('#botaoEsconderMestre231').css('margin-left', '169px');
})

function PreviewImagemArbitro2() {
    //if(teste55 == 0){
    $('#botaoEsconderArbitro231').css('display', 'none');
    $('#12323524Arbitro').css('display', 'block');
    $('#botaoEsconderArbitro231CG').css('display', 'block');

    var imagem = document.querySelector('input[name=arquivoFotoArbitro]').files[0];

    var preview = $('#12323524Arbitro')[0];

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

//Modal confirmacao de deletar Arbitro foto na edicao
var modalDeletarEditarFotoArbitro = `<div class="modal fade text-sm pb-5" id="modal-default-deletar-foto-arbitro">
<div class="modal-dialog">
    <div class="modal-content">
   
        <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> EXCLUIR FOTO </h4>
      
            <div class="modal-body alert alert-warning alert-dismissible m-3 text-sm">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23">Tem a certeza que pretende remover a fotografia ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <button type="button" id="dataComfirmDeletarArbitro" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i> Confirmar</button>
            </div>
        </div> 
    </div>     
</div>`;

$('.delete-picture-arbitro').on('click', function() {

    if (!$('modal-default-deletar-foto-arbitro').length) {
        $('body').append(modalDeletarEditarFotoArbitro);
    }
    $('#modal-default-deletar-foto-arbitro').modal('show');
    $('#modal-without-animation').modal('hide');

    $('#dataComfirmDeletarArbitro').on('click', function() {

        var idpessoa = $('input[name=idpessoa]').val();
        let idArbitro = $('input[name=idArbitro]').val();

        var dado = {
            idpessoa: idpessoa,
            idArbitro: idArbitro
        }

        $.ajax({
            type: 'POST',
            data: dado,
            url: 'http://localhost/KEDA/arbitro/ApagarFoto',
            success: function(dada) {

                window.location.href = 'http://localhost/KEDA/arbitro/Editar/' + idArbitro;

            }
        })

    })

})

//---------------------------------------------------------------------------------------------------------------------------------

//Modal para dar permissao de sub-menus

var modalSubMenus = `<div class="modal fade text-sm" id="modal-submenu">
        <div class="modal-dialog">
          <div class="modal-content">
          <h4 class="modal-title p-3 text-sm"><i class="fas fa-list text-red"></i> Sub-Menus</h4>
            <div class="modal-body m-1 pt-0 text-center">
            <div class="form-check form-check-inline">
            
            </div>
            </div>
              <div class="modal-footer">
              <a href="javascript:;" class="btn btn-danger btn-sm" id="close-modal" data-dismiss="modal"><i class="fa fa-ban"></i> Cancelar</a>
              <a href="javascript:;" class="btn btn-success btn-sm" id="saveGrants" disabled><i class="fa fa-save"></i> Salvar</a>
              </div>
            </div>
          </div>
         
        </div>
       
      </div>`;


// $('body').on('click', '#close-modal', function() {

//     setTimeout(function() {
//         $('#modal-submenu').remove();
//     }, 500)
// // }); +
// $('.checkSub12').on('click', function() {

//     if (!$('modal-submenu').length) {
//         $('body').append(modalSubMenus);
//     }

//     $('#saveGrants').attr('disabled', 'disabled');
//     idmenu = $(this).attr('idsubmenu');
//     res = '';
//     checkeds = [];
//     cont = 0;
//     $.get('http://localhost/KEDA/permissao/verificaChecks', { idmenu }, function(x) {
//         checkeds = x;
//     }, 'json');

//     $.get('http://localhost/KEDA/permissao/getSubsubMenu', function(x) {
//         for (i in x) {
//             if (checkeds.length == 0) {
//                 res += `<label class="form-check-label  ml-1" for="defaultCheck${x[i].id_submenu_submenu}">${x[i].descricao}</label>
//                             <input type="checkbox" class="form-check-input ml-1 id-sub" value="${x[i].id_submenu_submenu}">
//                             <input type="hidden" class="idmenu" value="${idmenu}">
//                             `;
//             } else {
//                 for (j = 0; j < checkeds.length; j++) {
//                     if (checkeds[j].id_submenusubmenu === x[i].id_submenu_submenu)
//                         cont++;
//                 }
//                 if (cont > 0) {
//                     res += `<label class="form-check-label  ml-1" for="defaultCheck${x[i].id_submenu_submenu}">${x[i].descricao}</label>
//                         <input type="checkbox" checked="true" class="form-check-input ml-1 id-sub" value="${x[j].id_submenu_submenu}">
//                         <input type="hidden" class="idmenu" value="${idmenu}">
//                         `;
//                 } else {
//                     res += `<label class="form-check-label  ml-1" for="defaultCheck${x[i].id_submenu_submenu}">${x[i].descricao}</label>
//                         <input type="checkbox" class="form-check-input ml-1 id-sub" value="${x[i].id_submenu_submenu}">
//                         <input type="hidden" class="idmenu" value="${idmenu}">
//                         `;
//                 }
//                 cont = 0;
//             }

//         }
//         $('.form-check').html(res);
//     }, 'json');
//     $('#modal-submenu').modal('show')

//     $('#saveGrants').attr('disabled', 'disabled');
// })

// permissoes = [];
// var id_role = null;
// $('body').on('change', '.id-sub', function() {
//     var idsubmenu = $(this).attr('value');
//     var indice = 0;
//     if ($(this).is(":checked")) {
//         permissoes.push({
//             'idmenu': idmenu,
//             'idsubmenu': idsubmenu
//         });
//     } else {
//         if (permissoes.length > 0) {
//             for (var i = 0; i < permissoes.length; i++) {
//                 if (idsubmenu == permissoes[i].idsubmenu)
//                     permissoes.splice(i, 1);
//             }
//         }
//     }
// });

// $('body').on('change', '#role', function() {
//     permissoes = [];
//     id_role = $(this).val();
// })

// $('body').on('click', '#close-modal', function() {
//     permissoes = [];
// })

// $('body').on('click', '#saveGrants', function() {
//     $.post('http://localhost/KEDA/permissao/saveGrants', { permissoes, id_role }, function(x) {
//         alert(x)
//     })
// });

//Calendario ------------------------ fullCalebdar

var modalEventoCalendario = `<div class="modal fade text-sm" id="modal-EventCalendario">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title text-sm" id="tituloheader33"><i class="fas fa-eye"></i> DETALHES DO EVENTO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
            </div>
         
            <div class="modal-body">
                <div class="visevent12" style="display: block">
                    <dl class="row">
                        <dt class="col-sm-4">ID do Evento</dt>
                        <dd class="col-sm-8" id="id2"></dd>

                        <dt class="col-sm-4">Titulo do Evento</dt>
                        <dd class="col-sm-8" id="titulo2"></dd>

                        <dt class="col-sm-4">Data de Inicio</dt>
                        <dd class="col-sm-8" id="inicio2"></dd>

                        <dt class="col-sm-4">Data de Fim</dt>
                        <dd class="col-sm-8" id="fim2"></dd>
                    </dl>
                    <button class="btn btn-warning btn-sm btn-canc-vis"><i class="fa fa-edit"></i> Editar </button>
                    <a href="" id="apagar_evento12" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i> Apagar </a>
                </div>
                <div class="formedit12" style="display: none">
                        <span id="msg-edit12"></span>
                        <form id="aditevent12" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-sm-8">
                                    <label class="text-nowrap">Titulo</label>
                                    <input name="title" placeholder="Titulo do Evento" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="title" value="">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="text-nowrap">Cor</label>
                                    <select id="color" class="form-control form-control-sm" name="color" value="sfsdfsdfsdf">
                                        <option id="color2">Selecione</option>
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turqueza</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                                        <option style="color:#1c1C1c;" value="#1c1C1c">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                        <option style="color:#228B22;" value="#228B22">Verde</option>
                                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label class="text-nowrap">Inicio do Evento</label>
                                    <input name="start" type="text" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="start" value="" onkeypress="DataHora(event, this)">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="text-nowrap">Fim do Evento</label>
                                    <input name="end" type="text" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="end" value="" onkeypress="DataHora(event, this)">
                                </div>
                            </div>      
                            <button class="btn btn-primary btn-sm btn-canc-edit12"><i class="fa fa-ban"></i> Cancelar </button>
                            <button type="submit" class="btn btn-primary btn-sm btn-canc-edit12"><i class="fa fa-ban"></i> Salvar </button>
                        <form>
                </div>
           
            </div>
          </div>
         
        </div>
       
</div>`;

function DataHora(event, objecto) {

    var keypress = (window.event) ? event.keyCode : EventSource.which;
    campo = eval(objecto);

    if (campo.value == '00/00/0000 00:00:00') {
        campo.value = "";
    }

    caracteres = '0123456789';
    separacao1 = '/';
    separacao2 = ' ';
    separacao3 = ';';
    conjunto1 = 2;
    conjunto2 = 5;
    conjunto3 = 10;
    conjunto4 = 13;
    conjunto5 = 16;

    if ((caracteres.search(String.fromCharCode(keypress)) != -1) && campo.value.length < (19)) {
        if (campo.value.length == conjunto1)
            campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto2)
            campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto3)
            campo.value = campo.value + separacao2;
        else if (campo.value.length == conjunto4)
            campo.value = campo.value + separacao3;
        else if (campo.value.length == conjunto5)
            campo.value = campo.value + separacao3;
    } else {
        event.returnValue = false;
    }
}

var modalEventoCadastrarCalendario = `<div class="modal fade text-sm" id="modal-EventCalendarioCadastrar">
<form method="post" id="AddEventoCalendario" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> CADASTRAR EVENTO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                    <div class="modal-body">
                            <div class="modal-body m-2 pt-2 pb-3">
                            <div class="col-md-12" id="conteudoCarregarEditarUsuario">
                                <div class="col-md-12" id="conteudoUsuario" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                                    <div class="form-row">
                                        <div class="form-group col-sm-8">
                                            <label class="text-nowrap">Titulo</label>
                                            <input name="title" placeholder="Titulo do Evento" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="title" value="">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="text-nowrap">Cor</label>
                                            <select id="color" class="form-control form-control-sm" name="color" value="">
                                                <option>Selecione</option>
                                                <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                                <option style="color:#0071c5;" value="#0071c5">Azul Turqueza</option>
                                                <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                                <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                                                <option style="color:#1c1C1c;" value="#1c1C1c">Preto</option>
                                                <option style="color:#436EEE;" value="#436EEE">Royal</option>
                                                <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                                <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                                <option style="color:#228B22;" value="#228B22">Verde</option>
                                                <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label class="text-nowrap">Inicio do Evento</label>
                                            <input name="start" type="text" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="start" value="" onkeypress="DataHora(event, this)">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="text-nowrap">Fim do Evento</label>
                                            <input name="end" type="text" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="end" value="" onkeypress="DataHora(event, this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-ban"></i> Cancelar</a>
                        <button type="submit" class="btn btn-success btn-sm" id="saveEventCalendario"><i class="fa fa-save"></i> Salvar </button>
                    </div>
            </div>
          </div>
        </div>
        </form>
</div>`;

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
        plugins: ['interaction', 'dayGrid'],
        header: {
            left: 'prevYear,prev,next,nextYear today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        defaultDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: 'http://localhost/KEDA/calendario/getEventos',
        extraParams: function() {
            return {
                cachebuster: new Date().valueOf()
            };
        },
        eventClick: function(info) {

            if (!$('modal-EventCalendario').lenght) {
                $('body').append(modalEventoCalendario);
            }

            $('#apagar_evento12').attr("href", "http://localhost/KEDA/calendario/excluirEvento/" + info.event.id);
            info.jsEvent.preventDefault();

            $('#modal-EventCalendario #id2').text(info.event.id);
            $('#modal-EventCalendario #titulo2').text(info.event.title);
            $('#modal-EventCalendario #inicio2').text(info.event.start.toLocaleString());
            $('#modal-EventCalendario #fim2').text(info.event.end.toLocaleString());

            $('#modal-EventCalendario #id2').val(info.event.id);
            $('#modal-EventCalendario #title').val(info.event.title);
            $('#modal-EventCalendario #start').val(info.event.start.toLocaleString());
            $('#modal-EventCalendario #end').val(info.event.end.toLocaleString());
            $('#modal-EventCalendario #color2').val(info.event.backgroundColor);

            $('#modal-EventCalendario').modal({ show: true });

            $('.btn-canc-vis').on("click", function() {
                $('.visevent12').slideToggle();
                $('.formedit12').slideToggle();
                $('#tituloheader33').html('<i class="fas fa-edit"></i> EDITAR EVENTO');
            })

            $('.btn-canc-edit12').on("click", function(event) {
                $('.formedit12').slideToggle();
                $('.visevent12').slideToggle();
                $('#tituloheader33').html('<i class="fas fa-eye"></i> VER DETALHES');
            })
        },
        selectable: true,
        // select: function(info) {


        //     if (!$('modal-EventCalendarioCadastrar').lenght) {
        //         $('body').append(modalEventoCadastrarCalendario);
        //     }

        //     $('#modal-EventCalendarioCadastrar').modal({ show: true });

        //     $('#modal-EventCalendarioCadastrar #start').val(info.start.toLocaleString());
        //     $('#modal-EventCalendarioCadastrar #end').val(info.end.toLocaleString());


        //     $(document).ready(function() {
        //         $('#AddEventoCalendario').on('submit', function(event) {
        //             event.preventDefault();
        //             $.ajax({
        //                 method: "POST",
        //                 url: 'http://localhost/KEDA/calendario/cadastrarEvento',
        //                 data: new FormData(this),
        //                 contentType: false,
        //                 processData: false,
        //                 success: function() {
        //                     location.reload();
        //                 },
        //                 beforeSend: function() {

        //                 }
        //             });
        //         })

        //     })

        // }

    });

    calendar.render();
});

$(document).ready(function() {
    $('#verlistaDeEvento123').on('click', function() {
        let conteudo = $('#verlistaDeEvento123').text();

        if (conteudo == 'Ver Calendario') {
            $('#calendarioMostra13').slideToggle();
            $('#MostralistaDeEventos13').slideToggle();
            $('#verlistaDeEvento123').html('Ver Lista de Evento');
        } else {
            $('#MostralistaDeEventos13').slideToggle();
            $('#calendarioMostra13').slideToggle();
            $('#verlistaDeEvento123').html('Ver Calendario');
        }
    })
})

function pegarViaBilheteParticipanteEvento() {

    // alert('ola mundo');

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
                    <img class="img-bordered-sm img-bordered-sm23IMAGEM6745" src="http://localhost/KEDA/assets/images/3.JPG" alt="user image" style="height:180px; width:150px;border-radius:24px;">
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
                            <div class="form-group col-sm-12">
                                <label class="text-nowrap">Provincia</label>
                                <input name="provincia" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-row" hidden> 
                            <div class="form-group col-sm-12">
                                <input name="data" id="datadeNascimento" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label class="text-nowrap">Categoria</label>
                                <select name="categoria" id="genero_categoria231" class="form-control form-control-sm">
                                </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="text-nowrap">Funcao</label>
                            <select name="funcao" id="funcaoCaid2113" class="form-control form-control-sm">
                                <option value="Competidor">Competidor</option>
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
                    let peso = event2.peso;

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

                            // $.ajax({
                            //     type: 'POST',
                            //     url: 'http://localhost/KEDA/Campeonato/getFuncao',
                            //     beforeSend: function() {
                            //         $('#funcaoCaid2113').html('aaddasdasd');
                            //     },
                            //     success: function(event) {
                            //         $('#funcaoCaid2113').html(event);
                            //     }
                            // })

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

                            $('#genero_categoria231').html('<option value="Competidor">'+ val(peso +'</option>');

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

let control78603;

control78603 = $('#controlPainel123').attr('variavelControl');

if(control78603 === "0"){
    carregarAllParticipante();
}

function carregarAllParticipante() {

    let modalEditarParticipante = `<div class="modal fade text-sm pb-5 hide" id="modal-Editar-participante-4567">
    <div class="modal-dialog" style="max-width:458px">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title text-sm"><i class="fas fa-edit"></i> EDITAR PARTICIPANTE</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form method="post" id="editarParticipanteEvente874">
            <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3 row">
                <div class="col-md-12" id="conteudoCarregar5955">                     
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label class="text-nowrap">Categoria</label>
                                <select name="categoria2" id="genero_categoriaEdit231" class="form-control form-control-sm" value="">
                                </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="text-nowrap">Funcao</label>
                            <select name="funcao2" id="funcaoeeEdit456" class="form-control form-control-sm">
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

    let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
    let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

        let dado90 = {
            id_associacao_pro2: id_associacao_pro2,
            idEvento2: idEvento2
        };

        $.post('http://localhost/KEDA/Campeonato/getParticipantes', dado90 , function(retorno) {

  
            let teste = JSON.parse(retorno);

            
                    let tableCategoria = `<table class="table table-sm">
                                    <thead>
                                        <tr>
                                        <th style="width: 10px">Nº</th>
                                        <th>Nome Completo</th>
                                        <th>Funcao</th>
                                        <th>Genero</th>
                                        <th>Data de Nascimento</th>
                                        <th>Peso</th>
                                        <th>Provincia</th>
                                        <th class="text-center project-actions">Escalao Etario</th>
                                        <th class="text-center project-actions">Categoria de Peso</th>
                                        <th class="text-center project-actions">Accoes</th>
                                        </tr>
                                    </thead>`;

                    tableCategoria += `<tbody>`;
                    let soma = 0;
                     
                    $.each(teste, function(i, retorno1) {
                        let peso2 = retorno1.categoria == 0 ? " " : retorno1.categoria +"kg";
                        let escalao = retorno1.escalao === null ? " " : retorno1.escalao ;
                        let categoriaPeso = retorno1.categoriaPeso === null ? " " : retorno1.categoriaPeso +"kg";

                        tableCategoria += `<tr>
                                        <td>${ soma = soma + 1}</td>
                                        <td>${retorno1.nome_participante}</td>
                                        <td>${retorno1.funcao}</td>
                                        <td>${retorno1.genero}</td>
                                        <td>${retorno1.dataNascimento}</td>
                                        <td>${peso2}</td>
                                        <td>${retorno1.provincia}</td>
                                        <td class="text-center project-actions">${escalao}</td>
                                        <td class="text-center project-actions">${categoriaPeso}</td>
                                        <td class="text-center project-actions">
                                            <button data-editar-participanteEscalao="${retorno1.escalao}" data-editar-participante01="${retorno1.id_participante_campeonato}" data-editar-id_campeonato="${retorno1.id_campeonato_fk}" data-editar-genero="${retorno1.genero}" class="btn p-0"><i class="fas fa-edit fa-fw"></i></button>
                                            <button data-confirm-participante="${retorno1.id_participante_campeonato}" class="btn p-0"><i class="fas fa-trash fa-fw fa-danger"></i></button>
                                        </td>
                                        </tr>`
                    });

                    tableCategoria += `</tbody>`
                    tableCategoria += `</table>`;

                    $('.verAllParticipante789P233').html(tableCategoria);
                    
                    
                    $('button[data-confirm-participante]').on('click', function(event) {

                        event.preventDefault();

                        let idparticipante = $(this).attr('data-confirm-participante');

                        $.ajax({
                            type: 'post',
                            data: { idparticipante },
                            url: 'http://localhost/KEDA/Campeonato/removeParticipanteCampeonato',
                            beforeSend: function() {
                                $('#verAllParticipante789P23').html('<div class="d-flex justify-content-center" style="margin-top: 79px;"><div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"> Loading... </span></div> Eliminando.... </div>');
                            },
                            success: function(event) {
                                carregarAllParticipante();
                            }
                        })
                    })

                    $('button[data-editar-participante01]').on('click', function(event) {

                        event.preventDefault();

                        idparticipante567 = $(this).attr('data-editar-participante01');
                        let escalao = $(this).attr('data-editar-participanteEscalao');
                        let genero = $(this).attr('data-editar-genero');

                        if (!$('modal-Editar-participante-4567').length) {
                            $('body').append(modalEditarParticipante);
                        }

                        let dado67 = {
                            id: $(this).attr('data-editar-id_campeonato'),
                            genero: $(this).attr('data-editar-genero'),
                            escalao: $(this).attr('data-editar-participanteEscalao')
                        }

                        $.ajax({
                            type: 'POST',
                            data: dado67,
                            url: 'http://localhost/KEDA/Campeonato/getIdCategoria3',
                            success: function(event) {
                                $('#genero_categoriaEdit231').html(event);
                            }
                        })
                        // $.ajax({
                        //     type: 'POST',
                        //     data: {idparticipante567},
                        //     url: 'http://localhost/KEDA/Campeonato/getInfoParticipanteCampeonato',
                        //     success: function(event) {
                               
                        //         let event2 = JSON.parse(event);

                        //          $('#genero_categoriaEdit231').val(event2[0]['categoria']);

                                
                        //         console.log(event2[0]['categoria']);
                        //     }
                        // })


                        $.ajax({
                            type: 'POST',
                            url: 'http://localhost/KEDA/Campeonato/getFuncao',
                            success: function(event) {
                                $('#funcaoeeEdit456').html(event);
                            }
                        })

                        
                        $('#genero_categoriaEdit231').change(function(){
                          
                        })

                        $('#editarParticipanteEvente874').submit(function(event) {

                            event.preventDefault();

                            let idparticipante = idparticipante567;

                            // let categoria = $('select[name=categoria2]').val();
                            let funcao = $('select[name=funcao2]').val();
                            let categoria2 = $('select[name=categoria2]').val();

                            let dado3 = {
                                funcao: funcao,
                                categoriaPeso:categoria2,
                                idparticipante: idparticipante
                            }

                            console.log(dado3);

                            $.ajax({
                                type: 'post',
                                data: dado3,
                                url: 'http://localhost/KEDA/Campeonato/atualizarParticipanteCampeonato',
                                success: function(event) {
                                    carregarAllParticipante();
                                }
                            })

                        })

                        $('#modal-Editar-participante-4567').modal({ show: true });
                    })

        });
}


function carregarAllParticipanteLista() {

    let id_associacao_pro2 = $('#pegarListaCategoria7645390').attr('data-id_associacao_pro');
    let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

        let dado90 = {
            id_associacao_pro2: id_associacao_pro2,
            idEvento2: idEvento2
        }

        $.post('http://localhost/KEDA/Campeonato/getParticipantes',dado90, function(retorno) {
            
            let teste = JSON.parse(retorno);

            if(teste.length !== 0){

                let tableCategoria = `<table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th style="width: 10px">Nº</th>
                                    <th>Nome Completo</th>
                                    <th>Funcao</th>
                                    <th>Genero</th>
                                    <th class="text-center">Data de Nascimento</th>
                                    <th class="text-center project-actions">Categoria de Peso</th>
                                    <th>Provincia</th>
                                    </tr>
                                </thead>`;

                tableCategoria += `<tbody>`;
                let soma = 0;
                $.each(teste, function(i, retorno1) {
                    let peso = retorno1.categoriaPeso === null ? " " : retorno1.categoriaPeso + " kg";
        
                    tableCategoria += `<tr>
                                    <td>${ soma = soma + 1}</td>
                                    <td>${retorno1.nome_participante}</td>
                                    <td>${retorno1.funcao}</td>
                                    <td>${retorno1.genero}</td>
                                    <td class="text-center">${retorno1.dataNascimento}</td>
                                    <td class="text-center project-actions">${peso}</td>
                                    <td>${retorno1.provincia}</td>
                                    </tr>`
                });
                tableCategoria += `</tbody>`
                tableCategoria += `</table>`;

                $('.conteudoLista56384Lista').html(tableCategoria);

            }else{

                $('#conteudoLista56387242638').attr('style','height:200px').html('<div class="text-center p-5">Nenhuma informacao encontrada</div>');

            }

        })

}

// carregarAllParticipante();

function verificarCategoria(peso, sexo, escalao){
    
    if(sexo === "Masculino" && escalao === "sub16"){
       if(peso >= 38 && peso <=42){
            return "-42";
       }
       if(peso >= 42 && peso <=46){
            return "-46";
       }
       if(peso >= 46 && peso <=50){
            return "-50";
       }
       if(peso >= 50 && peso <=55){
            return "-55";
       }
       if(peso >= 55 && peso <=60){
            return "-60";
       }
       if(peso >= 60 && peso <=66){
            return "-66";
       }
       if(peso >= 66 && peso <=73){
            return "-73";
       }
       if(peso >= 73 && peso <=79){
            return "+73";
       }
    }
       
  
}

//ELIMINAR PARTICIPANTE EVENTO


var modalEliminarParticipante = `<div class="modal fade text-sm pb-5" id="modal-default-eliminar-participante">
<div class="modal-dialog">
  <div class="modal-content">
   
      <h4 class="modal-title p-3 text-sm" id="mem23"><i class="fas fa-trash-alt"></i> REMOVER PARTICIPANTE </h4>
      
            <div class="modal-body alert alert-warning alert-dismissible m-3 text-sm">
              <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
              <p id="mensagem23">One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
              <a id="dataComfirmMestre" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i> Confirmar</a>
            </div>
          </div>
         
        </div>
       
      </div>`;

$('a[data-confirm-eliminar-particante]').click(function(ev) {
    var href = $(this).attr('href');
    var nome = $(this).attr('data-confirm-eliminar-nome');

    if (!$('modal-default-eliminar-participante').length) {
        $('body').append(modalEliminarParticipante);
    }

    $('#mensagem23').html('Tem certeza que pretende remover da lista ' + '<strong>' + nome + '</strong> ?');

    $('#dataComfirmMestre').attr('href', href);
    $('#modal-default-eliminar-participante').modal({ show: true });
    return false;
});

//verifcar numero de membros cadastrados

var modalVerificarNumeroMembros = `<div class="modal fade text-sm pb-5" id="confirm-modalVerificarNumeroMembros">
<div class="modal-dialog">

  <div class="modal-content">
    <div class="modal-body m-3 pt-5 text-center pb-5" id="bodyMensagemTrocarEstadoAtleta">
        <p> Ainda nao foram cadastrados todos os membros dos Orgaos Sociais, Tem certeza que pretende criar Mesmo assim ?</p>
        <a href="" name="btn-deletar" class="btn btn-danger" id="dataComfirmaTrocar879ASQW"><i class="fas fa-thumbs-up"></i> Sim</a>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
    </div>
  </div>
 
</div>

</div>`;

$("#criarPDF123").on('click', function(event) {

    event.preventDefault();

   
    let href2 = $(this).attr('href');
    let id_mandato_atual = $(this).attr('id_mandato_atual');

    $.ajax({
        type: 'POST',
        data: { id_mandato_atual },
        url: 'http://localhost/KEDA/Orgao_Social/getSomaMembros',
        beforeSend: function(event) {
            $('#criarPDF123').html('<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>');
        },
        success: function(event) {

            $('#criarPDF123').html('<i class="fa fa-file-alt t-plus-1 text-white fa-fw fa-lg"></i> Criar PDF');

            if (event == 27) {

                window.location.href = href2;


            } else {


                if (!$('confirm-modalVerificarNumeroMembros').length) {
                    $('body').append(modalVerificarNumeroMembros);
                }

                $('#confirm-modalVerificarNumeroMembros').modal({ show: true });

                $('#dataComfirmaTrocar879ASQW').on('click', function(event) {
                    event.preventDefault();

                    // window.location.href = href2;

                    $.ajax({
                        type: 'POST',
                        url: href2,
                        success: function() {
                            window.location.href = href2;
                        },
                        beforeSend: function() {
                            $('#bodyMensagemTrocarEstadoAtleta').html('<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>');
                        }
                    })

                })

            }

        }
    })
})

var modalMostrarInfo = `<div class="modal fade text-sm pb-5" id="confirm-modalMostrarInfo">
<div class="modal-dialog">

  <div class="modal-content">
    <div class="modal-body m-3 pt-5 text-center pb-5" id="bodyMensagemTrocarEstadoAtleta">
    <div class="card direct-chat direct-chat-warning">
    <div class="card-header">
      <h3 class="card-title">Direct Chat</h3>

      <div class="card-tools">
        <span title="3 New Messages" class="badge badge-warning">3</span>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
          <i class="fas fa-comments"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <!-- Conversations are loaded here -->
      <div class="direct-chat-messages">
       
        <div class="direct-chat-msg right">
          <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">Sarah Bullock</span>
            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
          </div>
          <!-- /.direct-chat-infos -->
          <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
          <!-- /.direct-chat-img -->
          <div class="direct-chat-text">
            You better believe it!
          </div>
          <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->

        
        
      </div>
     
  </div>
    </div>
  </div>
 
</div>

</div>`;


$('#inf1521').on('click', function(event) {
    event.preventDefault();

    if (!$('confirm-modalMostrarInfo').length) {
        $('body').append(modalMostrarInfo);
    }

    $('#confirm-modalMostrarInfo').modal({ show: true });

})

// $('.checkSub1256').on('click', function(){
    
//     let idmenu = $(this).val();
//     let idsubmenu = $(this).attr('idsubmenu');

//     let dados78 = {
//         idmenu:idmenu,
//         idsubmenu:idsubmenu
//     };

//     alert("dados78");
// })