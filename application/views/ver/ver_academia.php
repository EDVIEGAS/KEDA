<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ver Academia</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
          <div class="box-tools col-1 mt-2">
                <a href="javascript:history.back();"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-5 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">ACADEMIA <?php echo $academia[0]->nome_academia ?></legend><br>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">

                <div class="col-sm-6 invoice-col">
                  <div class="info-box-content">
                    <strong class="text-uppercase">RESPONSAVEL: <?= $academia[0]->responsavel;?></strong><br>
                    <!-- <?php echo $academia[0]->provincia;?>, Suite 600<br> -->
                    <!-- San Francisco, CA 94107<br> -->
                    <span class="info-box-text"><strong>ESTILO: </strong><?php echo $academia[0]->nome_estilo?><br><span>
                    <span class="info-box-text"><strong>E-MAIL: </strong><?php echo $academia[0]->email_clube?><br><span>
                    <strong>DATA DE FUNDACAO: </strong><?= date('d/m/Y', strtotime(strtoupper($academia[0]->Data_fundacao)));?>
                  </div>
                </div>
                <div class="col-sm-3 invoice-col">
                  <div class="row col-sm-12">

                      <div class="btn-group text-sm" style="right: -9px;">
                        <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportacao</button>
                        <div class="dropdown-menu" role="menu" style="">
                          <a class="dropdown-item" href="<?= base_url("pdfAcademiaAtletalista/" . $academia[0]->id_academia); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Lista de Atletas (PDF)</div></a>
                          <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                <div class="col-md-10">
            <!-- Info Boxes Style 2 -->
                    <div class="info-box mb-3 bg-warning info-sm">
                      <span class="info-box-icon"><i class="fas fa-users"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">TOTAL DE ATLETAS</span>
                        <span class="info-box-number"><?= $totalAtleta ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>

                    <!-- /.info-box -->
                    <div class="info-box mb-3 bg-info">
                      <span class="info-box-icon"><i class="fas fa-male"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">MASCULINO</span>
                        <span class="info-box-number"><?= $totalMasc ?></span>
                      </div>

                      <span class="info-box-icon"><i class="fas fa-female"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">FEMENINO</span>
                        <span class="info-box-number"><?= $totalFem?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->

                  </div>
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row hide">
                <div class="col-12 table-responsive">
                      <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                          <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <!-- <li class="nav-item">
                              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Home</a>
                            </li> -->
                            <li class="nav-item">
                              <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">Atletas</a>
                            </li>
                            <!-- <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Estatisticas</a>
                            </li> -->
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="tab-content" id="custom-tabs-four-tabContent">
                            <!-- <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                            </div> -->
                            <div class="tab-pane fade active show" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                              <div class="card-body">
                                <ul class="users-list clearfix">
                                <?php if($academia_atleta != null){?>
                                <?php foreach($academia_atleta as $academia_atleta): ?>
                                  <li style="width:20%;">
                                  <?php if($academia_atleta->imagem == null){?>
                                    <img src="<?= base_url('assets/images/3.JPG');?>" alt="" class="media-object rounded-corner" style="height:67px;width:67px" />
                                    <a class="users-list-name" href="#"><?= $academia_atleta->nome;?></a>
                                    <span class="users-list-date">Competidor</span>
                                    <p style="margin-top: 1rem">
                                      <a href="javascript:;" class="btn btn-sm btn-danger m-r-5" id_atleta_academia="<?= $academia_atleta->id_mestre?>">Ver</a>
                                      <a href="javascript:;" class="btn btn-sm btn-default">Cancel</a>
                                    </p>
                                  <?php }else{ ?>
                                    <img src="<?= base_url('uploads/product/' . $academia_atleta->imagem);?>" alt="User Image" style="height:67px;width:67px">
                                    <a class="users-list-name" href="#"><?= $academia_atleta->nome;?></a>
                                    <span class="users-list-date">------------</span>
                                    <p style="margin-top: 1rem">
                                      <a href="<?= base_url('verMestre/' . $academia_atleta->id_mestre); ?>" class="btn btn-sm btn-danger m-r-5" id_atleta_academiaooo="<?= $academia_atleta->id_mestre?>">Ver</a>
                                      <!-- <a href="javascript:;" class="btn btn-sm btn-default">Cancel</a> -->
                                    </p>
                                    <?php } ?>
                                  </li>
                                  <?php endforeach; ?>
                                  <?php }else{?>
                                    <div style="display:flex; flex-direction:column;text-align:center" class="p-5">
                                      <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                                      <h5 class="media-heading" style="font-size:20px">SEM NENHUM ATLETA</h5>
                                    </div>
                                  <?php }?>
                                </ul>
                      <!-- /.users-list -->
                              </div>
                              <?php if(!empty($academia_atleta)){ ?>
                              <!-- <div class="card-footer text-center">
                                  <a href="<?= base_url('verAtletaAcademia/' . $academia_atleta->id_academia);?>" >Ver Todos Atletas</a>
                              </div> -->
                            <?php } ?>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                              Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                            </div>

                          </div>
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <!-- ======= -->
              </div>
              <!-- /.row -->


              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button> -->
                  <a href="<?= base_url('novo_atleta');?>" type="button" class="btn btn-primary btn-sm float-right" style="margin-right: 5px;">
                    <i class="fas fa-user-plus"></i> Adicionar Atleta
                  </a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</section>
