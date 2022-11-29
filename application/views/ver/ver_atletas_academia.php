<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Atletas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
          <div class="box-tools col-1 mt-2">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content remove">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><i class='fas fa-list-alt'></i> Lista Completa dos Atletas competidores da academia <?= $academia_atleta[0]->nome_academia?></h3>
                    <div class="card-tools">
                      <span class="badge badge-danger"><?= $totalAtleta ?> Atletas</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button> -->
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">

                                <?php foreach($academia_atleta as $academia_atleta): ?>
                      <li>
                      <?php if($academia_atleta->imagem == null){?>
                                    <img src="<?= base_url('assets/images/3.JPG');?>" alt="" class="media-object rounded-corner" style="height:67px;width:67px" />
                                    <a class="users-list-name" href="#"><?= $academia_atleta->nome;?></a>
                                    <span class="users-list-date">Competidor</span>
                                    <p style="margin-top: 1rem">
                                      <a href="javascript:;" class="btn btn-sm btn-danger m-r-5" id_atleta_academia="<?= $academia_atleta->id_mestre?>">Ver</a>
                                      <a href="javascript:;" class="btn btn-sm btn-default">Remover</a>
                                    </p>
                                  <?php }else{ ?>
                                    <img src="<?= base_url('uploads/product/' . $academia_atleta->imagem);?>" alt="User Image" style="height:67px;width:67px">
                                    <a class="users-list-name" href="#"><?= $academia_atleta->nome;?></a>
                                    <span class="users-list-date">Competidor</span>
                                    <p style="margin-top: 1rem">
                                      <a href="javascript:;" class="btn btn-sm btn-danger m-r-5" id_atleta_academia="<?= $academia_atleta->id_mestre?>">Ver</a>
                                      <a href="javascript:;" class="btn btn-sm btn-default">Remover</a>
                                    </p>
                                    <?php } ?>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <!-- <div class="card-footer text-center">
                    <a href="javascript::">View All Users</a>
                  </div> -->
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
