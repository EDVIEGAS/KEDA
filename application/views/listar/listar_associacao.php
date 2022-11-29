<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Associacao</h1>
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
            <div class="box-tools col-1 mt-3 ml-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12">
              <?php if($this->session->flashdata('sucesso_associacao') != NULL):
                        echo $this->session->flashdata('sucesso_associacao');
                endif;
              ?>
            </div>
              <!-- <div class="col-md-2 mb-3 mt-0 ml-3">
                  <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEditAcademia333"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <!-- <div class="col-2 mb-3 mt-2 ml-3" style="padding-right:2.5px">
                <a class="btn btn-primary btn-block" href="<?= site_url('novaAcademia');?>"><i class="fa fa-user-plus"></i> Adicionar Academia </a>
              </div> -->
              <!-- <div class="col-1 mb-3 ml-3">
                <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdit"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <!-- <div class="invoice-company text-inverse f-w-600">
                  <span class="pull-right hidden-print">
                  <a href="#" class="btn btn-sm btn-white mb-10 pl-5" id="Listar900"><i class="fa fa-file-alt t-plus-1 text-danger fa-fw fa-lg"></i> Ver Lista</a>
                  </span><br>
              </div> -->
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body p-3">
                <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA DAS ASSOCIACOES PROVINCIAIS</legend><br>
                <table id="example1" class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th width="1%" class="numeroAcademia333" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th class="numeracao">Nº</th>
                    <th class="text-nowrap">Descricao</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                <?php $cont=0;$contador=0;
                foreach($associacao as $associacao):
                        $cont++;?>
                  <tr class="odd gradeX">
                    <td width="1%" class="numeroAcademia333" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $associacao->id_associacao_pro;?>"></label><input type="checkbox" class="radio" id="<?= $associacao->id_associacao_pro;?>" name="<?= $associacao->id_associacao_pro?>radio[]" value="<?= $associacao->id_associacao_pro;?>" hidden></td>
                    <td class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                    <!-- <td width="1%" class="f-s-600 text-inverse"><?= $associacao->id_associacao_pro;?></td> -->
                    <td>Associacao provincial do(e) <strong><?= $associacao->descricao_associacao;?></strong></td>

                    <?php if($associacao->statu == "Activo") {?>
                    <td class="text-center status project-state"><a title="Click para mudar o estado" href="<?= base_url('editar_estado_associacao/'. $associacao->id_associacao_pro.'/'.$associacao->statu);?>" cont="<?= $cont?>" data-Mudar-associacao='<?php echo $associacao->statu;?>' data-mudar-associacao-id="<?php echo $associacao->id_associacao_pro;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-success"><?= $associacao->statu;?></span></a></td>
                    <?php }else{ ?>
                    <td class="text-center status1"><a title="Click para mudar o estado" href="<?= base_url('editar_estado_associacao/'. $associacao->id_associacao_pro .'/'.$associacao->statu);?>" cont="<?= $cont?>" data-Mudar-associacao='<?php echo $associacao->statu;?>' data-mudar-associacao-id="<?php echo $associacao->id_associacao_pro;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-danger"><?= $associacao->statu;?></span></a></td>
                    <?php } ?>

                    <td class="text-center">
                        <a href="<?= base_url('verAssociacao/' . $associacao->id_associacao_pro);?>" class="badge badge-info"><i class="fa fa-eye"></i></a>
                        <!-- <a href="<?= base_url('Academia/EditarAcademia/' . $associacao->id_associacao_pro);?>" id_associacao_pro='<?php echo $associacao->id_associacao_pro;?>' class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i> Editar</a> -->
                        <!-- <a href="<?= base_url('Academia/ExcluirAcademia/' . $associacao->id_associacao_pro);?>" data-confirm='<?php echo $associacao->nome_associacao;?>' data-confirm-associacao='<?php echo $associacao->nome_associacao;?>' data-titulo="<i class='fa fa-trash'></i> ELIMINAR ACADEMIA" class="btn btn-sm btn-danger width-62" ><i class="fa fa-trash"></i> Excluir </a> -->
                    </td>
                  </tr>
                    <?php endforeach;?>
                </tbody>

                </table>
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
