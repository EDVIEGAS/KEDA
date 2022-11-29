<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
        <div class="box-tools col-1 mt-0 ml-3 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm btn-info"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
          <div class="card-header text-center text-uppercase pb-4" style="border-bottom:none">
            <h4>
                <?= $verMembro[0]->descricao;?>
            </h4>
          </div>
          <div class="row d-flex align-items-stretch">

          <?php foreach($verMembro as $mandato) {?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header border-bottom-0">
                <?= $mandato->nome_cargo_membro;?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead text-uppercase"><b><?= $mandato->nome;?></b></h2>
                      <!-- <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p> -->
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <!-- <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li> -->
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telemovel #:<?= $mandato->telefone;?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                        <?php if($mandato->imagem_membro != null){?>
                            <td class="text-center"><img src="<?= base_url('uploads/product/' . $mandato->imagem_membro)?>" class="img-circle img-fluid" style="height: 135px;width: 135px;"></td>
                        <?php }else{?>
                            <td class="text-center"><img src="<?= base_url('assets/dist/img/avatar.png')?>" style="height: 135px;width: 135px;" class="img-circle img-fluid"></td>
                        <?php }?>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal" id="editarMembro99" data-imagem="<?php echo $mandato->imagem_membro?>" data-cargo="<?php echo $mandato->nome_cargo_membro?>" data-id_membro="<?php echo $mandato->id_membro?>" data-nome="<?php echo $mandato->nome?>" data-telefone="<?php echo $mandato->telefone?>" data-cargo="<?php echo $mandato->nome_cargo_membro;?>" data-id_mandato_fk="<?php echo $mandato->id_mandato_fk;?>" data-id_orgao_fk="<?php echo $mandato->id_orgao_fk;?>">
                      <i class="fas fa-edit"></i> Editar
                    </a>
                    <!-- <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!-- <nav aria-label="Contacts Page Navigation">
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
          </nav> -->
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
