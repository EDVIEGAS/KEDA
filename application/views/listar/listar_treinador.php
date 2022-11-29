<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar treinador</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><?php echo $titulo; ?></li>
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
            <div class="box-tools col-1 mt-2 ml-3 mb-0">
                <a href="javascript:history.back();"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12 p-3">
              <span id="conteudo2"></span>
              <?php
                if($this->session->flashdata('sucesso') != NULL):
                    echo $this->session->flashdata('sucesso');
                endif;
              ?>
            </div>
              <!-- <div class="col-2 mb-3 mt-0 ml-3" style="padding-right:4.5px">
                <a class="btn btn-primary btn-block" href="<?= site_url('novo_treinador');?>"><i class="fa fa-user-plus"></i> Adicionar Treinador </a>
              </div> -->

              <div class="col-1 mb-3 mt-0 ml-3">
                <a class="btn btn-info btn-flat btn-block btn-sm" href="<?= site_url('novo_treinador');?>"><i class="fa fa-user-plus"></i> Adicionar</a>
              </div>
              <?php if($treinador != null){ ?>
              <!-- <div class="col-md-2 mb-3 mt-0 ml-3">
                  <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdittreinador111"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <!-- <div class="col-1 mb-3 ml-3">
                <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdit"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <div class="row col-sm-12">
                  <div class="ml-3 col-md-1">
                      <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEdittreinador111"><i class="fa fa-edit" id="icone123"></i> Editar</button>
                  </div>
                  <div class="btn-group " style="right: -9px;">
                    <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportacao</button>
                    <div class="dropdown-menu text-sm" role="menu" style="">
                      <a class="dropdown-item" href="<?= base_url("pdfTreinadorlista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                    </div>
                  </div>
              </div>
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->

              <div class="card-body">
                <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA COMPLETA DOS TREINADORES</legend><br>
                <table id="example1" class="table table-striped table-sm text-sm">
                <thead>
                  <tr>
                  <th width="1%" class="numerotreinador111" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th width="1%" class="numeracao">Nº</th>
                    <th width="1%" data-orderable="false">Foto</th>
                    <th class="text-nowrap">Nome</th>
                    <th class="text-nowrap">Categoria Treinador</th>
                    <!-- <th class="text-center">Data de Inscricao</th> -->
                    <!-- <th class="text-center">Data de Validade</th> -->
                    <!-- <th class="text-center">Estilo</th> -->
                        <!-- <th class="text-center">Academia</th> -->
                    <th class="text-center">Estado</th>
                    <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                   <?php $cont=0;
                         $contador=0;
                         foreach($treinador as $treinador):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                      <td width="1%" class="numerotreinador111" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $treinador->id_treinador;?>"></label><input type="checkbox" class="radio" id="<?= $treinador->id_treinador;?>" name="<?= $treinador->id_treinador?>radio[]" value="<?= $treinador->id_treinador;?>" hidden></td>
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                        <?php if($treinador->imagem == null){ ?>
                                  <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                        <?php }else{ ?>
                                           <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $treinador->imagem);?>" /></figure></td>
                                        <?php }?>
                                        <td id="nomeAtreinador"><?= $treinador->nome; ?></td>
                                        <td class="text-nowrap">Treinador Nivel <?= $treinador->categoriaTreinador ?></td>
                                        <!-- <td class="text-center"></td> -->
                                        <!-- <td class="text-center"><?= $treinador->descricao_associacao; ?></td> -->
                                        <!-- <td class="text-center"><?= $treinador->nome_estilo; ?></td> -->

                                        <?php if($treinador->statu_treinador == "Activo") {?>
                                        <td class="text-center status project-state"><a title="Click para mudar o estado" href="<?= base_url('editar_estado_treinador/'. $treinador->id_treinador.'/'.$treinador->statu_treinador);?>" cont="<?= $cont?>" data-Mudar-treinador='<?php echo $treinador->statu_treinador;?>' data-mudar-treinador-id="<?php echo $treinador->id_treinador;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-success"><?= $treinador->statu_treinador;?></span></a></td>
                                        <?php }else{ ?>
                                        <td class="text-center status1"><a title="Click para mudar o estado" href="<?= base_url('editar_estado_treinador/'. $treinador->id_treinador .'/'.$treinador->statu_treinador);?>" cont="<?= $cont?>" data-Mudar-treinador='<?php echo $treinador->statu_treinador;?>' data-mudar-treinador-id="<?php echo $treinador->id_treinador;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-danger"><?= $treinador->statu_treinador;?></span></a></td>
                                        <?php } ?>

                                        <td class="text-center project-actions">
                                           <a href="<?= base_url('verMestre/' . $treinador->id_mestre);?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                           <a href="<?= base_url('editar_treinador/' . $treinador->id_treinador);?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                           <a href="<?= base_url('Excluirtreinador/' . $treinador->id_treinador);?>" data-confirm-treinador="<?php echo $treinador->nome;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                   <?php endforeach;?>
                                </tbody>

                </table>
                <div class="col-md-2">
                    <button style="border: 1px solid #ff5b57;display:none" class="btn btn-default btn-block" id="botaoApagartreinadorLista"><i class="fa fa-trash-alt"></i> Apagar </button>
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
    </section>
