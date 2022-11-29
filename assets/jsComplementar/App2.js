function previewAtleta() {
    $.post('http://localhost/KEDA/Atleta/trazeTodos', function(retorno) {
        var cont = 0;
        var cont22 = $('#contador123').attr('dataEmisssao');

        var modalVer = `<div class="modal" id="confirm-ver">
                       <div class="modal-dialog" style="">
                           <div class="modal-content" style="width: 900px;display: flex;justify-content: center;left: -199px;">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                           <span style="padding-left: 713px;padding-top: 20px">Data de emissao:${cont22}</span>
                            <img style="width:130px; height:130px; margin-top: 80px; padding-button: 10px;border-radius: 50%;margin-left:50px" src="http://localhost/KEDA/assets/images/12.jpeg">
                            <legend class="text-center" style="width: 870px; margin-left: 14px">FEDERACAO ANGOLANA DE JU-JITSU e DA</legend>
                         <div class="modal-body">
                             <table id="data-table-autofill" class="table table-sm table-striped table-bordered ">
                                       <thead>
                                            <tr>
                                                <th width="1%" class="numeracao">Nº</th>

                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Graduacao</th>
                                                <th class="text-center">Estilo</th>
                                                <th class="text-center">Academia</th>

                                            </tr>
                                        </thead>
                                        <tbody>`;

        $.each(retorno, function(i, retorno1) {

            modalVer += `<tr class="odd gradeX" style="background-color: white">`;

            modalVer += ` <td width="1%" class="numeracao f-s-600 text-inverse">${cont=cont+1}</td>`;

            modalVer += ` <td class="text-center">${retorno1.nome}</td>
                                                            <td class="text-center">${retorno1.graduacao}</td>
                                                            <td class="text-center">${retorno1.estilo}</td>
                                                            <td class="text-center">${retorno1.Academia}</td>`;

            modalVer += `</tr>`;
        });
        modalVer += `</tbody>
                                </table>
                                <span style="margin-left: 743px; padding-button: 30px">Total Geral:</span><span class="pull-right">${cont}</span>
                                <div class="invoice-company text-inverse f-w-600 p-t-30">
                                  <span class="pull-right hidden-print">
                                  <a href="http://localhost/KEDA/Atleta/GerarPDF" class="btn btn-sm btn-white m-b-10 p-l-5" id="gerarPDF"><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Criar PDF</a>
                                  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Imprimir</a>
                                  </span>
                                </div>
                </div>

                </div>
                </div>`;

        if (!$('confirm-ver').length) {
            $('body').append(modalVer);
        }
        //$('#dataComfirmOKOK').attr('href',href);
        $('#confirm-ver').modal({ show: true });

        // $('#gerarPDF').on('click', function(){


        return false;
    }, 'json')
}

$('#Listar900').on('click', function() {

    var href = $(this).attr('href');
    previewAtleta();

})

function previewArbitro() {
  // alert("OLA MUNDO");
    $.post('http://localhost/KEDA/arbitro/trazeTodos', function(retorno) {

        var cont = 0;
        var cont22 = $('#contador123').attr('dataEmisssao');

        var modalVerArbitro = `<div class="modal" id="confirm-ver-Arbitro">
                       <div class="modal-dialog" style="">
                           <div class="modal-content" style="width: 900px;display: flex;justify-content: center;left: -199px;">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

                            <img style="width:130px; height:130px; margin-top: 80px; padding-button: 10px;border-radius: 50%;margin-left:50px" src="http://localhost/KEDA/assets/images/12.jpeg">
                            <legend class="text-center" style="width: 870px; margin-left: 14px">FEDERACAO ANGOLANA DE JU-JITSU e DA</legend>
                            <legend class="text-center" style="width: 870px; margin-left: 14px">LISTA COMPLETA DOS ARBITROS</legend>
                         <div class="modal-body">
                             <table id="data-table-autofill" class="table table-sm table-striped table-bordered ">
                                       <thead style="background-color:#17a2b8;color:white">
                                            <tr>
                                                <th width="1%" class="numeracao">Nº</th>
                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Categoria</th>
                                                <th class="text-center">SubCategoria</th>
                                                <th class="text-center">Provincia</th>
                                            </tr>
                                        </thead>
                                        <tbody>`;

        $.each(retorno, function(i, retorno1) {

            modalVerArbitro += `<tr class="odd gradeX" style="background-color: white">`;

            modalVerArbitro += ` <td width="1%" class="numeracao f-s-600 text-inverse">${cont=cont+1}</td>`;

            modalVerArbitro += ` <td>${retorno1.nome}</td>
                                                            <td class="text-center">${retorno1.nome_categoria_fk}</td>`;
            if(retorno1.nome_subcategoria_fk == "NULL"){
              modalVerArbitro += `<td class="text-center">-----------</td>`;
            }else {
              modalVerArbitro += `<td class="text-center">${retorno1.nome_subcategoria_fk}</td>`;
            }
            modalVerArbitro += `<td class="text-center">${retorno1.provincia}</td>`;

            modalVerArbitro += `</tr>`;
        });
        modalVerArbitro += `</tbody>
                                </table>
                                <span style="margin-left: 743px; padding-button: 30px"><strong>Total Geral : </strong></span><span class="pull-right">${cont}</span>
                                <div class="invoice-company text-inverse f-w-600 p-t-30">
                                  <span class="pull-right hidden-print">
                                  <a href="http://localhost/KEDA/arbitro/GerarPDFListarArbitro" class="btn btn-sm btn-white m-b-10 p-l-5 bg-info" id="gerarPDF"><i class="fa fa-file-pdf t-plus-1 fa-fw fa-lg"></i> Criar PDF</a>
                                  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5 bg-info"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Imprimir</a>
                                  </span>
                                </div>
                </div>

                </div>
                </div>`;

        if (!$('confirm-ver-Arbitro').length) {
            $('body').append(modalVerArbitro);
        }
        //$('#dataComfirmOKOK').attr('href',href);
        $('#confirm-ver-Arbitro').modal({ show: true });

        // $('#gerarPDF').on('click', function(){

        return false;
    }, 'json')
}

