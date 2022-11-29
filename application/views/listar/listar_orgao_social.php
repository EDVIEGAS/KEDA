<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="box-tools col-1 mt-0 ml-0 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm btn-info"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
          <h3 class="text-center">ORGAO SOCIAL DE <?= date('d/m/Y', strtotime(strtoupper($ano_mandato[0]->data_inicio_mandato)));?> A <?= date('d/m/Y', strtotime(strtoupper($ano_mandato[0]->data_fim_mandato)));?></h3>


          <div class="invoice-company text-inverse f-w-300">
            <span class="pull-right hidden-print">
                <a href="http://localhost/KEDA/Orgao_Social/listarMandatoOrgaoMembro/<?php echo $mandato_atual?>" class="btn btn-sm btn-info mb-10 pl-2 text-center" id="Listar900"><i class="fa fa-file-alt t-plus-1 text-white fa-fw fa-lg"></i> Listar </a>
            </span><br>
        </div>

        </div>

        <div class="card-body p-0">
          <table class="table table-striped projects table-sm">
              <thead>
                  <tr>
                      <!-- <th style="width: 1%">
                          #
                      </th> -->
                      <th style="width: 20%">
                          Descricao
                      </th>
                      <th class="text-center">
                          Membros
                      </th>
                      <!-- <th>
                          Project Progress
                      </th> -->
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th class="text-center" style="width: 30%">
                          Accoes
                      </th>
                  </tr>
              </thead>
              <?php foreach($orgao_social as $orgao_social){ ?>
              <tbody>
                  <tr>
                      <td>
                          <a>
                             <?= $orgao_social['descricao']?>
                          </a>
                      </td>
                      <td class="text-center">
                          <ul class="list-inline" data-id_orgao2="<?= $orgao_social['id_orgao_social']?>" data-id_mandato2="<?= $ano_mandato[0]->id_mandato ?>" data-nome-orgao2="<?= $orgao_social['descricao']?>">
                              <li class="list-inline-item">
                              <?php $numero = 0;?>
                            <?php foreach($orgao_social['orgao_membros'] as $membros){?>
                                <?php $numero = $numero + 1;?>
                                <?php if($numero <= 2){?>
                                <?php if(empty($membros['imagem_membro'])){?>
                                    <img alt="Avatar" class="table-avatar" src="<?= base_url('assets/dist/img/avatar.png');?>">
                                <?php }else{?>
                                    <img alt="Avatar" class="table-avatar" src="<?= base_url('uploads/product/' . $membros['imagem_membro'])?>" style="height: 40px;width: 40px;">
                                <?php }?>
                                <?php }?>
                            <?php } ?>
                            <?php if(($numero) > 2 ){?>
                              <button type="button" class="btn btn-primary border-primary rounded-circle" style="width:40px;height:40px;margin-left:-30px;" data-id_orgao2="<?= $orgao_social['id_orgao_social']?>" data-id_mandato2="<?= $ano_mandato[0]->id_mandato ?>" data-nome-orgao2="<?= $orgao_social['descricao']?>">
                                 <span class="badge font-weight-bold" style="font-size:130%;right:9px">+<?php echo $numero-2?></span>
                              </button>
                            <?php } ?>
                              </li>
                          </ul>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success" id_orgaoSocial="<?= $orgao_social['id_orgao_social']?>">Completo</span>
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-primary btn-sm" href="#" data-id_orgao2="<?= $orgao_social['id_orgao_social']?>" data-id_mandato2="<?= $ano_mandato[0]->id_mandato ?>" data-nome-orgao2="<?= $orgao_social['descricao']?>">
                              <i class="fas fa-eye">
                              </i>
                              Ver Detalhe
                          </a>

                          <a class="btn btn-danger btn-sm" href="#" data-id_orgao="<?= $orgao_social['id_orgao_social']?>" data-nome-orgao="<?= $orgao_social['descricao']?>" data-id_mandato="<?= $ano_mandato[0]->id_mandato?>">
                              <i class="fas fa-plus"></i>
                              adicionar
                          </a>
                      </td>
                  </tr>
              </tbody>
              <?php } ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
