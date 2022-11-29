//..............................................................Modal adicionar documento.................................................................

var modalAnularCampeonato = `<div class="modal fade text-sm pb-5" id="modal-default-modalAnularCampeonato1" style="top:100px">
        <div class="modal-dialog">
        <form method="post" id="AddDocumento1">
          <div class="modal-content">
            <div class="modal-body m-3 pt-2 text-center pb-3 mt-3 text-uppercase text-bold" id="bodyMensagemTrocarEstadoUsuario">
                <div>
                  <p> ADICIONAR DOCUMENTO<strong id="oi"></strong></p>
                  <div class="container">
                    <div class="custom-file" id="conteudoCarregar5955">
                      <div style="font-size:62px"><i class="fas fa-download"></i></div>
                      <label style="border:none" class="btn btn-primary" id="controlLayoutPdf" for="exampleFormControlFile1">Selecione o ficheiro</label>
                      <input name="fileDocument" type="file" class="form-control-file" id="exampleFormControlFile1" style="display:none" onchange="PreviewImagem333333()">
                      <input name="descricaoDocumento" type="text" class="form-control" id="inputPassword" placeholder="Nome do documento">
                      <div id="nomeFicheiroSelect"></div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">
                  <button type="submit" class="btn btn-danger pull-right" id="aceitarSim678CampNacional" disabled="true"><i class="fas fa-ban"></i> Sim</button>
                  <button type="button" class="btn btn-default pull-right" id="cancelarUploadImagem" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
                </div>
            </div>
          </div>
        </div>
  </div>
</div>`;


