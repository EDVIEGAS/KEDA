<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gerir Campeonato</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
          <div class="box-tools col-1 mt-2">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- <h3 class="text-center card-title p-3">CAMPEONATO <?= $campeonato[0]->descricao_nacional?></h3> -->

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div> -->
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
              <div class="row">
                <div class="col-12 text-center">
                  <h4>CAMPEONATO AFRICANO</h4>
                </div>
              </div>
              <!-- <div class="card card-primary card-outline"> -->

              <div class="row pt-5">
                <div class="col-12">
                  <div class="card">
                    <?php if($valorControl != 459){ ?>
                            <div class="card-header" id="MCP456">
                              <form method="post" id="registrarAfricano345" action="<?php echo base_url('registrarAfricano'); ?>">

                                <div class="col-md-12" id="conteudoCarregar5955">

                                              <div class="form-row">
                                                  <div class="form-group col-sm-6">
                                                      <label class="text-nowrap">PAIS</label>
                                                      <input name="paisLocal" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="genero_completo_id" value="">
                                                  </div>
                                                  <div class="form-group col-sm-6">
                                                      <label class="text-nowrap">ANO</label>
                                                      <input type="date" name="ano" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="">
                                                  </div>
                                                  
                                              </div>
                                      </div>

                                <div class="modal-footer justify-content-between">
                                  <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Adicionar </button>
                                </div>
                              </form>
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
                            <div class="row col-12 ml-0 mr-0 p-3" hidden id="MAP234">

                              <div class="col-sm-4">
                                <!-- <div class="col-sm-3"> -->
                                <div class="row col-sm-12">
                                  <div class="btn-group col-sm-6">
                                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"><i class="fa fa-plus-circle"></i> Inscrever Participantes</button>
                                    <div class="dropdown-menu" role="menu" style="">
                                      <a class="dropdown-item" href="#" id="CriarParticipante768AfricanoMundial"><div><i class="fas fa-user-plus fa-fw"></i> Criar participante</div></a>
                                      <a class="dropdown-item" href="#" id="AdicionarParticipante768"><div><i class="fas fa-users fa-fw"></i> Adicionar Lista de participantes</div></a>
                                    </div>
                                  </div>


                                </div>
                              </div>
                              <div class="col-sm-4 input-group input-group-sm">
                                <!-- <i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i> -->
                                <input type="text" id="table_search876678" name="table_search" class="form-control form-control-navbar border" placeholder="Adicionar Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteAfricano()">
                              </div>
                            </div>
                    <?php }else{ ?>
                            <div class="row col-12 ml-0 mr-0 p-3">

                              <div class="col-sm-4">
                                <!-- <div class="col-sm-3"> -->
                                <div class="row col-sm-12">
                                  <div class="btn-group col-sm-6">
                                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"><i class="fa fa-plus-circle"></i> Inscrever Participantes</button>
                                    <div class="dropdown-menu" role="menu" style="">
                                      <a class="dropdown-item" href="#" id="CriarParticipante768AfricanoMundial"><div><i class="fas fa-user-plus fa-fw"></i> Criar participante</div></a>
                                      <a class="dropdown-item" href="#" id="AdicionarParticipante768"><div><i class="fas fa-users fa-fw"></i> Adicionar Lista de participantes</div></a>
                                    </div>
                                  </div>


                                </div>
                              </div>
                              <div class="col-sm-4 input-group input-group-sm">
                                <!-- <i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i> -->
                                <input type="text" id="table_search87667870" name="table_search" class="form-control form-control-navbar border" placeholder="Adicionar Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipanteAfricano()">
                              </div>
                            </div>
                    <?php } ?>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                              <span id="verAllParticipanteMundial789P23"></span>
                            </div>

                          </div>
                          <!-- /.card -->
                </div>
              </div>

              <!-- </div> -->

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</section>