//ver lista mestre
function previewMestre() {
  // alert("OLA MUNDO");
    $.post('http://localhost/KEDA/Mestre/trazerTodos', function(retorno) {
        var data = new Date();
        let mes = data.getMonth() < 10 ? "0" + data.getMonth() : data.getMonth();

        var cont = 0;
        var cont22 = $('#contador123').attr('dataEmisssao');

        var modalVerArbitro = `<div class="modal" id="confirm-ver-Arbitro">
                       <div class="modal-dialog" style="">
                           <div class="modal-content" style="width: 900px;display: flex;justify-content: center;left: -199px;">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

                            <img style="width:130px; height:130px; margin-top: 80px; padding-button: 10px;border-radius: 50%;margin-left:50px" src="http://localhost/KEDA/assets/images/12.jpeg">
                            <legend class="text-center" style="width: 870px; margin-left: 14px">FEDERACAO ANGOLANA DE JU-JITSU e DA</legend>
                         <div class="modal-body">
                             <table id="data-table-autofill" class="table table-sm table-striped table-bordered ">
                                       <thead class="bg bg-dark" style="color:white">
                                            <tr>
                                                <th width="1%" class="numeracao">Nº</th>
                                                <th>Nome</th>
                                                <th class="text-center">Data de Nascimento</th>
                                                <th class="text-center">Graduacao</th>
                                                <th class="text-center">Associacao Provincial</th>
                                                <th class="text-center">Estilo</th>
                                                <th class="text-center">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>`;

        $.each(retorno, function(i, retorno1) {

            modalVerArbitro += `<tr class="odd gradeX" style="background-color: white">`;

            modalVerArbitro += ` <td width="1%" class="numeracao f-s-600 text-inverse">${cont=cont+1}</td>`;

            modalVerArbitro += ` <td>${retorno1.nome}</td>
                                 <td class="text-center">${retorno1.data_nascimento}</td>`;
            if(retorno1.graduacao == "0"){
              modalVerArbitro += `<td class="text-center">Cinturao Negro</td>`;
            }else {
              modalVerArbitro += `<td class="text-center">${retorno1.graduacao}º DAN</td>`;
            }
            modalVerArbitro += `<td class="text-center">${retorno1.descricao_associacao}</td>`;
            modalVerArbitro += `<td class="text-center">${retorno1.nome_estilo}</td>`;
            modalVerArbitro += `<td class="text-center">${retorno1.statu_mestre}</td>`;

            modalVerArbitro += `</tr>`;
        });
        modalVerArbitro += `</tbody>
                                </table>
                                <span style="margin-left: 743px; padding-button: 30px"><strong>Total Geral : </strong></span><span class="pull-right">${cont}</span>
                                <div class="invoice-company text-inverse f-w-600 p-t-30">
                                  <span class="pull-right hidden-print">
                                  <a href="http://localhost/KEDA/arbitro/GerarPDFListarArbitro" class="btn btn-sm btn-white m-b-10 p-l-5 bg-info" id="gerarPDF"><i class="fa fa-file-pdf t-plus-1 fa-fw fa-lg"></i> Criar PDF</a>
                                  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5 bg-info"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Imprimir</a>
                                  </span>
                                </div>
                </div>

                </div>
                </div>`;

        if (!$('confirm-ver-Arbitro').length) {
            $('body').append(modalVerArbitro);
        }
        //$('#dataComfirmOKOK').attr('href',href);
        $('#confirm-ver-Arbitro').modal({ show: true });

        // $('#gerarPDF').on('click', function(){

        return false;
    }, 'json')
}

$('#Listar900Arbitro').on('click', function() {

    var href = $(this).attr('href');
    previewArbitro();

})

$('#Listar900Mestre').on('click', function() {

    var href = $(this).attr('href');
    previewMestre();

})




var selected = [];

$('#botaoEdit879').on('click', function() {

    var nome = $(this).text();

    if (nome === ' Editar') {

        var checkboxs = $('.radio');
        var isChecked = false;
        $.each(checkboxs, function(i, checkbox) {
            if ($(checkbox).is(":checked")) {
                isChecked = true;
                return false;
            }
        })

        if (isChecked) {
            $('#botaoApagar').css('display', 'none')
        } else {
            $('#botaoApagar').css('display', 'block')
        }

        $('.numero1').removeAttr('hidden');
        $('.numeracao').addClass('hide');
        //$(this).html('Cancelar');

        $('#botaoEdit879').html('<i class="fa fa-ban"></i> Cancelar').css('border', '1px solid red');

    } else {
        $('.numero1').attr('hidden', 'hidden');
        $('.numeracao').removeClass('hide');
        //$(this).html('Editar');
        $('#botaoApagar').css('display', 'none')

        $('#botaoEdit879').html('<i class="fa fa-edit"></i> Editar').css('border', '1px solid #348fe2');
        selected = [];

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);

        })
        contador();

        //$('#icone123').attr('i[class]',icones);
    }

    //$('#botaoApagar').removeClass('hide');

});


var isChecked = false;
var cont123 = 0;
var cont897 = 0;

$('#radio1').on('click', function() {

    if ($(this).is(":checked")) {
        isChecked = true;

        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').attr('checked','checked');
            selected.push($(checkbox).val());
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', true);

            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

            $('label[id=label555]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        })

        contador();
    } else {
        cont897 = 0;

        isChecked = false;
        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').removeAttr('checked');
            selected.splice(selected.indexOf($(checkbox).val()), 1);
            selected = [];
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);
            $('label[id=label55]').css('background', '#dee2e6');
            $('label[id=label555]').css('background', '#dee2e6');

        })

        contador();
    }
})