$('.botaoAddDocument5756').click(function(event){
  console.log(event.target);
  if (!$('modal-default-modalAnularCampeonato1').length) {
    $('body').append(modalAnularCampeonato);
  }

  $('#cancelarUploadImagem').click(function(){
    var bilhete = $('input[name=fileDocument]').val();
    if(bilhete == ''){

    }else{
      $('input[name=fileDocument]').val('');
      $('#nomeFicheiroSelect').empty();
      $('#aceitarSim678CampNacional').attr("disabled","true");
    }
  });

  $('#AddDocumento1').unbind('submit').submit(function(event){
    event.preventDefault();

    var bilhete = $('input[name=fileDocument]').val();

    if(bilhete == ''){
      
    }else{

      let dados = {
        bilhete : bilhete
      };

      $.ajax({
        type: 'post',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        url: 'http://localhost/KEDA/documentos/gravarFoto',
        beforeSend: function(event) {
            $('#conteudoCarregar5955').html('<div class="text-center"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
        },
        success: function(event) {

          var conteudo = `<div style="font-size:62px"><i class="fas fa-download"></i></div>
          <label style="border:none" class="btn btn-primary" id="controlLayoutPdf" for="exampleFormControlFile1">Selecione o ficheiro</label>
          <input name="fileDocument" type="file" class="form-control-file" id="exampleFormControlFile1" style="display:none" onchange="PreviewImagem333333()">
          <div id="nomeFicheiroSelect"></div>`;

          $('#modal-default-modalAnularCampeonato').modal("hide");
          $('#conteudo2').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Documento adicionado.</h6></div>');
          $('#conteudoCarregar5955').html(conteudo);

          getDocumentos();

        }

      });

    }

  });

  $('#modal-default-modalAnularCampeonato1').modal("show");

});


//..............................................................Fim Modal adicionar documento.................................................................

function getDocumentos(){
  $.ajax({
    type: 'get',
    url: 'http://localhost/KEDA/documentos/getAllDocumento',
    beforeSend: function(){

    },
    success: function(event){
      var dados = JSON.parse(event);
      console.log(dados)
      for(let i = 0;i < dados.length ;i++){

        var conteudoDocumentos = `<div class="card card-info">
        <div class="card-header">
          <h4 class="card-title w-100">
            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne${dados[i]['id_documento']}" aria-expanded="false">
              ${dados[i]['nomeDocumento']}
            </a>
          </h4>
        </div>
        <div id="collapseOne${dados[i]['id_documento']}" class="collapse" data-parent="#accordion" style="">
          <div class="card-body">
            <div style="height:400px; width:100%;" id="conteudoDocumentoTipo">
              <embed src="http://localhost/KEDA/uploads/documento/${dados[i]['descricao']}" type="application/pdf" height="100%" width="100%">
            </div>
          </div>
        </div>
      </div>`;

      $('.accordion123').append(conteudoDocumentos)


      }


    }
  })
}

function getDocumentosBySelect(){
 
  $.ajax({
    type: 'get',
    url: 'http://localhost/KEDA/documentos/getAllDocumento',
    beforeSend: function(){

    },
    success: function(event){
      var dados = JSON.parse(event);
      console.log(dados);
      for(let i = 0;i < dados.length ;i++){
        
      //   console.log(i);
        var conteudoDocumentos = `<option value="${dados[i]['id_documento']}">${dados[i]['nomeDocumento']}</option>`;

        $('#conteudoSelect').append(conteudoDocumentos)


      }


    }
  })

  $('#conteudoSelect').change(function(){
    let idDocumento = $('select[name=idDocumentoEscolha]').val();
    
    $.ajax({
      type: 'post',
      data:{idDocumento},
      url: 'http://localhost/KEDA/documentos/getDocumentoById',
      beforeSend: function(){
  
      },
      success: function(event){
        var dados = JSON.parse(event);
       
        for(let i = 0;i < dados.length;i++){
            var conteudoDocumentos = `<div style="display:flex;flex-direction:row;align-items:center;justify-content:space-between"><button type="text" name="" id="btnDelectarDocumentos" class="btn btn-inf"><i class="fa fa-trash-alt"></i></button>
            
              <div style="display:flex;flex-direction:row">
                <div class="custom-control custom-radio mr-2">
                  <input class="custom-control-input" type="radio" data-id="${dados[0]['id_documento']}" id="customRadio1" name="customRadio">
                  <label for="customRadio1" class="custom-control-label">Publico</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" data-id="${dados[0]['id_documento']}" id="customRadio2" name="customRadio">
                  <label for="customRadio2" class="custom-control-label">Privado</label>
                </div>
              </div>
              
            </div>
            <div class="card card-info">
            <div class="card-header">
              <h4 class="card-title w-100">
                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne${dados[i]['id_documento']}" aria-expanded="false">
                  FICHA DE INSCRICAO DE ATLETA${dados[i]['id_documento']}
                </a>
              </h4>
            </div>
            <div id="collapseOne${dados[i]['id_documento']}" class="collapse" data-parent="#accordion" style="">
              <div class="card-body">
                <div style="height:400px; width:100%;" id="conteudoDocumentoTipo">
                  <embed src="http://localhost/KEDA/uploads/documento/${dados[i]['descricao']}" type="application/pdf" height="100%" width="100%">
                </div>
              </div>
            </div>
          </div>`;
    
          $('.accordion123').html(conteudoDocumentos)

          if(dados[0]['status'] == "1"){
            $('#customRadio1').attr('checked', 'checked');
          }else{
            $('#customRadio2').attr('checked', 'checked');
          }
        }

        $('#customRadio1').change(function(){

          var dado = $(this).attr('data-id');
          // var status = 1;

          var dados = {
            id: dado,
            status: 1
          };
          
          $.ajax({
            type: 'post',
            data: dados,
            url: 'http://localhost/KEDA/documentos/updateDocumentStatus',
            beforeSend: function(){
        
            },
            success: function(event){
              // var dados = JSON.parse(event);

              console.log(event)
              
            }
          })

        })

        $('#customRadio2').change(function(){
          
          var dado = $(this).attr('data-id');
          // var status = 1;

          var dados = {
            id: dado,
            status: 0
          };
          
          $.ajax({
            type: 'post',
            data: dados,
            url: 'http://localhost/KEDA/documentos/updateDocumentStatus',
            beforeSend: function(){
        
            },
            success: function(event){
              // var dados = JSON.parse(event);

              console.log(event)
              
            }
          })

        })

        $('#btnDelectarDocumentos').click(function(event){
          
          var modalEliminarDocumento = `<div class="modal fade text-sm pb-5" id="confirm-delete-documento-8905">
          <div class="modal-dialog">
            <div class="modal-content">

                <h4 class="modal-title p-3 text-sm"><i class="fas fa-trash-alt"></i> Eliminar Documento</h4>

                      <div class="modal-body alert alert-warning m-3">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                        <p class="text-center"><strong> Tem certeza que pretende eliminar esse documento ? </strong></p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                        <button type="button" id="dataComfirmElimanarDocumento458" data-idDocumento="${dados[0]['id_documento']}" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Confirmar</button>
                      </div>
                </div>

            </div>

          </div>`;

          if (!$('confirm-delete-documento-8905').length) {
            $('body').append(modalEliminarDocumento);
          }

          $('#dataComfirmElimanarDocumento458').click(function(){
            var id = $(this).attr('data-idDocumento');

            $.ajax({
              type:'post',
              data:{id},
              url:'http://localhost/KEDA/documentos/deleteDocumentoById',
              beforeSend: function(){

              },
              success: function(event){
                let retorno = parseInt(event)
                if(retorno == 1){
                  $('#confirm-delete-documento-8905').modal("hide");
                  $('#conteudo2').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Documento eliminado.</h6></div>');
         
                  getDocumentos();

                }
              }
            })

          })

          $('#confirm-delete-documento-8905').modal("show");
        })
      }
    })

  })

}

getDocumentos();
getDocumentosBySelect();

function PreviewImagem333333() {

  $('#aceitarSim678CampNacional').removeAttr("disabled");

    // $('#nomeFicheiroSelect').html('sadsdsadsadsdasdsdasd');
    $('#botaoEsconderMestre231').css('display', 'none');
    $('#12323524Mestre').css('display', 'block');
    $('#botaoEsconderMestre231CG').css('display', 'block');

    var imagem = document.querySelector('input[name=fileDocument]').files[0];
    
    var preview = $('#conteudoDocumentoTipo')[0];
    
    $('#nomeFicheiroSelect').html(imagem['name']);

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


//...............................................................123.......................................................................................

//.........................Array de Objecto para armazenar os participantes............................................
let listParticipanteMundial = [];

function pegarViaBilheteParticipanteMundial() {

  let modalAdicionarParticipanteGraduacao = `<div class="modal fade text-sm pb-5 hide" id="modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567">
  <div class="modal-dialog" style="max-width:678px">
    <div class="modal-content">
      <div class="modal-header">
          <h2 class="modal-title text-sm"><i class="fas fa-user-plus"></i> ADICIONAR PARTICIPANTE</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <form method="post" id="AddParticipanteEvente8747">
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
                          <div class="form-group col-sm-12">
                              <label class="text-nowrap">Numero do Bilhete</label>
                              <input name="bilhete" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="bilhete_completo_id" value="" readonly="readonly">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Genero</label>
                              <input name="genero" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="" readonly="readonly">
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Categoria de Peso</label>
                              <input name="categoria" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Escalao</label>
                              <select name="escalao" class="form-control form-control-sm" id="controlTipoExame756">
                                  <option value="0">Sem Escalao</option>
                                  <option value="Junior">Junior</option>
                                  <option value="Senior">Senior</option>
                                  <option value="Cadete">Cadete</option>
                                  <option value="Adultos">Adultos</option>
                                  <option value="Veterano Absoluto">Veterano Absoluto</option>
                                  <option value="Sub-21">Sub-21</option>
                                  <option value="Sub-18">Sub-18</option>
                              </select>
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Classificacao</label>
                              <select name="tipo" class="form-control form-control-sm" id="controlTipoExame756">
                                  <option value="0">Sem Classificacao</option>
                                  <option value="1">Ouro</option>
                                  <option value="2">Prata</option>
                                  <option value="3">Broze</option>
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

  let numeroBI = document.getElementById("table_search876678").value;

  let id_associacao_pro = $('#table_search876').attr('dataid-id_associacao_pro');

  let dados = {
      numero: numeroBI
  };

  if (numeroBI.length === 14) {
     
      $.ajax({
          type: 'POST',
          data: dados,
          url: 'http://localhost/KEDA/actividade/BuscaByBilheteTodos',
          beforeSend: function() {
              $('#input-group-sm-1234').html('<div class="spinner-grow text-primary" role="status"></div>');
          },
          success: function(event) {
                
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
                              };

                              console.log(dado90);

                              if (!$('modal-default-participante-Pesquisa-4567').length) {
                                  $('body').append(modalAdicionarParticipanteGraduacao);
                              }

                              let imagem24 = 'http://localhost/KEDA/uploads/product/' + imagem;

                              $('#nome_completo_bilhete').val(nomeComplet);
                              $('#datadeNascimento').val(dataNascimento);
                              $('#genero_completo_id').val(genero);
                              $('#bilhete_completo_id').val(numeroBI);
                              $('#provincia_bilhete').val(provincia);
                              
                              if (imagem24 !== '') {
                                  $('.img-bordered-sm23').attr('src', imagem24);
                              }

                              $('#modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567').modal({ show: true });
                              // let id_mundial;

                              $('#AddParticipanteEvente8747').unbind('submit').on('submit', function(event) {

                                  event.preventDefault();

                                  let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

                                  let graduacao2 = $('input[name=graduacao]').val();
                                  let tipo = $('select[name=tipo]').val();
                                  let bilhete = $('input[name=bilhete]').val();
                                  let nome = $('input[name=Nome]').val();
                                  let provincia = $('input[name=provincia]').val();
                                  let genero = $('input[name=genero]').val();
                                  let categoria = $('input[name=categoria]').val();
                                  let escalao = $('select[name=escalao]').val();
                                  let data = $('input[name=data]').val();

                                  $.post('http://localhost/KEDA/campeonato/pegarCampeonatoMundialAtual', function(resp){

                                    let dados = {
                                        id_mundial: resp,
                                        nome_pessoa: nome,
                                        n_bilhete: bilhete,
                                        posicao: tipo,
                                        genero: genero,
                                        imagem: imagem,
                                        categoria: categoria,
                                        escalao: escalao
                                    };

                                    console.log(dados);

                                    $.ajax({
                                        type: 'POST',
                                        data: dados,
                                        url: 'http://localhost/KEDA/campeonato/setParticipanteMundial',
                                        beforeSend: function(event) {
                                            $('#bodyMensagem89').html('<div class="spinner-grow text-primary text-center" style="margin-left:300px" role="status"></div>');
                                        },
                                        success: function(event) {
                                          if(event == 1){
                                            listParticipanteMundial.push(dados);
                                            console.log(listParticipanteMundial);

                                            let alert = `<div class="alert alert-success alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
                                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                          <h5><i class="icon fas fa-check"></i> SUCESSO!</h5>
                                                          Participante adicionado.
                                                        </div>`;

                                            $('#bodyMensagem89').html(alert);
                                          }else {
                                            let alert = `<div class="alert alert-warning alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
                                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                          <h5><i class="icon fas fa-check"></i> ATENCAO!</h5>
                                                          Esse Participante ja foi adicionado.
                                                        </div>`;

                                            $('#bodyMensagem89').html(alert);
                                          }

                                          $('#modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567').modal('hide');

                                          getAllParticipanteMundial(resp);

                                        }
                                    });
                                  });
                              });
                          });
                      }
                 
          }
      });
  }

  function getAllParticipanteMundial(dados){
    $.ajax({
      type: 'POST',
      data: {dados},
      url: 'http://localhost/KEDA/campeonato/getAllParticipanteMundial',
      beforeSend: function() {
          // $('#bodyMensagem89').html('<div class="spinner-grow text-primary text-center" style="margin-left:300px" role="status"></div>');
      },
      success: function(event) {
        $teste = JSON.parse(event);

        let tableCategoria = `<table id="example1" class="table table-striped table-sm text-sm">
                          <thead>
                            <tr>
                              <th style="width: 10px">N-</th>
                              <th>Nome Completo</th>
                              <th>Numero do Bilhete</th>
                              <th>Classificacao</th>
                              <th class="text-center project-actions">Accoes</th>
                            </tr>
                          </thead>`;

        tableCategoria += `<tbody>`;
        let soma = 0;
        $.each($teste, function(i, retorno1) {
            tableCategoria += `<tr>
                              <td>${ soma = soma + 1}</td>
                              <td>${retorno1.nome_pessoa}</td>
                              <td>${retorno1.n_bilhete}</td>`;
                              if(retorno1.posicao == 1){
                                tableCategoria += `<td>Ouro</td>`;
                              }else if (retorno1.posicao == 2) {
                                tableCategoria += `<td>Prata</td>`;
                              }else if (retorno1.posicao == 3){
                                tableCategoria += `<td>Bronze</td>`;
                              }else{
                                tableCategoria += `<td>Sem Classificacao</td>`;
                              }

            tableCategoria += `<td class="text-center project-actions">
                                <button data-editar-participante="${retorno1.id_participante_mundial}" id_mundial="${retorno1.id_mundial}" classificacao="${retorno1.posicao}" data-editar-id_campeonato="${retorno1.id_campeonato_fk}" data-editar-genero="${retorno1.genero}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                <button data-eliminar-participante="${retorno1.id_participante_mundial}" id_mundial="${retorno1.id_mundial}" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                              </td>
                            </tr>`
        });
        tableCategoria += `</tbody>`
        tableCategoria += `</table>`;

        $('#verAllParticipanteMundial789P23').html(tableCategoria);

        $('button[data-eliminar-participante]').click(function(){
          let id_participante = $(this).attr('data-eliminar-participante');
          let id_mundial = $(this).attr('id_mundial');

          $.ajax({
            type: 'post',
            data: {id_participante},
            url: 'http://localhost/KEDA/campeonato/EliminarParticipanteCampeonatoMundialAtual',
            beforeSend: function(){

            },
            success: function(event){
              // if(event == 1){
              //   let alert = `<div class="alert alert-success alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
              //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              //                 <h5><i class="icon fas fa-check"></i> SUCESSO!</h5>
              //                 Participante adicionado.
              //               </div>`;
              //
              //   $('#bodyMensagem89').html(alert);
              // }else {
              //   let alert = `<div class="alert alert-warning alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
              //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              //                 <h5><i class="icon fas fa-check"></i> ATENCAO!</h5>
              //                 Esse Participante ja foi adicionado.
              //               </div>`;
              //
              //   $('#bodyMensagem89').html(alert);
              // }
              getAllParticipanteMundial(id_mundial);
            }
          })
        });

        $('button[data-editar-participante]').click(function(){

          let recarregar45 = `<div class="col-md-12" id="conteudoCarregarAdicionarCategoria">
            <div class="col-md-12" id="conteudoCarregarCategoria" style="padding-left: 0.5px;padding-right: 0.5px;"></div>

              <div class="form-row">
                <div class="form-group col-sm-12">
                    <label class="text-nowrap">Classificacao</label>
                    <select name="tipo_classificacao" class="form-control form-control-sm" id="categoriaid123">
                        <option value="0">Sem Classificacao</option>
                        <option value="1">Ouro</option>
                        <option value="2">Prata</option>
                        <option value="3">Bronze</option>
                    </select>
                </div>
              </div>
          </div>`;

          $('#bodyMensagem89890').html(recarregar45);

          var modalMundialCampeonato57 = `<div class="modal fade text-sm pb-5 hide" id="modalMundialCampeonato57_12389767">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> EDITAR CLASSIFICACAO </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <form method="post" id="AddTipoSeminario777">
                                                <div id="bodyMensagem89890" class="modal-body m-2 pt-2 pb-3">
                                                  <div class="col-md-12" id="conteudoCarregarAdicionarCategoria">
                                                    <div class="col-md-12" id="conteudoCarregarCategoria" style="padding-left: 0.5px;padding-right: 0.5px;"></div>

                                                      <div class="form-row">
                                                        <div class="form-group col-sm-12">
                                                            <label class="text-nowrap">Classificacao</label>
                                                            <select name="tipo_classificacao" class="form-control form-control-sm" id="categoriaid123">
                                                                <option value="0">Sem Classificacao</option>
                                                                <option value="1">Ouro</option>
                                                                <option value="2">Prata</option>
                                                                <option value="3">Bronze</option>
                                                            </select>
                                                        </div>
                                                      </div>
                                                  </div>

                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
                                                    <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Adicionar </button>
                                                </div>
                                                </form>
                                                </div>
                                              </div>
                                          </div>`;

          let id_participante = $(this).attr('data-editar-participante');
          let classificacao = $(this).attr('classificacao');
          let id_mundial = $(this).attr('id_mundial');

          if (!$('modalMundialCampeonato57_12389767').length) {
              $('body').append(modalMundialCampeonato57);
          }

          $('#modalMundialCampeonato57_12389767').modal({ show: true });

          $('#AddTipoSeminario777').unbind('submit').on('submit', function(event){
            event.preventDefault();


            let classificacao = $('select[name=tipo_classificacao]').val();

            $.ajax({
              type: 'post',
              data: {id_participante,classificacao},
              url: 'http://localhost/KEDA/campeonato/EditarParticipanteCampeonatoMundialAtual',
              beforeSend: function(){

              },
              success: function(event){
                if(event == 1){
                  let alert = `<div class="alert alert-success alert-dismissible" style="padding-right: 25rem;padding-top: 0.75rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 0.75rem;border-right-width: 0px;">

                                <h6><i class="icon fas fa-check"></i> SUCESSO!</h6>
                                Participante adicionado.
                              </div>`;

                  $('#bodyMensagem89890').html(alert);
                }else {
                  let alert = `<div class="alert alert-warning alert-dismissible" style="padding-right: 25rem;padding-top: 0.75rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 0.75rem;border-right-width: 0px;">

                                <h6><i class="icon fas fa-check"></i> ATENCAO!</h6>
                                Esse Participante ja foi adicionado.
                              </div>`;

                  $('#bodyMensagem89890').html(alert);
                }
                getAllParticipanteMundial(id_mundial);
              }
            });

          });

        });

      }
    });
  }

}

