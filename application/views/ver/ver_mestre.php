<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil Mestre</h1>
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
      <div class="container-fluid">
        <div class="box-tools col-md-1 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
        </div>
        <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">PERFIL DO <?php echo $verMestre[0]->nome; ?></legend><br>
        <div class="row" style="margin-left: 130px; margin-right: 130px">
          <div class="col-md-4 text-center" style="padding-left:108.5px">

            <!-- Profile Image -->
            <div class="card">
          
                <!-- <div class="col-md-12" style="border: 1px solid red"> -->

                    <div class="col-sm-12 fotoPerfil12">
                        <?php if($verMestre[0]->imagem != null){ ?>
                          <img class="img-fluid p-0" src="<?= base_url('uploads/product/' . $verMestre[0]->imagem);?>" style="height:120px;width:100%">
                        <?php }else{ ?>
                          <img class="img-fluid p-0" src="<?= base_url('assets/images/3.jpg')?>">
                        <?php } ?>
                    </div>

                  <!-- <div class="row"> -->
                    <div id="text-center" class="col-sm-12">
                    <div style="padding-bottom: 16px !important;">
                      <div style="line-height: 16px;font-size: 12px;line-height: 16px">
                          <h1 class="text-center pb-2 pt-2" style="font-size:18px;font-weight: 600;text-transform: uppercase"><?= $verMestre[0]->nome?></h1>
                          <div class="text-center">
                            <div class="text-center" id="conteiner3" style="left:35%">

                                  <?php if($verMestre[0]->graduacao == 0){?>

                                      <div class="entrada7">
                                        <p style="margin-top: 13px;"> NEGRO </p>
                                      </div>

                                  <?php }else if($verMestre[0]->graduacao > 10){?>

                                      <?php if($verMestre[0]->graduacao == 15){ ?>
                                        <div class="bg bg-warning">
                                          <p style="margin-top: 13px;color:black">Amarelo</p>
                                        </div>
                                      <?php }elseif ($verMestre[0]->graduacao == 16) { ?>
                                        <div class="bg bg-light">
                                          <p style="margin-top: 13px;color:black">Branco</p>
                                        </div>
                                      <?php }elseif ($verMestre[0]->graduacao == 14) { ?>
                                        <div class="bg bg-orange">
                                          <p style="margin-top: 13px;color:black">Laranja</p>
                                        </div>
                                      <?php }elseif ($verMestre[0]->graduacao == 13) { ?>
                                        <div class="bg bg-success">
                                          <p style="margin-top: 13px;color:black">Verde</p>
                                        </div>
                                      <?php }elseif ($verMestre[0]->graduacao == 12) { ?>
                                        <div class="bg bg-primary">
                                          <p style="margin-top: 13px;color:black">Azul</p>
                                        </div>
                                      <?php }elseif ($verMestre[0]->graduacao == 11) { ?>
                                        <div class="bg bg-light">
                                          <p style="margin-top: 13px;color:black">Castanho</p>
                                        </div>
                                      <?php } ?>

                                  <?php }else{ ?>

                                      <div class="entrada7">
                                        <p style="margin-top: 13px;"><?= $verMestre[0]->graduacao;?>º DAN</p>
                                      </div>

                                      <div class="entrada9">
                                        <?php for($i=0;$i < $verMestre[0]->graduacao;$i++){ ?>
                                              <div class="entrada4">
                                              </div>
                                        <?php } ?>
                                      </div>

                                  <?php } ?>
                            </div>
                          </div>
                      </div>
                    </div>
                    </div>
                  <!-- </div> -->

                <!-- </div> -->
             
            </div>

          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ficha Individual</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Estatistica</a></li>
                  <li class="nav-item"><a class="nav-link" href="#documentoPessoal" data-toggle="tab">Documento Pessoal</a></li>
                </ul><br>
                <?php if($this->session->userdata("id_role") == 56){ ?>
                <div class="btn-group dropleft">
                  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Opções de Documentos</button>
                  <div class="dropdown-menu" role="menu" style="">
                    <a class="dropdown-item" href="#" id="CriarCarteiraMestre45" data_id_mestre="<?php echo $verMestre[0]->id_mestre;?>"><div> Carteira Nacional</div></a>
                    <!-- <a class="dropdown-item" href="#" id="CriarDPGraduacao67" data_id_mestre="<?php echo $verMestre[0]->id_mestre;?>" data_bilhete="<?php echo $verMestre[0]->n_bilhete;?>"><div> Diploma de Graduacao</div></a> -->
                    <!-- <a class="dropdown-item" href="<?= base_url('GerarPDFDiploma/' . $verMestre[0]->id_mestre);?>" ><div> Diploma de Mestre</div></a> -->
                    <a class="dropdown-item" href="<?= base_url('GerarPDFFichaMestre/' . $verMestre[0]->id_mestre);?>" id="CriarFichadeMestre45756"><div> Ficha de Atleta</div></a>
                  </div>
                </div>
              <?php }else{ ?>
                <div class="btn-group dropleft">
                  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Opções de Documentos</button>
                  <div class="dropdown-menu" role="menu" style="">
                    <a class="dropdown-item" href="#" id="CriarCarteiraMestre45" data_id_mestre="<?php echo $verMestre[0]->id_mestre;?>"><div> Carteira Nacional</div></a>
                    <a class="dropdown-item" href="#" id="CriarDPGraduacao67" data_id_mestre="<?php echo $verMestre[0]->id_mestre;?>" data_bilhete="<?php echo $verMestre[0]->n_bilhete;?>"><div> Diploma de Graduacao</div></a>
                    <a class="dropdown-item" href="<?= base_url('GerarPDFDiploma/' . $verMestre[0]->id_mestre);?>" ><div> Diploma de Mestre</div></a>
                    <a class="dropdown-item" href="<?= base_url('GerarPDFFichaMestre/' . $verMestre[0]->id_mestre);?>" id="CriarFichadeMestre45756"><div> Ficha de Atleta</div></a>
                  </div>
                </div>
              <?php } ?>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                                  <?php if($posicaoFederacao != null){ ?>
                                  <div class="p-0" style="color:#5b5b5b"><h7><span class="bg-danger p-2 text-uppercase pl-3 pr-3 text-warning"><a title="Click para mais Informacao" href="" id="maisInfomestreTreinador3"><?php echo $posicaoFederacao['treinador'] ?></a></span></h7></div>
                                  <br>
                                  <div class="card-footer bg-light p-0 text-bold">
                                    <ul class="nav nav-pills flex-column">
                                      <li class="nav-item">
                                        <span class="nav-link">
                                         Categoria
                                          <span class="float-right text-danger">
                                            <!-- <i class="fas fa-arrow-down text-sm"></i> -->
                                            Treinador de Nivel <?php echo $posicaoFederacao2[0]->categoriaTreinador ?></span>
                                        </span>
                                      </li>
                                      <li class="nav-item">
                                        <span class="nav-link">
                                          Data de Validade
                                          <span class="float-right text-success">
                                            <?php echo $posicaoFederacao2[0]->data_validade ?>
                                          </span>
                                        </span>
                                      </li>
                                      <li class="nav-item">
                                        <span class="nav-link">
                                          Numero de Licenca
                                          <span class="float-right text-danger">
                                            T<?php echo $posicaoFederacao2[0]->id_treinador ?>
                                          </span>
                                        </span>
                                      </li>
                                      <li class="nav-item">
                                        <span href="#" class="nav-link">
                                          Status
                                          <span class="float-right text-danger">
                                            <?php echo $posicaoFederacao2[0]->statu_treinador ?>
                                          </span>
                                        </span>
                                      </li>
                                    </ul>
                                  </div>
                                  <br>
                                  <?php } ?>

                                  <div class="p-0" style="color:#5b5b5b"><h7><strong>INFORMAÇÃO PESSOAL</strong></h7></div>
                                  <hr>
                                  <div class="table-responsive" style="line-height:12px">
                                    <div class="row" style="margin-left: 41.5px;margin-right: 15.5px;">
                                      <div id="text-center5" class="col-sm-12 text-uppercase">
                                      <div style="padding-bottom: 16px !important;">
                                        <div style="line-height: 16px;font-size: 12px;line-height: 16px">

                                            <ul style="display: table;list-style-type: none;color: #6c6d6f;margin: 0;padding: 0;display: table-row;">
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div style="text-transform: uppercase;color:#2d2d2d;font-weight: 700">Nome</div>
                                                <div style="display: table-cell;padding: 0 12px 12px 0;font-weight: 600;">
                                                  <div class="text-uppercase"><?php echo $verMestre[0]->nome;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Genero</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verMestre[0]->genero;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Bilhete de Identidade</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                    <div><?php echo $verMestre[0]->n_bilhete;?></div>
                                                  </div>
                                                </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Telefone</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verMestre[0]->telefone;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Data de Nascimento</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?= date('d/m/Y', strtotime(strtoupper($verMestre[0]->data_nascimento)));?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Morada</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verMestre[0]->provincia_e;?>/<?php echo $verMestre[0]->municipio;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">E-email</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verMestre[0]->email;?></div>
                                                </div>
                                              </li>

                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="p-0" style="color:#5b5b5b"><h7><strong>INFORMAÇÃO TÉCNICA</strong></h7></div>
                                    <hr>
                                   <div class="table-responsive" style="line-height:12px">
                                    <div class="row" style="margin-left: 41.5px;margin-right: 15.5px;">
                                      <div id="text-center5" class="col-sm-12 text-uppercase">
                                        <div style="padding-bottom: 16px !important;">
                                          <div style="line-height: 16px;font-size: 12px;line-height: 16px">

                                              <ul style="display: table;list-style-type: none;color: #6c6d6f;margin: 0;padding: 0;">
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Peso</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;padding-left:63px">
                                                    <div><?php echo $verMestre[0]->peso;?> Kg</div>
                                                  </div>
                                                </li>
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Graduacao        </div>
                                                    <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;padding-left:63px">
                                                    <?php if($verMestre[0]->graduacao == 0){ ?>
                                                      <div>NEGRO</div>
                                                    <?php }else{ ?>
                                                      <div><?php echo $verMestre[0]->graduacao;?>º DAN</div>
                                                    <?php }?>
                                                  </div>
                                                </li>
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Estilo</div>
                                                    <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;padding-left:63px">
                                                      <div><?php echo $verMestre[0]->nome_estilo;?></div>
                                                    </div>
                                                  </li>
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Academia</div>
                                                    <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;padding-left:63px">
                                                    <div><?php echo $verMestre[0]->nome_academia;?></div>
                                                  </div>
                                                </li>
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Estado</div>
                                                    <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;padding-left:63px">
                                                    <div><?php echo $verMestre[0]->statu_mestre;?></div>
                                                  </div>
                                                </li>
                                              </ul>

                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>



                  </div>
                  <div class="tab-pane" id="documentoPessoal">
                                 
                                    <div class="card mt-2 p-1" id="trocarDocumento459873029" data_id_mestre="<?php echo $verMestre[0]->id_mestre;?>">
                                        <!-- /.card-header -->
                                        <div class="box-tools col-md-4 p-3">
                                          <button type="button" class="btn btn-box-tool btn-sm bg-info trocarDocumento459">Trocar Documento</button>
                                        </div>
                                        
                                        <div class="card-body">
                                          <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                          <div style="height:450px; width:100%;">
                                            <?php if($verMestre[0]->descricao_documento != null){?>
                                            
                                                <embed src="<?= base_url('uploads/documento/' . $verMestre[0]->descricao_documento);?>" type="application/pdf" height="100%" width="100%">
                                             
                                            <?php }else{?>
                                              <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                                                <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                                                <h5 class="media-heading" style="font-size:22px"> Sem Documento </h5>
                                              </div> 
                                            <?php }?> 
                                          </div>
                                        </div>

                                    </div>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse text-center">
                      <!-- timeline time label -->
                      <h1 style="font-size:107px"><i class="fa fa-chart-pie"></i></h1>
                      <p style="font-size:27px">Sem Estatistica para mostrar</p>
                    </div>
                  </div>

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->

            </div>

            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Historico de Graduacao</h3>
              </div>
              <!-- /.card-header -->
                  <?php
                   function data($data){
                    $ano = explode(" ",$data);
                    $ano2 = explode("-",$ano[0]);
                    return $ano2[2] ."-". $ano2[1] ."-". $ano2[0];
                   }
                  ?>

                  <?php
                   function data4($data){
                    $ano = explode(" ",$data);
                    $ano2 = explode("-",$ano[0]);
                    return $ano2[0];
                   }
                  ?>

                  <?php if(count($historico) != 0){ ?>
                    <div class="card-body table-responsive p-0" style="height: 200px;">
                        <table class="table table-head-fixed text-nowrap">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th class="text-center">Graduacao</th>
                              <th class="text-center">Data</th>
                              <th class="text-center">Carencia</th>
                              <th class="text-center">status</th>
                            </tr>
                          </thead>
                          <tbody>
                    <?php $soma=0; ?>
                    <?php foreach($historico as $historico){?>
                      <tr class="">
                        <td class="text-uppercase"><?php echo $soma = $soma+1; ?></td>

                        <?php if($historico->nova_graduacao == "0"){ ?>
                        <td class="text-center"><span class="tag tag-success">Cinturao Negro</span></td>
                        <?php }else{ ?>
                        <td class="text-center"><span class="tag tag-success p-1"><?php echo $historico->nova_graduacao?> ªDan</span></td>
                        <?php } ?>
                        <td class="text-center"><?php echo data($historico->dataHoraFim); ?></td>
                        <td class="text-center"><span class="">
                          <a>
                            <?php echo data($historico->dataProxGraduacao); ?>
                          </a>
                          <br>
                          <small>
                              (<?= data4($historico->dataProxGraduacao)-data4($historico->dataHoraFim) ?> ano(s))
                          </small>
                        </span>
                        </td>
                        <?php if(date('Y') >= data4($historico->dataProxGraduacao)){ ?>
                          <td class="text-center"><span class="bg bg-danger p-1 col">Expirado</span></td>
                        <?php }else{?>
                          <td class="text-center"><span class="bg bg-success p-1 col">Activo</span></td>
                        <?php } ?>
                      </tr>
                    <?php }?>
                  <?php }else{ ?>
                    <div class="card-body table-responsive p-0" style="height: 100px;">
                      <div class="text-center text-bold pt-4">
                        <span>NENHUMA INFORMAÇÃO</span>
                      </div>
                  <?php } ?>
                    </tbody>
                    </table>
                        </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Campeonato Nacional</h3>
              </div>
              <!-- /.card-header -->
              <?php if(count($Nacional_participacao) != 0){ ?>
                  <div class="card-body table-responsive p-0" style="height: 200px;">
                      <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Descricao</th>
                      <th>Data de Inicio</th>
                      <th>Data de Fim</th>
                      <th>Colocacao</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($Nacional_participacao as $Nacional_participacao){?>
                    <tr>
                      <td><?php echo $Nacional_participacao['cidade_campeonato']?></td>
                      <td><?php echo $Nacional_participacao['dataHoraInicio']?></td>
                      <td>...............................</td>
                      <?php if(count($Nacional_participacao['posicao']) == 0){ ?>
                        <td><span class="tag tag-success">Sem Classificacao</span></td>
                      <?php }else{?>
                        <td><span class="tag tag-success">Approved</span></td>
                      <?php }?>
                    </tr>
                  <?php }?>
                <?php }else{ ?>
                  <div class="card-body table-responsive p-0" style="height: 100px;">
                    <div class="text-center text-bold pt-4">
                      <span>NENHUMA INFORMAÇÃO</span>
                    </div>
                <?php } ?>
                  </tbody>
                </table>
                  </div>

              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Campeonato Provincial</h3>
              </div>

              <?php if(count($Provincial_participacao) != 0){ ?>
              <div class="card-body table-responsive p-0" style="height: 150px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th class="text-center">Descricao</th>
                      <th class="text-center">Data</th>
                      <!-- <th class="text-center">Data de Fim</th> -->
                      <th class="text-center">Classificacao</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $soma=0;  ?>
                  <?php foreach($Provincial_participacao as $Provincial_participacao){?>
                    <tr>
                      <td><?php echo $soma = $soma + 1; ?></td>
                      <td class="text-center"><?php echo $Provincial_participacao['cidade_campeonato']?></td>
                      <td class="text-center"><?php echo data($Provincial_participacao['dataHoraFim'])?></td>
                      <!-- <td><?php echo $Provincial_participacao->data_fim?></td> -->

                      <?php if($Provincial_participacao[1]['posicao'] == 1){ ?>
                        <td class="text-center"><span class="tag tag-success">Ouro</span><td>
                      <?php }elseif ($Provincial_participacao[1]['posicao'] == 2) { ?>
                        <td class="text-center"><span class="tag tag-success">Prata</span></td>
                      <?php }elseif ($Provincial_participacao[1]['posicao'] == 3) { ?>
                        <td class="text-center"><span class="tag tag-success">Bronze</span></td>
                      <?php }else{?>
                        <td class="text-center"><span class="tag tag-success">Sem classificacao</span></td>
                      <?php } ?>
                    </tr>
                  <?php }?>
                <?php }else{ ?>
                  <div class="card-body table-responsive p-0" style="height: 100px;">
                    <div class="text-center text-bold pt-4">
                      <span>NENHUMA INFORMAÇÃO</span>
                    </div>
                <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Campeonato Mundial</h3>
              </div>
              <!-- /.card-header -->
              <?php if(count($Mundial_participacao) != 0){ ?>
              <div class="card-body table-responsive p-0" style="height: 150px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th class="text-center">Descricao</th>
                      <th class="text-center">Ano</th>
                      <!-- <th>Data de Fim</th> -->
                      <th class="text-center">Classificacao</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $soma = 0; ?>
                  <?php foreach($Mundial_participacao as $Mundial_participacao){?>
                    <tr>
                      <td><?php echo $soma = $soma + 1;?></td>
                      <td class="text-center"><?php echo $Mundial_participacao->local?></td>
                      <td class="text-center"><?php echo $Mundial_participacao->ano?></td>
                      <!-- <td><?php echo $Mundial_participacao->data_fim?></td> -->
                      <?php if($Mundial_participacao->posicao == 1){ ?>
                        <td class="text-center"><span class="tag tag-success">Ouro</span><td>
                      <?php }elseif ($Mundial_participacao->posicao == 2) { ?>
                        <td class="text-center"><span class="tag tag-success">Prata</span></td>
                      <?php }elseif ($Mundial_participacao->posicao == 3) { ?>
                        <td class="text-center"><span class="tag tag-success">Bronze</span></td>
                      <?php }else{?>
                        <td class="text-center"><span class="tag tag-success">Sem classificacao</span></td>
                      <?php } ?>
                    </tr>
                  <?php }?>
                <?php }else{ ?>
                  <div class="card-body table-responsive p-0" style="height: 100px;">
                    <div class="text-center text-bold pt-4">
                      <span>NENHUMA INFORMAÇÃO</span>
                    </div>
                <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">Campeonato Africano</h3>
              </div>
              <!-- /.card-header -->
              <?php if(count($Africano_participaca) != 0){ ?>
              <div class="card-body table-responsive p-0" style="height: 150px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Descricao</th>
                      <th>Ano</th>
                      <th>Colocacao</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($Africano_participaca as $Africano_participaca){?>
                    <tr>
                      <td><?php echo $Africano_participaca->local?></td>
                      <td><?php echo $Africano_participaca->ano?></td>
                      <!-- <td><?php echo $Mundial_participacao->data_fim?></td> -->
                      <?php if($Africano_participaca->posicao == 1){ ?>
                        <td><span class="tag tag-success">Ouro</span><td>
                      <?php }elseif ($Africano_participaca->posicao == 2) { ?>
                        <td><span class="tag tag-success">Prata</span></td>
                      <?php }elseif ($Africano_participaca->posicao == 3) { ?>
                        <td><span class="tag tag-success">Bronze</span></td>
                      <?php }else{?>
                        <td><span class="tag tag-success">Sem classificacao</span></td>
                      <?php } ?>
                    </tr>
                  <?php }?>
                <?php }else{ ?>
                  <div class="card-body table-responsive p-0" style="height: 100px;">
                    <div class="text-center text-bold pt-4">
                      <span>NENHUMA INFORMAÇÃO</span>
                    </div>
                <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
</section>