$('.radio').on('click', function(event) {


    if (!$(this).is(":checked")) {

        $('label[for=' + $(this).val() + ']').css('background', '#dee2e6');

        selected.splice(selected.indexOf($(this).val()), 1);
        cont897 = cont897 - 1;

        contador();
    } else {
        $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        $('label[for=' + $(this).val() + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
        cont897 = cont897 + 1;
        selected.push($(this).val());

        contador();
    }

    var checkboxs = $('.radio');

    var isChecked = false;

    $.each(checkboxs, function(i, checkbox) {

        if ($(checkbox).is(":checked")) {
            isChecked = true;
            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
            return false;
        } else {
            $('label[id=label55]').css('background', '#dee2e6');
        }
    })


    if (isChecked) {
        $('#radio1').prop('checked', true);
        $('#botaoApagar').removeClass('hide');
    } else {
        $('#radio1').prop('checked', false);
        $('#botaoApagar').addClass('hide');
    }


});

function contador() {

    cont123 = selected.length;

    cont897 = cont123;

    if (cont897 === 0) {
        $('#contador123').html('').css('text-color', 'red');
    } else {
        if (cont897 === 1) {
            $('#contador123').html(cont897 + " Registro Selecionado");
        } else {
            $('#contador123').html(cont897 + " Registros Selecionados");
        }
    }
}

//modal editar lista mestre---------------------------------------------------------------------------------------------------------------------------------------------------------------
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucessoArbitro = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567-arbitro">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os elementos selecionados foram elimidados.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------


var modalEliminarArbitro12 = `<div class="modal fade text-sm pb-5" id="confirm-delete-Arbitro12">
    <div class="modal-dialog">
      <div class="modal-content">

          <h4 class="modal-title p-3 text-sm"><i class="fas fa-trash-alt"></i> ELIMINAR MESTRE</h4>

                <div class="modal-body alert alert-danger m-3">
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                  <p class="text-center"><strong id="contador"></strong> Atletas Selecionados</p>
                  <p class="text-center"><strong> Tem certeza que pretende eliminar este(s) Mestre ? </strong></p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                  <a href="#" id="dataComfirmOKok" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
                </div>
              </div>

            </div>

          </div>`;

$('#botaoApagarArbitroList').on('click', function() {

    if (!$('confirm-delete-Arbitro12').length) {
        $('body').append(modalEliminarArbitro12);
    }

    $('#dataComfirmOKok').on('click', function() {
        var dado = {
            id: selectedMestre
        }

        // $.post('http://localhost/KEDA/mestre/eliminarVarios', dado, function(retorno) {
        //     console.log(retorno);F
        //     window.location.href = 'http://localhost/KEDA/mestre/listar';
        // });

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/arbitro/eliminarVarios',
            beforeSend: function(event) {
                $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
            },
            success: function(event) {

                $('#confirm-delete-Arbitro12').modal('hide');

                if (!$('modal-default-sucesso567').length) {
                    $('body').append(modalSucesso);
                }

                $('#modal-default-sucesso567').modal({ show: true });

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/arbitro/listar';
                }, 2000);

            }
        })
    })

    $('#contador').html(cont897);

    $('#confirm-delete-Arbitro12').modal({ show: true });
    return false;


});
//modal editar lista mestre---------------------------------------------------------------------------------------------------------------------------------------------------------------

var selectedMestre = [];

$('#botaoEditArbitro222').on('click', function() {

    var nome = $(this).text();

    if (nome === ' Editar') {

        var checkboxs = $('.radio');
        var isChecked = false;
        $.each(checkboxs, function(i, checkbox) {
            if ($(checkbox).is(":checked")) {
                isChecked = true;
                return false;
            }
        })

        if (isChecked) {
            $('#botaoApagarArbitroList').css('display', 'none')
        } else {
            $('#botaoApagarArbitroList').css('display', 'block')
        }

        $('.numeroMestre111').removeAttr('hidden');
        $('.numeracao').addClass('hide');
        //$(this).html('Cancelar');

        $('#botaoEditArbitro222').html('<i class="fa fa-ban"></i> Cancelar').css('border', '1px solid red');

    } else {
        $('.numeroMestre111').attr('hidden', 'hidden');
        $('.numeracao').removeClass('hide');
        //$(this).html('Editar');
        $('#botaoApagarArbitroList').css('display', 'none')

        $('#botaoEditArbitro222').html('<i class="fa fa-edit"></i> Editar').css('border', '1px solid #348fe2');
        selectedMestre = [];

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);

        })
        contador();

        //$('#icone123').attr('i[class]',icones);
    }

    //$('#botaoApagar').removeClass('hide');

});


var isChecked = false;
var cont123 = 0;
var cont897 = 0;

$('#radio1').on('click', function() {
    if ($(this).is(":checked")) {
        isChecked = true;

        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').attr('checked','checked');
            selectedMestre.push($(checkbox).val());
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', true);
            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

            $('label[id=label555]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        })

        contador();
    } else {
        cont897 = 0;

        isChecked = false;
        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').removeAttr('checked');
            selectedMestre.splice(selectedMestre.indexOf($(checkbox).val()), 1);
            selectedMestre = [];
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);
            $('label[id=label55]').css('background', '#dee2e6');
            $('label[id=label555]').css('background', '#dee2e6');

        })

        contador();
    }
})

$('.radio').on('click', function(event) {
    // var teste = $(this);

    if (!$(this).is(":checked")) {

        $('label[for=' + $(this).val() + ']').css('background', '#dee2e6');

        selectedMestre.splice(selectedMestre.indexOf($(this).val()), 1);
        cont897 = cont897 - 1;
        contador();
    } else {
        $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        $('label[for=' + $(this).val() + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
        cont897 = cont897 + 1;
        selectedMestre.push($(this).val());

        contador();
    }

    var checkboxs = $('.radio');

    var isChecked = false;

    $.each(checkboxs, function(i, checkbox) {

        if ($(checkbox).is(":checked")) {
            isChecked = true;
            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
            return false;
        } else {
            $('label[id=label55]').css('background', '#dee2e6');
        }
    })


    if (isChecked) {
        $('#radio1').prop('checked', true);
        $('#botaoApagar').removeClass('hide');
    } else {
        $('#radio1').prop('checked', false);
        $('#botaoApagar').addClass('hide');
    }


});

function contador() {

    cont123 = selectedMestre.length;

    cont897 = cont123;

    if (cont897 === 0) {
        $('#contador123').html('').css('text-color', 'red');
    } else {
        if (cont897 === 1) {
            $('#contador123').html(cont897 + " Registro Selecionado");
        } else {
            $('#contador123').html(cont897 + " Registros Selecionados");
        }
    }
}
//modal eliminar varios mestres...........................................................................................................................................................

//modal editar lista Academia---------------------------------------------------------------------------------------------------------------------------------------------------------------
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucessoArbitro = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567-arbitro">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os elementos selecionados foram elimidados.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------


var modalEliminarAcademia33 = `<div class="modal fade text-sm pb-5" id="confirm-delete-Academia33">
    <div class="modal-dialog">
      <div class="modal-content">

          <h4 class="modal-title p-3 text-sm"><i class="fas fa-trash-alt"></i> ELIMINAR ACADEMIA</h4>

                <div class="modal-body alert alert-danger m-3">
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                  <p class="text-center"><strong id="contador"></strong> Atletas Selecionados</p>
                  <p class="text-center"><strong> Tem certeza que pretende eliminar este(s) Academia ? </strong></p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                  <a href="#" id="dataComfirmOKok" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
                </div>
              </div>

            </div>

          </div>`;

$('#botaoApagarAcademiaList').on('click', function() {

    if (!$('confirm-delete-Academia33').length) {
        $('body').append(modalEliminarAcademia33);
    }

    $('#dataComfirmOKok').on('click', function() {
        var dado = {
            id: selectedMestre
        }

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/academia/eliminarVarios',
            beforeSend: function(event) {
                $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
            },
            success: function(event) {

                $('#confirm-delete-Academia33').modal('hide');

                if (!$('modal-default-sucesso567').length) {
                    $('body').append(modalSucesso);
                }

                $('#modal-default-sucesso567').modal({ show: true });

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/academia/listar_Academia';
                }, 2000);

            }
        })
    })

    $('#contador').html(cont897);

    $('#confirm-delete-Academia33').modal({ show: true });
    return false;


});
var selectedAcademia = [];

