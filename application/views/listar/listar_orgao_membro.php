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
        <div class="card-header" style="border-bottom: 0px solid">
            <div class="box-tools col-1 mt-0 ml-0 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm btn-info"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <a href="http://localhost/KEDA/Orgao_Social/GerarPDF/<?php echo $mandato_atual?>" id_mandato_atual = <?= $mandato_atual ?> type="button" class="btn btn-info btn-sm mb-3 mt-4" style="margin-right: 200px;margin-left: 200px;" id="criarPDF123">
              <i class="fa fa-file-pdf t-plus-1 text-white fa-fw fa-lg"></i> Criar PDF
            </a>
          <!-- <h3 class="text-center">ORGAO SOCIAL DE <?= date('d/m/Y', strtotime(strtoupper($ano_mandato[0]->data_inicio_mandato)));?> A <?= date('d/m/Y', strtotime(strtoupper($ano_mandato[0]->data_fim_mandato)));?></h3> -->
        </div>


        <div class="row">
          <div class="col-12" id="bodyMensagem89TESTE123">

              <div class="card border" style="right: 0px;margin-right: 200px;margin-left: 200px;box-shadow: none;">

                <?php foreach($orgaos as $orgao){?>
                <div class="card-header p-2" style="background-color: #17a2b8; color: #fff;border-top-left-radius:0px;border-top-right-radius:0px">
                  <h3 class="card-title"><?php echo ($orgao['descricao']) ?></h3>
                </div>

                <div class="card-body p-0 pt-3">
                  <ul class="users-list clearfix">
                  <?php foreach($orgao['membros'] as $membro){?>
                    <li>
                      <?php if(empty($membro['imagem_membro'])){ ?>
                          <td><span class="tag tag-success"><img alt="User Image" class="table-avatar" src="<?= base_url('assets/dist/img/avatar.png');?>" style="height: 120px;width: 120px;"></span></td>
                        <?php }else{?>
                          <td><span class="tag tag-success"><img alt="User Image" class="table-avatar" src="<?= base_url('uploads/product/' . $membro['imagem_membro'])?>" style="height: 120px;width: 120px;"></span></td>
                      <?php } ?>

                      <a class="users-list-name text-sm text-uppercase" href="#"><?php echo $membro['nome']?></a>
                      <span class="users-list-name" style="color:#ab8c45"><?php echo $membro['nome_cargo_membro']?></span>
                      <span class="users-list-name"><?php echo $membro['telefone']?></span>
                    </li>
                    <?php }?>
                  </ul>
                                <!-- /.users-list -->
                </div>

                <?php }?>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

          </div>
        </div>
        </div>

    </section>