//................................................campeonato Africano............................................................


function pegarViaBilheteParticipanteAfricano() {

  let modalAdicionarParticipanteGraduacao = `<div class="modal fade text-sm pb-5 hide" id="modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567">
  <div class="modal-dialog" style="max-width:678px">
    <div class="modal-content">
      <div class="modal-header">
          <h2 class="modal-title text-sm"><i class="fas fa-user-plus"></i> ADICIONAR PARTICIPANTE</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <form method="post" id="AddParticipanteEvente8747111">
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
                          <div class="form-group col-sm-12">
                              <label class="text-nowrap">Numero do Bilhete</label>
                              <input name="bilhete" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="bilhete_completo_id" value="" readonly="readonly">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Genero</label>
                              <input name="genero" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="" readonly="readonly">
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Categoria de Peso</label>
                              <input name="categoria" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Escalao</label>
                              <select name="escalao" class="form-control form-control-sm" id="controlTipoExame756">
                                  <option value="0">Sem Escalao</option>
                                  <option value="Junior">Junior</option>
                                  <option value="Senior">Senior</option>
                                  <option value="Cadete">Cadete</option>
                                  <option value="Adultos">Adultos</option>
                                  <option value="Veterano Absoluto">Veterano Absoluto</option>
                                  <option value="Sub-21">Sub-21</option>
                                  <option value="Sub-18">Sub-18</option>
                              </select>
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Classificacao</label>
                              <select name="tipo" class="form-control form-control-sm" id="controlTipoExame756">
                                  <option value="0">Sem Classificacao</option>
                                  <option value="1">Ouro</option>
                                  <option value="2">Prata</option>
                                  <option value="3">Broze</option>
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

  let numeroBI = document.getElementById("table_search876678").value;

  let id_associacao_pro = $('#table_search876').attr('dataid-id_associacao_pro');

  let dados = {
      numero: numeroBI
  };

  if (numeroBI.length === 14) {
     
      $.ajax({
          type: 'POST',
          data: dados,
          url: 'http://localhost/KEDA/actividade/BuscaByBilheteTodos',
          beforeSend: function() {
              $('#input-group-sm-1234').html('<div class="spinner-grow text-primary" role="status"></div>');
          },
          success: function(event) {
                
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
                              };

                              console.log(dado90);

                              if (!$('modal-default-participante-Pesquisa-4567').length) {
                                  $('body').append(modalAdicionarParticipanteGraduacao);
                              }

                              let imagem24 = 'http://localhost/KEDA/uploads/product/' + imagem;

                              $('#nome_completo_bilhete').val(nomeComplet);
                              $('#datadeNascimento').val(dataNascimento);
                              $('#genero_completo_id').val(genero);
                              $('#bilhete_completo_id').val(numeroBI);
                              $('#provincia_bilhete').val(provincia);
                              
                              if (imagem24 !== '') {
                                  $('.img-bordered-sm23').attr('src', imagem24);
                              }

                              $('#modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567').modal({ show: true });
                              // let id_mundial;

                              $('#AddParticipanteEvente8747111').unbind('submit').on('submit', function(event) {

                                  event.preventDefault();

                                  let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

                                  let graduacao2 = $('input[name=graduacao]').val();
                                  let tipo = $('select[name=tipo]').val();
                                  let bilhete = $('input[name=bilhete]').val();
                                  let nome = $('input[name=Nome]').val();
                                  let provincia = $('input[name=provincia]').val();
                                  let genero = $('input[name=genero]').val();
                                  let categoria = $('input[name=categoria]').val();
                                  let escalao = $('select[name=escalao]').val();
                                  let data = $('input[name=data]').val();

                                  $.post('http://localhost/KEDA/campeonato/pegarCampeonatoAfricanoAtual', function(resp){

                                    let dados = {
                                        id_africano: resp,
                                        nome_pessoa: nome,
                                        n_bilhete: bilhete,
                                        posicao: tipo,
                                        genero: genero,
                                        imagem: imagem,
                                        categoria: categoria,
                                        escalao: escalao
                                    };

                                    console.log(dados);

                                    $.ajax({
                                        type: 'POST',
                                        data: dados,
                                        url: 'http://localhost/KEDA/campeonato/setParticipanteAfricano',
                                        beforeSend: function(event) {
                                            $('#bodyMensagem89').html('<div class="spinner-grow text-primary text-center" style="margin-left:300px" role="status"></div>');
                                        },
                                        success: function(event) {
                                          if(event == 1){
                                            listParticipanteMundial.push(dados);
                                           
                                            let alert = `<div class="alert alert-success alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
                                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                          <h5><i class="icon fas fa-check"></i> SUCESSO!</h5>
                                                          Participante adicionado.
                                                        </div>`;

                                            $('#bodyMensagem89').html(alert);
                                          }else {
                                            let alert = `<div class="alert alert-warning alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
                                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                          <h5><i class="icon fas fa-check"></i> ATENCAO!</h5>
                                                          Esse Participante ja foi adicionado.
                                                        </div>`;

                                            $('#bodyMensagem89').html(alert);
                                          }

                                          $('#modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567').modal('hide');

                                          getAllParticipanteMundial(resp);

                                        }
                                    });
                                  });
                              });
                          });
                      }
                 
          }
      });
  }

  function getAllParticipanteMundial(dados){
    $.ajax({
      type: 'POST',
      data: {dados},
      url: 'http://localhost/KEDA/campeonato/getAllParticipanteMundial',
      beforeSend: function() {
          // $('#bodyMensagem89').html('<div class="spinner-grow text-primary text-center" style="margin-left:300px" role="status"></div>');
      },
      success: function(event) {
        $teste = JSON.parse(event);

        let tableCategoria = `<table id="example1" class="table table-striped table-sm text-sm">
                          <thead>
                            <tr>
                              <th style="width: 10px">N-</th>
                              <th>Nome Completo</th>
                              <th>Numero do Bilhete</th>
                              <th>Classificacao</th>
                              <th class="text-center project-actions">Accoes</th>
                            </tr>
                          </thead>`;

        tableCategoria += `<tbody>`;
        let soma = 0;
        $.each($teste, function(i, retorno1) {
            tableCategoria += `<tr>
                              <td>${ soma = soma + 1}</td>
                              <td>${retorno1.nome_pessoa}</td>
                              <td>${retorno1.n_bilhete}</td>`;
                              if(retorno1.posicao == 1){
                                tableCategoria += `<td>Ouro</td>`;
                              }else if (retorno1.posicao == 2) {
                                tableCategoria += `<td>Prata</td>`;
                              }else if (retorno1.posicao == 3){
                                tableCategoria += `<td>Bronze</td>`;
                              }else{
                                tableCategoria += `<td>Sem Classificacao</td>`;
                              }

            tableCategoria += `<td class="text-center project-actions">
                                <button data-editar-participante="${retorno1.id_participante_mundial}" id_mundial="${retorno1.id_mundial}" classificacao="${retorno1.posicao}" data-editar-id_campeonato="${retorno1.id_campeonato_fk}" data-editar-genero="${retorno1.genero}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                <button data-eliminar-participante="${retorno1.id_participante_mundial}" id_mundial="${retorno1.id_mundial}" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                              </td>
                            </tr>`
        });
        tableCategoria += `</tbody>`
        tableCategoria += `</table>`;

        $('#verAllParticipanteMundial789P23').html(tableCategoria);

        $('button[data-eliminar-participante]').click(function(){
          let id_participante = $(this).attr('data-eliminar-participante');
          let id_mundial = $(this).attr('id_mundial');

          $.ajax({
            type: 'post',
            data: {id_participante},
            url: 'http://localhost/KEDA/campeonato/EliminarParticipanteCampeonatoMundialAtual',
            beforeSend: function(){

            },
            success: function(event){
              // if(event == 1){
              //   let alert = `<div class="alert alert-success alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
              //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              //                 <h5><i class="icon fas fa-check"></i> SUCESSO!</h5>
              //                 Participante adicionado.
              //               </div>`;
              //
              //   $('#bodyMensagem89').html(alert);
              // }else {
              //   let alert = `<div class="alert alert-warning alert-dismissible" style="padding-right: 28rem;padding-top: -0.25rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 1.75rem;">
              //                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              //                 <h5><i class="icon fas fa-check"></i> ATENCAO!</h5>
              //                 Esse Participante ja foi adicionado.
              //               </div>`;
              //
              //   $('#bodyMensagem89').html(alert);
              // }
              getAllParticipanteMundial(id_mundial);
            }
          })
        });

        $('button[data-editar-participante]').click(function(){

          let recarregar45 = `<div class="col-md-12" id="conteudoCarregarAdicionarCategoria">
            <div class="col-md-12" id="conteudoCarregarCategoria" style="padding-left: 0.5px;padding-right: 0.5px;"></div>

              <div class="form-row">
                <div class="form-group col-sm-12">
                    <label class="text-nowrap">Classificacao</label>
                    <select name="tipo_classificacao" class="form-control form-control-sm" id="categoriaid123">
                        <option value="0">Sem Classificacao</option>
                        <option value="1">Ouro</option>
                        <option value="2">Prata</option>
                        <option value="3">Bronze</option>
                    </select>
                </div>
              </div>
          </div>`;

          $('#bodyMensagem89890').html(recarregar45);

          var modalMundialCampeonato57 = `<div class="modal fade text-sm pb-5 hide" id="modalMundialCampeonato57_12389767">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> EDITAR CLASSIFICACAO </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <form method="post" id="AddTipoSeminario777">
                                                <div id="bodyMensagem89890" class="modal-body m-2 pt-2 pb-3">
                                                  <div class="col-md-12" id="conteudoCarregarAdicionarCategoria">
                                                    <div class="col-md-12" id="conteudoCarregarCategoria" style="padding-left: 0.5px;padding-right: 0.5px;"></div>

                                                      <div class="form-row">
                                                        <div class="form-group col-sm-12">
                                                            <label class="text-nowrap">Classificacao</label>
                                                            <select name="tipo_classificacao" class="form-control form-control-sm" id="categoriaid123">
                                                                <option value="0">Sem Classificacao</option>
                                                                <option value="1">Ouro</option>
                                                                <option value="2">Prata</option>
                                                                <option value="3">Bronze</option>
                                                            </select>
                                                        </div>
                                                      </div>
                                                  </div>

                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
                                                    <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Adicionar </button>
                                                </div>
                                                </form>
                                                </div>
                                              </div>
                                          </div>`;

          let id_participante = $(this).attr('data-editar-participante');
          let classificacao = $(this).attr('classificacao');
          let id_mundial = $(this).attr('id_mundial');

          if (!$('modalMundialCampeonato57_12389767').length) {
              $('body').append(modalMundialCampeonato57);
          }

          $('#modalMundialCampeonato57_12389767').modal({ show: true });

          $('#AddTipoSeminario777').unbind('submit').on('submit', function(event){
            event.preventDefault();


            let classificacao = $('select[name=tipo_classificacao]').val();

            $.ajax({
              type: 'post',
              data: {id_participante,classificacao},
              url: 'http://localhost/KEDA/campeonato/EditarParticipanteCampeonatoMundialAtual',
              beforeSend: function(){

              },
              success: function(event){
                if(event == 1){
                  let alert = `<div class="alert alert-success alert-dismissible" style="padding-right: 25rem;padding-top: 0.75rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 0.75rem;border-right-width: 0px;">

                                <h6><i class="icon fas fa-check"></i> SUCESSO!</h6>
                                Participante adicionado.
                              </div>`;

                  $('#bodyMensagem89890').html(alert);
                }else {
                  let alert = `<div class="alert alert-warning alert-dismissible" style="padding-right: 25rem;padding-top: 0.75rem;margin-bottom: 0rem;bottom: 0px;border-bottom-width: 0px;padding-bottom: 0.75rem;border-right-width: 0px;">

                                <h6><i class="icon fas fa-check"></i> ATENCAO!</h6>
                                Esse Participante ja foi adicionado.
                              </div>`;

                  $('#bodyMensagem89890').html(alert);
                }
                getAllParticipanteMundial(id_mundial);
              }
            });

          });

        });

      }
    });
  }

}


