<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Arbitro</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<form action="<?= base_url('editar_arbitro1');?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="container-fluid">
      <div class="box-tools col-md-1 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
        </div>
        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                    <div class="fotoMostra">
                        <?php if($editarArbitro[0]->imagem == null){ ?>
                            <!-- <img src="<?= base_url('uploads/product/' . $editarArbitro[0]->imagem);?>" id="124" hidden> -->
                            <img class="card-img-top width-200 height-150 p-0" src="<?= base_url('assets/images/3.jpg');?>" id="123" style="height:18.1rem; width:14.1rem">
                        <?php }else{ ?>
                            <!-- <img src="<?= base_url('uploads/product/' . $editarArbitro[0]->imagem);?>" id="124" hidden> -->
                            <img class="card-img-top width-200 height-150" data_imagem="<?php echo $editarArbitro[0]->imagem;?>" src="<?= base_url('uploads/product/' . $editarArbitro[0]->imagem);?>" id="123" style="height:18.1rem; width:14.1rem">
                        <?php } ?>
                    </div>
                    <div>
                </div>
                </div>
            </div>
                <?php if($editarArbitro[0]->imagem == null){ ?>
                <div class="card-body text-center">
                    <div class="btn btn-danger" id="idTrocarFotoAtleta">Adicionar Fotografia</div>
                </div>
                <?php }else{ ?>
                <div class="card-body text-center">
                    <div class="btn btn-danger" id="idTrocarFotoAtleta">Trocar Fotografia</div>
                </div>
                <?php } ?>
                </div>

            </div>

            <div class="col-lg-9">
            <div class="card card-primary card-outline" style="border-top:none">

          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Informacao Pessoal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Informacao de Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Informacao Tecnica</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
              <div class="container" style="padding-top: 20px">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <input type="hidden" name="idAtleta" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                    <input type="hidden" name="idAtleta" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_pessoa;?>">
                                    <label for="exampleInputEmail1">Nome Completo</label>
                                    <input type="text" name="fullName" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->nome;?>">
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="exampleInputEmail1">Genero<span class="text-danger">*</span></label>
                                    <select class="form-control form-control-sm" name="genero" id="genero">
                                        <option value="Masculino" <?= $editarArbitro[0]->genero=="Masculino"?' selected ':' ';?>> Masculino </option>
                                        <option value="Femenino" <?= $editarArbitro[0]->genero=="Femenino"?' selected ':' ';?>> Femenino </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="exampleInputEmail1">Bilhete de Identidade</label>
                                    <input type="text" name="bilhete" placeholder="Numero de Bilhete" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->n_bilhete;?>">
                                </div>

                                <div class="form-group col-sm-4">
                                     <label class="exampleInputEmail1">Data de Nascimento</label>
                                     <input type="Date" name="data" placeholder="data" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->data_nascimento;?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nome do Pai</label>
                                        <input type="text" name="nomePai" placeholder="Nome do Pai" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->nomePai;?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nome da Mae</label>
                                    <input type="text" name="nomeMae" placeholder="Nome da Mae" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->nomeMae;?>">
                                </div>
                            </div>
                        </div>
                        <div style="display:none">
                        <input type="file" name="arquivoFotoAtleta" id="arquivoFotoAtleta" class="rounded mx-auto d-block form-control form-control-sm" onchange="PreviewImagemAtleta2()">
                        </div>
                    </div>
                </div>
            </div>
              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
              <div class="container" style="padding-top: 20px">
                            <div class="row">
                                <!-- begin col-8 -->
                                <div class="col-md-12">

                                    <!-- begin form-group -->
                                    <div class="form-row">
                                        <div class="form-group col-sm-4">
                                            <label class="col-form-label text-md-left">Provincia<span class="text-danger"></span></label>
                                            <select id="provincia" class="form-control form-control-sm" name="provincia">
                                                <?php foreach($editarArbitro as $provincia){?>
                                                    <option><?= $provincia->provincia;?></option>
                                                <?php }?>
                                                <?php echo $escolhe_provincias;?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="col-form-label text-md-right">Municipio<span class="text-danger"></span></label>
                                            <select id="municipio" class="form-control form-control-sm" name="municipio">
                                                <?php foreach($editarArbitro as $municipio){?>
                                                    <option><?= $municipio->municipio;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="col-form-label text-md-right">Destrito<span class="text-danger"></span></label>
                                            <input type="text" name="destrito" class="form-control form-control-sm" value="<?= $editarArbitro[0]->destrito;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-8 -->
                            </div>

                            <div class="form-row" id="Contacto">
                                <!-- begin col-8 -->
                                <div class="col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-sm-6" id="form-tele">
                                            <label class="col-form-label text-md-right">Email<span class="text-danger">*</span></label>
                                            <input type="text" name="email" placeholder="email" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->email;?>">
                                        </div>
                                        <div class="form-group col-sm-3" id="form-tele">
                                            <label class="col-form-label text-md-right">Telefone 1<span class="text-danger"></span></label>
                                             <input type="text" name="telefone" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->telefone;?>">
                                        </div>
                                        <div class="form-group col-sm-3" id="form-tele">
                                            <label class="col-form-label text-md-right">Telefone 2<span class="text-danger"></span></label>
                                            <input type="text" name="telefone2" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->telefone2;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-8 -->
                            </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
              <div class="container" style="padding-top: 20px">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-row">

                                            <div class="form-group col-sm-4">
                                                <label class="col-form-label text-md-right"> Categoria <span class="text-danger"></span></label>
                                                <select id="Graduacao" class="form-control form-control-sm" name="Graduacao">
                                                    <?php foreach($categoria as $cat): ?>
                                                        <?php if ($cat->descricao_cat_arb == $editarArbitro[0]->nome_categoria_fk) { ?>
                                                        <option value="<?= $cat->descricao_cat_arb ?>" selected ><?= $editarArbitro[0]->nome_categoria_fk;?></option>
                                                    <?php } else { ?>
                                                        <option value="<?= $cat->descricao_cat_arb ?>" selected ><?= $cat->descricao_cat_arb;?></option>
                                                    <?php }?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label class="col-form-label text-md-left">Sub-Categoria<span class="text-danger"></span></label>
                                                <select id="peso" class="form-control form-control-sm" name="peso">
                                                <option value="0" style="color: blue;"><?= $editarArbitro[0]->peso."kg";?></option>
                                                <?php for($i=30;$i<=150;$i++){
                                                    echo "<option value=\"" .$i. "\">" .$i."kg". "</option>";}?>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label class="col-form-label text-md-right">Status<span class="text-danger"></span></label>
                                                <select id="statu" class="form-control form-control-sm" name= "statu">
                                                    <option value="Activo" <?= $editarArbitro[0]->statu=="Activo" ? 'selected' : ' ';?> > Activo </option>
                                                    <option value="Nao Activo" <?= $editarArbitro[0]->statu=="Nao Activo"?' selected ':' ';?> > Nao Activo </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              </div>
              </div>
              <div style="margin-left:9px;">
                <button type="submit" class="btn btn-primary"><i class="fa fa-sync-alt"></i> Atualizar </button>
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
            </div>
    </div>
</section>
</form>
