<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Campeonato Provincial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li> -->
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">

          <!-- Default box -->
          <div class="card card-solid">
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
            <div class="col-1 mt-2 ml-3 mb-0 pb-5">
              <a class="btn btn-primary btn-block btn-sm" href="<?= site_url('cadastrarcampeonatoProvincial');?>"><i class="fa fa-user-plus"></i> Novo </a>
            </div>

            <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA DOS CAMPEONATOS PROVINCIAS REALIZADOS</legend><br>
            <div class="card-body pb-0">

              <div class="row">
                <?php if(!empty($provincial)){ ?>
                    <?php foreach ($provincial as $provincial) {?>
                      <div class="card ml-2 border mb-4">
                        <div class="card-header">
                          <h3 class="card-title text-uppercase">PROVINCIAL DE <?php echo $provincial->nome_campeonato; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                              <div class="product-img bg-info">
                                <img src="<?=base_url()?>assets/images/13.jpg" alt="Product Image" class="img-size-50">
                              </div>
                              <div class="product-info">

                                  <span class="badge badge-warning product-title"><h6>ANGOLA</h6></span>

                                  <span class="badge badge-warning float-right"></span>
                                <span class="product-description">
                                  Director da Prova : <?php echo $provincial->director_prova; ?>
                                </span>
                              </div>
                            </li>
                            <!-- /.item -->
                          </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                          <a href="<?php echo base_url('GerirProvincial/' . $provincial->id_campeonato); ?>" class="btn btn-sm btn-light">
                            <i class="fas fa-eye"></i> Detalhes
                          </a>
                        </div>
                        <!-- /.card-footer -->
                      </div>

                    <?php } ?>
                <?php }else{?>
                  <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:98px;padding-top:70px;position:relative;left:50%;transform:translateX(-50%)">
                    <i class="fa fa-archive fa-7x" style="padding-bottom:12px"></i>
                    <h5 class="media-heading" style="font-size:22px"> BASE DE DADOS VAZIA </h5>
                  </div>
                <?php }?>
              </div>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
</section>
