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
                <div class="col-12">
                  <h4>Director de Prova</h4>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?= base_url('assets/images/Image00001.JPG');?>" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo $campeonato[0]->director_prova?></a>
                        </span>
                        <span class="description">Shared publicly - 7:45 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      
                    </div>

                </div>
              </div>
              <!-- <div class="card card-primary card-outline"> -->
              <div class="card-body">
                  <!-- <h4>Custom Content Below</h4> -->
                  <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><i class="fa-fw fa-edit fa"></i> Inscrição</a></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false"><i class="fa-fw fa-user fa"></i> Participantes</a>
                    </li>
                   
                  </ul>
                  <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                    <div class="row pt-5">
                        <div class="col-12">
                          <div class="card">
                            
                            <div class="row card-header col-12 ml-0 mr-0">
                              <!-- <div class="card-tools"> -->
                                <div class="col-sm-8 input-group input-group-sm">
                                  <i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" name="table_search" class="form-control float-left" placeholder="Procurar" style="border:0px solid;">
                                </div>
                              <!-- </div> -->
                              <div class="col-sm-4">
                                <!-- <div class="col-sm-3"> -->
                                <div class="row col-sm-12">
                                  <div class="btn-group col-sm-6">
                                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" id="categoriaNacional768" aria-expanded="false" style="right: 15px;"><i class="fa fa-plus-circle"></i> Adicionar Categoria</button>
                                  </div>
                                  
                                  <div class="btn-group col-sm-6">
                                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="right: -34px;"><i class="fa fa-cog"></i> Opcoes</button>
                                    <div class="dropdown-menu" role="menu" style="">
                                      <a class="dropdown-item" href="#"><i class="fa-fw fa-reply fa"></i> Desativar Categorias selecionadas</a>
                                      <a class="dropdown-item" href="#"><i class="fa-fw fa-share fa"></i> Ativar Categorias Selecionadas</a>
                                      <a class="dropdown-item" href="#"><i class="fa-fw fa-minus-circle fa"></i>Apagar Categorias Selecionadas</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                              <span id="teste123"></span>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div> 
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                      <div class="row pt-5">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <a class="btn btn-app" style="border-radius: 5px;" id="pegarListaCategoria76453" data-id_associacao_pro="<?php echo $id_associacao_pro;?>">
                                <!-- <span class="badge bg-purple">891</span> -->
                                <i class="fas fa-user" style="display:;font-size:13px"></i> Lista
                              </a>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <div class="card rounded-0">
                                  <!-- <div class="card-header">
                                    <h3 class="card-title">Fixed Header Table</h3>

                                    <div class="card-tools">
                                      <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                          <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div> -->
                                  <!-- /.card-header -->
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
                                <div class="col-sm-8 input-group input-group-sm">
                                  <i class="fa fa-search" style="color:#9e9e9e;padding-top:10px"></i><input type="text" id="table_search2341" name="table_search" class="form-control float-left" dataid-id_associacao_pro="<?php echo $id_associacao_pro;?>" placeholder="Procurar pelo Bilhete de Identidade" style="border:0px solid;" onkeyup="pegarViaBilheteParticipante()">
                                </div>
                              <!-- </div> -->
                              <div class="col-sm-4">
                                <!-- <div class="col-sm-3"> -->
                                <div class="row col-sm-12">
                                  <div class="btn-group col-sm-6">
                                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="right: 15px;"><i class="fa fa-plus-circle"></i> Inscrever Participantes</button>
                                    <div class="dropdown-menu" role="menu" style="">
                                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fas fa-user-plus fa-fw"></i> Criar participante</div></a>
                                      <a class="dropdown-item" href="#" id="AdicionarParticipante768"><div><i class="fas fa-users fa-fw"></i> Adicionar Lista de participantes</div></a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                  
                                  <div class="btn-group col-sm-6">
                                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="right: -34px;"><i class="fa fa-cog"></i> Opcoes</button>
                                    <div class="dropdown-menu" role="menu" style="">
                                      <a class="dropdown-item" href="#" id="CriarFuncao879"><i class="fas fa-plus fa-fw"></i> Adicionar Funcao</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                              <span id="verAllParticipante789P23"></span>
                            </div>
                            <div class="card-body table-responsive p-4 text-center">
                              <span id="verAllParticipante789P23231354567"></span>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                    </div>
                  </div>
              </div>    
              <!-- </div> -->
              <div class="row" style="display:none" id="adicionarParticipantes4545">
                <section class="content">
                    <div class="card card-solid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                                    <nav class="main-header navbar navbar-expand navbar-white navbar-light col-lg-12" style="margin-left:0px">
                                                        <!-- SEARCH FORM -->
                                                        <form class="form-inline ml-3">
                                                        <div class="input-group input-group-sm">
                                                            <input class="form-control form-control-navbar" type="search" placeholder="Procurar" aria-label="Search">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-navbar" type="submit">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                        </form>

                                                        <!-- Right navbar links -->
                                                        
                                                    </nav>       
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="col-12">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                            <div class="media-body">
                                                <h3 class="dropdown-item-title">
                                                    Brad Diesel
                                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                                </h3>
                                                <p class="text-sm">Call me whenever you can...</p>
                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                            </div>
                                            </div>
                                        </a>      
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

   