$('button[id_academia_atletas]').click(function(){
  let id_academia = $(this).attr('id_academia_atletas');
  let idAssociacao = $(this).attr('idAssociacao');
  let nomeAcademia = $(this).attr('nomeAcademia');

  var dados = {
    id_academia : parseInt(id_academia),
    idAssociacao : parseInt(idAssociacao)
  };

  $.ajax({
    type: 'post',
    data: dados,
    url: 'http://localhost/KEDA/associacao/verAssociacaoAtletasClubes',
    beforeSend: function(){
      $('#conteudoAcademiaAtleta123').html('<div class="text-center p-5"><div class="spinner-border" style="width: 4rem; height: 4rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
    },
    success: function(event){

      $('#conteudoAcademiaAtleta123').html('');

      const dados = JSON.parse(event);

      $('#idClubeName').html("academia " + nomeAcademia);

      dados.forEach(element => {
        let conteudo = `<li>
                        <img src="http://localhost/KEDA/uploads/product/${element['imagem']}" alt="User Image" style="height:90px;width:90px;border:4px solid #dc3545">
                        <a class="users-list-name" href="#">${element['nome']}</a>
                        <span class="users-list-date"></span>
                      </li>`;

                      $('#conteudoAcademiaAtleta123').append(conteudo);
      });
      
    }
  });

});


$('.trocarDocumento459').click(function(){

  var id_mestre = $('#trocarDocumento459873029').attr('data_id_mestre');

  //Modal adicionar documento Mestre
var trocarDocumento459 = `<div class="modal fade text-sm pb-5" id="trocarDocumento45912" style="top:100px">
<div class="modal-dialog">
<form method="post" id="AddDocumento2">
  <div class="modal-content">
    <div class="modal-body m-3 pt-2 text-center pb-3 mt-3 text-uppercase text-bold" id="bodyMensagemTrocarEstadoUsuario">
        <div>
          <p> ADICIONAR DOCUMENTO<strong id="oi"></strong></p>
          <div class="container">
            <div class="custom-file" id="conteudoCarregar5955">
              <div style="font-size:62px"><i class="fas fa-download"></i></div>
              <label style="border:none" class="btn btn-primary" id="controlLayoutPdf" for="exampleFormControlFile1">Selecione o ficheiro</label>
              <input name="fileDocument" type="file" class="form-control-file" id="exampleFormControlFile1" style="display:none" onchange="PreviewImagem333333()">
              <input name="idMestre" type="number" class="form-control-file" id="exampleFormControlFile1" style="display:none" value="${id_mestre}">
              <div id="nomeFicheiroSelect"></div>
            </div>
          </div>
        </div>
        <div class="mt-5">
          <button type="submit" class="btn btn-danger pull-right" id="aceitarSim678CampNacional2"><i class="fas fa-ban"></i> Sim</button>
          <button type="button" class="btn btn-default pull-right" id="cancelarUploadImagem2" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
        </div>
    </div>
  </div>
</div>
</div>
</div>`;
  
  if (!$('trocarDocumento45912').length) {
    $('body').append(trocarDocumento459);
  }

  $('#cancelarUploadImagem2').click(function(){
    var bilhete = $('input[name=fileDocument]').val();
    if(bilhete == ''){

    }else{
      $('input[name=fileDocument]').val('');
      $('#nomeFicheiroSelect').empty();
      $('#aceitarSim678CampNacional2').attr("disabled","true");
    }
  });

  $('#AddDocumento2').unbind('submit').submit(function(event){
    event.preventDefault();

    var bilhete = $('input[name=fileDocument]').val();

    if(bilhete == ''){
      
    }else{

      let dados = {
        bilhete : bilhete,
        id_mestre : id_mestre
      };

      $.ajax({
        type: 'post',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        url: 'http://localhost/KEDA/documentos/gravarFotoMestre',
        beforeSend: function(event) {
            $('#conteudoCarregar5955').html('<div class="text-center"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"> Loading... </span></div></div>');
        },
        success: function(event) {
          // console.log(event);
          var document = JSON.parse(event);
          // console.log(document);
          var conteudo = `<div style="font-size:62px"><i class="fas fa-download"></i></div>
          <label style="border:none" class="btn btn-primary" id="controlLayoutPdf" for="exampleFormControlFile1">Selecione o ficheiro</label>
          <input name="fileDocument" type="file" class="form-control-file" id="exampleFormControlFile1" style="display:none" onchange="PreviewImagem333333()">
          <div id="nomeFicheiroSelect"></div>`;

          $('#trocarDocumento45912').modal("hide");
          $('#conteudo2').html('<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Documento adicionado.</h6></div>');
          $('#conteudoCarregar5955').html(conteudo);

          // var conteudo8975 = `<embed src="http://localhost/KEDA/uploads/documento/${document[0]['descricao_documento']}" type="application/pdf" height="100%" width="100%">`;
      
          // $('#conteudoBilhete1213').html(conteudo8975);
          location.reload();

        }

      });

    }

  });

  $('#trocarDocumento45912').modal({ show: true });
});


//.........................Array de Objecto para armazenar os participantes............................................
let listParticipanteSelecaoMundial = [];

function pegarViaBilheteParticipanteMundialSelecao() {

  let modalAdicionarParticipanteGraduacao = `<div class="modal fade text-sm pb-5 hide" id="modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567">
  <div class="modal-dialog" style="max-width:678px">
    <div class="modal-content">
      <div class="modal-header">
          <h2 class="modal-title text-sm"><i class="fas fa-user-plus"></i> ADICIONAR PARTICIPANTE</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <form method="post" id="AddParticipanteSelecao45">
          <div class="text-center"><span id="errorDuplicate678" style="color: red;font-size:18px;"></span></div>
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
                          <div class="form-group col-sm-12">
                              <label class="text-nowrap">Numero do Bilhete</label>
                              <input name="bilhete" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="bilhete_completo_id" value="" readonly="readonly">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Genero</label>
                              <input name="genero" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="" readonly="readonly">
                          </div>
                          <div class="form-group col-sm-6">
                              <label class="text-nowrap">Categoria de Peso</label>
                              <input name="categoria" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="">
                              <span id="errorMessage5679" style="color: red;font-size: 12px"></span>
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

  let numeroBI = document.getElementById("table_search876678Selecao").value;

  let dados = {
      numero: numeroBI
  };

  if (numeroBI.length === 14) {
     
      $.ajax({
          type: 'POST',
          data: dados,
          url: 'http://localhost/KEDA/actividade/BuscaByBilheteTodos',
          beforeSend: function() {
              $('#input-group-sm-1234').html('<div class="spinner-grow text-primary" role="status"></div>');
          },
          success: function(event) {
                
                      let event2 = JSON.parse(event);

                      console.log(event2);

                      let numeroBI = event2.n_bilhete;
                      let nomeComplet = event2.nome;
                      let dataNascimento = event2.data_nascimento;
                      let imagem = event2.imagem;
                      let genero = event2.genero;
                      let provincia = event2.descricao_associacao;
                      let academia = event2.academia;
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
                              };

                              $('#errorDuplicate678').html('');

                              if (!$('modal-default-participante-Pesquisa-4567').length) {
                                  $('body').append(modalAdicionarParticipanteGraduacao);
                              }

                              let imagem24 = 'http://localhost/KEDA/uploads/product/' + imagem;

                              $('#nome_completo_bilhete').val(nomeComplet);
                              $('#datadeNascimento').val(dataNascimento);
                              $('#genero_completo_id').val(genero);
                              $('#bilhete_completo_id').val(numeroBI);
                              $('#provincia_bilhete').val(provincia);
                              
                              if (imagem24 !== '') {
                                  $('.img-bordered-sm23').attr('src', imagem24);
                              }

                              $('#modal-default-modalAdicionarParticipanteGraduacao-Pesquisa-4567').modal({ show: true });
                              // let id_mundial;

                              $('#AddParticipanteSelecao45').unbind('submit').on('submit', function(event) {

                                  event.preventDefault();

                                  let idEvento2 = $('#pegarListaCategoria7645390').attr('data-evento');

                                  let graduacao2 = $('input[name=graduacao]').val();
                                  let tipo = $('select[name=tipo]').val();
                                  let bilhete = $('input[name=bilhete]').val();
                                  let nome = $('input[name=Nome]').val();
                                  let provincia = $('input[name=provincia]').val();
                                  let genero = $('input[name=genero]').val();
                                  let categoria = $('input[name=categoria]').val();
                                  let escalao = $('select[name=escalao]').val();
                                  let data = $('input[name=data]').val();

                                  let dados = {
                                    // id_mundial: 1,
                                    nome_pessoa: nome,
                                    n_bilhete: bilhete,
                                    posicao: tipo,
                                    genero: genero,
                                    imagem: imagem,
                                    academia: academia,
                                    categoria: categoria,
                                    escalao: escalao
                                  };

                                  if((categoria.trim()).length !== 0){
                                    $('#errorMessage5679').html('');

                                    if(listParticipanteSelecaoMundial.findIndex(x => x.n_bilhete === dados.n_bilhete) < 0){
                                      
                                      listParticipanteSelecaoMundial.push(dados);
                                      showAddSelected(listParticipanteSelecaoMundial);

                                    }else{

                                      $('#errorDuplicate678').html('Esse atleta ja foi adicionado a lista');

                                    }

                                  }else{
                                    $('#errorMessage5679').html('Campo obrigatorio');
                                  }

                              });
                          });
                      }
                 
          }
      });
  }

}


function showAddSelected(dados){
   
  let tableCategoria = `<table id="example1" class="table table-striped table-sm text-sm">
                    <thead>
                      <tr>
                        <th style="width: 10px">Foto</th>
                        <th>Nome Completo</th>
                        <th>Categoria</th>
                        <th>Clube</th>
                        <th class="text-center project-actions">Accoes</th>
                      </tr>
                    </thead>`;

  tableCategoria += `<tbody>`;
  let soma = 0;
  $.each(dados, function(i, retorno1) {
      tableCategoria += `<tr>
                        <td><img class="direct-chat-img" src="http://localhost/KEDA/uploads/product/${retorno1.imagem}" alt="message user image"></td>
                        <td>${retorno1.nome_pessoa}</td>
                        <td>${retorno1.categoria}</td>
                        <td>${retorno1.academia}</td>`;
                      
      tableCategoria += `<td class="text-center project-actions">
                          <button data-eliminar-participante="${retorno1.n_bilhete}" id_mundial="${retorno1.id_mundial}" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                        </td>
                      </tr>`
  });
  tableCategoria += `</tbody>`
  tableCategoria += `</table>`;

  $('#verAllParticipanteMundialSelecao789P23').html(tableCategoria);

  $('button[data-eliminar-participante]').click(function(){
    let id_participante = $(this).attr('data-eliminar-participante');
    let id_mundial = $(this).attr('id_mundial');

    console.log(listParticipanteSelecaoMundial);

    let removePosicao = listParticipanteSelecaoMundial.findIndex( wizard => {
      return wizard.n_bilhete === id_participante;
    });

    listParticipanteSelecaoMundial.splice(removePosicao, 1);

    showAddSelected(listParticipanteSelecaoMundial);

  });

  $('button[data-editar-participante]').click(function(){

    alert('saadasa');

  });

}


$('.criarNoveSelecao457').click(function(){
  const estilo45 = 'display:block';
  const estilo55 = 'display:none';

  $('#layout22AfterClick56').attr('style', estilo55);
  $('#layout22BeforeClick56').attr('style', estilo45);
});

$('.ListarSelecoes6745').click(function(){
  const estilo45 = 'display:block';
  const estilo55 = 'display:none';

  $('#layout22AfterClick56').attr('style', estilo45);
  $('#layout22BeforeClick56').attr('style', estilo55);

})