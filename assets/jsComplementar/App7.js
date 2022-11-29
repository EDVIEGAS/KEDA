
//Funcao para converter data do sistema americano para o Brasileiro

function converterDataAmerBrasil(data){
  let data1 = data.split("-");
  let newDATA = data1[2] +'/'+ data1[1] +'/'+ data1[0];

  return newDATA;
}

//fUNCAO PARA CALCULAR A A VALIDADE DO CARTEIRA DE ATLETA

function calcularDataValidadeCarteira(data){
  let data1 = data.split("-");
  let newDATA = data1[0];

  return parseInt(newDATA) + 5;
}

function getANO(data){
  let data1 = data.split("-");
  let newDATA = data1[0];

  return parseInt(newDATA);
}

function calcularDataValidadeCarteira2(data){
  let data1 = data.split("-");
  let newDATA = data1[2] +'/'+ data1[1] +'/'+ calcularDataValidadeCarteira(data);

  return newDATA;
}

//..............................................................Modal adicionar documento.................................................................

var modalAnularCampeonato = `<div class="modal fade text-sm pb-5" id="modal-default-modalAnularCampeonato" style="top:100px">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-body m-3 pt-2 text-center pb-5 mt-5 text-uppercase text-bold" id="bodyMensagemTrocarEstadoUsuario">
                <p> Tem certeza que pretende Anular a rEALIZACAO DO CAMPEONATO <strong id="oi"></strong>?</p>
                <div>dasdasdasdasdasd</div>
                <button type="button" class="btn btn-danger pull-right" id="aceitarSim678CampNacional"><i class="fas fa-ban"></i> Sim</button>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

  </div>
</div>`;


$('.botaoAddDocument').click(function(){
  if (!$('modal-default-modalAnularCampeonato').length) {
    $('body').append(modalAnularCampeonato);
  }

  $('#modal-default-modalAnularCampeonato').modal("show");
})


//..............................................................Fim Modal adicionar documento.................................................................


//......................Modal anaular realizacao de campeonato................................................................................
var modalAnularCampeonato = `<div class="modal fade text-sm pb-5" id="modal-default-modalAnularCampeonato" style="top:100px">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-body m-3 pt-2 text-center pb-5 mt-5 text-uppercase text-bold" id="bodyMensagemTrocarEstadoUsuario">
                <p> Tem certeza que pretende Anular a rEALIZACAO DO CAMPEONATO <strong id="oi"></strong>?</p>
                <button type="button" class="btn btn-danger pull-right" id="aceitarSim678CampNacional"><i class="fas fa-ban"></i> Sim</button>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
            </div>
          </div>

  </div>
</div>`;


$('#AnularCampeonatoNacional3452').click(function(){

  console.log('ola');
  event.preventDefault();

  let idcampeonato = $(this).attr('data-idcampeonato');

  if (!$('modal-default-modalAnularCampeonato').length) {
      $('body').append(modalAnularCampeonato);
  }

  $('#aceitarSim678CampNacional').click(function(event){
     event.preventDefault();

     $dados = {
        idcampeonato:idcampeonato
      }
     //
     $('#bodyMensagemTrocarEstadoUsuario').html('<div style="align-items:center;display:flex;justify-content:center;"><i class="fas fa-2x fa-sync-alt fa-spin"></i><h6> ANULANDO...</h6></div>');
     $.post('http://localhost/KEDA/campeonato/EliminarCampeonatoANacional', $dados , function(event) {
       window.location.href = 'http://localhost/KEDA/Campeonato/NovoCampeonatoNacional';
     });

     // window.location.href = 'http://localhost/KEDA/Campeonato/ListarCampeonatoNacional/' + idCampeonato;

  })

  $('#modal-default-modalAnularCampeonato').modal("show");
})



//......................Fim Modal anaular realizacao de campeonato................................................................................

var modalAddParticipanteGraduacao908 = `<div class="modal fade text-sm pb-5" id="modal-default-modalAddParticipanteGraduacao908">
<div class="modal-dialog modal-lg primeiro123COMP" style="">
    <div class="modal-content">

        <div class="card" id="loadingP189">
            <div class="card-header border-0">
                <h3 class="card-title mem23 text-bold text-uppercase"><i class="fa fa-user-plus"></i> Competidor</h3>
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


                <div class="row col-lg-12" style="left: 12px">



                    <div class="col-sm-12 text-center" style="color:white">

                      <input type="text" id="table_search876" name="table_search" class="form-control bg bg-gray" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;color:white" onkeyup="pegarViaBilheteParticipanteEventoSeminario()">
                        <div class="input-group-append">

                            <i class="fas fa-search"></i>

                        </div>

                    </div>

                </div>
                <div class="input-group-append2343453453453r">

                </div>
                <form method="post" id="AddParticipanteEvente87490ASDFE43">
                </form>

                </div>
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm fechar4572" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
          <button type="button" class="btn btn-success btn-sm mostrar7648COMP" id="limparEscolha321COMP" hidden><i class="fas fa-rush"></i> Limpar </button>
        </div>

    </div>
</div>
</div>`;

$('.idParticipanteGraduacao9067').on('click', function(event) {

    if (!$('modal-default-modalAddParticipanteGraduacao908').length) {
        $('body').append(modalAddParticipanteGraduacao908);
    }


    $('#modal-default-modalAddParticipanteGraduacao908').modal('show');

})