$('#botaoEditAcademia333').on('click', function() {

    var nome = $(this).text();

    if (nome === ' Editar') {

        var checkboxs = $('.radio');
        var isChecked = false;
        $.each(checkboxs, function(i, checkbox) {
            if ($(checkbox).is(":checked")) {
                isChecked = true;
                return false;
            }
        })

        if (isChecked) {
            $('#botaoApagarAcademiaList').css('display', 'none')
        } else {
            $('#botaoApagarAcademiaList').css('display', 'block')
        }

        $('.numeroAcademia333').removeAttr('hidden');
        $('.numeracao').addClass('hide');
        //$(this).html('Cancelar');

        $('#botaoEditAcademia333').html('<i class="fa fa-ban"></i> Cancelar').css('border', '1px solid red');

    } else {
        $('.numeroAcademia333').attr('hidden', 'hidden');
        $('.numeracao').removeClass('hide');
        //$(this).html('Editar');
        $('#botaoApagarAcademiaList').css('display', 'none')

        $('#botaoEditAcademia333').html('<i class="fa fa-edit"></i> Editar').css('border', '1px solid #348fe2');
        selectedAcademia = [];

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);

        })
        contador();

        //$('#icone123').attr('i[class]',icones);
    }

    //$('#botaoApagar').removeClass('hide');

});


var isChecked = false;
var cont123 = 0;
var cont897 = 0;

$('#radio1').on('click', function() {
    if ($(this).is(":checked")) {
        isChecked = true;

        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').attr('checked','checked');
            selectedAcademia.push($(checkbox).val());
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', true);
            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

            $('label[id=label555]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        })

        contador();
    } else {
        cont897 = 0;

        isChecked = false;
        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').removeAttr('checked');
            selectedAcademia.splice(selectedAcademia.indexOf($(checkbox).val()), 1);
            selectedAcademia = [];
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);
            $('label[id=label55]').css('background', '#dee2e6');
            $('label[id=label555]').css('background', '#dee2e6');

        })

        contador();
    }
})

$('.radio').on('click', function(event) {
    // var teste = $(this);

    if (!$(this).is(":checked")) {

        $('label[for=' + $(this).val() + ']').css('background', '#dee2e6');

        selectedAcademia.splice(selectedAcademia.indexOf($(this).val()), 1);
        cont897 = cont897 - 1;
        contador();
    } else {
        $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        $('label[for=' + $(this).val() + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
        cont897 = cont897 + 1;
        selectedAcademia.push($(this).val());

        contador();
    }

    var checkboxs = $('.radio');

    var isChecked = false;

    $.each(checkboxs, function(i, checkbox) {

        if ($(checkbox).is(":checked")) {
            isChecked = true;
            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
            return false;
        } else {
            $('label[id=label55]').css('background', '#dee2e6');
        }
    })


    if (isChecked) {
        $('#radio1').prop('checked', true);
        $('#botaoApagar').removeClass('hide');
    } else {
        $('#radio1').prop('checked', false);
        $('#botaoApagar').addClass('hide');
    }


});

function contador() {

    cont123 = selectedAcademia.length;

    cont897 = cont123;

    if (cont897 === 0) {
        $('#contador123').html('').css('text-color', 'red');
    } else {
        if (cont897 === 1) {
            $('#contador123').html(cont897 + " Registro Selecionado");
        } else {
            $('#contador123').html(cont897 + " Registros Selecionados");
        }
    }
}
//modal eliminar varios Academia...........................................................................................................................................................
//mudar estado academia....................................................................................................................................................................
var modalTrocarEstadoAcademia = `<div class="modal fade text-sm pb-5" id="modal-default-trocar-estado-academia">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> TROCAR ESTADO ACADEMIA</span></h4>

            <div class="modal-body m-3 pt-2 text-center pb-5" id="bodyMensagem89">
                <p> Tem certeza que pretende mudar o estado para <strong id="oi"></strong>?</p>
                <a href="#" name="btn-deletar" class="btn btn-danger" id="dataComfirmaTrocar879"></a>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

        </div>

      </div>`;

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucessoAcademia = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567-academia">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------

$('a[data-Mudar-academia]').on('click', function() {

        let estado = $(this).attr('data-Mudar-academia');
        let id_academia = $(this).attr('data-mudar-academia-id');

        if (!$('modal-default-trocar-estado-academia').length) {
            $('body').append(modalTrocarEstadoAcademia);
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
                id_academia: id_academia
            };

            $.ajax({
                type: 'post',
                data: dado,
                url: 'http://localhost/KEDA/academia/mudarEstado',
                beforeSend: function(retorno) {
                    $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
                },
                success: function(retorno) {

                    // $("#bodyMensagem89").html("<div class='alert alert-success alert-dismissible'><h6><i class='icon fas fa-check'></i> Sucesso. O estado foi trocado para <strong>" + retorno + "</strong></h6></div>");

                    $('#modal-default-trocar-estado-academia').modal('hide');

                    if (!$('modal-default-sucesso567-academia').length) {
                        $('body').append(modalSucessoAcademia);
                    }

                    $('#modal-default-sucesso567-academia').modal({ show: true });

                    setTimeout(function() {
                        window.location.href = 'http://localhost/KEDA/academia/listar_Academia';
                    }, 2000);

                }
            })

            // $('#modal-default-trocar-estado').modal('hide');

            // return false;

        })

        $('#modal-default-trocar-estado-academia').modal({ show: true });
        return false;
    })
    //mudar estado academia....................................................................................................................................................................


//modal editar lista Arbitro---------------------------------------------------------------------------------------------------------------------------------------------------------------

var selectedArbitro = [];

