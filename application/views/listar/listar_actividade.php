<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Actividade</h1>
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
            <div class="box-tools col-1 mt-3 ml-3 mb-0">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12 p-3">
              <span id="conteudo2"></span>
              <?php
                if($this->session->flashdata('sucesso_actividade') != NULL):
                    echo $this->session->flashdata('sucesso_actividade');
                endif;
              ?>
            </div>
              <div class="box-tools col-1 mt-2 ml-3 mb-0" style="padding-right:3.5px" data_id_associacao="<?php echo $id_associacao_pro ?>" id="idassociacaoPro89">
                <a class="btn btn-primary btn-block adicionarActividade789 btn-sm" href="<?= site_url('novo_actividade');?>" id="adicionarActividade789"><i class="fa fa-plus"></i> Novo </a>
              </div><br>
              <!-- <div class="col-1 mb-3 ml-3">
                <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdit"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <div class="box-tools col-1 mt-2 ml-3 mb-0" style="margin-left: 23px;">
                <?php if($actividade != null){ ?>
                  <a href="http://localhost/KEDA/actividade/GerarPDF" id="Listar900"><button type="button" class="btn btn-box-tool btn-sm bg-primary"><i class="fa fa-file-alt t-plus-1 fa-fw fa-lg"></i> Ver Lista</button></a>
                <?php } ?>

              </div>
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <?php if($actividade != null){ ?>
              <div class="card-body">
                <table id="example1" class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <!-- <th width="1%" class="numero1 hide"><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th> -->
                      <th width="1%" class="numeracao">Nº</th>
                      <th class="text-nowrap">Actividade</th>
                      <th class="text-center">Local</th>
                      <th class="text-center">Data Inicio</th>
                      <th class="text-center">Data Fim</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Accao</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $cont=0;$contador=0;
                    foreach($actividade as $actividade):
                                 $cont++;?>

                    <tr class="odd gradeX">
                      <!-- <td width="1%" class="numero1 hide"><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $actividade->id_actividade;?>"></label><input type="checkbox" class="radio" id="<?= $actividade->id_actividade;?>" name="<?= $actividade->id_actividade?>radio[]" value="<?= $actividade->id_actividade;?>" hidden></td> -->
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                        <td id="nomeAatleta"><?= $actividade->nome_actividade; ?></td>
                        <td class="text-center"><?= $actividade->local;?></td>
                        <td class="text-center" id="nome_role"><?= $actividade->data_inicio;?></td>
                        <td class="text-center status" id="controle"><?= $actividade->data_fim;?></td>
                        <?php for($i=0;$i <= 3;$i++){?>
                          <?php if($i == $actividade->status){?>
                            <td class="text-center status text-bold bg-dark" id="controle"><span style="color:<?= $estado_actividade[$i]['cor'];?>;border"><?= $estado_actividade[$i]['descricao'];?></span></td>
                          <?php }?>
                        <?php }?>
                      <td class="text-center project-actions">
                        <a href="<?= base_url('verActividade/' . $actividade->id_actividade .'/'. $actividade->id_associacao_pro);?>" data-id_associacao="<?php echo $actividade->id_associacao_pro?>" class="btn btn-sm btn-info width-60 m-r-2"><i class="fa fa-eye"></i></a>
                        <!-- <a href="<?= base_url('editar_actividade/' . $actividade->id_actividade);?>" data-editar-actividade="<?php echo $actividade->id_actividade ?>" data-inicio="<?php echo $actividade->data_inicio ?>" data-fim="<?php echo $actividade->data_fim ?>" data-nome="<?php echo $actividade->nome_actividade ?>" data-local="<?php echo $actividade->local ?>" class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i> Editar </a> -->
                        <a href="<?= base_url('editar_actividade/' . $actividade->id_actividade);?>" data-inicio="<?php echo $actividade->data_inicio ?>" data-fim="<?php echo $actividade->data_fim ?>" data-nome="<?php echo $actividade->nome_actividade ?>" data-local="<?php echo $actividade->local ?>" class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('ExcluirActividade/' . $actividade->id_actividade)?>" data-confirm-actividade="<?php echo $actividade->id_actividade ?>" class="btn btn-sm btn-danger width-65"><i class="fa fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <?php }else{ ?>
              <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                <h5 class="media-heading" style="font-size:26px"> Nenhuma Actividade Encontrada </h5>
              </div>
              <?php } ?>
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
