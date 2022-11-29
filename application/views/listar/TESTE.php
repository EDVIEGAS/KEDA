<!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="col-md-12 p-3">
            <?php
                if($this->session->flashdata('sucesso') != NULL):
                    echo $this->session->flashdata('sucesso');
                endif;
              ?>
            </div>
            <div class="box-tools col-1 mt-0 ml-3 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
              <div class="col-2 mb-3 mt-0 ml-3" style="padding-right:4.5px">
                <a class="btn btn-primary btn-block" href="<?= site_url('novo_atleta');?>"><i class="fa fa-user-plus"></i> Adicionar Atleta </a>
              </div>
              <div class="col-md-2 mb-3 mt-0 ml-3">
                  <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdit879"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div>
              <div class="invoice-company text-inverse f-w-600">
                  <span class="pull-right hidden-print">
                  <a href="#" class="btn btn-sm btn-white mb-10 pl-5" id="Listar900"><i class="fa fa-file-alt t-plus-1 text-danger fa-fw fa-lg"></i> Ver Lista</a>
                  </span><br>
              </div>
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <?php if($atletas != null){ ?>
                <div class="card-body">
                <div><p style="color: black;font-size: 16px" class="text-center" dataEmisssao="<?php echo date('d/m/Y');?>" id="contador123"></p></div>
                <table id="example1" class="table table-striped">
                <thead>
                  <thead>
                    <tr>
                      <th width="1%" class="numero1"><label id="label55" style="display:none;margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value=""></th>
                      <th width="1%" class="numeracao">Nº</th>
                      <th width="1%" data-orderable="false">Foto</th>
                      <th class="text-nowrap">Nome</th>
                      <th class="text-center">Graduacao</th>
                      <th class="text-center">Estilo</th>
                      <th class="text-center">Academia</th>
                      <th class="text-center">Estado</th>
                      <th class="text-center">Accao</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $cont=0;
                         $contador=0;
                         foreach($atletas as $atleta):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                      <td width="1%" class="numero1"><label id="label555" style="display:none;background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $atleta->id_atleta;?>"></label><input type="checkbox" class="radio" id="<?= $atleta->id_atleta;?>" name="<?= $atleta->id_atleta?>radio[]" value="<?= $atleta->id_atleta;?>" hidden></td>
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                        <?php if($atleta->imagem == null){ ?>
                                  <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                        <?php }else{ ?>
                                           <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $atleta->imagem);?>" /></figure></td>
                                        <?php }?>
                                        <td id="nomeAatleta"><?= $atleta->nome; ?></td>
                                        <td class="text-center"><?= $atleta->graduacao;?></td>
                                        <td class="text-center"><?= $atleta->nome_estilo_atleta; ?></td>
                                        <td class="text-center"><?= $atleta->nome_academia; ?></td>

                                        <?php if($atleta->statu_atleta == "Activo") {?>
                                        <td class="text-center statu_atletas project-state"><a href="<?= base_url('editar_estado_atleta/'. $atleta->id_atleta.'/'.$atleta->statu_atleta);?>" cont="<?= $cont?>" data-Mudar-atleta='<?php echo $atleta->statu_atleta;?>' data-mudar-atleta-id="<?php echo $atleta->id_atleta;?>" class="btn-update-statu_atletas<?= $cont?>" id='mudarAtleta'><span class="badge badge-success"><?= $atleta->statu_atleta;?></span></a></td>
                                        <?php }else{ ?>
                                        <td class="text-center statu_atletas1"><a href="<?= base_url('editar_estado_atleta/'. $atleta->id_atleta .'/'.$atleta->statu_atleta);?>" cont="<?= $cont?>" data-Mudar-atleta='<?php echo $atleta->statu_atleta;?>' data-mudar-atleta-id="<?php echo $atleta->id_atleta;?>" class="btn-update-statu_atletas<?= $cont?>" id='mudarAtleta'><span class="badge badge-danger"><?= $atleta->statu_atleta;?></span></a></td>
                                        <?php } ?>
                                       
                                        <td class="text-center project-actions">
                                            <a href="<?= base_url('mostrarAtl/' . $atleta->id_atleta);?>" class="btn btn-primary btn-sm"><i class="fas fa-folder"></i> Ver </a>
                                           <a href="<?= base_url('editarAtleta/' . $atleta->id_atleta);?>" class="btn btn-sm btn-info "><i class="fas fa-edit"></i> Editar </a>
                                           <a href="<?= base_url('ExcluirAtleta/' . $atleta->id_atleta .'/'.$atleta->nome);?>" data-confirm-atleta="<?php echo $atleta->nome;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir </a>
                                        </td>
                                    </tr>
                                   <?php endforeach;?>
                  </tbody>
                </table>
                <div class="col-md-1">
                    <button style="border: 1px solid #ff5b57; display:none" class="btn btn-default btn-block" id="botaoApagar"><i class="fa fa-trash-alt"></i> Apagar </button>
                </div>
              </div>
              <?php }else{ ?>
              <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                <h5 class="media-heading" style="font-size:26px"> BASE DE DADOS VAZIA </h5>
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
    </section> -->