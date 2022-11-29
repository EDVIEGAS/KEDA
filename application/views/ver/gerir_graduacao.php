<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gerir Evento</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>

        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content text-sm" id="ESCONDERLista45734534534" idCONTROLmodal8934="<?php echo $idCONTROLmodal8934 ?>">

        <!-- Default box -->
        <div class="card">
          <div class="p-1">
              <?php
                if($this->session->flashdata('sucesso_participante') != NULL):
                  echo $this->session->flashdata('sucesso_participante');
                endif;
              ?>
          </div>

          <div class="box-tools col-1 mt-2 ml-3 mb-0">
              <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>

                <!-- <div class="card-body"> -->
                    <div class="row box-tools mt-2 ml-3 mb-0">
                      <div class="col-12">
                        <div class="col-12 text-center">
                          <legend class="f-w-700 m-t-0 text-inverse text-center text-bold text-uppercase">ORGANIZAR GRADUACAO</legend>
                        </div>
                          <h4 class="text-uppercase" id="pegarListaCategoria76453" data_id_graduacao="<?php echo $id_Graduacao ?>" ></h4>
                          <!-- <div class="post pt-3">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm mr-3" src="<?= base_url('assets/images/Image00001.JPG');?>" alt="user image" style="height:65px;width:65px">
                              <span class="username mb-2">
                                <a href="#"><?php echo $evento[0]->nome_actividade?></a>
                              </span>
                              <span class="description">DATA DE INICIO : <?php echo $evento[0]->data_inicio?></span>
                              <span class="description">DATA DE INICIO : <?php echo $evento[0]->data_fim?></span>
                            </div>

                          </div> -->

                      </div>
                    </div>

                    <?php if($valorControl == 1){?>

                        <div class="tab-content" id="custom-content-below-tabContent">

                          <div class="tab-pane show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                      <div class="row pt-5">
                                        <div class="col-12">
                                          <!-- <div class="card"> -->

                                              <div class="row m-2">

                                                <div class="col-md-2">
                                                        <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                                  <div id="accordion">
                                                    <!-- <div id="controlMessagemVazio567"></div> -->
                                                    <div class="card card-info">
                                                      <div class="card-header p-2">
                                                        <h4 class="card-title w-100">
                                                          <a class="d-block w-100 text-sm" data-toggle="collapse" href="#collapseThree">
                                                            FAIXA DE GRADUACAO
                                                          </a>
                                                        </h4>
                                                      </div>
                                                      <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                        <div class="card-body">

                                                            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">

                                                              <li class="nav-item">
                                                                <a class="nav-link active" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Definir</a>
                                                              </li>
                                                              <!-- <li class="nav-item">
                                                                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Adicionar</a>
                                                              </li> -->

                                                            </ul>
                                                            <div class="tab-content" id="custom-content-below-tabContent">
                                                                <div class="tab-pane fade show active" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">

                                                                    <div class="card-body">
                                                                      <div id="controlMessagemVazio567"></div>
                                                                       <div class="col-sm-12">

                                                                          <div class="form-group border p-2">
                                                                            <?php for($i=0;$i < 10 ;$i++){?>
                                                                              <div class="custom-control custom-checkbox">
                                                                                <input class="custom-control-input input-graduacaoExame234" type="checkbox" id="<?php echo $i ?>" value="<?php echo $i ?>">
                                                                                <?php if($i == 0){?>
                                                                                  <label for="<?php echo $i ?>" class="custom-control-label font-weight-normal">Cinturao Negro</label>
                                                                                <?php }else{ ?>
                                                                                  <label for="<?php echo $i ?>" class="custom-control-label font-weight-normal"><?php echo $i ?>ªDan</label>
                                                                                <?php } ?>
                                                                              </div>
                                                                            <?php }?>
                                                                          </div>

                                                                          <!-- <div class="custom-control custom-checkbox" style="left: -18px">
                                                                            <input class="custom-control-input" type="checkbox" id="customCheckbox1SistemaLutaSelTodos89" value="option1">
                                                                            <label for="customCheckbox1SistemaLutaSelTodos89" class="custom-control-label font-weight-normal">Selecionar Todos</label>
                                                                          </div> -->

                                                                          <div class="col-lg-12" style="right: -120px;top:7px">
                                                                            <button type="submit" class="btn btn-primary btn-sm" id="adicionarGraduacaoExame7645"><i class="fas fa-plus"></i> Adicionar</button>
                                                                          </div>

                                                                        </div>
                                                                      </div>
                                                                </div>
                                                              <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                                                                Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                                              </div>
                                                            </div>

                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                  <!-- /.col -->
                                                <div class="col-md-3">
                                                    <div class="container-fluid">
                                                      <div class="row">
                                                        <div class="col-12">

                                                          <!-- Main content -->
                                                          <div class="invoice p-3 mb-3">
                                                            <!-- title row -->

                                                            <!-- info row -->
                                                            <div class="row invoice-info rounded-top mb-3">
                                                              <div class="col-sm-12 invoice-col conteudo2567">

                                                              </div>
                                                              <div class="col-sm-12 invoice-col bg-info p-2">
                                                                  <strong>INFORMAÇÕES DA GRADUACAO</strong><br>
                                                              </div>
                                                            </div>


                                                            <div class="row">
                                                              <div class="col-12">
                                                                <div class="table-responsive" id="mostrarInfoGraduacao67" style="height:400px">
                                                                  <table class="table table-sm table-borderless table-dark rounded text-sm">
                                                                    <tbody class="border-0">
                                                                      <tr>
                                                                        <?php if(!empty($infoGraduacao)){ ?>
                                                                            <?php foreach ($infoGraduacao as $infoGraduacaoINF): ?>
                                                                              <?php if($infoGraduacaoINF->descricao != "0"){ ?>
                                                                                <span><?php echo $infoGraduacaoINF->descricao ?>ª DAN</span><br>
                                                                              <?php }else{ ?>
                                                                                <span>Cinturao Negro</span><br>
                                                                              <?php } ?>
                                                                            <?php endforeach; ?>
                                                                        <?php }else{ ?>

                                                                        <?php } ?>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                                </div>
                                                              </div>
                                                              <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->

                                                            <!-- this row will not appear when printing -->
                                                            <div class="row no-print">
                                                              <div class="col-12">
                                                                <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                                                                <button type="button" class="btn btn-success float-right" id="salvarInformacoesSeminario765"> Salvar Definicoes
                                                                </button>

                                                              </div>
                                                            </div>
                                                          </div>
                                                          <!-- /.invoice -->
                                                        </div><!-- /.col -->
                                                      </div><!-- /.row -->
                                                    </div>
                                                    <!-- /.card -->
                                                  </div>

                                                <div class="col-md-7">
                                                    <div class="container-fluid">
                                                      <!-- <div id="custom-content-below-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="custom-content-below-profile-tab"> -->
                                                        <div class="row pt-2 border">
                                                          <div class="col-12">
                                                            <!-- <div class="card"> -->
                                                              <!-- <div class="card-header">
                                                                <a class="btn btn-app" style="border-radius: 5px;" id="pegarListaCategoria76453">
                                                                  <i class="fas fa-user" style="display:;font-size:13px"></i> Lista
                                                                </a>
                                                              </div> -->
                                                              <!-- <div class="row">
                                                                <div class="col-12">
                                                                  <div class="card rounded-0">

                                                                    <div class="card-body table-responsive p-0" style="height: 200px;" id="MostrarPossivel789P23">
                                                                      <span id="verAllParticipantePossivel789P23"></spn>
                                                                    </div>

                                                                  </div>

                                                                </div>
                                                              </div> -->
                                                              <div class="row card-header col-12 ml-0 mr-0">
                                                                <!-- <div class="card-tools"> -->

                                                                  <!-- <div class="col-sm-9 input-group input-group-sm" id="input-group-sm-1234">
                                                                    <i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" id="table_search876" name="table_search" class="form-control float-left" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteEventoSeminario()">
                                                                  </div> -->

                                                                    <div class="col-sm-3">
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"><i class="fa fa-plus-circle"></i> Inscrever Participantes</button>
                                                                        <div class="dropdown-menu" role="menu" style="">
                                                                          <!-- <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fas fa-user-plus fa-fw"></i> Criar participante</div></a> -->
                                                                          <a class="dropdown-item" href="#" id="AdicionarParticipante768"><div><i class="fas fa-users fa-fw"></i> Adicionar Lista de participantes</div></a>
                                                                          <a class="dropdown-item idParticipanteGraduacao9067" href="#"><i class="fas fa-user-plus fa-fw"></i> Participante </a>

                                                                        </div>
                                                                      </div>
                                                                    </div>

                                                              </div>

                                                              <div class="card-body table-responsive p-3 verAllParticipante789P23">

                                                              </div>

                                                              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 mb-3" style="margin-right: 68px;">
                                                                <button class="btn btn-info me-md-2" id="me-md-graduacaoListaValidar12000" type="button"><i class="fa fa-save" ></i> Validar Lista </button>

                                                              </div>


                                                          <!-- </div> -->
                                                          </div>
                                                        </div>
                                                      <!-- </div> -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                  <!-- /.col -->
                                              </div>

                                        </div>

                                          <!-- </div> -->
                                      </div>
                                    </div>


                        </div>


                    <?php }elseif ($valorControl == 2) { ?>

                        <section class="content">
                              <div class="container-fluid">
                                <!-- <div class="box-tools col-1 mt-2 ml-3 mb-0">
                                    <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
                                </div> -->
                                <div class="row">
                                  <div class="col-12">
                                    <!-- <div class="callout callout-info">
                                      <h5><i class="fas fa-info"></i> Note:</h5>
                                      This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                                    </div> -->


                                    <!-- Main content -->
                                    <div class="invoice p-3 mb-3">

                                      <div class="row no-print" id="pegarListaCategoria764539450">
                                        <div class="col-12 mb-4">
                                          <a href="#" rel="noopener" target="_blank" class="btn btn-info btn-sm" id="noopener345"><i class="fas fa-reply"></i> Voltar Para Listagem </a>
                                        </div>
                                      </div>
                                      <!-- title row -->
                                      <div class="row">
                                        <!-- <div class="col-12">
                                          <h4>
                                            <i class="fas fa-globe"></i> AdminLTE, Inc.
                                            <small class="float-right">Date: 2/10/2014</small>
                                          </h4>
                                        </div> -->
                                        <!-- /.col -->
                                      </div>
                                      <!-- info row -->
                                      <div class="row invoice-info">

                                      </div>

                                        <div class="row pt-3">
                                          <div class="col-sm-12">
                                            <div class="card card-info">
                                              <div class="card-header border" style="background:#f4f6f9;">
                                                <h3 class="card-title" id="me-md-graduacao12" style="color:black">LISTA DOS PARTICIPANTES</h3>

                                                <!-- <div class="card-tools project-actions234">
                                                  <div class="input-group input-group-sm" style="width: 105px;">

                                                    <div class="input-group-append">

                                                    </div>
                                                  </div>
                                                </div> -->
                                              </div>
                                              <!-- /.card-header -->

                                              <div class="card-body table-responsive p-0" style="height: 400px;">

                                                    <div class="col-lg-12">

                                                      <!-- <div class="card">

                                                        <div class="card-body border-0 pt-0 pl-0 pr-0"> -->

                                                          <div class="justify-content-between align-items-center border-bottom mb-3">

                                                            <div class="d-flex flex-column">

                                                                  <span class="">
                                                                      <div class="table-responsive col-lg-12 pt-3 pb-3" id="mostrarSeminarioFinal45567">
                                                                        <!--  -->
                                                                      </div>
                                                                  </span>

                                                            </div>

                                                          </div>

                                                        <!-- </div>

                                                      </div> -->

                                                    </div>


                                              </div>

                                              <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                          </div>

                                        </div>

                                        <div class="row no-print">
                                          <div class="col-12">
                                            <!-- <button type="button" controlBotaoFinalizar="<?php echo $id_Graduacao ?>" id="me-md-graduacaoListaValidar12777" class="btn btn-info btn-sm float-left floatright789" style="margin-right: 5px;">
                                              Finalizar
                                            </button> -->
                                            <button class="btn btn-info btn-sm float-left floatright789" style="margin-right: 5px;" id="me-md-graduacaoListaValidar12777" type="button"><i class="fa fa-save" ></i> Finalizar </button>
                                          </div>
                                        </div>


                                    </div>
                                    <!-- /.invoice -->
                                  </div><!-- /.col -->
                                </div><!-- /.row -->
                              </div><!-- /.container-fluid -->
                        </section>

                    <?php }elseif ($valorControl == 3) { ?>
                      <div class="container-fluid text-sm">


                        <div class="row">
                          <div class="col-12">

                            <div class="invoice p-3 mb-3">

                              <div class="pt-5 pb-4">



                                <div class="row">

                                  <div class="col-5 table-responsive d-flex flex-column">
                                    <div class="table-responsive" style="height: 600px;" id="divMostrarListaClassificacao45">

                                                <div class="card-body table-responsive p-0 border">
                                                  <table class="table table-striped table-valign-middle table-sm text-sm">
                                                    <thead class="bg-info">
                                                    <tr>
                                                      <th>Foto</th>
                                                      <th>Nome Completo</th>
                                                      <th>Genero</th>
                                                      <th>Provincia</th>
                                                      <th>Nova Graduacao</th>
                                                      <th>Exame</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php foreach($layoutParticipantesAprovadosGraduacao as $ClassificacaoFinal){ ?>
                                                    <tr>
                                                      <td>
                                                        <?php if($ClassificacaoFinal->imagem == null){?>
                                                          <img class="img-circle" src="http://localhost/KEDA/assets/images/3.jpg" alt="User Image" height="40px">
                                                        <?php }else{ ?>
                                                          <img class="img-circle img-bordered-sm border-0 p-0" src="<?= base_url('uploads/product/' . $ClassificacaoFinal->imagem);?>" alt="User Image">
                                                        <?php } ?>
                                                      </td>
                                                      <td><?php echo $ClassificacaoFinal->nome_participante ?></td>
                                                      <td>
                                                        <?php echo $ClassificacaoFinal->genero ?>
                                                      </td>
                                                      <td>
                                                        <?php echo $ClassificacaoFinal->provincia ?>
                                                      </td>
                                                      <td style="color: red">

                                                        <?php if ($ClassificacaoFinal->nova_graduacao == 0){?>
                                                          Faixa Negra
                                                        <?php }else{ ?>
                                                            <?php echo $ClassificacaoFinal->nova_graduacao ?>ª D
                                                        <?php } ?>

                                                      </td>
                                                      <td>
                                                        <?php echo $ClassificacaoFinal->tipo ?>
                                                      </td>
                                                    </tr>

                                                    <?php } ?>
                                                    </tbody>
                                                  </table>
                                                </div>
                                    </div>
                                  </div>

                                  <div class="col-7">

                                    <div class="container-fluid">

                                      <div class="row">
                                        <div class="col-12">

                                          <div class="invoice p-3 mb-3">
                                            <!-- title row -->
                                            <!-- Table row -->
                                            <div class="row pt-5 pb-4 mt-1 ml-3 mr-3">
                                              <div class="col-sm-2 pb-2">
                                                <div class="btn-group" data_id_campeonato="<?php echo $id_Graduacao ?>" id="pegarListaCategoria7645390654321">
                                                  <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus-circle"></i> Opcoes </button>
                                                  <div class="dropdown-menu" role="menu" style="">
                                                    <!-- <a class="dropdown-item idCompetidorGerarChaves" href="#"><i class="fas fa-user-plus fa-fw"></i> Gerar Chaves </a> -->
                                                    <a class="dropdown-item" href="http://localhost/KEDA/graduacao/GerarPDFCertificado/<?= $id_Graduacao ?>"><i class="fas fa-download fa-fw"></i> Gerar PDF </a>
                                                  </div>
                                                </div>

                                              </div>
                                                <div class="col-12 table-responsive border" style="height: 600px;background-color:#e9ecef;" id="idcontroleTelaCertificado67">

                                                  <div class="text-center p-2" id="result">
                                                             <strong>Diplomas Gerados</strong>
                                                  </div>
                                                     <?php $soma = 0; ?>
                                                    <?php foreach($layoutParticipantesAprovadosGraduacao as $layoutClassificacaoFinalCertificado){ ?>
                                                        <?php $soma += 1; ?>
                                                        <div class="card mt-2" style="left: 50%;transform: translateX(-50%);height:419px;width: 598px;background-color: #fff;background-image: url('http://localhost/KEDA/assets/images/certificado.jpg');background-size: 598px;background-repeat: no-repeat;">

                                                              <div class="info-box-content" style="border-top:1px solid #ebebeb;width:100%;padding: 16px 0 8px 16px;">

                                                                  <div class="">
                                                                    <img class="" src="<?= base_url('uploads/imagem_qr/' . $layoutClassificacaoFinalCertificado->imagem_qr);?>" alt="User Image" height="60px" style="margin-top:25px;margin-left:49px">
                                                                  </div>
                                                                  <div class="" style="left: 50%;top: 31%;position: absolute;transform: translateX(-50%);">
                                                                      <h6 class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:12px">
                                                                       A federação Angolana de Ju-Jitsu outorga a
                                                                     </h6>
                                                                      <h6 class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:24px">
                                                                       <strong><?php echo $layoutClassificacaoFinalCertificado->nome_participante ?></strong>
                                                                     </h6>
                                                                      <h6 class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:12px">
                                                                       O titulo de
                                                                     </h6>
                                                                     <h6 class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:24px">
                                                                       <?php if ($layoutClassificacaoFinalCertificado->nova_graduacao == null): ?>
                                                                           <strong>Cinturao Negro <?php echo $layoutClassificacaoFinalCertificado->nova_graduacao ?></strong>
                                                                       <?php else: ?>
                                                                           <strong>Cinturao Negro <?php echo $layoutClassificacaoFinalCertificado->nova_graduacao ?>ª DAN</strong>
                                                                       <?php endif; ?>

                                                                    </h6>
                                                                    <h6 class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:12px">
                                                                     Por merito e reconhecimento
                                                                   </h6>

                                                                  </div>
                                                              </div>

                                                              <div class="text-center" style="display: flex;flex-direction: row;margin-top: 159px;margin-left: 0px;margin-right: 0px;padding-left: 112px;">

                                                                <div style="text-align:center;margin-left: 0px;padding-left: 0px;border-left-width: 0px;border-left-style: solid;padding-right: 47px;margin-top: 76px;">
                                                                    <!-- <div style="margin-left: -34px;margin-top: 262px"> -->
                                                                      <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:10px;text-align:center;color:#6da9a7">
                                                                         <span>edson filomena</span>
                                                                       </h6>
                                                                       <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:10px;text-align:center;color:#6da9a7">
                                                                        Presidente da Federação
                                                                      </h6>
                                                                    <!-- </div> -->
                                                                </div>

                                                                <img class="img-circle" src="http://localhost/KEDA/assets/images/A22.PNG" alt="User Image" style="margin-top:51px;margin-left: 5px;" height="60px">

                                                                <div style="text-align:center;padding-left: 49px;margin-top: 77px;">
                                                                    <!-- <div style="margin-left: -34px;margin-top: 262px"> -->
                                                                      <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:10px;text-align:center;color:#6da9a7">
                                                                         <span>Manuel da Rocha7</span>
                                                                       </h6>
                                                                       <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:10px;text-align:center;color:#6da9a7">
                                                                      Secretario Geral
                                                                      </h6>
                                                                    <!-- </div> -->
                                                                </div>

                                                              </div>

                                                        </div>

                                                    <?php } ?>
                                                </div>

                                              </div>

                                              <div class="row">
                                                <!-- accepted payments column -->
                                                <div class="col-6">
                                                  <!-- <p class="lead">Payment Methods:</p>
                                                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                                                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                                                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                                    plugg
                                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                                  </p> -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-6">
                                                  <p class="lead"></p>

                                                  <div class="table-responsive">
                                                    <table class="table">
                                                      <tbody><tr>
                                                        <th style="width:50%">Certificados Gerados : </th>
                                                        <td><?php echo $soma; ?></td>
                                                      </tr>

                                                    </tbody></table>
                                                  </div>
                                                </div>
                                                <!-- /.col -->
                                              </div>
                                              <!-- /.row -->

                                              <!-- this row will not appear when printing -->
                                              <div class="row no-print">
                                                <div class="col-12 mt-2 ml-3 mb-0">

                                                  <button type="button" class="btn btn-info float-right gerarRelatorioFinalCampeonato btn-sm" style="margin-right: 5px;" id="gerarRelatorioFinalCampeonato">
                                                    <i class="fas fa-download"></i> Gerar Relatorio
                                                  </button>
                                                </div>
                                              </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </div>
                            <!-- /.invoice -->
                          </div><!-- /.col -->

                        <div class="row no-print p-2">
                          <div class="col-12">
                            <a href="http://localhost/KEDA/actividade/listarParticipaanteListaFinalizada/<?= $id_Graduacao ?>" type="button" id="me-md-graduacaoListaValidar128888" class="btn btn-info btn-sm float-left" style="margin-right: 5px;">
                              Finalizar
                            </a>
                          </div>
                        </div>

                    <?php }else{ ?>

                      <!-- <section class="content"> -->
      <!-- Default box -->
                          <!-- <div class="card"> -->
                            <div class="card-body row">
                              <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                <div class="">
                                  <h1>Seminario de <strong>Graduacao</strong></h1>
                                  <p class="lead mb-5"><?= $totalInfoSeminario[0]->pais_campeonato ?>,<?= $totalInfoSeminario[0]->cidade_campeonato ?><br>
                                    <?= $totalInfoSeminario[0]->pais_campeonato ?>
                                  </p>
                                </div>
                              </div>
                              <div class="col-9">
                                  <section class="content">
      <!-- Default box -->
                                    <!-- <div class="card"> -->
                                      <!-- <div class="card-header">
                                        <h3 class="card-title">Projects Detail</h3>

                                        <div class="card-tools">
                                          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                          </button>
                                          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                            <i class="fas fa-times"></i>
                                          </button>
                                        </div>
                                      </div> -->
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1">
                                            <div class="row">
                                              <div class="col-12 col-sm-4">
                                                <div class="info-box bg-light">
                                                  <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Total de Participantes</span>
                                                    <span class="info-box-number text-center text-muted mb-0 info-box-number555">2300</span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-12 col-sm-4">
                                                <div class="info-box bg-light">
                                                  <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Masculino</span>
                                                    <span class="info-box-number text-center text-muted mb-0 info-box-number222">2000</span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-12 col-sm-4">
                                                <div class="info-box bg-light">
                                                  <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Femenino</span>
                                                    <span class="info-box-number text-center text-muted mb-0 info-box-number666">20</span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-12">
                                                <h5 class="text-center">LISTA DOS PARTICIPANTES</h5>
                                                  <div class="border">
                                                    <div class="card-body table-responsive p-0" style="height: 600px;">

                                                          <div class="col-lg-12">
                                                                <div class="justify-content-between align-items-center border-bottom mb-3">

                                                                  <div class="d-flex flex-column">
<!--
                                                                        <span class="text-muted"> -->
                                                                            <div class="table-responsive col-lg-12 pt-3 pb-3" id="mostrarSeminarioFinal4556799">
                                                                              <!--  -->
                                                                            </div>
                                                                        <!-- </span> -->

                                                                  </div>

                                                                </div>
                                                        </div>
                                                    </div>
                                                  </div>

                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12 col-md-12 col-lg-5 order-1 order-md-2 border">
                                            <h3 class="text-primary"></i> AdminLTE v3</h3>
                                            <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                            <br>
                                            <div class="text-muted">
                                              <p class="text-sm">Total de Aprovados
                                                <b class="d-block d-block5">Deveint Inc</b>
                                              </p>
                                              <p class="text-sm">Total de Reprovados
                                                <b class="d-block d-block7">Tony Chicken</b>
                                              </p>
                                            </div>

                                            <h5 class="mt-5 text-muted">Project files</h5>
                                            <ul class="list-unstyled">
                                              <li>
                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                                              </li>
                                              <li>
                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                                              </li>
                                              <li>
                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                                              </li>
                                              <li>
                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                                              </li>
                                              <li>
                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                                              </li>
                                            </ul>
                                            <div class="text-center mt-5 mb-3">
                                              <a href="#" class="btn btn-sm btn-primary">Add files</a>
                                              <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- /.card-body -->
                                    <!-- </div> -->
                                    <!-- /.card -->
                                  </section>
                              </div>
                            </div>
                          <!-- </div> -->

                        <!-- </section> -->

                    <?php } ?>
      </div>
  </section>
