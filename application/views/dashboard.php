<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

      <?php if($this->session->userdata('role') == 'Associacao'){?>

        <div class="container-fluid mb-4">
        <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="fa fa-users fa-3x"></i></span>

              <div class="info-box-content ml-4">
                <span class="info-box-text">Bookmarks</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="fa fa-briefcase fa-3x"></i></span>

              <div class="info-box-content ml-4">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>


              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-comments fa-3x"></i></span>

              <div class="info-box-content ml-4">
                <span class="info-box-text">Comments</span>
                <span class="info-box-number">41,410</span>


              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>


      </div>

      <div class="container-fluid mt-4" style="text-align:center;font-weight:">
        <img src="<?=base_url()?>assets/images/Image00001.jpg" class="img-circle elevation-2 height-280 widht-280 mb-3 mt-3" alt="User Image" style="height:16.1rem;width:16.1rem">
        <h3 class="text-primary" style="font-weight:700"> ASSOCIACAO PROVINCIAL</h3>
        <h3 class="text-primary" style="font-weight:700"> DO</h3>
        <h3 class="text-primary text-uppercase" style="font-weight:700"><?php echo $this->session->userdata('nome');?></h3>
      </div>
      <?php }else{ ?>

        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info pb-5">
              <div class="inner">
                <h3><?php echo $total[0]->quantidade;?></h3>

                <p class="text-uppercase">Total de Atletas a Nivel Nacional</p>
              </div>
              <div class="icon">
                <i class="fas fa-users fa-4x" style="font-size: 110px;"></i>
              </div>
              <a href="<?= base_url('listaMestre');?>" class="small-box-footer" style="top:40px">Mais Informacao <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success pb-5">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>ESTATISTICA</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-chart-pie" style="font-size: 110px;"></i>
              </div>
              <a href="<?= base_url('verEstatistica');?>" class="small-box-footer" style="top:40px" >Mais Informacao <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning pb-5">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add" style="font-size: 110px;"></i>
              </div>
              <a href="#" class="small-box-footer" style="top:40px">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger pb-5">
              <div class="inner">
                <h3>65</h3>

                <p>EXTRUTURA FUNCIONAL</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa fa-briefcase" style="font-size: 110px;"></i>
              </div>
              <a href="#" class="small-box-footer" style="top:40px">Mais Informacao <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <!-- <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div> -->
              <div class="card-body">


                <!-- <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div> -->
                <div class="row">
                  <div class="col-md-12 table-responsive pt-2 pb-4">
                    <div class="text-center text-uppercase pb-4 text-bold" id="tituloConteudo12"></div>
                    <div class="row">
                      <div class="col-12 text-center">
                          <!-- <div id="conteudoEstatistica567">

                          </div> -->
                          <div class="card-body" disabled>
                            <canvas id="pieChart" style="min-height: 320px; height: 320px; max-height: 320px; max-width: 100%;"></canvas>
                          </div>
                      </div>

                      <!-- <div class="col-6">
                        <div class="card-body">
                          <canvas id="pieChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- </div> -->

                <!-- <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div> -->
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <!-- <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div> -->
              </div>
              <div class="card-body table-responsive p-0">
                <div class="row">
                  <div class="col-md-12 table-responsive pt-2 pb-4">
                    <div class="text-center text-uppercase pb-4 text-bold" id="tituloConteudo13"></div>
                    <div class="row">
                      <div class="col-12 text-center">
                          <!-- <div id="conteudoEstatistica567">

                          </div> -->
                          <div class="card-body" disabled>
                            <canvas id="pieChart2" style="min-height: 320px; height: 320px; max-height: 320px; max-width: 100%;"></canvas>
                          </div>
                      </div>

                      <!-- <div class="col-6">
                        <div class="card-body">
                          <canvas id="pieChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card p-2">
              <div class="card-body table-responsive p-0" style="height:700px">
                <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA COMPLETA DE TODOS OS MESTRES FEDERADOS</legend><br>
                <table class="table m-0 table-sm table-bordered table-striped dataTable dtr-inline">
                <thead>
                  <tr>
                  <th width="1%" class="numeroMestre111" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th width="1%" class="numeracao">Nº</th>
                    <th width="1%" data-orderable="false">Foto</th>
                    <th class="text-nowrap">Nome</th>
                    <th class="text-nowrap">D.Nasc</th>
                    <th class="text-center">Graduacao</th>
                    <th width="2%" class="text-center">ASSOCIACAO PROVINCIAL</th>
                    <th width="2%" class="text-center">Carteira</th>
                    <th class="text-center">Estilo</th>
                        <!-- <th class="text-center">Academia</th> -->
                    <th class="text-center">Estado</th>
                    <!-- <th class="text-center">Accao</th> -->
                  </tr>
                </thead>
                <tbody>
                   <?php $cont=0;
                         $contador=0;
                         foreach($mestre as $mestre):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                      <td width="1%" class="numeroMestre111" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $mestre->id_mestre;?>"></label><input type="checkbox" class="radio" id="<?= $mestre->id_mestre;?>" name="<?= $mestre->id_mestre?>radio[]" value="<?= $mestre->id_mestre;?>" hidden></td>
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                        <?php if($mestre->imagem == null){ ?>
                                  <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                        <?php }else{ ?>
                                           <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $mestre->imagem);?>" /></figure></td>
                                        <?php }?>
                                        <td id="nomeAmestre"><?= $mestre->nome; ?></td>
                                        <td class="text-nowrap"><?= date('d/m/Y', strtotime(strtoupper($mestre->data_nascimento)));?></td>
                                        <td class="text-center">
                                          <div class="text-center" id="conteiner3">

                                                <?php if($mestre->graduacao == 0){?>

                                                    <div class="entrada7">
                                                      <p style="margin-top: 13px;"> NEGRO </p>
                                                    </div>

                                                <?php }else if($mestre->graduacao > 10){?>

                                                    <?php if($mestre->graduacao == 15){ ?>
                                                      <div class="bg bg-warning">
                                                        <p style="margin-top: 13px;color:black">Amarelo</p>
                                                      </div>
                                                    <?php }elseif ($mestre->graduacao == 16) { ?>
                                                      <div class="bg bg-light">
                                                        <p style="margin-top: 13px;color:black">Branco</p>
                                                      </div>
                                                    <?php }elseif ($mestre->graduacao == 14) { ?>
                                                      <div class="bg bg-orange">
                                                        <p style="margin-top: 13px;color:black">Laranja</p>
                                                      </div>
                                                    <?php }elseif ($mestre->graduacao == 13) { ?>
                                                      <div class="bg bg-success">
                                                        <p style="margin-top: 13px;color:black">Verde</p>
                                                      </div>
                                                    <?php }elseif ($mestre->graduacao == 12) { ?>
                                                      <div class="bg bg-primary">
                                                        <p style="margin-top: 13px;color:black">Azul</p>
                                                      </div>
                                                    <?php }elseif ($mestre->graduacao == 11) { ?>
                                                      <div class="bg bg-light">
                                                        <p style="margin-top: 13px;color:black">Castanho</p>
                                                      </div>
                                                    <?php } ?>

                                                <?php }else{ ?>

                                                    <div class="entrada7">
                                                      <p style="margin-top: 13px;"><?= $mestre->graduacao;?>º DAN</p>
                                                    </div>

                                                    <div class="entrada9">
                                                      <?php for($i=0;$i < $mestre->graduacao;$i++){ ?>
                                                            <div class="entrada4">
                                                            </div>
                                                      <?php } ?>
                                                    </div>

                                                <?php } ?>
                                          </div>
                                        </td>
                                        <td class="text-center"><?= $mestre->descricao_associacao; ?></td>
                                        <td class="text-center"><div class="badge badge-success p-2">Vencida</div></td>
                                        <td class="text-center"><?= $mestre->nome_estilo; ?></td>

                                        <?php if($mestre->statu_mestre == "Activo") {?>
                                        <td class="text-center status project-state"><a title="Click para mudar o estado" href="<?= base_url('editar_estado_mestre/'. $mestre->id_mestre.'/'.$mestre->statu_mestre);?>" cont="<?= $cont?>" data-Mudar-mestre='<?php echo $mestre->statu_mestre;?>' data-mudar-mestre-id="<?php echo $mestre->id_mestre;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-success"><?= $mestre->statu_mestre;?></span></a></td>
                                        <?php }else{ ?>
                                        <td class="text-center status1"><a title="Click para mudar o estado" href="<?= base_url('editar_estado_mestre/'. $mestre->id_mestre .'/'.$mestre->statu_mestre);?>" cont="<?= $cont?>" data-Mudar-mestre='<?php echo $mestre->statu_mestre;?>' data-mudar-mestre-id="<?php echo $mestre->id_mestre;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-danger"><?= $mestre->statu_mestre;?></span></a></td>
                                        <?php } ?>

                                        <!-- <td class="text-center project-actions">
                                          <a href="<?= base_url('verMestre/' . $mestre->id_mestre);?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                          <a href="<?= base_url('editar_mestre/' . $mestre->id_mestre);?>" class="btn btn-sm btn-info "><i class="fas fa-edit"></i></a>
                                          <a href="<?= base_url('ExcluirMestre/' . $mestre->id_mestre);?>" data-confirm-mestre="<?php echo $mestre->nome;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                        </td> -->
                                    </tr>
                                   <?php endforeach;?>
                                </tbody>

                </table>
                <div class="col-md-2">
                    <button style="border: 1px solid #ff5b57;display:none" class="btn btn-default btn-block" id="botaoApagarMestreLista"><i class="fa fa-trash-alt"></i> Apagar </button>
                </div>
                  <div class="card-body">
                    <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 486.5px; height: 300px;" width="486" height="300"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 486.5px; height: 300px;" width="486" height="300"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 69.5px; left: 301.242px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 209.5px; left: 279.242px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 128.5px; left: 120.242px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div></span></div>
                  </div>
                  <!-- /.card-body-->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>

      </div>

      <?php } ?>

    </section>
