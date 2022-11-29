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
<!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-3 text-center d-flex align-items-center justify-content-center" id="pegarListaCategoria76453" data_id_graduacao="<?php echo $id_Graduacao ?>">
          <div class="">
            <h1>Seminario de <strong>Graduacao</strong></h1>
            <p class="lead mb-5"><?= $totalInfoSeminario[0]->pais_campeonato ?>,<?= $totalInfoSeminario[0]->cidade_campeonato ?><br>
              <?= $totalInfoSeminario[0]->localEvento ?>
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
                                                      <div class="table-responsive col-lg-12 pt-3 pb-3 text-sm" id="mostrarSeminarioFinal4556799">
                                                        <div class="card-body">
                                                        <div><p style="color: black;font-size: 16px" class="text-center" dataEmisssao="<?php echo date('d/m/Y');?>" id="contador123"></p></div>
                                                          <table id="example1" class="table table-striped table-sm">
                                                          <thead>
                                                            <tr>
                                                              <th width="1%" class="numerograduacao333" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                                                              <th width="1%" class="numeracao">Nº</th>
                                                              <th class="text-nowrap">Nome</th>
                                                              <th class="text-center">Actual Graduacao</th>
                                                              <th class="text-center">Nova Graduacao</th>
                                                              <th class="text-center">Exame</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                          <?php $cont=0; $contador=0;
                                                            foreach($layoutParticipantesAprovadosGraduacao as $graduacao):
                                                             $cont++;
                                                          ?>
                                                          <tr class="odd gradeX">
                                                            <td width="1%" class="numerograduacao333" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $graduacao->id_graduacao;?>"></label><input type="checkbox" class="radio" id="<?= $graduacao->id_graduacao;?>" name="<?= $graduacao->id_graduacao?>radio[]" value="<?= $graduacao->id_graduacao;?>" hidden></td>

                                                              <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                                                              <td><?= $graduacao->nome_participante;?></td>
                                                              <td class="text-center"><?= $graduacao->graduacao;?></td>
                                                              <?php if($graduacao->nova_graduacao == "0"){ ?>
                                                                <td class="text-center">Cinturao Negro</td>
                                                              <?php }else{ ?>
                                                                <td class="text-center"><?= $graduacao->nova_graduacao;?>ºDan</td>
                                                              <?php } ?>
                                                              <td class="text-center"><?= $graduacao->tipo;?></td>

                                                          </tr>
                                                          <?php endforeach;?>
                                                          </tbody>
                                                          </table>
                                                          <div class="col-md-2">
                                                              <button style="border: 1px solid #ff5b57;display:none" class="btn btn-default btn-block" id="botaoApagargraduacaoList"><i class="fa fa-trash-alt"></i> Apagar </button>
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
    </div>

  </section>