$('#botaoEditMestre111').on('click', function() {

    var nome = $(this).text();

    if (nome === ' Editar') {

        var checkboxs = $('.radio');
        var isChecked = false;
        $.each(checkboxs, function(i, checkbox) {
            if ($(checkbox).is(":checked")) {
                isChecked = true;
                return false;
            }
        })

        if (isChecked) {
            $('#botaoApagarMestreLista').css('display', 'none')
        } else {
            $('#botaoApagarMestreLista').css('display', 'block')
        }

        $('.numeroMestre111').removeAttr('hidden');
        $('.numeracao').addClass('hide');
        //$(this).html('Cancelar');

        $('#botaoEditMestre111').html('<i class="fa fa-ban"></i> Cancelar').css('border', '1px solid red');

    } else {
        $('.numeroMestre111').attr('hidden', 'hidden');
        $('.numeracao').removeClass('hide');
        //$(this).html('Editar');
        $('#botaoApagarMestreLista').css('display', 'none')

        $('#botaoEditMestre111').html('<i class="fa fa-edit"></i> Editar').css('border', '1px solid #348fe2');
        selectedArbitro = [];

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);

        })
        contador();

        //$('#icone123').attr('i[class]',icones);
    }

    //$('#botaoApagar').removeClass('hide');

});


var isChecked = false;
var cont123 = 0;
var cont897 = 0;

