<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Academia</h1>
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

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="box-tools col-1 mt-2 ml-3 mb-4">
                <a href="javascript:history.back();"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12">
              <?php if($this->session->flashdata('sucesso_academia') != NULL):
                        echo $this->session->flashdata('sucesso_academia');
                endif;
              ?>
            </div>
              <div class="col-1 mb-3 mt-2 ml-3">
                <a class="btn btn-primary btn-block btn-sm" href="<?= site_url('novaAcademia');?>"><i class="fa fa-user-plus"></i> Adicionar </a>
              </div>

              <div class="row col-sm-12">
                  <div class="ml-3 col-md-1">
                      <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEditAcademia333"><i class="fa fa-edit" id="icone123"></i> Editar</button>
                  </div>
                  <div class="btn-group text-sm" style="right: -9px;">
                    <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportacao</button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" href="<?= base_url("pdfAcademialista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                    </div>
                  </div>
              </div>
              <!-- <div class="col-1 mb-3 ml-3">
                <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdit"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->

              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA COMPLETA DAS ACADEMIAS CONTROLADAS PELA ASSOCIACAO PROVINCIAL DO <?php echo $this->session->userdata('nome'); ?></legend><br>
              <div><p style="color: black;font-size: 16px" class="text-center" dataEmisssao="<?php echo date('d/m/Y');?>" id="contador123"></p></div>
                <table id="example1" class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th width="1%" class="numeroAcademia333" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th width="1%" class="numeracao">Nº</th>
                    <th class="text-nowrap">Nome</th>
                    <th class="text-center">Estilo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                <?php $cont=0; $contador=0;
                  foreach($academia as $academia):
                   $cont++;
                ?>
                <tr class="odd gradeX">
                  <td width="1%" class="numeroAcademia333" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $academia->id_academia;?>"></label><input type="checkbox" class="radio" id="<?= $academia->id_academia;?>" name="<?= $academia->id_academia?>radio[]" value="<?= $academia->id_academia;?>" hidden></td>

                    <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                    <td><?= $academia->nome_academia;?></td>
                    <td class="text-center"><?= $academia->nome_estilo;?></td>
                    <?php if($academia->statu == "Activo") {?>
                      <td class="text-center status"><a href="<?= base_url('editar_estado_arbitro/'. $academia->id_academia.'/'.$academia->statu);?>" cont="<?= $cont?>" data-Mudar-academia='<?php echo $academia->statu;?>' data-mudar-academia-id="<?php echo $academia->id_academia;?>" class="btn-update-status<?= $cont?>"  id='mudarAtleta1'><span class="badge badge-success"><?= $academia->statu;?></span></a></td>
                    <?php }else{ ?>
                      <td class="text-center status1"><a href="<?= base_url('editar_estado_arbitro/'. $academia->id_academia .'/'.$academia->statu);?>" cont="<?= $cont?>" data-Mudar-academia='<?php echo $academia->statu;?>' data-mudar-academia-id="<?php echo $academia->id_academia;?>" class="btn-update-status<?= $cont?>"  id='mudarAtleta1'><span class="badge badge-danger"><?= $academia->statu;?></span></a></td>
                    <?php } ?>

                    <td class="text-center">
                        <a href="<?= base_url('Academia/verAcademia/' . $academia->id_academia);?>" class="btn btn-sm btn-info width-60 m-r-2"><i class="fa fa-eye"></i></a>
                        <a href="<?= base_url('Academia/EditarAcademia/' . $academia->id_academia);?>" id_academia='<?php echo $academia->id_academia;?>' class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('Academia/ExcluirAcademia/' . $academia->id_academia);?>" data-confirm='<?php echo $academia->nome_academia;?>' data-confirm-academia='<?php echo $academia->nome_academia;?>' data-titulo="<i class='fa fa-trash'></i> ELIMINAR ACADEMIA" class="btn btn-sm btn-danger width-62" ><i class="fa fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
                </table>
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
