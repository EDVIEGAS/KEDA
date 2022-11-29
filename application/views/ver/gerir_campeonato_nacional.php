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


<section class="content text-sm">

        <!-- Default box -->
        <div class="card">
          <div class="p-1">
              <?php
                if($this->session->flashdata('sucesso_nacional') != NULL):
                  echo $this->session->flashdata('sucesso_nacional');
                endif;
              ?>
          </div>

          <div class="box-tools col-1 mt-2 ml-3 mb-0">
              <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>



              <div class="row">
                <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                  <div class="row">
                    <div class="col-12">
                        <button class="btn btn-danger btn-sm float-right m-4 text-bold" id="AnularCampeonatoNacional3452" data-idcampeonato="<?php echo $idcampeonato;?>"><i class="icon fas fa-ban"></i> Anular realização</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 text-center">
                      <legend class="f-w-400 m-t-0 text-inverse text-center text-bold text-uppercase" style="font-size:22px">CAMPEONATO NACIONAL</legend>
                    </div>
                  </div>
                  <!-- <div class="card card-primary card-outline"> -->

                  <div class="row">
                    <div class="col-12">
                      <!-- <div class="card"> -->
                        <?php if ($valorControl == 1) {?>
                          <div class="row pt-2">
                            <div class="col-5" data-idcampeonato="<?php echo $idcampeonato;?>" id="id_campeonato567ty">
                              <!-- <div class="card"> -->

                                  <div class="row m-2">

                                    <div class="col-md-4">
                                            <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                      <div id="accordion">
                                        <div class="card card-info" style="margin-bottom: 1rem;padding-bottom: -11px;">
                                          <div class="card-header p-2">
                                            <h4 class="card-title w-100">
                                              <a class="d-block w-100 collapsed text-sm" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                              Escalão 
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                            <div class="card-body1" >
                                              <!-- <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                                <li class="nav-item">
                                                  <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Definir</a>
                                                </li>
                                              </ul> -->

                                              <div class="tab-content" id="custom-content-above-tabContent">
                                                <div class="tab-pane fade active show" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                                                  <div class="card-body">
                                                  <form action="" id="formEscalaoSelect4">
                                                    <div>

                                                      <div class="form-group">
                                                          <select class="form-control form-control-sm" name="escalaoSelect34">
                                                              <option value="012vazio">Escolhe uma opcao</option>
                                                              <option value="9056as34">Sem definicao de Escalao</option>
                                                          <?php foreach($escalao as $escalao){?>
                                                              <option value="<?php echo $escalao->descricao_escalao?>"><?php echo $escalao->descricao_escalao?></option>
                                                          <?php }?>
                                                          </select>
                                                      </div>

                                                      <div class="form-group">
                                                          <select class="form-control form-control-sm form-control" name="escalaoGneroSelect34" id="escalaoGneroSelect34" disabled>
                                                              <option></option>
                                                              <option value="Masculino">Masculino</option>
                                                              <option value="Femenino">Femenino</option>
                                                              <option value="Misto">Misto</option>
                                                          </select>
                                                      </div>


                                                      <!-- <div class="custom-control custom-checkbox" style="left: -18px">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1escalaoSelTodos89" value="option1">
                                                        <label for="customCheckbox1escalaoSelTodos89" class="custom-control-label font-weight-normal">Selecionar Todos</label>
                                                      </div> -->

                                                          <div class="col-lg-12">
                                                            <button class="btn btn-primary btn-sm" id="adicionarEscalao567"><i class="fas fa-plus"></i> Adicionar</button>
                                                          </div>

                                                       </div>
                                                    </form>
                                                  </div>
                                                </div>

                                                <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                                                  <div class="row mt-3">

                                                    <div class="col-lg-7">
                                                      <div class="input-group">
                                                        <input class="form-control form-control-sm" type="text" placeholder="">
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-5">
                                                      <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Adicionar</button>
                                                    </div>

                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>



                                        <div class="card card-info">
                                          <div class="card-header p-2">
                                            <h4 class="card-title w-100">
                                              <a class="d-block w-100 text-sm" data-toggle="collapse" href="#collapseTwo">
                                                Categoria
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                                  <li class="nav-item">
                                                    <a class="nav-link active" id="custom-content-above-messages-tab" data-toggle="pill" href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages" aria-selected="false">Idade</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Peso</a>
                                                  </li>
                                                </ul>

                                                <div class="tab-content" id="custom-content-above-tabContent">

                                                  <div class="tab-pane fade active show" id="custom-content-above-messages" role="tabpanel" aria-labelledby="custom-content-above-messages-tab">
                                                  <div class="card-body">
                                                    <div class="col-sm-12">

                                                      <div class="form-group border p-2">
                                                      <?php foreach($categoriaIdade as $categoriaIdade){ ?>
                                                        <div class="custom-control custom-checkbox">
                                                          <input class="custom-control-input peso-input785" type="checkbox" id="<?php echo $categoriaIdade->descricao_categoriaIdade ?>" value="<?php echo $categoriaIdade->descricao_categoriaIdade ?>">
                                                          <label for="<?php echo $categoriaIdade->descricao_categoriaIdade ?>" class="custom-control-label font-weight-normal"><?php echo $categoriaIdade->descricao_categoriaIdade ?></label>
                                                        </div>
                                                      <?php } ?>

                                                      </div>
                                                      <div class="custom-control custom-checkbox" style="left: -18px" id="mensagemVazioAdicionar89">

                                                      </div>
                                                      <div class="custom-control custom-checkbox" style="left: -18px">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1SelecionarTodos" value="">
                                                        <label for="customCheckbox1SelecionarTodos" class="custom-control-label font-weight-normal">Selecionar Todos</label>
                                                      </div>

                                                      <div class="col-lg-12" style="right: -120px;top:7px">
                                                        <button class="btn btn-primary btn-sm" id="adicionarCategoria908"><i class="fas fa-plus"></i> Adicionar</button>
                                                      </div>

                                                    </div>
                                                  </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel" aria-labelledby="custom-content-above-settings-tab">
                                                    <div class="row mt-3 col-lg-12">
                                                    <form method="post" id="categoriaPeso67">
                                                      <div class="col-lg-8">
                                                        <div class="input-group">
                                                          <input class="form-control form-control-sm" type="text" placeholder="" name="categoriaPeso">
                                                        </div>
                                                        <label class="text-danger" id="msnPesoError789"></label>
                                                      </div>

                                                      <div class="col-lg-4">
                                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Adicionar</button>
                                                      </div>
                                                    </form>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="card card-info">
                                          <div class="card-header p-2">
                                            <h4 class="card-title w-100">
                                            <a class="d-block w-100 text-sm" data-toggle="collapse" href="#collapseThree">
                                              Sistema de Luta
                                            </a>
                                            </h4>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion">
                                          <div class="card-body">

                                              <!-- <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">

                                                <li class="nav-item">
                                                  <a class="nav-link active" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Definir</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Adicionar</a>
                                                </li>

                                              </ul> -->
                                              <div class="tab-content" id="custom-content-below-tabContent">

                                                <div class="tab-pane fade show active" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                                                <div class="card-body1">
                                                    <div class="col-sm-12">

                                                      <div class="form-group border p-2">
                                                      <?php foreach($sistemaLuta as $sistemaLuta){?>
                                                        <div class="custom-control custom-checkbox">
                                                          <input class="custom-control-input input-sistLuta234" type="checkbox" id="<?php echo $sistemaLuta->descricao_sistemaLuta ?>" value="<?php echo $sistemaLuta->descricao_sistemaLuta ?>">
                                                          <label for="<?php echo $sistemaLuta->descricao_sistemaLuta ?>" class="custom-control-label font-weight-normal"><?php echo $sistemaLuta->descricao_sistemaLuta ?></label>
                                                        </div>
                                                      <?php }?>
                                                      </div>

                                                      <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1SistemaLutaSelTodos89" value="option1">
                                                        <label for="customCheckbox1SistemaLutaSelTodos89" class="custom-control-label font-weight-normal">Selecionar Todos</label>
                                                      </div>

                                                      <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-primary btn-sm" id="adicionarSistemaLuta7645"><i class="fas fa-plus"></i> Adicionar</button>
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
                                    <div class="col-md-8">
                                        <div class="container-fluid">
                                          <div class="row">
                                            <div class="col-12">

                                              <!-- Main content -->
                                              <div class="invoice p-3 mb-3" style="background:#f4f6f9">
                                                <!-- title row -->

                                                <!-- info row -->
                                                <div class="row invoice-info rounded-top mb-3">
                                                  <div class="col-sm-12 invoice-col conteudo2567">

                                                  </div>
                                                  <div class="col-sm-12 invoice-col pb-0 text-sm">
                                                      <h6>INFORMAÇÕES DO CAMPEONATO</h6><br>
                                                  </div>
                                                </div>


                                                <div class="row">
                                                  <div class="col-12">
                                                    <div class="table-responsive" id="mostrarInfoCampeonato45adas" hidden>

                                                    </div>

                                                    <div class="table-responsive mostrarInfoCampeonato45" style="height:350px" id="mostrarInfoCampeonato45457">
                                                      <div class="card card-info text-sm">
                                                                <div class="card-header p-2" style="border-top-left-radius:0;border-top-right-radius:0">
                                                                  <h6 class="card-title text-sm" style="margin-left: 0px">Sistema de Luta</h6>
                                                                </div>
                                                                <div class="d-flex flex-column" style="border-top-left-radius:0;border-top-right-radius:0">

                                                                  <?php for($i = 0 ; $i < count($sistemaLuta2) ; $i++){ ?>
                                                                    <span class="text-uppercase p-2 pl-4"><?php echo $sistemaLuta2[$i]->descricaosistemaluta; ?></span>
                                                                  <?php } ?>

                                                                </div>

                                                              <?php foreach($teste as $teste){?>
                                                                <div class="card-header p-2" style="border-top-left-radius:0;border-top-right-radius:0">
                                                                  <h6 class="card-title text-sm" style="margin-left: 0px">Escalao Etario - <?php echo $teste['descricao_escalao']?></h6>
                                                                </div>
                                                                <div class="card-body border-0 pt-0 pl-0 pr-0">

                                                                    <div class="justify-content-between align-items-center">

                                                                      <div class="d-flex flex-column">

                                                                        <?php foreach($teste['generos'] as $generos){?>
                                                                          <span class="font-weight-bold text-uppercase p-2 pl-4 text-sm">
                                                                            <i class="text-success"></i>SEXO <?php echo $generos['genero'] ?>
                                                                          </span>

                                                                            <?php foreach($generos['categoriaPesos'] as $pesos){?>
                                                                              <span class="pt-1 ml-5" style="color: #6c757d">
                                                                                <i class=""></i>Categoria  <?php echo $pesos['descricao_categoriaPeso'] ?>
                                                                              </span>

                                                                            <?php } ?>
                                                                        <?php } ?>

                                                                      </div>

                                                                    </div>
                                                                  </div>
                                                              <?php } ?>
                                                      </div>

                                                    </div>

                                                  </div>
                                                  <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <!-- this row will not appear when printing -->
                                                <div class="row no-print pt-2" hidden id="esconderBotao98131213327">
                                                  <div class="col-12">
                                                    <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                                                    <button type="button" class="btn btn-success float-right" id="salvarInformacoesCampeonato765"> Salvar Definicoes
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
                                      <!-- /.col -->
                                    </div>

                                  <!-- </div> -->

                              </div>
                              <div class="col-7" style="top:7px">
                                <div class="card border" style="margin-right: 22px;">
                               
                                  <div class="row card-header col-12 ml-0 mr-0">
                                    <!-- <div class="card-tools"> -->
                                      <div class="col-sm-8 input-group input-group-sm" id="input-group-sm-1234">

                                      </div>

                                    <div class="col-sm-2" data-idcampeonato="<?php echo $idcampeonato;?>" id="id_campeonato567">
                                        <div class="btn-group col-sm-10 float-right btn-sm text-sm">
                                          <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"><i class="fa fa-plus-circle"></i> Inscrever </button>
                                          <div class="dropdown-menu" role="menu" style="">
                                            <!-- <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fas fa-user-plus fa-fw"></i> Criar participante</div></a> -->
                                            <a class="dropdown-item" href="#" id="AdicionarParticipante768"><div><i class="fas fa-users fa-fw"></i> Adicionar apartir de uma Lista</div></a>
                                            <a class="dropdown-item idCompetidor" href="#"><i class="fas fa-user-plus fa-fw"></i> Competidor </a>
                                            <a class="dropdown-item idArbitroJuizo" href="#"><i class="fas fa-user-plus fa-fw"></i> Arbitro/Juizo </a>
                                            <a class="dropdown-item idDirigente" href="#"><i class="fas fa-user-plus fa-fw"></i> Dirigente </a>
                                            <a class="dropdown-item idTreinador" href="#"><i class="fas fa-user-plus fa-fw"></i> Treinador </a>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="btn-group col-sm-10 float-right btn-sm">
                                          <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"> Importar </button>
                                          <div class="dropdown-menu dropdown-menu-sm" role="menu" style="">
                                            <!-- <a class="dropdown-item idPdf234" href="#"><i class="fas fa-print fa-fw"></i> PDF </a> -->
                                            <a class="dropdown-item idLista5429" href="#"><i class="fas fa-list fa-fw"></i> Ver Lista </a>
                                            <a class="dropdown-item idCriarCredenciais5429" href="#"><i class="fas fa-list fa-fw"></i> Criar Credencias </a>
                                          </div>
                                        </div>
                                    </div>

                                  </div>
                                  <div class="col-sm-12 input-group input-group-sm bg bg-info">
                                    <legend class="text-center text-uppercase text-sm p-2"> LISTA DOS PARTICIPANTES NO PROVINCIAL </legend><br>
                                  </div>
                                  <!-- /.card-header -->

                                  <div class="card-body table-responsive p-0 verAllParticipante789P233 table table-bordered table-striped dataTable dtr-inline border-0" role="grid" aria-describeddy="example1_info" style="height: 400px;">

                                  </div>

                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3 mr-3">
                                    <button class="btn btn-info me-md-2 btn-sm" id="me-md-graduacaoListaValidar12" type="button"><i class="fa fa-save" ></i> Validar Lista </button>
                                  </div>


                                </div>
                              </div>
                            </div>
                        <?php } elseif ($valorControl == 2){ ?>

                          <div class="container-fluid">

                            <div class="row">
                              <div class="col-12">
                                <!-- <div class="callout callout-info">
                                  <h5><i class="fas fa-info"></i> Note:</h5>
                                  This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                                </div> -->


                                <!-- Main content -->
                                <div class="invoice p-3 mb-3">

                                  <div class="row no-print" id="pegarListaCategoria764539450" data_id_campeonato="<?php echo $idcampeonato ?>">
                                    <!-- <div class="col-12 mb-4">
                                      <a href="#" rel="noopener" target="_blank" class="btn btn-info btn-sm" id="noopener345"><i class="fas fa-reply"></i> Voltar Para Listagem </a>
                                    </div> -->
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
                                  <!-- /.row -->

                                  <!-- Table row -->
                                  <?php if ($participanteEPcamp[0] != 456){ ?>
                                    <div class="row pt-3">
                                      <div class="col-sm-3">

                                        <div class="card card-info">
                                          <div class="card-header border" style="background:#f4f6f9;">
                                            <h3 class="card-title" id="me-md-graduacao12" style="color:black">LISTA DOS COMPETIDORES</h3>
                                            <div class="card-tools project-actions234">
                                              <div class="input-group input-group-sm" style="width: 105px;">

                                                <div class="input-group-append">
                                                </div>

                                              </div>
                                            </div>
                                          </div>
                                          <!-- /.card-header -->

                                          <div class="table-responsive p-0" style="height: 400px;">

                                                <div class="col-lg-12">

                                                  <div class="card">
                                                  <?php foreach($participanteEPcamp[1] as $participante){ ?>

                                                    <div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">
                                                      <h3 class="card-title font-weight-bold text-uppercase" style="margin-left: -12px">ESCALAO ETARIO <?php echo $participante['escalao']?></h3>
                                                    </div>
                                                    <div class="card-body border-0 pt-0 pl-0 pr-0">

                                                      <div class="justify-content-between align-items-center border-bottom mb-3">

                                                        <div class="d-flex flex-column">
                                                        <?php foreach($participante['generos'] as $genero){ ?>

                                                          <span class="text-uppercase bg-info p-2">
                                                            <i class="text-success"></i>SEXO <?php echo $genero['genero'] ?>
                                                          </span>

                                                              <?php foreach($genero['categoriaPesos'] as $categoriaPeso){ ?>
                                                                <?php if($categoriaPeso['categoriaPeso'] != "" || $categoriaPeso['participantes'] == null){?>
                                                                  <span class="font-weight-bold pt-1 ml-3">
                                                                    <i class=""></i>Categoria de <?php echo $categoriaPeso['categoriaPeso'] ?>
                                                                  </span>
                                                                  <span class="text-muted">
                                                                      <div class="table-responsive col-lg-12">
                                                                        <table class="table table-sm text-sm">
                                                                          <thead>
                                                                            <tr>
                                                                              <th>Nome Completo</th>
                                                                              <th>Peso</th>
                                                                              <th>Funcao</th>

                                                                            </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <?php foreach($categoriaPeso['participantes'] as $participantes){ ?>
                                                                                  <tr>
                                                                                    <td><a href="pages/examples/invoice.html"><?php echo $participantes['nome_participante']?></a></td>
                                                                                    <td><?php echo $participantes['categoria']?> kg</td>
                                                                                    <td><span class="" style=""><?php echo $participantes['funcao']?></span></td>

                                                                                  </tr>
                                                                              <?php } ?>
                                                                          </tbody>
                                                                        </table>
                                                                      </div>
                                                                  </span>
                                                                <?php } ?>
                                                              <?php } ?>

                                                        <?php } ?>
                                                        </div>

                                                      </div>

                                                    </div>
                                                  <?php } ?>
                                                  </div>

                                                </div>

                                          </div>

                                          <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                        <div class="mb-4 mt-4">
                                          <button class="btn btn-success btn-sm" id="definirVencedore756">Definir Vencedores</button>
                                        </div>
                                      </div>

                                      <div class="col-sm-3">
                                        <div class="card card-info">
                                          <div class="card-header border" style="background:#f4f6f9;">
                                            <h3 class="card-title" id="me-md-graduacao12" style="color:black">CLASSIFICACAO FINAL</h3>
                                            <div class="card-tools project-actions234">
                                              <div class="input-group input-group-sm" style="width: 105px;">

                                                <div class="input-group-append">
                                                </div>

                                              </div>
                                            </div>
                                          </div>
                                            <div class="card-body table-responsive p-0" style="height: 400px;">

                                              <div class="table-responsive">

                                            <?php if(count($layoutClassificacaoFinal) != 0){ ?>
                                                <?php foreach($layoutClassificacaoFinal as $ClassificacaoFinal){ ?>
                                                  <div class="bg bg-info p-2">
                                                    <span class="info-box-number text-center mb-2 text-uppercase">ESCALAO ETARIO <?php echo $ClassificacaoFinal['escalao']?></span>
                                                    <!-- <p class="info-box-text text-muted">Classificacao</p> -->
                                                  </div>

                                                    <?php foreach($ClassificacaoFinal['generos'] as $genero){ ?>
                                                      <div class="info-box-content" style="border-top:1px solid #ebebeb;width:100%;padding: 16px 0 8px 16px;">
                                                        <?php if(count($genero['categoriaPesos']) != ""){ ?>
                                                          <span class="info-box-text text-muted">Genero <?php echo $genero['genero'] ?></span>
                                                          <?php foreach($genero['categoriaPesos'] as $categoriaPeso){ ?>
                                                            <?php if(count($categoriaPeso['classificacaoFinals'])!=0){ ?>

                                                                <div style="margin-top: 5px;margin-bottom: 5px;">
                                                                  <div>
                                                                    <span class="tsp-fr tsp-flr tsp-pb4" style="font-family: arial,sans-serif;font-weight: normal;">Categoria de <?php echo $categoriaPeso['descricao_categoriaPeso']?>kg</span>
                                                                  </div>
                                                                </div>
                                                                <?php foreach($categoriaPeso['classificacaoFinals'] as $teste){ ?>


                                                                  <div>
                                                                    <table class="pb-2" style="table-layout: fixed;width:100%;display:inline-table;border-collapse:collapse">
                                                                      <colgroup>
                                                                        <col>
                                                                        <col style="width:100%">
                                                                      </colgroup>
                                                                      <tbody>
                                                                        <tr style="padding-top: 10px;padding-bottom: 10px;background-color: #f8f9fa">
                                                                          <th style="width:24px;">
                                                                            <div>
                                                                              <?php if($teste['posicao'] == 1){?>
                                                                                <img src="http://localhost/KEDA/assets/images/Primeiro_lugar.png" alt="" style="vertical-align:middle;text-align:center" height="16">
                                                                              <?php }elseif($teste['posicao'] == 2) {?>
                                                                                <img src="http://localhost/KEDA/assets/images/Segundo_lugar.png" alt="" style="vertical-align:middle" height="16">
                                                                              <?php }else{?>
                                                                                <img src="http://localhost/KEDA/assets/images/Terceiro_lugar.png" alt="" style="vertical-align:middle" height="16">
                                                                              <?php }?>
                                                                            </div>
                                                                          </th>
                                                                          <td>
                                                                            <div class="user-block">
                                                                              <?php if($teste['imagem'] == null){?>
                                                                                <img class="img-circle img-bordered-sm border-0 p-0" src="http://localhost/KEDA/assets/images/3.jpg" alt="User Image">
                                                                              <?php }else{ ?>
                                                                                <img class="img-circle img-bordered-sm border-0 p-0" src="<?= base_url('uploads/product/' . $teste['imagem']);?>" alt="User Image">
                                                                              <?php } ?>
                                                                              <span class="username">
                                                                                <a href="#"><?php echo $teste['name_participante']?></a>
                                                                              </span>
                                                                              <span class="description"></span>
                                                                            </div>
                                                                          </td>
                                                                        </tr>
                                                                      </tbody>
                                                                    </table>
                                                                  </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                          <?php } ?>
                                                        <?php } ?>
                                                      </div>
                                                    <?php } ?>
                                              <?php } ?>
                                            <?php } ?>
                                          </div>


                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-sm-6">
                                        <div class="container-fluid">

                                          <div class="row">
                                            <div class="col-12">

                                              <div class="invoice p-3 mb-3">
                                                <!-- title row -->
                                                <!-- Table row -->
                                                <div class="row pt-5 pb-4 mt-1 ml-3 mr-3">
                                                  <div class="col-sm-2 pb-2">
                                                    <div class="btn-group" data_id_campeonato="<?php echo $idcampeonato ?>" id="pegarListaCategoria7645390654321">
                                                      <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus-circle"></i> Opcoes </button>
                                                      <div class="dropdown-menu" role="menu" style="">
                                                        <!-- <a class="dropdown-item idCompetidorGerarChaves" href="#"><i class="fas fa-user-plus fa-fw"></i> Gerar Chaves </a> -->
                                                        <a class="dropdown-item" href="http://localhost/KEDA/campeonato/GerarPDFDiplomasCampeonato/<?= $idcampeonato ?>"><i class="fas fa-download fa-fw"></i> Gerar PDF </a>
                                                      </div>
                                                    </div>

                                                  </div>
                                                    <div class="col-12 table-responsive border" style="height: 600px;background-color:#e9ecef;" id="idcontroleTelaCertificado67">

                                                      <div class="text-center p-2" id="result">
                                                                 <strong>Diplomas Gerados</strong>
                                                      </div>
                                                         <?php $soma = 0; ?>
                                                        <?php foreach($layoutClassificacaoFinalCertificado as $layoutClassificacaoFinalCertificado){ ?>
                                                          <?php $soma += 1; ?>

                                                            <div class="card mt-2" style="left: 50%;transform: translateX(-50%);height:419px;width: 598px;background-color: #fff;background-image: url('http://localhost/KEDA/assets/images/certificado.jpg');background-size: 598px;background-repeat: no-repeat;">

                                                                  <div class="info-box-content" style="border-top:1px solid #ebebeb;width:100%;padding: 16px 0 8px 16px;">

                                                                      <div class="">
                                                                        <img class="" src="<?= base_url('uploads/imagem_qr/' . $layoutClassificacaoFinalCertificado->imagem_qr);?>" alt="User Image" height="60px" style="margin-top:25px;margin-left:49px">
                                                                      </div>
                                                                      <div class="" style="left: 50%;top: 38%;position: absolute;transform: translateX(-50%);font-size:14px">

                                                                           <span>O atleta <strong style="font-size:22px"><?php echo $layoutClassificacaoFinalCertificado->name_participante ?></strong>
                                                                                 participou do Campeonato Provincial de Jujtsu-Tradicional de 2020, na categoria <strong>
                                                                                   <?php echo $layoutClassificacaoFinalCertificado->descricao_categoriaPeso ?></strong>, obtendo <?php echo $layoutClassificacaoFinalCertificado->posicaoDes ?></strong>º Lugar.</span>




                                                                           <div class="text-center" id="result">

                                                                           </div>

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
                                                <!-- Table row -->

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

                                            </div><!-- /.col -->
                                          </div><!-- /.row -->
                                        </div><!-- /.container-fluid -->

                                        <!-- <div class="row no-print p-2">
                                          <div class="col-12">
                                            <a href="http://localhost/KEDA/actividade/listarParticipaanteListaFinalizada/<?= $idcampeonato ?>" type="button" data_id_campeonato="<?php echo $idcampeonato ?>" controlBotaoFinalizar="<?php echo $participanteEPcamp[0] ?>" class="btn btn-info btn-sm float-left floatright78956tre34667" style="margin-right: 5px;">
                                              Finalizar
                                            </a>
                                          </div>
                                        </div> -->
                                      </div>
                                    </div>

                                    <div class="row no-print">
                                      <div class="col-12">
                                        <a href="http://localhost/KEDA/actividade/listarParticipaanteListaFinalizada/<?= $idcampeonato ?>" type="button" data_id_campeonato="<?php echo $idcampeonato ?>" controlBotaoFinalizar="<?php echo $participanteEPcamp[0] ?>" class="btn btn-info btn-sm float-left" id="floatright789ou905837" style="margin-right: 5px;">
                                          Finalizar
                                        </a>
                                      </div>
                                    </div>

                                  <?php }else{ ?>

                                    <div class="row pt-3">
                                      <div class="col-sm-12">
                                        <div class="card card-info">
                                          <div class="card-header border" style="background:#f4f6f9;">
                                            <h3 class="card-title" id="me-md-graduacao12" id_actividade="<?= $evento[0]->id_actividade ?>" style="color:black">LISTA DOS PARTICIPANTES</h3>

                                            <div class="card-tools project-actions234">
                                              <div class="input-group input-group-sm" style="width: 105px;">

                                                <div class="input-group-append">

                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- /.card-header -->

                                          <div class="card-body table-responsive p-0" style="height: 400px;">

                                                <div class="col-lg-12">

                                                  <!-- <div class="card">

                                                    <div class="card-body border-0 pt-0 pl-0 pr-0"> -->

                                                      <div class="justify-content-between align-items-center border-bottom mb-3">

                                                        <div class="d-flex flex-column">

                                                              <span class="text-muted">
                                                                  <div class="table-responsive col-lg-12" id="mostrarSeminarioFinal45567">
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
                                        <a href="http://localhost/KEDA/actividade/listarParticipaanteListaFinalizada/<?= $evento[0]->id_actividade ?>" type="button" controlBotaoFinalizar="<?php echo $participanteEPcamp[0] ?>" class="btn btn-info btn-sm float-left floatright789" style="margin-right: 5px;">
                                          Finalizar
                                        </a>
                                      </div>
                                    </div>
                                  <?php } ?>


                                  <!-- <div class="row no-print pb-2">
                                    <div class="col-12">
                                      <a href="" type="button" class="btn btn-primary btn-sm float-left floatright789conteiner8968" style="margin-right: 5px;">
                                        Finalizar
                                      </a>
                                    </div>
                                  </div> -->

                                </div>
                                <!-- /.invoice -->
                              </div><!-- /.col -->
                            </div><!-- /.row -->

                          </div><!-- /.container-fluid -->

                        <?php }else { ?>
                          <!-- <section class="content"> -->
          <!-- Default box -->
                              <!-- <div class="card"> -->
                                <div class="card-body row">
                                  <!-- <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="">
                                      <h1>CAMPEOANTO <strong>NACIONAL</strong></h1>
                                      <p class="lead mb-5"><?= $getCapNacionalInfo[0]->pais_campeonato ?>,<?= $getCapNacionalInfo[0]->cidade_campeonato ?><br>
                                        <?= $getCapNacionalInfo[0]->localdaprova ?>
                                      </p>
                                      <p class="lead mb-5">Director da Prova<br>
                                        <?= $getCapNacionalInfo[0]->director_prova ?>
                                      </p>
                                      <p class="lead mb-5">Numero de Edicao<br>
                                        Edicao - <?= $getCapNacionalInfo[0]->edicao_campeonato ?>
                                      </p>
                                    </div>
                                  </div> -->
                                  <div class="col-12">
                                      <section class="content">
          <!-- Default box -->
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1 border">
                                                <div class="row p-2">
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
                                                      <div class="">
                                                        <div class="card-body table-responsive" style="height: 400px;">

                                                              <div class="col-lg-12">
                                                                    <div class="justify-content-between align-items-center border-bottom mb-3">

                                                                      <div class="d-flex flex-column">
    <!--
                                                                            <span class="text-muted"> -->
                                                                                <div class="table-responsive col-lg-12 pt-3 pb-3" id="mostrarSeminarioFinal4556799">
                                                                                  <div class="table-responsive p-0">

                                                                                        <div class="col-lg-12">

                                                                                          <div class="card">
                                                                                          <?php foreach($participanteEPcamp[1] as $participante){ ?>

                                                                                            <div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">
                                                                                              <h3 class="card-title font-weight-bold text-uppercase" style="margin-left: -12px">ESCALAO ETARIO <?php echo $participante['escalao']?></h3>
                                                                                            </div>
                                                                                            <div class="card-body border-0 pt-0 pl-0 pr-0">

                                                                                              <div class="justify-content-between align-items-center border-bottom mb-3">

                                                                                                <div class="d-flex flex-column">
                                                                                                <?php foreach($participante['generos'] as $genero){ ?>

                                                                                                  <span class="text-uppercase bg-info p-2">
                                                                                                    <i class="text-success"></i>SEXO <?php echo $genero['genero'] ?>
                                                                                                  </span>

                                                                                                      <?php foreach($genero['categoriaPesos'] as $categoriaPeso){ ?>
                                                                                                        <?php if($categoriaPeso['categoriaPeso'] != "" || $categoriaPeso['participantes'] == null){?>
                                                                                                          <span class="font-weight-bold pt-1 ml-3">
                                                                                                            <i class=""></i>Categoria de <?php echo $categoriaPeso['categoriaPeso'] ?>
                                                                                                          </span>
                                                                                                          <span class="text-muted">
                                                                                                              <div class="table-responsive col-lg-12">
                                                                                                                <table class="table table-sm text-sm">
                                                                                                                  <thead>
                                                                                                                    <tr>
                                                                                                                      <th>Nome Completo</th>
                                                                                                                      <th>Peso</th>
                                                                                                                      <th>Funcao</th>

                                                                                                                    </tr>
                                                                                                                  </thead>
                                                                                                                  <tbody>
                                                                                                                      <?php foreach($categoriaPeso['participantes'] as $participantes){ ?>
                                                                                                                          <tr>
                                                                                                                            <td><a href="pages/examples/invoice.html"><?php echo $participantes['nome_participante']?></a></td>
                                                                                                                            <td><?php echo $participantes['categoria']?> kg</td>
                                                                                                                            <td><span class="" style=""><?php echo $participantes['funcao']?></span></td>

                                                                                                                          </tr>
                                                                                                                      <?php } ?>
                                                                                                                  </tbody>
                                                                                                                </table>
                                                                                                              </div>
                                                                                                          </span>
                                                                                                        <?php } ?>
                                                                                                      <?php } ?>

                                                                                                <?php } ?>
                                                                                                </div>

                                                                                              </div>

                                                                                            </div>
                                                                                          <?php } ?>
                                                                                          </div>

                                                                                        </div>

                                                                                  </div>
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
                                                <h5 class="text-primary text-center mt-2"></i> CLASSIFICACAO FINAL</h5>
                                                <!-- <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p> -->
                                                <br>
                                                <div class="text-muted">
                                                  <div class="card card-info">

                                                      <div class="card-body table-responsive p-0" style="height: 400px;">

                                                        <div class="table-responsive">
                                                      <?php foreach($layoutClassificacaoFinal as $ClassificacaoFinal){ ?>
                                                        <?php if(count($layoutClassificacaoFinal) != ""){ ?>


                                                          <!-- <div class="card"> -->
                                                            <!-- <div class="card-header border"> -->

                                                            <div class="bg bg-info p-2">
                                                              <span class="info-box-number text-center mb-2 text-uppercase">ESCALAO ETARIO<?php echo $ClassificacaoFinal['escalao']?></span>
                                                              <!-- <p class="info-box-text text-muted">Classificacao</p> -->
                                                            </div>

                                                              <?php foreach($ClassificacaoFinal['generos'] as $genero){ ?>
                                                                <div class="info-box-content" style="border-top:1px solid #ebebeb;width:100%;padding: 16px 0 8px 16px;">
                                                                  <?php if(count($genero['categoriaPesos']) != ""){ ?>
                                                                    <span class="info-box-text text-muted">Genero <?php echo $genero['genero'] ?></span>
                                                                    <?php foreach($genero['categoriaPesos'] as $categoriaPeso){ ?>
                                                                      <?php if(count($categoriaPeso['classificacaoFinals'])!=0){ ?>

                                                                          <div style="margin-top: 5px;margin-bottom: 5px;">
                                                                            <div>
                                                                              <span class="tsp-fr tsp-flr tsp-pb4" style="font-family: arial,sans-serif;font-weight: normal;">Categoria de <?php echo $categoriaPeso['descricao_categoriaPeso']?>kg</span>
                                                                            </div>
                                                                          </div>
                                                                          <?php foreach($categoriaPeso['classificacaoFinals'] as $teste){ ?>


                                                                            <div>
                                                                              <table class="pb-2" style="table-layout: fixed;width:100%;display:inline-table;border-collapse:collapse">
                                                                                <colgroup>
                                                                                  <col>
                                                                                  <col style="width:100%">
                                                                                </colgroup>
                                                                                <tbody>
                                                                                  <tr style="padding-top: 10px;padding-bottom: 10px;background-color: #f8f9fa">
                                                                                    <th style="width:24px;">
                                                                                      <div>
                                                                                        <?php if($teste['posicao'] == 1){?>
                                                                                          <img src="http://localhost/KEDA/assets/images/Primeiro_lugar.png" alt="" style="vertical-align:middle;text-align:center" height="16">
                                                                                        <?php }elseif($teste['posicao'] == 2) {?>
                                                                                          <img src="http://localhost/KEDA/assets/images/Segundo_lugar.png" alt="" style="vertical-align:middle" height="16">
                                                                                        <?php }else{?>
                                                                                          <img src="http://localhost/KEDA/assets/images/Terceiro_lugar.png" alt="" style="vertical-align:middle" height="16">
                                                                                        <?php }?>
                                                                                      </div>
                                                                                    </th>
                                                                                    <td>
                                                                                      <div class="user-block">
                                                                                        <?php if($teste['imagem'] == null){?>
                                                                                          <img class="img-circle img-bordered-sm border-0 p-0" src="http://localhost/KEDA/assets/images/3.jpg" alt="User Image">
                                                                                        <?php }else{ ?>
                                                                                          <img class="img-circle img-bordered-sm border-0 p-0" src="<?= base_url('uploads/product/' . $teste['imagem']);?>" alt="User Image">
                                                                                        <?php } ?>
                                                                                        <span class="username">
                                                                                          <a href="#"><?php echo $teste['name_participante']?></a>
                                                                                        </span>
                                                                                        <span class="description"></span>
                                                                                      </div>
                                                                                    </td>
                                                                                  </tr>
                                                                                </tbody>
                                                                              </table>
                                                                            </div>
                                                                          <?php } ?>
                                                                      <?php } ?>
                                                                    <?php } ?>
                                                                  <?php } ?>
                                                                </div>
                                                              <?php } ?>

                                                        <?php } ?>
                                                      <?php } ?>
                                                    </div>


                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="text-muted row">
                                                  <span class="text-sm mr-2">DATA E HORA DE INICIO
                                                    <b class="d-block d-block5"><?= $getCapNacionalInfo[0]->dataHoraInicio ?></b>
                                                  </span>
                                                  <span class="text-sm">DATA E HORA DE FIM
                                                    <b class="d-block d-block7"><?= $getCapNacionalInfo[0]->dataHoraFim ?></b>
                                                  </span>
                                                </div>

                                                <div class="text-center mt-3 mb-3">
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

                        <?php  }?>
                              <!-- </div> -->

                  </div>

                  <!-- </div> -->

                </div>
              </div>
            </div>





  </section>