$('#radio1').on('click', function() {
    if ($(this).is(":checked")) {
        isChecked = true;

        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').attr('checked','checked');
            selectedArbitro.push($(checkbox).val());
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', true);
            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

            $('label[id=label555]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        })

        contador();
    } else {
        cont897 = 0;

        isChecked = false;
        if (isChecked) {
            $('#botaoApagar').removeClass('hide');
        } else {
            $('#botaoApagar').addClass('hide');
        }

        var checkboxs = $('.radio');

        $.each(checkboxs, function(i, checkbox) {
            //$('.radio').removeAttr('checked');
            selectedArbitro.splice(selectedArbitro.indexOf($(checkbox).val()), 1);
            selectedArbitro = [];
        })

        $.each(checkboxs, function(i, checkbox) {
            $('input:checkbox').prop('checked', false);
            $('label[id=label55]').css('background', '#dee2e6');
            $('label[id=label555]').css('background', '#dee2e6');

        })

        contador();
    }
})

$('.radio').on('click', function(event) {
    // var teste = $(this);

    if (!$(this).is(":checked")) {

        $('label[for=' + $(this).val() + ']').css('background', '#dee2e6');

        selectedArbitro.splice(selectedArbitro.indexOf($(this).val()), 1);
        cont897 = cont897 - 1;
        contador();
    } else {
        $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/SIS_KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

        $('label[for=' + $(this).val() + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
        cont897 = cont897 + 1;
        selectedArbitro.push($(this).val());

        contador();
    }

    var checkboxs = $('.radio');

    var isChecked = false;

    $.each(checkboxs, function(i, checkbox) {

        if ($(checkbox).is(":checked")) {
            isChecked = true;
            $('label[id=label55]').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
            return false;
        } else {
            $('label[id=label55]').css('background', '#dee2e6');
        }
    })


    if (isChecked) {
        $('#radio1').prop('checked', true);
        $('#botaoApagar').removeClass('hide');
    } else {
        $('#radio1').prop('checked', false);
        $('#botaoApagar').addClass('hide');
    }


});

function contador() {

    cont123 = selectedArbitro.length;

    cont897 = cont123;

    if (cont897 === 0) {
        $('#contador123').html('').css('text-color', 'red');
    } else {
        if (cont897 === 1) {
            $('#contador123').html(cont897 + " Registro Selecionado");
        } else {
            $('#contador123').html(cont897 + " Registros Selecionados");
        }
    }
}
//.......................................................................................................................................................................................

//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------
var modalSucesso = `<div class="modal fade text-sm pb-5" id="modal-default-sucesso567">
      <div class="modal-dialog">
            <div class="modal-content alert alert-success alert-dismissible p-4" style="background:#00a65a;margin-top:160px">
                <h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os elementos selecionados foram elimidados.</h6>
            </div>
      </div>
    </div>`;
//MODAL DE MENSAGEM DE SUCESSO------------------------------------------------------------------------------------------------------------------------------------------------------------


var modalEliminarMestre12 = `<div class="modal fade text-sm pb-5" id="confirm-delete-Mestre12">
    <div class="modal-dialog">
      <div class="modal-content">

          <h4 class="modal-title p-3 text-sm"><i class="fas fa-trash-alt"></i> ELIMINAR MESTRE</h4>

                <div class="modal-body alert alert-danger m-3">
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                  <p class="text-center"><strong id="contador"></strong> Atletas Selecionados</p>
                  <p class="text-center"><strong> Tem certeza que pretende eliminar este(s) Mestre ? </strong></p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                  <a href="#" id="dataComfirmOKok" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
                </div>
              </div>

            </div>

          </div>`;

$('#botaoApagarMestreLista').on('click', function() {

    if (!$('confirm-delete-Mestre12').length) {
        $('body').append(modalEliminarMestre12);
    }

    $('#dataComfirmOKok').on('click', function() {
        var dado = {
            id: selectedMestre
        }

        // $.post('http://localhost/KEDA/mestre/eliminarVarios', dado, function(retorno) {
        //     console.log(retorno);F
        //     window.location.href = 'http://localhost/KEDA/mestre/listar';
        // });

        $.ajax({
            type: 'post',
            data: dado,
            url: 'http://localhost/KEDA/mestre/eliminarVarios',
            beforeSend: function(event) {
                $('#dataComfirmaTrocar879').html('<i class="fas fa-1x fa-sync-alt fa-spin"></i> Alterando....');
            },
            success: function(event) {

                $('#confirm-delete-Mestre12').modal('hide');

                if (!$('modal-default-sucesso567').length) {
                    $('body').append(modalSucesso);
                }

                $('#modal-default-sucesso567').modal({ show: true });

                setTimeout(function() {
                    window.location.href = 'http://localhost/KEDA/mestre/listar';
                }, 2000);

            }
        })
    })

    $('#contador').html(cont897);

    $('#confirm-delete-Mestre12').modal({ show: true });
    return false;


});
//modal editar lista mestre---------------------------------------------------------------------------------------------------------------------------------------------------------------

var modalEliminarAtleta12 = '<div class="modal" id="confirm-delete-atleta1">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header">' +
    '<h5 class="modal-title"><i class="fa fa-trash"></i> ELIMINAR ATLETA </h5>' +
    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>' +
    '</div>' +
    '<div class="modal-body">' +
    '<div class="alert alert-danger m-b-0">' +
    '<img src=""/>' +
    '<p class="text-center"><strong id="contador"></strong> Atletas Selecionados</p>' +
    '<p class="text-center"><strong> Tem certeza que pretende eliminar este Atleta ? </strong></p>' +
    '</div>' +
    '</div>' +
    '<div class="modal-footer">' +
    '<a href="javascript:;" name="btn-cancelar" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Cancelar </a>' +
    '<button name="btn-deletar" class="btn btn-danger" id="dataComfirmOKok"><i class="fa fa-thumbs-up"></i> Confirmar </button>' +
    '</form>' +
    '</div>' +
    '</div>' +
    '</div>';

var modalEliminarAtleta12 = `<div class="modal fade text-sm pb-5" id="confirm-delete-atleta1">
    <div class="modal-dialog">
      <div class="modal-content">

          <h4 class="modal-title p-3 text-sm"><i class="fas fa-trash-alt"></i> ELIMINAR ATLETA</h4>

                <div class="modal-body alert alert-danger m-3">
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                  <p class="text-center"><strong id="contador"></strong> Atletas Selecionados</p>
                  <p class="text-center"><strong> Tem certeza que pretende eliminar este(s) Atleta ? </strong></p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                  <a href="#" id="dataComfirmOKok" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</a>
                </div>
              </div>

            </div>

          </div>`;

$('#botaoApagar').on('click', function() {

    if (!$('confirm-delete-atleta1').length) {
        $('body').append(modalEliminarAtleta12);
    }

    $('#dataComfirmOKok').on('click', function() {
        var dado = {
            id: selected
        }

        $.post('http://localhost/KEDA/Atleta/eliminarVarios', dado, function(retorno) {
            console.log(retorno);
            window.location.href = 'http://localhost/KEDA/Atleta/listar';
        });
    })

    $('#contador').html(cont897);

    $('#confirm-delete-atleta1').modal({ show: true });
    return false;


});



//-------------------------------------------------------MODAL ADICIONAR ORGAO SOCIAL------------------------------------------------------------------------------------------------------
var modalorgaosocial = `<div class="modal fade text-sm pb-5" id="modal-default-orgao">
        <div class="modal-dialog">
          <div class="modal-content">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> ADICIONAR MANDATO</span></h4>
            <form method="post" id="insertOrgao">
            <div id="bodyMensagem89" class="modal-body m-3 pt-2 pb-5">
                <div class="row">
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6">
                        <label class="exampleInputEmail1">Inicio de Mandato</label>
                        <input type="text" name="data1" class="form-control " placeholder="04/1/2014" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                        <div class="form-group col-sm-6">
                        <label class="exampleInputEmail1">Fim de Mandato</label>
                        <input type="text" name="data2" class="form-control " placeholder="04/1/2014" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-danger" id="dataComfirmaTrocar129">CRIAR</button>
                <button type="submit" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
                </div>
            </div>
            </form>
          </div>

        </div>
      </div>`;


$('#orgaoSocialModal2343').on('click', function() {

    if (!$('modal-default-orgao').length) {
        $('body').append(modalorgaosocial);
    }

    $('#modal-default-orgao').modal({ show: true });

    $('#insertOrgao').on('submit', function(event) {

        event.preventDefault();

        let dados = $("#insertOrgao").serialize();

        $.ajax({
            type: 'post',
            data: dados,
            url: 'http://localhost/KEDA/Orgao_Social/adicionarMandato',
            beforeSend: function(event) {

            },
            success: function(event) {
                window.location.href = 'http://localhost/KEDA/Orgao_Social/listarMandato';
            }

        })
    })

    return false;

})


var modalAdicionarFotoDirigente = `<div class="modal fade text-sm" id="modal-default-adicionar-foto" style="display:none">
        <div class="modal-dialog">
          <div class="modal-content" style="left: -14px">

              <h4 class="modal-title p-3 text-sm"><i class="fas fa-images text-red"></i> Fotografia</h4>

            <div class="modal-body m-1 pt-0 text-center">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoDirigente" style="cursor: pointer;font-weight: 500;">
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

var modalOrgao = `<div class="modal fade text-sm pb-5 hide" id="modal-default-orgao55" style="dislay:block">
        <div class="modal-dialog">

          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm text-sm-foto1231"><i class="fas fa-user-plus"></i> ADICIONAR MEMBROS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <h4 class="modal-title text-center" id="nomeOrgao57"><i class="fas fa-user-alt"></i></h4>
            <form method="post" id="insertOrgaoMembro5678" enctype="multipart/form-data">
            <div class="modal-body m-1 pt-0 text-center" style="display:none" id="bodyMensagem1763">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoDirigente" style="cursor: pointer;font-weight: 500;">
              <i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label>
              </li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              <a href="javascript:;" class="btn btn-default mt-3" id="cancelarFotoAtleta345345" style="margin-left:-358px"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            <div id="bodyMensagem891" class="modal-body m-2 pt-2 pb-3" style="display:block">
                 <div class="col-md-12" id="conteudoCarregar">
                            <input  type="hidden" name="orgao" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="" id="nomeOrgao90">
                            <input type="hidden" name="mandato" value="" id="anoMandato">
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label class="text-nowrap">Nome Completo</label>
                                    <input name="nome_completo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Telefone</label>
                                    <input name="telefone" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm">
                                </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Cargo</label>
                                    <select class="form-control form-control-sm" name="cargo" id="cargo">
                                            <option value="<?= $n->id_cargos?>"><?= $n->nome_cargo?></option>
                                    </select>
                            </div>
                            </div>
                            <div class="col-md-4" style="position:relative;left:50%;transform: translate(-50%);">
                                <div class="form-group">
                                    <img id="mudarFotoMembroOrgao" title="Click para adicionar foto"src="http://localhost/KEDA/assets/dist/img/avatar.png" alt="Foto" width="110" height="110" class="img-thumbnail rounded mx-auto d-block"/><br>
                                    <div style="display:none">
                                        <input type="file" name="arquivoFotoDirigente" id="arquivoFotoDirigente" class="rounded mx-auto d-block form-control hide" onchange="PreviewImagemMembro23()">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" style="padding-right: 0.5px">
                                <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                            </div>
                        </div>
                        </div>
            </div>
            </form>
          </div>


        </div>
      </div>`;

function PreviewImagemMembro23() {
    //if(teste55 == 0){
    $('.text-sm-foto1231').html('<i class="fas fa-user-plus"></i> ADICIONAR MEMBROS');
    $('#bodyMensagem1763').slideToggle();
    $('#bodyMensagem891').slideToggle();

    var imagem = document.querySelector('input[name=arquivoFotoDirigente]').files[0];

    var preview = $('#mudarFotoMembroOrgao')[0];

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


var modalOrgaoCompleto = `<div class="modal fade text-sm pb-5 hide" id="modal-default-completo">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <form method="post" id="insertOrgaoMembro112">
            <div id="bodyMensagem89" class="modal-body m-2 pt-2 text-center pb-3">
                <div class="col-md-12" id="conteudoCarregar">
                <h4 class="media-heading" id="nomeOrgao778"></h4>
                <h5 class="media-heading"> Todos os membros ja foram adicionado </h5><h5 id="orgaoDescricao"></h5>
                click em <a class="btn btn-primary btn-sm" href="#" disabled><i class="fas fa-eye"></i> Ver Detalhe</a> para ver os Membros
                </div>
            </div>
          </form>
        </div>

      </div>
    </div>`;

$(document).ready(function() {
    let ano_mandato = $(this).attr('data-id_mandato');

    let i = 0;
    for (i = 1; i <= 7; i++) {
        let id_orgao = i;

        $.ajax({
            type: 'post',
            data: { id_orgao },
            url: 'http://localhost/KEDA/Orgao_Social/controlarStatus',
            beforeSend: function() {
                $('span[id_orgaoSocial=' + id_orgao + ']').html('Carregando...');
            },
            success: function(event) {

                if (event == 1) {
                    $('span[id_orgaoSocial=' + id_orgao + ']').html('Completo');
                    $('span[id_orgaoSocial=' + id_orgao + ']').attr('class', 'badge badge-success');
                } else {
                    $('span[id_orgaoSocial=' + id_orgao + ']').html('Incompleto');
                    $('span[id_orgaoSocial=' + id_orgao + ']').attr('class', 'badge badge-danger');
                }
            }
        })
    }
})


$('a[data-id_orgao]').on('click', function() {
    let id_orgao = $(this).attr('data-id_orgao');
    let descricao = $(this).attr('data-nome-orgao');
    let ano_mandato = $(this).attr('data-id_mandato');

    if (!$('modal-default-orgao55').length) {
        $('body').append(modalOrgao);
    }

    $('#mudarFotoMembroOrgao').on('click', function() {
        $('.text-sm-foto1231').html('<i class="fas fa-images text-red"></i> Fotografia');
        $('#bodyMensagem891').slideToggle();
        $('#bodyMensagem1763').slideToggle();

    })

    $('#cancelarFotoAtleta345345').on('click', function() {
        $('.text-sm-foto1231').html('<i class="fas fa-user-plus"></i> ADICIONAR MEMBROS');
        $('#bodyMensagem1763').slideToggle();
        $('#bodyMensagem891').slideToggle();

    })

    let dado4 = {
        ano_mandato: ano_mandato,
        id_orgao: id_orgao
    }

    $.ajax({
        type: 'post',
        data: dado4,
        url: 'http://localhost/KEDA/Orgao_Social/pergarCargos',
        beforeSend: function() {
            $('#cargo').html('Carregando...');
        },
        success: function(event) {
            if (event === null || event.length === 0) {
                if (!$('modal-default-completo').length) {
                    $('body').append(modalOrgaoCompleto);
                }

                $('#badge-success55').html('Completo');
                $('#nomeOrgao778').html(descricao);
                $('#modal-default-completo').modal({ show: true });

            } else {

                $('.badge-success55').html('Incompleto');
                $('#modal-default-orgao55').modal({ show: true });
                $('#cargo').html(event);
            }
        }
    })

    $('#nomeOrgao90').attr('value', id_orgao);
    $('#anoMandato').attr('value', ano_mandato);

    $('#roe23').html(id_orgao);
    $('#nomeOrgao57').html(descricao);
    $('#idimagem9090').attr('src', 'http://localhost/KEDA/assets/dist/img/avatar.png');

    $('#insertOrgaoMembro5678').on('submit', function(event) {
        event.preventDefault();

        // let dados = $(this).serialize();

        // console.log(dados);

        $.ajax({
            type: 'post',
            data: new FormData(this),
            url: 'http://localhost/KEDA/Orgao_Social/addMembro',
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            beforeSend: function() {
                $('#conteudoCarregar').html('carregando....');
            },
            success: function(event) {
                $('#conteudoCarregar').html(event);
                window.location.href = 'http://localhost/KEDA/Orgao_Social/listarOrgaoSocial/' + ano_mandato;
            }
        })
    });

    return false;
})


var modalOrgaovazio = `<div class="modal fade text-sm pb-5 hide" id="modal-default-vazio">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title p-0 text-sm"><i class="fa fa-eye"></i> VER MEMBROS</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
            <form method="post" id="insertOrgaoMembro">
            <div id="bodyMensagem89" class="modal-body m-2 pt-2 text-center pb-3">
                 <div class="col-md-12" id="conteudoCarregar">
                 <i class="fa fa-database fa-6x" style="padding-bottom:12px"></i>
                 <h5 class="media-heading"> Nenhum Membro foi adicionado a </h5><h5 id="orgaoDescricao"></h5>
                 click em <a class="btn btn-danger btn-sm" href="#" disabled><i class="fas fa-plus"></i> adicionar</a> para adicionar
                </div>
            </div>
            </form>
          </div>

        </div>
      </div>`;


$('a[data-id_orgao2]').on('click', function() {


    let id_orgao = $(this).attr('data-id_orgao2');
    let ano_mandato = $(this).attr('data-id_mandato2');
    let descricaoOrgao = $(this).attr('data-nome-orgao2');

    let cont = $(this).attr('data-id_orgao2');

    let dados = {
        id_orgao: id_orgao,
        ano_mandato: ano_mandato
    }

    if (!$('modal-default-vazio').length) {
        $('body').append(modalOrgaovazio);
    }

    $.ajax({
        type: 'post',
        data: dados,
        url: 'http://localhost/KEDA/Orgao_Social/verMembroOrgaoVazio',
        beforeSend: function(event) {
            $('a[data-id_orgao2=' + cont + ']').html('Carregando...');
        },
        success: function(event) {
            if (event == 1) {
                $('#orgaoDescricao').html(descricaoOrgao);
                $('#modal-default-vazio').modal({ show: true })
            } else {
                window.location.href = 'http://localhost/KEDA/Orgao_Social/verMembroOrgao/' + ano_mandato + '/' + id_orgao;
            }

        }
    })



    $('.close').on('click', function() {
        $('a[data-id_orgao2=' + cont + ']').html('<i class="fas fa-eye"></i> Ver Detalhe');
    })

})


var modalOrgaoMembroEditar = `<div class="modal fade text-sm pb-5 hide" id="modal-default-orgao-Membro-Editar">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title text-sm text-sm-foto2231"><i class="fas fa-user-edit"></i> EDITAR MEMBRO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <h4 class="modal-title text-center" id="nomeOrgao57"></i></h4>
            <div class="modal-body m-1 pt-0 text-center" style="display:none" id="bodyMensagem27763">
              <ul class="list-group list-group-flush">
              <li class="list-group-item text-center" id="oioi" style="border-bottom-width:0;bottom: -29px">
                <label style="cursor: pointer;font-weight: 500;" onclick="verBem();">
                <i class="fa fa-camera fa-lg m-r-5 "></i> Tirar Fotografia </label>
              </li>
              <li class="list-group-item text-center" style="border-bottom-width:0;bottom: -15px">
              <label for="arquivoFotoDirigente" style="cursor: pointer;font-weight: 500;">
              <i class="fa fa-camera fa-lg m-r-5"></i> Escolher Fotografia </label>
              </li>
              <li class="list-group-item text-center hide"><label id="ApagarFoto" style="cursor: pointer;font-weight: 500;display:none">
              <i class="fa fa-trash fa-lg m-r-5"></i> Apagar Fotografia </label>
              </li>
              </ul>
              <a href="javascript:;" class="btn btn-default mt-3" id="cancelarFotoAtleta345345" style="margin-left:-358px"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            <form method="post" id="EditartOrgaoMembro" enctype="multipart/form-data">
            <div id="bodyMensagem89978" class="modal-body m-2 pt-2 pb-3" style="display:block">
                 <div class="col-md-12" id="conteudoCarregarEditarMembro">

                            <input  type="hidden" name="id_membro" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="" id="id_membro_editar">
                            <input  type="hidden" name="nomeCargo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="" id="nomeCargo_editar">
                            <input  type="hidden" name="id_orgao" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="" id="id_orgao_editar">
                            <input  type="hidden" name="id_mandato" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="" id="id_mandato_editar">

                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label class="text-nowrap">Nome Completo</label>
                                    <input name="nome_completo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id22" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Telefone</label>
                                    <input name="telefone" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="telefone_id" value="">
                                </div>
                            <div class="form-group col-sm-6">
                                <input name="cargo22" placeholder="" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="cargo_22" value="" style="display:none">
                            </div>
                            </div>
                            <div class="col-md-4" style="position:relative;left:50%;transform: translate(-50%);">
                                <div class="form-group">
                                    <img id="mudarFotoMembroOrgao" title="Click para adicionar foto" src="http://localhost/KEDA/assets/dist/img/avatar.png" alt="Foto" style="width:110; height:110" class="img-thumbnail rounded mx-auto d-block"/><br>
                                    <div style="display:none">
                                        <input type="file" name="arquivoFotoDirigente" id="arquivoFotoDirigente" class="rounded mx-auto d-block form-control hide" onchange="PreviewImagemMembroEditar()">
                                    </div>
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
      </div>`;

$('a[data-id_membro]').on('click', function() {
    let id_membro = $(this).attr('data-id_membro');
    let nome = $(this).attr('data-nome');
    let telefone = $(this).attr('data-telefone');
    let cargo = $(this).attr('data-cargo');
    let mandato = $(this).attr('data-id_mandato_fk');
    let id_orgao = $(this).attr('data-id_orgao_fk');

    let imagemSRC = $(this).attr('data-imagem');

    if (!$('modal-default-orgao-Membro-Editar').length) {
        $('body').append(modalOrgaoMembroEditar);
    }

    $('#mudarFotoMembroOrgao').on('click', function() {
        $('.text-sm-foto2231').html('<i class="fas fa-images text-red"></i> Fotografia');
        $('#bodyMensagem89978').slideToggle();
        $('#bodyMensagem27763').slideToggle();

    })

    $('#cancelarFotoAtleta345345').on('click', function() {
        $('.text-sm-foto2231').html('<i class="fas fa-user-plus"></i> EDITAR MEMBROS');
        $('#bodyMensagem27763').slideToggle();
        $('#bodyMensagem89978').slideToggle();

    })

    $('#nomeOrgao57').html(cargo);

    $('#nome_completo_id22').val(nome);
    $('#telefone_id').val(telefone);
    $('#cargo_22').val(cargo);
    $('#nomeCargo_editar').val(cargo);
    $('#id_orgao_editar').val(id_orgao);
    $('#id_mandato_editar').val(mandato);

    let url = '';

    if (imagemSRC !== '') {
        let url = 'http://localhost/KEDA/uploads/product/' + imagemSRC;
        $('#mudarFotoMembroOrgao').attr('src', url);
    } else {
        let url = 'http://localhost/KEDA/assets/dist/img/avatar.png';
        $('#mudarFotoMembroOrgao').attr('src', url);
    }

    $('#id_membro_editar').val(id_membro);

    // $.ajax({
    //     type: 'post',
    //     data: { id_orgao },
    //     url: 'http://localhost/KEDA/Orgao_Social/pergarCargosEditar',
    //     beforeSend: function() {
    //         $('#cargo').html('Carregando...');
    //     },
    //     success: function(event) {
    //         $('#cargo').html(event);
    //     }
    // })

    $('#EditartOrgaoMembro').on('submit', function(event) {

        event.preventDefault();

        $.ajax({
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            url: 'http://localhost/KEDA/Orgao_Social/editarDadoMembro',
            beforeSend: function() {
                $('#conteudoCarregarEditarMembro').html('Carregando.......');
            },
            success: function(event) {
                $('#conteudoCarregarEditarMembro').html(event);
                window.location.href = 'http://localhost/KEDA/Orgao_Social/verMembroOrgao/' + mandato + '/' + id_orgao;
            }
        })
    })

    $('#modal-default-orgao-Membro-Editar').modal({ show: true })

})

function PreviewImagemMembroEditar() {


    //if(teste55 == 0){
    $('.text-sm-foto1231').html('<i class="fas fa-user-plus"></i> EDITAR MEMBROS');
    $('#bodyMensagem27763').slideToggle();
    $('#bodyMensagem89978').slideToggle();

    var imagem = document.querySelector('input[name=arquivoFotoDirigente]').files[0];

    var preview = $('#mudarFotoMembroOrgao')[0];

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



$('#fazerbackup77').on('click', function() {

    // $.ajax({
    //     type: 'POST',
    //     url: 'http://localhost/KEDA/backupbanco/fazerBackupBanco',
    //     success: function(event) {
    //         window.open = event;
    //     }
    // })
    const event = 'http://localhost/KEDA/backupbanco/fazerBackupBanco';
    window.open(event);

})

$('#fazerbackup77').mouseenter(function(){
    $('#fazerbackup779846').attr('class','bg-info');
})

$('#fazerbackup77').mouseout(function(){
    $('#fazerbackup779846').attr('class','bg-teal');
})
