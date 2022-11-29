<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Associacao Provincial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
          <div class="box-tools col-1 mt-2">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="text-center text-uppercase text-bold">Associação PROVINCIAL DO <?= $verAssociacao[0]->descricao_associacao?></h5>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">

                  <div class="col-12 col-sm-12 pb-3 pt-3 row">
                    <div class="col-sm-2" style="left:10px">
                        <img style="width:150px;height:150px;border-radius:50%;" src="http://localhost/KEDA/assets/images/Image00001.JPG">
                    </div>
                    <div class="col-sm-3">
                        <h6 class="text-blue"><strong>PRESIDENTE</strong></h6>
                        <?php if($PresidenteAssociacao[0]->nome == ""){ ?>
                          <span style="font-size:18px;" class="text-uppercase"><?php echo $PresidenteAssociacao[0]->nome; ?></span>
                        <?php } ?>
                        <h6 class="text-blue"><strong>E-MAIL</strong></h6>
                        <span>asdasdasdsad</span>
                        <h6 class="text-blue"><strong>TELEFONE</strong></h6>
                        <span>asdasdasdsad</span>
                    </div>
                    <div class="col-sm-7">
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-6 col-6">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-users"></i> Total de Atletas</span>
                              <h5 class="description-header"><?php echo $totalAtletaAss[0]->total; ?></h5>
                              <!-- <span class="description-text">TOTAL REVENUE</span> -->
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-6 col-6">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-caret-left"></i> Total de Academias</span>
                              <h5 class="description-header"><?php echo $totalcademia[0]->totalAcademias?></h5>
                              <!-- <span class="description-text">TOTAL COST</span> -->
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                         
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-sm-12 p-3">
                    <div class="card card-primary card-outline card-outline-tabs border" style="box-shadow:0 0 0 0">
                      <div class="card-header p-0 border-bottom-0 text-sm">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-atleta-tab" data-toggle="pill" href="#custom-tabs-four-atleta" role="tab" aria-controls="custom-tabs-four-atleta" aria-selected="true">ATLETAS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-clubes-tab" data-toggle="pill" href="#custom-tabs-four-clubes" role="tab" aria-controls="custom-tabs-four-clubes" aria-selected="false">CLUBES</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-dirigente-tab" data-toggle="pill" href="#custom-tabs-four-dirigente" role="tab" aria-controls="custom-tabs-four-dirigente-tab" aria-selected="false">DIRIGENTE</a>
                          </li>

                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                          <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">

                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-campeonato" role="tabpanel" aria-labelledby="custom-tabs-four-campeonato-tab">

                          </div>
                          <div class="tab-pane fade active show" id="custom-tabs-four-atleta" role="tabpanel" aria-labelledby="custom-tabs-four-atleta-tab">
                            <div class="row p-2">
                              <div class="col-12">

                                <div class="row col-sm-12 text-sm">

                                    <div class="btn-group " style="right: -9px;">
                                      <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportação</button>
                                      <div class="dropdown-menu" role="menu" style="">
                                        <a class="dropdown-item" href="<?= base_url("pdfAtletalista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                                        <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                                      </div>
                                    </div>

                                </div>
                                 
                                  <?php if($verAsAtletas != null){ ?>
                                    <div class="card-body text-sm" style="padding:none;padding-left: 0px;padding-right: 0px;">
                                      <h5 class="mb-40 text-inverse text-center description-header text-uppercase">ATLETAS CONTROLADOS PELA Associação</h5><br>
                                      <table id="example1" class="table table-striped table-sm">
                                        <thead>
                                          <tr>
                                              <th width="1%" class="numero1" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                                              <th width="1%" class="numeracao">Nº</th>
                                              <th width="1%" data-orderable="false">Foto</th>
                                              <th class="text-nowrap">Nome</th>
                                              <th class="text-nowrap">D.Nasc</th>
                                              <!-- <th class="text-nowrap">Graduacao</th> -->
                                              <th width="2%" class="text-center">ASSOCIACAO PROVINCIAL</th>
                                              <th class="text-center">Estilo</th>
                                              <th class="text-center">Academia</th>
                                              <th class="text-center">Estado</th>
                                              <th class="text-center">Accao</th>
                                          </tr>
                                        </thead>
                                      <tbody>
                                         <?php $cont=0;
                                               $contador=0;
                                               foreach($verAsAtletas as $atleta):
                                                       $cont++;
                                               ?>

                                          <tr class="odd gradeX">
                                          <td width="1%" class="numero1" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $atleta->id_mestre;?>"></label><input type="checkbox" class="radio" id="<?= $atleta->id_mestre;?>" name="<?= $atleta->id_mestre?>radio[]" value="<?= $atleta->id_mestre;?>" hidden></td>
                                            <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                                            <?php if($atleta->imagem == null){ ?>
                                                        <td class="width-30"><figure style="height: 30px;width: 30px;flex: 0 0 auto;margin: 0 15px 0 0;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                                              <?php }else{ ?>
                                                                 <td class="width-30"><figure style="height: 30px;width: 30px;flex: 0 0 auto;margin: 0 15px 0 0;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $atleta->imagem);?>" /></figure></td>
                                                              <?php }?>
                                                              <td id="nomeAatleta"><?= $atleta->nome; ?></td>
                                                              <td id="nomeAatleta"><?= date('d/m/Y', strtotime(strtoupper($atleta->data_nascimento)));?></td>
                                                              <!-- <td class="text-center">
                                                                <div class="text-center" id="conteiner3">

                                                                      <?php if($atleta->graduacao == 0){?>

                                                                          <div class="entrada7">
                                                                            <p style="margin-top: 13px;"> NEGRO </p>
                                                                          </div>

                                                                      <?php }else if($atleta->graduacao > 10){?>

                                                                          <?php if($atleta->graduacao == 15){ ?>
                                                                            <div class="bg bg-warning">
                                                                              <p style="margin-top: 13px;color:black">Amarelo</p>
                                                                            </div>
                                                                          <?php }elseif ($atleta->graduacao == 16) { ?>
                                                                            <div class="bg bg-light">
                                                                              <p style="margin-top: 13px;color:black">Branco</p>
                                                                            </div>
                                                                          <?php }elseif ($atleta->graduacao == 14) { ?>
                                                                            <div class="bg bg-orange">
                                                                              <p style="margin-top: 13px;color:black">Laranja</p>
                                                                            </div>
                                                                          <?php }elseif ($atleta->graduacao == 13) { ?>
                                                                            <div class="bg bg-success">
                                                                              <p style="margin-top: 13px;color:black">Verde</p>
                                                                            </div>
                                                                          <?php }elseif ($atleta->graduacao == 12) { ?>
                                                                            <div class="bg bg-primary">
                                                                              <p style="margin-top: 13px;color:black">Azul</p>
                                                                            </div>
                                                                          <?php }elseif ($atleta->graduacao == 11) { ?>
                                                                            <div class="bg bg-light">
                                                                              <p style="margin-top: 13px;color:black">Castanho</p>
                                                                            </div>
                                                                          <?php } ?>

                                                                      <?php }else{ ?>

                                                                          <div class="entrada7">
                                                                            <p style="margin-top: 13px;"><?= $atleta->graduacao;?>º DAN</p>
                                                                          </div>

                                                                          <div class="entrada9">
                                                                            <?php for($i=0;$i < $atleta->graduacao;$i++){ ?>
                                                                                  <div class="entrada4">
                                                                                  </div>
                                                                            <?php } ?>
                                                                          </div>

                                                                      <?php } ?>
                                                                </div>
                                                              </td> -->

                                                              <td width="2%" class="text-center">
                                                                <!-- <div class="ml-3"> -->
                                                                  <?= $atleta->descricao_associacao?>
                                                                <!-- </div> -->
                                                              </td>
                                                              <!-- <td width="3%" class="text-center"> -->
                                                                <!-- <div class="ml-3"> -->
                                                                    <!-- <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoTROCARAssociacaoAtleta" data_id_mestre="<?= $atleta->id_mestre; ?>" data_nomeAsso="<?= $atleta->descricao_associacao?>" data_id_Usuario="<?= $this->session->userdata("id_usuario"); ?>">Transferencia</button> -->
                                                                <!-- </div> -->
                                                              <!-- </td> -->
                                                              <td class="text-center"><?= $atleta->nome_estilo; ?></td>
                                                              <td class="text-center"><?= $atleta->nome_academia; ?></td>

                                                              <?php if($atleta->statu_mestre == "Activo") {?>
                                                              <td class="text-center statu_mestres project-state"><span class="badge badge-success"><?= $atleta->statu_mestre;?></span></td>
                                                              <?php }else{ ?>
                                                              <td class="text-center statu_mestres1"><span class="badge badge-danger"><?= $atleta->statu_mestre;?></span></td>
                                                              <?php } ?>

                                                              <td class="text-center project-actions">
                                                                  <a href="<?= base_url('verMestre/' . $atleta->id_mestre);?>" class="badge badge-info btn-sm p-1"><i class="fas fa-eye"></i></a>
                                                                 <!-- <a href="<?= base_url('editar_mestre/' . $atleta->id_mestre);?>" class="btn btn-sm btn-info "><i class="fas fa-edit"></i></a>
                                                                 <a href="<?= base_url('ExcluirMestre/' . $atleta->id_mestre);?>" data-confirm-atleta="<?php echo $atleta->nome;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> -->
                                                              </td>
                                                          </tr>
                                                         <?php endforeach;?>
                                                      </tbody>

                                      </table>
                                  </div>
                                  <?php }else{ ?>
                                  <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                                    <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                                    <h5 class="media-heading" style="font-size:26px"> BASE DE DADOS VAZIA </h5>
                                  </div>
                                  <?php } ?>
                                  <!-- /.card-body -->

                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-clubes" role="tabpanel" aria-labelledby="custom-tabs-four-clubes-tab">
                            <div class="row p-2">
                              <div class="col-12">

                                <div class="row col-sm-12 text-sm">

                                    <div class="btn-group " style="right: -9px;">
                                      <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportação</button>
                                      <div class="dropdown-menu" role="menu" style="">
                                        <a class="dropdown-item" href="<?= base_url("pdfAtletalista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                                        <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                                      </div>
                                    </div>
                                </div>
                                  <!-- <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                  </div> -->
                                  <!-- /.card-header -->
                                  <?php if($verAsClubes != null){ ?>
                                    <div class="card-body text-sm" style="padding:none;padding-left: 0px;padding-right: 0px;">
                                    <h5 class="mb-40 text-inverse text-center description-header text-uppercase">ACADEMIAS CONTROLADAS PELA Associação</h5><br>
                                      
                                    </div>

                                    <div class="card-body">
                                    
                                        
                                        <div class="row">
                                          <div class="col-5 col-sm-2">
                                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                              <?php $cont=0; $contador=0;
                                                foreach($verAsClubes as $academia):
                                                $cont++;
                                              ?>
                                                <button class="btn btn-info mb-1 btn-flat text-uppercase" idAssociacao="<?php echo $idAssociacao?>" nomeAcademia="<?php echo $academia->nome_academia;?>" id_academia_atletas="<?php echo $academia->id_academia;?>" style="color: white;" id="<?php echo $academia->id_academia;?>"><?php echo $academia->nome_academia;?></button>
                                              <?php endforeach;?>
                                            </div>
                                          </div>
                                          <div class="col-7 col-sm-10">
                                            <div class="card-body p-0 card">
                                            <div class="btn-group p-2" style="right: 0px;width:100px">
                                              <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opções </button>
                                              <div class="dropdown-menu" role="menu" style="">
                                                <a class="dropdown-item" href="<?= base_url("pdfAtletalista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                                                <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                                              </div>
                                            </div>
                                              <div class="text-center p-2 text-uppercase text-bold"><span id="idClubeName"></span></div>
                                              <ul class="users-list clearfix" id="conteudoAcademiaAtleta123">
                                               
                                              </ul>
                                            </div>
                                             
                                          </div>
                                        </div>
                                      
                                    </div>
                                  <?php }else{ ?>
                                  <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                                    <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                                    <h5 class="media-heading" style="font-size:26px"> BASE DE DADOS VAZIA </h5>
                                  </div>
                                  <?php } ?>
                                  <!-- /.card-body -->

                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-arbitro" role="tabpanel" aria-labelledby="custom-tabs-four-arbitro-tab">
                            <div class="row">
                              <div class="col-12">

                                  <!-- <div class="invoice-company text-inverse f-w-600">
                                      <span class="pull-right hidden-print">
                                      <a href="#" class="btn btn-sm btn-white mb-10 pl-5" id="Listar900"><i class="fa fa-file-alt t-plus-1 text-danger fa-fw fa-lg"></i> Ver Lista</a>
                                      </span><br>
                                  </div> -->
                                  <!-- <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                  </div> -->
                                  <!-- /.card-header -->
                                  <?php if($verArbitro != null){ ?>
                                    <div class="card-body text-sm" style="padding:none;padding-left: 0px;margin-left: -20px;margin-right: -20px;padding-right: 0px;">
                                    <table id="example1" class="table table-striped table-sm">
                                    <thead>
                                      <thead>
                                        <tr>
                                          <!-- <th width="1%" class="numero1"><label id="label55" style="display:none;margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th> -->
                                          <th width="1%" class="numeracao">Nº</th>
                                          <th width="1%" data-orderable="false">Foto</th>
                                          <th class="text-nowrap">Nome</th>
                                          <th class="text-center">Categoria</th>
                                          <th class="text-center">Subcategoria</th>
                                          <th class="text-center">Estado</th>
                                          <th class="text-center">Accao</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php $cont=0;
                                            $contador=0;
                                            foreach($verArbitro as $verArbitro):
                                                    $cont++;
                                            ?>

                                        <tr class="odd gradeX">
                                          <!-- <td width="1%" class="numero1"><label id="label555" style="display:none;background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $verAsAtletas->id_verAsAtletas;?>"></label><input type="checkbox" class="radio" id="<?= $verAsAtletas->id_verAsAtletas;?>" name="<?= $verAsAtletas->id_verAsAtletas?>radio[]" value="<?= $verArbitro->id_verAsAtletas;?>" hidden></td> -->
                                          <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                                            <?php if($verArbitro->imagem == null){ ?>
                                                      <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                                            <?php }else{ ?>
                                                              <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $verArbitro->imagem);?>" /></figure></td>
                                                            <?php }?>
                                                            <td id="nomeAverAsAtletas"><?= $verArbitro->nome; ?></td>
                                                            <td class="text-center"><?= $verArbitro->nome_categoria_fk;?></td>
                                                            <td class="text-center"><?= $verArbitro->nome_subcategoria_fk; ?></td>

                                                            <?php if($verArbitro->statu == "Activo") {?>
                                                            <td class="text-center status project-state"><a href="<?= base_url('editar_estado_verAsAtletas/'. $verArbitro->id_arbitro.'/'.$verArbitro->statu);?>" cont="<?= $cont?>" data-Mudar-verArbitro='<?php echo $verArbitro->statu;?>' data-mudar-verArbitro-id="<?php echo $verArbitro->id_arbitro;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-success"><?= $verAsAtletas->statu;?></span></a></td>
                                                            <?php }else{ ?>
                                                            <td class="text-center status1"><a href="<?= base_url('editar_estado_verAsAtletas/'. $verArbitro->id_mestre .'/'.$verArbitro->statu);?>" cont="<?= $cont?>" data-Mudar-verArbitro='<?php echo $verArbitro->statu;?>' data-mudar-verAsAtletas-id="<?php echo $verArbitro->id_arbitro;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-danger"><?= $verAsAtletas->statu;?></span></a></td>
                                                            <?php } ?>

                                                            <td class="text-center project-actions">
                                                                <a href="<?= base_url('mostrarAtl/' . $verArbitro->id_arbitro);?>" class="btn btn-primary btn-sm"><i class="fas fa-folder"></i> Ver </a>
                                                              <!-- <a href="<?= base_url('editarAtleta/' . $verArbitro->id_arbitro);?>" class="btn btn-sm btn-info "><i class="fas fa-edit"></i> Editar </a> -->
                                                              <!-- <a href="<?= base_url('ExcluirAtleta/' . $verArbitro->id_arbitro .'/'.$verArbitro->nome);?>" data-confirm-verAsAtletas="<?php echo $verArbitro->nome;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir </a> -->
                                                            </td>
                                                        </tr>
                                                      <?php endforeach;?>
                                      </tbody>
                                    </table>
                                  </div>
                                  <?php }else{ ?>
                                  <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                                    <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                                    <h5 class="media-heading" style="font-size:26px"> BASE DE DADOS VAZIA </h5>
                                  </div>
                                  <?php } ?>
                                  <!-- /.card-body -->

                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-four-dirigente" role="tabpanel" aria-labelledby="custom-tabs-four-dirigente-tab">
                            <div class="row">
                              <div class="col-12">

                                  <!-- <div class="invoice-company text-inverse f-w-600">
                                      <span class="pull-right hidden-print">
                                      <a href="#" class="btn btn-sm btn-white mb-10 pl-5" id="Listar900"><i class="fa fa-file-alt t-plus-1 text-danger fa-fw fa-lg"></i> Ver Lista</a>
                                      </span><br>
                                  </div> -->
                                  <!-- <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                  </div> -->
                                  <!-- /.card-header -->
                                  <div class="card" style="padding:none;padding-left: 0px;padding-right: 0px;">
                                      <?php if($orgao_social != null){ ?>
                                        <?php $cont=0;
                                          $contador=0;
                                          foreach($orgao_social as $orgao):
                                          $cont++;
                                        ?>
                                          <div class="card-header border-0">
                                            <h3 class="card-title"><?php echo $orgao['descricao']?></h3>

                                          </div>

                                          <div class="card-body table-responsive p-0">
                                            <table class="table table-striped table-valign-middle table-sm">
                                              <thead>
                                              <tr>
                                                <th>Cargo</th>
                                                <th>Nome Completo</th>
                                                <th>Telefone</th>
                                                <!-- <th>Accao</th> -->
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <?php foreach($orgao['membros'] as $membro){?>
                                                <tr>
                                                  <td>
                                                  <?php if(empty($membro['imagem_membro'])){ ?>
                                                    <img alt="Avatar" class="table-avatar img-circle" src="<?= base_url('assets/dist/img/avatar.png');?>" style="height: 40px;width: 40px;">
                                                  <?php }else{?>
                                                    <img alt="Avatar" class="table-avatar img-circle" src="<?= base_url('uploads/product/' . $membro['imagem_membro'])?>" style="height: 32px;width: 32px;">
                                                  <?php } ?>
                                                    <?php echo $membro['nome_cargo_membro']?>
                                                  </td>
                                                  <td><?php echo $membro['nome']?></td>
                                                  <td><?php echo $membro['telefone']?></td>
                                                  <!-- <td><a href="http://localhost/KEDA/mostrarAtl/35" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td> -->

                                                </tr>
                                              <?php }?>

                                              </tbody>
                                            </table>
                                          </div>
                                          <?php endforeach;?>
                                      <?php }else{ ?>
                                          <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:56px;padding-top:56px">
                                            <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                                            <h5 class="media-heading" style="font-size:26px"> BASE DE DADOS VAZIA </h5>
                                          </div>
                                      <?php } ?>
                                  </div>

                                  <!-- /.card-body -->

                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">

                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
