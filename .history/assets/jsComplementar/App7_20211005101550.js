
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
    
    $.post('http://localhost/KEDA/Campeonato/getEscalaoCampeonato',{id_ddd},function(event){
        
        if(event === "9056as34"){
            $('#escalaoCampeonato78').attr('disabled','disabled');
                
                    mostra = `<option value="">Escolhe o Genero</option>`;
                    mostra += `<option value="Masculino">Masculino</option>`;
                    mostra += `<option value="Femenino">Femenino</option>`;

                    $('#genero78').removeAttr('disabled').append(mostra);
               
        }else{
            if(event == 0){
                $('#control65289074rw').html('<div class="text-center p-5">CLIQUE EM <i class="fa fa-edit text-info">Inscricao</i> PARA DEFINIR O ESCALAO ETARIO</div>');
            }
        
            $('#escalaoCampeonato78').html('<option></option>');
            $('#escalaoCampeonato78').append(event);
        }

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
                    // console.log(event2);
                
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