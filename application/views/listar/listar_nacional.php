<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Campeonato Nacional</h1>
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
            <div class="col-1 mb-3 mt-3">
              <a class="btn btn-primary btn-block btn-sm" href="<?= site_url('cadastrarcampeonatoNacional');?>"><i class="fa fa-plus"></i> Adicionar </a>
            </div>

            <div class="card-body pb-0">

              <div class="row">
                <?php if(!empty($nacional)){ ?>
                  <?php foreach ($nacional as $nacional) {?>
                    <div class="d-flex align-items-stretch flex-column mr-5" style="color:#fff">

                      <div class="card bg-success d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                          Digital Strategist
                        </div>
                        <div class="card-body pt-0 bg bg-success">

                          <div class="row">
                          <div class="col-12">
                            <h2 class="lead text-uppercase"><b>NACIONAL DE <?php echo $nacional->nome_campeonato ?></b></h2>
                            <p class="lead text-sm"><b>About: </b> Web Designer / UX / Graphic Artist</p>

                          </div>

                        </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <!-- <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a> -->
                            <a href="<?php echo base_url('GerirNacional/' . $nacional->id_campeonato); ?>" class="btn btn-sm btn-primary">
                              <i class="fas fa-eye"></i> Ver Detalhes
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php }else{?>
                <div class="p-5 text-center" style="left: 50%;margin-left: -174px;position: relative;">
                  <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                  <h5 class="media-heading" style="font-size:18px"> BASE DE DADOS VAZIA </h5>
                </div>
          <?php }?>
              </div>
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
              <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>
                  <li class="page-item"><a class="page-link" href="#">7</a></li>
                  <li class="page-item"><a class="page-link" href="#">8</a></li>
                </ul>
              </nav>
            </div> -->
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
</section>
