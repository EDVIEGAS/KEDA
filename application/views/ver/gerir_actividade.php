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

<?php if($StatusControl->status == '0' && $StatusControl->id_actividade == $eventoId){?>

  <section class="content" id="content-ESCONDERLista457">

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
                          <h4 class="text-uppercase" id="pegarListaCategoria7645390" data-evento="<?php echo $eventoId ?>" data_id_campeonato="<?php echo $id_campeonato ?>" data-id_associacao_pro="<?php echo $id_associacao_pro;?>"><?php echo $evento[0]->nome_actividade?></h4>
                          <div class="post pt-3">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm mr-3" src="<?= base_url('assets/images/Image00001.JPG');?>" alt="user image" style="height:65px;width:65px">
                              <span class="username mb-2">
                                <a href="#"><?php echo $evento[0]->nome_actividade?></a>
                              </span>
                              <span class="description">DATA DE INICIO : <?php echo $evento[0]->data_inicio?></span>
                              <span class="description">DATA DE INICIO : <?php echo $evento[0]->data_fim?></span>
                            </div>
                            <!-- /.user-block -->
                            <?php $palavra1 = explode(' ',trim($evento[0]->nome_actividade));?>

                            <?php if($palavra1[0] == 'Campeonato'){?>
                              <div class="text-muted mr-5">
                                <p class="text-sm">LOCAL DA PROVA
                                  <b class="d-block"><?php echo $evento[0]->local?></b>
                                </p>
                              </div>
                            <?php }?>
                          </div>

                      </div>
                    </div>
                    <?php if(empty($controlTI45)){?>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 mb-3">
                      <button class="btn btn-primary me-md-2" id="me-md-graduacao12" type="button" id_actividade="<?= $evento[0]->id_actividade ?>" nome_actividade="<?= $palavra1[0]?>"><i class="fa fa-plus-circle" ></i> ADICIONAR INFORMAÇÕES </button>
                    </div>
                    <?php }?>

                    <?php if(!empty($controlTI45)){?>

                        <?php if($palavra1[0] == 'Campeonato'){?>
                              <div class="card-header p-0 pt-1 card card-primary card-tabs card-outline box-tools mt-2 ml-4 mb-0 mr-4" id="controlPainel123" variavelControl="<?= $StatusControl->status?>" >
                                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-home-tab"  class="nav-link active" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><i class="fa-fw fa-edit fa"></i> Inscrição</a></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="true"><i class="fa-fw fa-user fa"></i> Participantes</a>
                                  </li>
                                </ul>
                                <div>

                                  <div class="tab-content" id="custom-content-below-tabContent">

                                    <div class="tab-pane show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                    <div class="row pt-5">
                                      <div class="col-12">
                                        <div class="card">

                                            <div class="row m-2">

                                              <div class="col-md-3">
                                                      <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                                <div id="accordion">
                                                  <div class="card card-info" style="margin-bottom: 1rem;padding-bottom: -11px;">
                                                    <div class="card-header p-2">
                                                      <h4 class="card-title w-100">
                                                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                                          Escalao
                                                        </a>
                                                      </h4>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                                      <div class="card-body">
                                                        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                                          <li class="nav-item">
                                                            <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Definir</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Genero</a>
                                                          </li>
                                                        </ul>

                                                        <div class="tab-content" id="custom-content-above-tabContent">
                                                          <div class="tab-pane fade active show" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                                                            <div class="card-body">
                                                            <form action="" id="formEscalaoSelect4">
                                                              <div class="col-sm-12">

                                                                    <div class="form-group">
                                                                        <select class="form-control form-control-sm form-control" name="escalaoSelect34">
                                                                            <option value="">Escolhe uma opcao</option>
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
                                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
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
                                                      <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                                        Sistema de Luta
                                                      </a>
                                                      </h4>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">

                                                        <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">

                                                          <li class="nav-item">
                                                            <a class="nav-link active" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Definir</a>
                                                          </li>
                                                          <li class="nav-item">
                                                            <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Adicionar</a>
                                                          </li>

                                                        </ul>
                                                        <div class="tab-content" id="custom-content-below-tabContent">

                                                          <div class="tab-pane fade show active" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                                                          <div class="card-body">
                                                              <div class="col-sm-12">

                                                                <div class="form-group border p-2">
                                                                <?php foreach($sistemaLuta as $sistemaLuta){?>
                                                                  <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input input-sistLuta234" type="checkbox" id="<?php echo $sistemaLuta->descricao_sistemaLuta ?>" value="<?php echo $sistemaLuta->descricao_sistemaLuta ?>">
                                                                    <label for="<?php echo $sistemaLuta->descricao_sistemaLuta ?>" class="custom-control-label font-weight-normal"><?php echo $sistemaLuta->descricao_sistemaLuta ?></label>
                                                                  </div>
                                                                <?php }?>
                                                                </div>

                                                                <div class="custom-control custom-checkbox" style="left: -18px">
                                                                  <input class="custom-control-input" type="checkbox" id="customCheckbox1SistemaLutaSelTodos89" value="option1">
                                                                  <label for="customCheckbox1SistemaLutaSelTodos89" class="custom-control-label font-weight-normal">Selecionar Todos</label>
                                                                </div>

                                                                <div class="col-lg-12" style="right: -120px;top:7px">
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
                                              <div class="col-md-9">
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
                                                            <div class="col-sm-12 invoice-col pb-0">
                                                                <h5><strong>INFORMAÇÕES DO CAMPEONATO</strong></h5><br>
                                                            </div>
                                                          </div>


                                                          <div class="row">
                                                            <div class="col-12">
                                                              <div class="table-responsive" id="mostrarInfoCampeonato45adas" hidden>

                                                              </div>

                                                              <div class="table-responsive mostrarInfoCampeonato45" style="height:400px" id="mostrarInfoCampeonato45457">
                                                                  <div class="card card-info">

                                                                            <div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">
                                                                              <h3 class="card-title text-uppercase" style="margin-left: -12px">SISTEMA DE LUTA : </h3>
                                                                              <?php for($i = 0 ; $i < count($sistemaLuta2) ; $i++){ ?>
                                                                                <span class="text-uppercase p-2 pl-4"><?php echo $sistemaLuta2[$i]->descricaosistemaluta; ?></span>
                                                                              <?php } ?>

                                                                            </div>

                                                                          <?php foreach($teste as $teste){?>
                                                                            <div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">
                                                                              <h3 class="card-title text-uppercase" style="margin-left: -12px">ESCALAO ETARIO <?php echo $teste['descricao_escalao']?></h3>
                                                                            </div>
                                                                            <div class="card-body border-0 pt-0 pl-0 pr-0">

                                                                                <div class="justify-content-between align-items-center">

                                                                                  <div class="d-flex flex-column">

                                                                                    <?php foreach($teste['generos'] as $generos){?>
                                                                                      <span class="font-weight-bold text-uppercase p-2 pl-4">
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

                                            </div>

                                        </div>
                                      </div>
                                  </div>

                                    <div id="custom-content-below-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                                      <div class="row pt-2">
                                        <div class="col-12">
                                          <div class="card">
                                            <div class="card-header" hidden>
                                              <a class="btn btn-app" style="border-radius: 5px;" id="pegarListaCategoria76453" data-id_associacao_pro="<?php echo $id_associacao_pro;?>" idEvento="<?php echo $evento[0]->id_actividade?>">

                                                <i class="fas fa-user" style="display:;font-size:13px"></i> Lista
                                              </a>
                                            </div>
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card rounded-0">

                                                  <div class="card-body table-responsive p-0" style="height: 200px;" hidden id="MostrarPossivel789P23">
                                                  <span id="verAllParticipantePossivel789P23"></spn>
                                                  </div>
                                                  <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                              </div>
                                            </div>
                                            <div class="row card-header col-12 ml-0 mr-0">
                                              <!-- <div class="card-tools"> -->
                                                <div class="col-sm-8 input-group input-group-sm" id="input-group-sm-1234">
                                                  <i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" id="table_search876" name="table_search" class="form-control float-left" data-id_associacao_pro="<?php echo $id_associacao_pro;?>" idEvento="<?php echo $evento[0]->id_actividade?>" dataid-id_associacao_pro="<?php echo $id_associacao_pro;?>" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteEvento()">
                                                </div>

                                              <div class="col-sm-2">
                                                  <div class="btn-group col-sm-10 float-right btn-sm" style="left:73px">
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
                                                  <div class="btn-group col-sm-10 float-right btn-sm" style="left:29px">
                                                    <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"> Importar </button>
                                                    <div class="dropdown-menu dropdown-menu-sm" role="menu" style="">
                                                      <a class="dropdown-item idPdf234" href="#"><i class="fas fa-print fa-fw"></i> PDF </a>
                                                      <a class="dropdown-item idLista5429" href="#"><i class="fas fa-list fa-fw"></i> Ver Lista </a>
                                                      <a class="dropdown-item idCriarCredenciais5429" href="#"><i class="fas fa-list fa-fw"></i> Criar Credencias </a>
                                                    </div>
                                                  </div>
                                              </div>

                                            </div>
                                            <!-- /.card-header -->

                                            <div class="card-body table-responsive p-0 verAllParticipante789P233 table table-bordered table-striped dataTable dtr-inline border-0" role="grid" aria-describeddy="example1_info" style="height: 400px;">

                                            </div>

                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 mb-3" style="margin-right: 68px;">
                                              <button class="btn btn-info me-md-2 btn-sm" id="me-md-graduacaoListaValidar12" type="button" id_actividade="<?= $evento[0]->id_actividade ?>"><i class="fa fa-save" ></i> Validar Lista </button>
                                              <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                            </div>


                                        </div>
                                      </div>
                                    </div>

                                  </div>
                              </div>
                          <!-- </div> -->


                  <!-- /.card-body -->
                                <!-- </div> -->
                        <?php }else{ ?>
                              <div class="card-header p-0 pt-1 card card-primary card-tabs card-outline" id="controlPainel123">
                                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-home-tab"  class="nav-link active" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><i class="fa-fw fa-edit fa"></i> Inscrição</a></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="true"><i class="fa-fw fa-user fa"></i> Participantes</a>
                                  </li>
                                </ul>
                              <div>

                              <div class="tab-content" id="custom-content-below-tabContent">

                                  <div class="tab-pane show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                    <div class="row pt-5">
                                      <div class="col-12">
                                        <!-- <div class="card"> -->

                                            <div class="row m-2">

                                              <div class="col-md-3">
                                                      <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                                <div id="accordion">
                                                  <div id="controlMessagemVazio567" hidden><span style="color:red">Selecione uma Faixa de Graduacao</span></div>
                                                  <div class="card card-info">
                                                    <div class="card-header p-2">
                                                      <h4 class="card-title w-100">
                                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
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

                                                                <div class="custom-control custom-checkbox" style="left: -18px">
                                                                  <input class="custom-control-input" type="checkbox" id="customCheckbox1SistemaLutaSelTodos89" value="option1">
                                                                  <label for="customCheckbox1SistemaLutaSelTodos89" class="custom-control-label font-weight-normal">Selecionar Todos</label>
                                                                </div>

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
                                              <div class="col-md-9">
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
                                                            <div class="col-sm-4 invoice-col">
                                                                <strong>INFORMAÇÕES DA GRADUACAO</strong><br>
                                                            </div>
                                                          </div>


                                                          <div class="row">
                                                            <div class="col-12">
                                                              <div class="table-responsive" id="mostrarInfoGraduacao67">
                                                                <table class="table table-sm table-borderless table-dark rounded text-sm">
                                                                  <tbody class="border-0">
                                                                    <tr>
                                                                      <?php foreach ($infoGraduacao as $infoGraduacaoINF): ?>
                                                                        <?php if($infoGraduacaoINF->descricao != "0"){ ?>
                                                                          <span><?php echo $infoGraduacaoINF->descricao ?>ª DAN</span><br>
                                                                        <?php }else{ ?>
                                                                          <span>Cinturao Negro</span><br>
                                                                        <?php } ?>
                                                                      <?php endforeach; ?>
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
                                                <!-- /.col -->
                                              </div>

                                            </div>

                                        <!-- </div> -->
                                      </div>
                                    </div>

                                    <div id="custom-content-below-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                                      <div class="row pt-2">
                                        <div class="col-12">
                                          <!-- <div class="card"> -->
                                            <div class="card-header" hidden>
                                              <a class="btn btn-app" style="border-radius: 5px;" id="pegarListaCategoria76453" data-id_associacao_pro="<?php echo $id_associacao_pro;?>" idEvento="<?php echo $evento[0]->id_actividade?>" nomeEventoActividade="<?php echo $evento[0]->nome_actividade?>">
                                                <i class="fas fa-user" style="display:;font-size:13px"></i> Lista
                                              </a>
                                            </div>
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card rounded-0">

                                                  <div class="card-body table-responsive p-0" style="height: 200px;" hidden id="MostrarPossivel789P23">
                                                    <span id="verAllParticipantePossivel789P23"></spn>
                                                  </div>

                                                </div>

                                              </div>
                                            </div>
                                            <div class="row card-header col-12 ml-0 mr-0">
                                              <!-- <div class="card-tools"> -->

                                                <div class="col-sm-9 input-group input-group-sm" id="input-group-sm-1234">
                                                  <i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" id="table_search876" name="table_search" class="form-control float-left" data-id_associacao_pro="<?php echo $id_associacao_pro;?>" idEvento="<?php echo $evento[0]->id_actividade?>" dataid-id_associacao_pro="<?php echo $id_associacao_pro;?>" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteEventoSeminario()">
                                                </div>

                                                  <div class="col-sm-3">
                                                    <div class="btn-group" style="right: -90px">
                                                      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"><i class="fa fa-plus-circle"></i> Inscrever Participantes</button>
                                                      <div class="dropdown-menu" role="menu" style="">
                                                        <!-- <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fas fa-user-plus fa-fw"></i> Criar participante</div></a> -->
                                                        <a class="dropdown-item" href="#" id="AdicionarParticipante768"><div><i class="fas fa-users fa-fw"></i> Adicionar Lista de participantes</div></a>
                                                        <a class="dropdown-item idCompetidor" href="#"><i class="fas fa-user-plus fa-fw"></i> Participante </a>

                                                      </div>
                                                    </div>
                                                  </div>

                                            </div>

                                            <div class="card-body table-responsive p-0 verAllParticipante789P23">

                                            </div>

                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 mb-3" style="margin-right: 68px;">
                                              <button class="btn btn-info me-md-2" id="me-md-graduacaoListaValidar12" type="button" id_actividade="<?= $evento[0]->id_actividade ?>"><i class="fa fa-save" ></i> Validar Lista </button>

                                            </div>


                                        <!-- </div> -->
                                      </div>
                                    </div>
                                  </div>
                              </div>

                            </div>

                        <?php } ?>

                    <?php }else{?>
                    <?php }?>


        <!-- /.card -->

  </section>

<?php }elseif($StatusControl->status == '1' && $StatusControl->id_actividade == $eventoId){?>

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

                <div class="row no-print" id="pegarListaCategoria764539450" data-evento="<?php echo $eventoId ?>" data_id_campeonato="<?php echo $id_campeonato ?>" data-id_associacao_pro="<?php echo $id_associacao_pro;?>">
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
                <!-- /.row -->

                <!-- Table row -->
                <?php if ($participanteEPcamp[0] != 456){ ?>
                  <div class="row pt-3">
                    <div class="col-sm-8">
                      <div class="card card-info">
                        <div class="card-header border" style="background:#f4f6f9;">
                          <h3 class="card-title" id="me-md-graduacao12" id_actividade="<?= $evento[0]->id_actividade ?>" style="color:black">LISTA DOS COMPETIDORES</h3>

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
                                          <?php if(count($categoriaPeso['participantes']) != 0){?>
                                            <span class="font-weight-bold pt-1 ml-3">
                                              <i class=""></i>Categoria de <?php echo $categoriaPeso['categoriaPeso'] ?>
                                            </span>
                                            <span class="text-muted">
                                                <div class="table-responsive col-lg-12">
                                                  <table class="table table-sm">
                                                    <thead>
                                                      <tr>
                                                        <th>Nome Completo</th>
                                                        <th>Peso</th>
                                                        <th>Funcao</th>
                                                        <th>Data de Nascimento(idade)</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($categoriaPeso['participantes'] as $participantes){ ?>
                                                            <tr>
                                                              <td><a href="pages/examples/invoice.html"><?php echo $participantes['nome_participante']?></a></td>
                                                              <td><?php echo $participantes['categoria']?> kg</td>
                                                              <td><span class="" style=""><?php echo $participantes['funcao']?></span></td>
                                                              <td>
                                                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?= date('d/m/Y', strtotime(strtoupper($participantes['dataNascimento'])));?> ( 21 ) </div>
                                                              </td>
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
                                <div class="mb-4 mt-4">
                                  <button class="btn btn-success btn-sm" id="definirVencedore756" id_actividade="<?= $evento[0]->id_actividade ?>" id_actividadeUIO67="<?= $evento[0]->id_associacao_pro?>">Definir Vencedores</button>
                                </div>
                              </div>


                        </div>

                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>

                    <div class="col-sm-4">

                      <div class="row">
                        <div class="table-responsive" style="height: 600px;">
                          <?php foreach($layoutClassificacaoFinal as $ClassificacaoFinal){ ?>


                              <!-- <div class="card"> -->
                                <!-- <div class="card-header border"> -->

                                <div class="bg bg-info p-2">
                                  <span class="info-box-number text-center mb-2 text-uppercase">ESCALAO ETARIO<?php echo $ClassificacaoFinal['descricao_escalao']?></span>
                                  <!-- <p class="info-box-text text-muted">Classificacao</p> -->
                                </div>

                                  <?php foreach($ClassificacaoFinal['generos'] as $genero){ ?>
                                    <div class="info-box-content" style="border-top:1px solid #ebebeb;width:100%;padding: 16px 0 8px 16px;">
                                      <?php if(count($genero['categoriaPesos'])!=0){ ?>
                                        <span class="info-box-text text-muted">Genero <?php echo $genero['genero'] ?></span>
                                        <?php foreach($genero['categoriaPesos'] as $categoriaPeso){ ?>
                                          <?php if(count($categoriaPeso['classificacaoFinals'])!=0){ ?>
                                              <!-- <span class="info-box-text text-danger">Categoria de <?php echo $categoriaPeso['descricao_categoriaPeso']?></span> -->
                                              <div style="margin-top: 5px;margin-bottom: 5px;">
                                                <div>
                                                  <span class="tsp-fr tsp-flr tsp-pb4" style="font-family: arial,sans-serif;font-weight: normal;">Categoria de <?php echo $categoriaPeso['descricao_categoriaPeso']?>kg</span>
                                                </div>
                                              </div>
                                              <?php foreach($categoriaPeso['classificacaoFinals'] as $teste){ ?>

                                                <!-- <span class="info-box-text text-muted"><?php echo $teste['posicao']?> ª <?php echo $teste['name_participante']?></span> -->
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
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="row no-print">
                    <div class="col-12">
                      <a href="http://localhost/KEDA/actividade/listarParticipaanteListaFinalizada/<?= $evento[0]->id_actividade ?>" type="button" data_id_campeonato="<?php echo $id_campeonato ?>" controlBotaoFinalizar="<?php echo $participanteEPcamp[0] ?>" class="btn btn-info btn-sm float-left floatright789" style="margin-right: 5px;">
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
  </section>

<?php }elseif($StatusControl->status == '2' && $StatusControl->id_actividade == $eventoId){?>

    <?php $palavra1 = explode(' ',trim($evento[0]->nome_actividade));?>

    <?php if($palavra1[0] == 'Campeonato'){?>

        <section class="content">
          <div class="container-fluid">

            <div class="row">
              <div class="col-12">

                <div class="invoice p-3 mb-3">
                  <!-- title row -->
                  <div class="row">
                    <div class="box-tools col-1 mt-2 ml-3 mb-0">
                        <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
                    </div>
                    <!-- <div class="col-12">
                      <h4>
                        <i class="fas fa-globe"></i> AdminLTE, Inc.
                        <small class="float-right">Date: 2/10/2014</small>
                      </h4>
                    </div> -->
                    <!-- /.col -->
                  </div>
                  <!-- info row -->

                  <!-- /.row -->

                  <!-- Table row -->
                  <div class="row pt-5 pb-4 mt-2 ml-3 mr-3">

                    <div class="col-sm-2 pb-2">
                      <div class="btn-group" data_id_campeonato="<?php echo $id_campeonato ?>" id="pegarListaCategoria7645390654321">
                        <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus-circle"></i> Opcoes </button>
                        <div class="dropdown-menu" role="menu" style="">
                          <a class="dropdown-item idCompetidorGerarChaves" href="#"><i class="fas fa-user-plus fa-fw"></i> Gerar Chaves </a>
                          <!-- <a class="dropdown-item idCompetidorImprimirLista" id_actividadeUIO="<?= $evento[0]->id_associacao_pro ?>" href="#"><i class="fas fa-print fa-fw"></i> Ver Lista </a> -->
                          <a class="dropdown-item idDiplomaVencedor" href="#"><i class="fas fa-download fa-fw"></i> Gerar Diplomas </a>
                                                          <!-- <a class="dropdown-item idTreinador" href="#"><i class="fas fa-user-plus fa-fw"></i> Treinador </a> -->
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-5 table-responsive" style="height: 600px;" id="divMostrarListaClassificacao45">
                        <?php foreach($layoutClassificacaoFinal as $ClassificacaoFinal){ ?>


                            <!-- <div class="card"> -->
                              <!-- <div class="card-header border"> -->

                              <div class="bg bg-info p-2">
                                <span class="info-box-number text-center mb-2 text-uppercase">ESCALAO ETARIO <?php echo $ClassificacaoFinal['descricao_escalao']?></span>
                                <!-- <p class="info-box-text text-muted">Classificacao</p> -->
                              </div>

                                <?php foreach($ClassificacaoFinal['generos'] as $genero){ ?>
                                  <div class="info-box-content" style="border-top:1px solid #ebebeb;width:100%;padding: 16px 0 8px 16px;">
                                    <?php if(count($genero['categoriaPesos'])!=0){ ?>
                                      <span class="info-box-text text-muted">Genero <?php echo $genero['genero'] ?></span>
                                      <?php foreach($genero['categoriaPesos'] as $categoriaPeso){ ?>
                                        <?php if(count($categoriaPeso['classificacaoFinals'])!=0){ ?>
                                            <!-- <span class="info-box-text text-danger">Categoria de <?php echo $categoriaPeso['descricao_categoriaPeso']?></span> -->
                                            <div style="margin-top: 5px;margin-bottom: 5px;">
                                              <div>
                                                <span class="tsp-fr tsp-flr tsp-pb4 pb-2" style="font-family: arial,sans-serif;font-weight: normal;">Categoria de <?php echo $categoriaPeso['descricao_categoriaPeso']?>kg</span>
                                              </div>
                                            </div>
                                            <?php foreach($categoriaPeso['classificacaoFinals'] as $teste){ ?>

                                              <div>
                                                <table class="pb-2 border" style="table-layout: fixed;width:100%;display:inline-table;border-collapse:collapse;padding-bottom:2px">
                                                  <colgroup>
                                                    <col>
                                                    <col style="width:100%">
                                                  </colgroup>
                                                  <tbody>
                                                    <tr style="padding-top: 10px;padding-bottom: 10px;background-color: #f8f9fa">
                                                      <th style="width:24px;">
                                                        <div class="pl-2 pr-2">
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
                                                                <span class="p-2">
                                                                  <a href="#"><?php echo $teste['name_participante']?></a>
                                                                </span>
                                                                <span class="description"><?php echo $teste['provincia']?></span>

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

                              <!-- </div> -->
                            <!-- </div> -->


                        <?php } ?>
                      </div>

                      <div class="col-7 table-responsive border" style="height: 600px;background-color:#e9ecef" id="idcontroleTelaCertificado67">


                          <?php foreach($layoutClassificacaoFinalCertificado as $layoutClassificacaoFinalCertificado){ ?>


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
                    <!-- <div class="col-6">
                      <p class="lead">Payment Methods:</p>
                      <img src="../../dist/img/credit/visa.png" alt="Visa">
                      <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                      <img src="../../dist/img/credit/american-express.png" alt="American Express">
                      <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                      <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                        plugg
                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                      </p>
                    </div> -->
                    <!-- /.col -->
                    <!-- <div class="col-6">
                      <p class="lead">Amount Due 2/22/2014</p>

                      <div class="table-responsive">
                        <table class="table">
                          <tbody><tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$250.30</td>
                          </tr>
                          <tr>
                            <th>Tax (9.3%)</th>
                            <td>$10.34</td>
                          </tr>
                          <tr>
                            <th>Shipping:</th>
                            <td>$5.80</td>
                          </tr>
                          <tr>
                            <th>Total:</th>
                            <td>$265.24</td>
                          </tr>
                        </tbody></table>
                      </div>
                    </div> -->
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-12 mt-2 ml-3 mb-0">
                      <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                      <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                        Payment
                      </button> -->
                      <button type="button" class="btn btn-info float-right gerarRelatorioFinalCampeonato" style="margin-right: 5px;" id="gerarRelatorioFinalCampeonato">
                        <i class="fas fa-download"></i> Gerar Relatorio
                      </button>
                    </div>
                  </div>
                </div>
                <!-- /.invoice -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>

    <?php }else{ ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="invoice p-3 mb-3">
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

                <!-- /.row -->

                <!-- Table row -->
                <div class="pt-5 pb-4">

                  <div class="col-sm-2 pb-4 mr-5">
                    <div class="btn-group" data_id_campeonato="<?php echo $id_campeonato ?>" id="pegarListaCategoria7645390654321" style="right: 7px">
                      <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus-circle"></i> Opcoes</button>
                      <div class="dropdown-menu" role="menu" style="">
                        <!-- <a class="dropdown-item idCompetidorGerarChaves" href="#"><i class="fas fa-user-plus fa-fw"></i> Gerar Chaves </a> -->
                        <a class="dropdown-item idCompetidorImprimirListamodallg76540Graduacao" data-evento="<?php echo $eventoId ?>" id_actividadeUIO="<?= $evento[0]->id_associacao_pro ?>" href="#"><i class="fas fa-print fa-fw"></i> Ver Lista </a>
                        <a class="dropdown-item idDiplomaVencedor" href="#"><i class="fas fa-download fa-fw"></i> Gerar Diplomas </a>
                                                        <!-- <a class="dropdown-item idTreinador" href="#"><i class="fas fa-user-plus fa-fw"></i> Treinador </a> -->
                      </div>
                    </div>
                    <a href="http://localhost/KEDA/actividade/GerarPDFCertificado" type="button" class="btn btn-info btn-sm" id="botao456CriarDiploma"><i class="fa fa-plus-circle"></i> Impremir certificado</a>
                  </div>

                  <div class="row">
                    <div class="col-6 table-responsive d-flex flex-column">
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

                                          <?php if ($ClassificacaoFinal->nova_graduacao == "" || $ClassificacaoFinal->nova_graduacao == null): ?>

                                          <?php else: ?>
                                              <?php echo $ClassificacaoFinal->nova_graduacao ?>ª DAN
                                          <?php endif; ?>

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
                    <div class="col-6 table-responsive border" style="height: 600px;background-color:#e9ecef" id="idcontroleTelaCertificado67">

                      <?php foreach($layoutParticipantesAprovadosGraduacao as $layoutClassificacaoFinalCertificado){ ?>


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

                </div>
                <!-- Table row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <!-- <div class="col-6">
                    <p class="lead">Payment Methods:</p>
                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                    <img src="../../dist/img/credit/american-express.png" alt="American Express">
                    <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                      plugg
                      dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                    </p>
                  </div> -->
                  <!-- /.col -->
                  <!-- <div class="col-6">
                    <p class="lead">Amount Due 2/22/2014</p>

                    <div class="table-responsive">
                      <table class="table">
                        <tbody><tr>
                          <th style="width:50%">Subtotal:</th>
                          <td>$250.30</td>
                        </tr>
                        <tr>
                          <th>Tax (9.3%)</th>
                          <td>$10.34</td>
                        </tr>
                        <tr>
                          <th>Shipping:</th>
                          <td>$5.80</td>
                        </tr>
                        <tr>
                          <th>Total:</th>
                          <td>$265.24</td>
                        </tr>
                      </tbody></table>
                    </div>
                  </div> -->
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
                    <button type="button" class="btn btn-primary float-right gerarRelatorioFinalCampeonato" style="margin-right: 5px;" id="gerarRelatorioFinalCampeonato">
                      <i class="fas fa-download"></i> Gerar Relatorio
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

    <?php } ?>

<?php }?>
