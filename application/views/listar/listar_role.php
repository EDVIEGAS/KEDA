<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Perfil</h1>
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
            <div class="box-tools col-1 mt-2 ml-3 mb-0">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
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
                <a class="btn btn-info btn-flat btn-block btn-sm" href="<?= site_url('novoMestre');?>" id="addPerfil786"><i class="fa fa-user-plus"></i> Adicionar Perfil </a>
              </div>
              <?php if($roles != null){ ?>
              <div class="col-md-1 mb-3 mt-0 ml-3">
                  <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEditArbitro222"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div>

              <!-- <div class="row col-sm-12 text-sm">
                  <div class="ml-3 col-md-1">
                      <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEditArbitro222"><i class="fa fa-edit" id="icone123"></i> Editar</button>
                  </div>
                  <div class="btn-group " style="right: -9px;">
                    <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportacao</button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" href="<?= base_url("pdfAtletalista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                    </div>
                  </div>
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

              <div class="card-body">
                <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA DOS PERFIS</legend><br>
                <table id="example1" class="table table-striped table-sm">
                <thead>
                  <tr>
                  <th width="1%" class="numeroMestre111" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                    <th width="1%" class="numeracao">Nº</th>
                    <th class="text-nowrap">Nome</th>
                    <th class="text-center">Siglas</th>
                    <th class="text-center">Data de Criacao</th>
                    <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                   <?php $cont=0;
                         $contador=0;
                         foreach($roles as $role):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                      <td width="1%" class="numeroMestre111" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $role->id;?>"></label><input type="checkbox" class="radio" id="<?= $role->id;?>" name="<?= $role->id?>radio[]" value="<?= $role->id;?>" hidden></td>
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>

                                        <td id="nomeArole"><?= $role->nome_role; ?></td>
                                        <td class="text-center" id="nomeArole"><?= $role->sigla; ?></td>
                                        <td class="text-center" id="nomeArole"><?= $role->data_criacao; ?></td>
                                        <td class="text-center project-actions">
                                            <!-- <a href="<?= base_url('verMestre/' . $role->id);?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a> -->
                                           <a href="<?= base_url('editar_role/' . $role->id);?>" data-id_role="<?php echo $role->id;?>" data-nome_role="<?php echo $role->nome_role;?>" data_sigla_role="<?php echo $role->sigla;?>" data-data_criacao="<?php echo $role->data_criacao;?>" class="btn btn-sm btn-info "><i class="fas fa-edit"></i></a>
                                           <a href="<?= base_url('ExcluirRole/' . $role->id);?>" data-confirm-perfil="<?php echo $role->id;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
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
