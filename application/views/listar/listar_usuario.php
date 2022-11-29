<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Utilizadores</h1>
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

<section class="content text-sm">
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
              <div class="col-1 mb-3 mt-0 ml-3">
                <a class="btn btn-primary btn-flat btn-block btn-sm" href="#" id="adicionarUsuario23478"><i class="fa fa-user-plus"></i> Adicionar</a>
              </div>

              <!-- <div class="col-1 mb-3 mt-0 ml-3" style="">
                  <a class="btn btn-primary btn-flat btn-block btn-sm" href="<?= site_url('novo_atleta');?>" id="adicionarUsuario23478"><i class="fa fa-user-plus"></i> Adicionar </a>
                </div> -->
                <!-- <div class="row col-sm-12">
                    <div class="ml-3 col-md-1">
                        <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEdit879"><i class="fa fa-edit" id="icone123"></i> Editar</button>
                    </div>
                    <div class="btn-group " style="right: -9px;">
                      <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportacao</button>
                      <div class="dropdown-menu" role="menu" style="">
                        <a class="dropdown-item" href="<?= base_url("pdfAtletalista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                        <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                      </div>
                    </div>
                </div> -->

              <?php if($usuario != null){ ?>
              <div class="col-md-1 mb-3 mt-0 ml-3">
                  <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEditMestre111"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div>
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

              <div class="card-body">
                <table id="example1" class="table table-striped table-sm">
                <thead>
                  <tr>
                  <th width="1%" class="numeroMestre111" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th width="1%" class="numeracao">Nº</th>
                    <th width="1%" data-orderable="false">Foto</th>
                    <th class="text-nowrap">Nome de Usuario</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Ultimo Login</th>
                    <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                   <?php $cont=0;
                         $contador=0;
                         foreach($usuario as $usuario):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                      <td width="1%" class="numeroMestre111" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $usuario->id_usuario;?>"></label><input type="checkbox" class="radio" id="<?= $usuario->id_usuario;?>" name="<?= $usuario->id_usuario?>radio[]" value="<?= $usuario->id_usuario;?>" hidden></td>
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                        <?php if($usuario->imagem == null){ ?>
                                  <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                        <?php }else{ ?>
                                           <td class="width-30"><figure style="height: 35px;width: 35px;flex: 0 0 auto;margin: 0 15px 0 0;border: 1px solid #C5CED5;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border: 4px solid white;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $usuario->imagem);?>" /></figure></td>
                                        <?php }?>
                                        <td id="nomeAusuario"><?= $usuario->username; ?> (<?= $usuario->nome_role; ?>)</td>
                                        <?php if($usuario->status == "Activo") {?>
                                        <td class="text-center status project-state"><a href="<?= base_url('editar_estado_usuario/'. $usuario->id_usuario.'/'.$usuario->status);?>" cont="<?= $cont?>" data-Mudar-usuario='<?php echo $usuario->status;?>' data-mudar-usuario-id="<?php echo $usuario->id_usuario;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-success"><?= $usuario->status;?></span></a></td>
                                        <?php }else{ ?>
                                        <td class="text-center status1"><a href="<?= base_url('editar_estado_usuario/'. $usuario->id_usuario .'/'.$usuario->status);?>" cont="<?= $cont?>" data-Mudar-usuario='<?php echo $usuario->status;?>' data-mudar-usuario-id="<?php echo $usuario->id_usuario;?>" class="btn-update-status<?= $cont?>" id='mudarAtleta'><span class="badge badge-danger"><?= $usuario->status;?></span></a></td>
                                        <?php } ?>
                                        <td class="text-center" id="nomeAusuario"><?= $usuario->dataLogin; ?></td>
                                        <td class="text-center project-actions">
                                            <a href="<?= base_url('mostrarUsuarioPerfil/' . $usuario->id_usuario);?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                           <a href="<?= base_url('editar_usuario/' . $usuario->id_usuario);?>" data-editar-usuario="<?php echo $usuario->nome;?>" data-editar-usuario_senha="<?php echo $usuario->senha;?>" data-editar-usuario_username="<?php echo $usuario->username;?>" data-editar-usuario_status="<?php echo $usuario->status;?>" data-editar-usuario_senha="<?php echo $usuario->senha;?>" data-editar-usuario_role="<?php echo $usuario->nome_role;?>" class="btn btn-sm btn-info "><i class="fas fa-edit"></i></a>
                                           <a href="<?= base_url('ExcluirMestre/' . $usuario->id_usuario);?>" data-confirm-usuario="<?php echo $usuario->nome;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                   <?php endforeach;?>
                                </tbody>

                </table>
                <div class="col-md-2">
                    <button style="border: 1px solid #ff5b57;display:none" class="btn btn-default btn-block" id="botaoApagarMestreLista"><i class="fa fa-trash-alt"></i> Apagar </button>
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
