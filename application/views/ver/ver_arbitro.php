<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
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
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
        </div>

        <div class="row ml-5 mr-5">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline" style="border-top:0px;">
              <div class="card-body box-profile" style="">

                <div class="col-md-12">

                    <div id="text-center5" class="col-sm-12">
                        <?php if($verArb[0]->imagem != null){ ?>
                        <img class="img-fluid p-3" src="<?= base_url('uploads/product/' . $verArb[0]->imagem);?>" style="max-height: 18.1rem; width:100%;">
                        <?php }else{ ?>
                        <img class="img-fluid p-3" src="<?= base_url('assets/images/3.jpg')?>" style="height:18.1rem; width:14.1rem;">
                        <?php } ?>
                    </div>

                    <div id="text-center5" class="col-sm-12">
                    <div style="padding-bottom: 16px !important;">
                      <div style="line-height: 16px;font-size: 12px;line-height: 16px">
                          <h1 class="text-center pb-2 pt-2" style="font-size:18px;font-weight: 600;text-transform: uppercase"><?= $verArb[0]->nome?></h1>
                          <h1 class="text-center" style="font-size:18px;font-weight: 600;text-transform: uppercase">arbitro</h1>
                      </div>
                    </div>
                    </div>

                </div>
              </div>


              <!-- /.card-body -->
            </div>

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ficha Individual</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Estatistica</a></li>
                </ul><br>
                <div class="btn-group dropleft">
                  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Opoes de Documentos</button>
                  <div class="dropdown-menu" role="menu" style="">
                    <a class="dropdown-item" href="#" id="Listar900"><div><i class="far fa-fw fa-address-card"></i> Carteira (PDF)</div></a>
                    <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-certificate"></i> Diploma de Graduacao(PDF)</div></a>
                    <a class="dropdown-item" href="#" id="Listar900"><div><i class="far fa-fw fa-id-badge"></i> Declaracao (PDF)</div></a>
                    <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="far fa-fw fa-file-excel"></i> Exportar Listagem (Excel)</div></a>
                  </div>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                                  <div class="p-0" style="color:#5b5b5b"><h7><strong>INFORMAÇÃO PESSOAL</strong></h7></div>
                                  <hr>
                                  <div class="table-responsive" style="line-height:12px">
                                    <div class="row" style="margin-left: 41.5px;margin-right: 15.5px;">
                                      <div id="text-center5" class="col-sm-12">
                                      <div style="padding-bottom: 16px !important;">
                                        <div style="line-height: 16px;font-size: 12px;line-height: 16px">

                                            <ul style="display: table;list-style-type: none;color: #6c6d6f;margin: 0;padding: 0;display: table-row;">
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Nome</div>
                                                <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verArb[0]->nome;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Genero</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verArb[0]->genero;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Bilhete de Identidade</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                    <div><?php echo $verArb[0]->n_bilhete;?></div>
                                                  </div>
                                                </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Telefone</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verArb[0]->telefone;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Data de Nascimento</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?= date('d/m/Y', strtotime(strtoupper($verArb[0]->data_nascimento)));?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Morada</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verArb[0]->provincia_e;?>/<?php echo $verArb[0]->municipio;?></div>
                                                </div>
                                              </li>
                                              <li style="display: table-row;margin: 0;padding: 0">
                                                <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">E-email</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                  <div><?php echo $verArb[0]->email;?></div>
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
                                      <div id="text-center5" class="col-sm-12">
                                        <div style="padding-bottom: 16px !important;">
                                          <div style="line-height: 16px;font-size: 12px;line-height: 16px">

                                              <ul style="display: table;list-style-type: none;color: #6c6d6f;margin: 0;padding: 0;">
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Categoria</div>
                                                  <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                    <div><?php echo $verArb[0]->nome_categoria_fk;?></div>
                                                  </div>
                                                </li>
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Subcategoria        </div>
                                                    <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                    <div><?php echo $verArb[0]->nome_subcategoria_fk;?></div>
                                                  </div>
                                                </li>
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Provincia</div>
                                                    <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                      <div><?php echo $verArb[0]->provincia_e;?></div>
                                                    </div>
                                                  </li>
                                                <li style="display: table-row;margin: 0;padding: 0">
                                                  <div class="ttu" style="display: table-cell;padding: 0 12px 12px 0;text-transform: uppercase;color:#2d2d2d;font-weight: 700">Statu</div>
                                                    <div class="fw-medium clr-black" style="display: table-cell;padding: 0 12px 12px 0;padding-right: 12px;font-weight: 600;">
                                                    <div><?php echo $verArb[0]->statu;?></div>
                                                  </div>
                                                </li>

                                              </ul>

                                          </div>
                                        </div>
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

          </div>
        </div>
      </div>
</section>
