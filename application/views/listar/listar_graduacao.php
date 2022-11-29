<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Atleta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li> -->
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="box-tools col-1 mt-2 ml-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>

            <div class="col-md-12">
              <?php if($this->session->flashdata('sucesso_mundial') != NULL):
                        echo $this->session->flashdata('sucesso_mundial');
                endif;
              ?>
            </div>

              <div class="col-1 mb-3 mt-2 ml-3">
                <a class="btn btn-primary btn-block" href="<?= site_url('graduacao');?>"><i class="fa fa-user-plus"></i> Adicionar </a>
              </div>
              <!-- <div class="col-md-2 mb-3 mt-0 ml-3">
                  <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEditAcademia333"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <!-- <div class="col-1 mb-3 ml-3">
                <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdit"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <div class="invoice-company text-inverse f-w-600">
                  <span class="pull-right hidden-print">
                  <a href="#" class="btn btn-sm btn-white mb-10 pl-5" id="Listar900"><i class="fa fa-file-alt t-plus-1 text-danger fa-fw fa-lg"></i> Ver Lista</a>
                  </span><br>
              </div>
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
              <div><p style="color: black;font-size: 16px" class="text-center" dataEmisssao="<?php echo date('d/m/Y');?>" id="contador123"></p></div>
              <?php if(!empty($listarGraduacao)){ ?>
                <table id="example1" class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th width="1%" class="numeroAcademia333" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th width="1%" class="numeracao">Nº</th>
                    <th class="text-nowrap">Provincia do Evento</th>
                    <th class="text-center">Local do Evento</th>
                    <th class="text-center">Data e Hora de Inicio</th>
                    <th class="text-center">Data e Hora de Fim</th>
                    <!-- <th class="text-center">Estado</th> -->
                    <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                <?php $cont=0; $contador=0;
                  foreach($listarGraduacao as $listarGraduacao):
                   $cont++;
                ?>
                <tr class="odd gradeX">
                  <td width="1%" class="numeroAcademia333" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $academia->id_campeonato_mundial;?>"></label><input type="checkbox" class="radio" id="<?= $academia->id_academia;?>" name="<?= $academia->id_academia?>radio[]" value="<?= $academia->id_academia;?>" hidden></td>

                    <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                    <td><?= $listarGraduacao->cidade_campeonato;?></td>
                    <td class="text-center"><?= $listarGraduacao->localEvento;?></td>
                    <td class="text-center"><?= $listarGraduacao->dataHoraInicio;?></td>
                    <td class="text-center"><?= $listarGraduacao->dataHoraFim;?></td>
                    <td class="text-center">
                        <a href="<?= base_url('verGraduacao/' . $listarGraduacao->id_graduacaofederacao);?>" class="btn btn-sm btn-info width-60 m-r-2"><i class="fa fa-eye"></i></a>
                        <!-- <a href="<?= base_url('Academia/EditarAcademia/' . $mundial->id_campeonato_mundial);?>" id_academia='<?php echo $mundial->id_campeonato_mundial;?>' class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i></a> -->
                        <!-- <a href="<?= base_url('Academia/ExcluirAcademia/' . $mundial->id_campeonato_mundial);?>" data-confirm-Eliminar-Muundial='<?php echo $mundial->id_campeonato_mundial;?>' data-titulo="<i class='fa fa-trash'></i> ELIMINAR ACADEMIA" class="btn btn-sm btn-danger width-62" ><i class="fa fa-trash-alt"></i></a> -->
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
                </table>
              <?php }else{ ?>
                <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                  <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                  <h5 class="media-heading" style="font-size:26px"> BASE DE DADOS VAZIA </h5>
                </div>
              <?php } ?>
                <div class="col-md-2">
                    <button style="border: 1px solid #ff5b57;display:none" class="btn btn-default btn-block" id="botaoApagarAcademiaList"><i class="fa fa-trash-alt"></i> Apagar </button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
