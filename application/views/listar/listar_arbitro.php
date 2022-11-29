<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Arbitro</h1>
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
            <div class="box-tools col-1 mt-2 ml-3 mb-0 pb-5">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12">
              <span id="conteudo2"></span>
              <?php
                if($this->session->flashdata('sucesso') != NULL):
                    echo $this->session->flashdata('sucesso');
                endif;
              ?>
            </div>

              <div class="col-1 mb-3 mt-0 ml-3">
                <a class="btn btn-info btn-flat btn-block btn-sm" href="<?= site_url('cada_Arbitro');?>"><i class="fa fa-user-plus"></i> Adicionar</a>
              </div>
              <!-- <div class="box-tools col-1 mt-2 ml-3 mb-0">
                  <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEditArbitro222"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->

              <div class="row col-sm-12 text-sm">
                  <div class="ml-3 col-md-1">
                      <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEditArbitro222"><i class="fa fa-edit" id="icone123"></i> Editar</button>
                  </div>
                  <div class="btn-group " style="right: -9px;">
                    <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportacao</button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" href="#" id="Listar900Arbitro"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                    </div>
                  </div>
              </div>

              <!-- <div class="box-tools col-1 mt-2 ml-3 mb-0">
                  <span class="pull-right hidden-print">
                    <a href="#" class="btn btn-box-tool btn-sm bg-primary" id="Listar900Arbitro"><i class="fa fa-file-alt t-plus-1 fa-fw fa-lg"></i> Ver Lista</a>
                  </span><br>
              </div> -->
              <div><p style="color: black;font-size: 16px" class="text-center" dataEmisssao="<?php echo date('d/m/Y');?>" id="contador123"></p></div>
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <?php if($Arbitro != null){ ?>
              <div class="card-body">
                <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA DE TODOS ARBITROS</legend><br>
                <table id="example1" class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th width="1%" class="numeroMestre111" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th width="1%" class="numeracao">Nº</th>
                    <th width="1%" data-orderable="false">Foto</th>
                    <th class="text-nowrap">Nome</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">SubCategoria</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                   <?php $cont=0;
                         $contador=0;
                         foreach($Arbitro as $Arbitro):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                      <td width="1%" class="numeroMestre111" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $Arbitro->id_arbitro;?>"></label><input type="checkbox" class="radio" id="<?= $Arbitro->id_arbitro;?>" name="<?= $Arbitro->id_arbitro?>radio[]" value="<?= $Arbitro->id_arbitro;?>" hidden></td>
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                        <?php if($Arbitro->imagem == null){ ?>
                                  <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                        <?php }else{ ?>
                                           <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $Arbitro->imagem);?>" /></figure></td>
                                        <?php }?>
                                        <td id="nomeAatleta"><?= $Arbitro->nome; ?></td>
                                        <td class="text-center"><?= $Arbitro->nome_categoria_fk;?></td>
                                        <?php if($Arbitro->nome_subcategoria_fk == 'NULL'){ ?>
                                          <td class="text-center">-----------</td>
                                        <?php }else{ ?>
                                          <td class="text-center"><?= $Arbitro->nome_subcategoria_fk; ?></td>
                                        <?php } ?>

                                        <?php if($Arbitro->statu == "Activo") {?>
                                        <td class="text-center status"><a title="Click para alterar o estado" href="<?= base_url('editar_estado_arbitro/'. $Arbitro->id_arbitro.'/'.$Arbitro->statu);?>" cont="<?= $cont?>" data-Mudar-Arbitro='<?php echo $Arbitro->statu;?>' data-mudar-Arbitro-id="<?php echo $Arbitro->id_arbitro;?>" class="btn-update-status<?= $cont?>"  id='mudarAtleta1'><span class="badge badge-success"><?= $Arbitro->statu;?></span></a></td>
                                        <?php }else{ ?>
                                        <td class="text-center status1"><a title="Click para alterar o estado" href="<?= base_url('editar_estado_arbitro/'. $Arbitro->id_arbitro .'/'.$Arbitro->statu);?>" cont="<?= $cont?>" data-Mudar-Arbitro='<?php echo $Arbitro->statu;?>' data-mudar-Arbitro-id="<?php echo $Arbitro->id_arbitro;?>" class="btn-update-status<?= $cont?>"  id='mudarAtleta1'><span class="badge badge-danger"><?= $Arbitro->statu;?></span></a></td>
                                        <?php } ?>

                                        <td class="text-center project-actions">
                                           <a href="<?= base_url('mostrarArbl/' . $Arbitro->id_arbitro);?>" class="btn btn-sm btn-info width-60 m-r-2"><i class="fa fa-eye"></i></a>
                                           <a href="<?= base_url('editar_arbitro/' . $Arbitro->id_arbitro);?>" class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i></a>
                                           <a href="<?= base_url('ExcluirArbitro/' . $Arbitro->id_arbitro);?>" data-confirm-arbitro="<?php echo $Arbitro->nome;?>" class="btn btn-sm btn-danger width-65"><i class="fa fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                   <?php endforeach;?>
                                </tbody>

                </table>
                <div class="col-md-2">
                    <button style="border: 1px solid #ff5b57;display:none" class="btn btn-default btn-block" id="botaoApagarArbitroList"><i class="fa fa-trash-alt"></i> Apagar </button>
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
