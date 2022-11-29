<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar Arbitro</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Cadastrar Arbitro</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<?= form_open('cadastrar_Arbitro', array('method'=>"POST", 'name'=>"form-wizard", 'class'=>"form-control-with-bg", 'enctype'=>"multipart/form-data"));?>
<section class="content">
<div class="container-fluid">

        <div class="row">
            <div class="col-md-10" style="position:relative;left:50%;transform:translateX(-50%)">

            <div class="card card-danger">
              <div class="card-body">
              <div class="box-header with-border m-b-2">
            <div class="box-tools">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            </div>
                <!-- Date dd/mm/yyyy -->
                <div class="col-md-10">

                            <?php
                            if($this->session->flashdata('error') != NULL):
                                echo $this->session->flashdata('error');
                            endif;
                            ?>
                        </div>
                        <br><div class="col-md-1">
                            <a class="btn btn-primary btn-block btn-sm" href="<?= base_url('listaArbitro');?>"><i class="fa fa-list"></i> Listar </a>
                        </div>
                <br>

                <div class="form-row">
                <div class="col-md-12">
                    <legend class="f-w-700 p-b-0 m-t-0 m-b-20 f-s-14 text-center"> CASDASTRAR ARBITRO </legend>
                    <div class="form-group col-sm-2" hidden>
                            <label class="exampleInputEmail1">Data de Nascimento</label>
                            <input type="text" class="form-control form-control-sm" id="data" name="id_associacao_pro" placeholder="04/1/2014" value="<?php echo $id_associacao_pro;?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Nome Completo</label>
                                <?= form_input('fullName', set_value('fullName'), array('placeholder'=>"Nome Completo do Atleta", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                                ?>
                            <span class="text-danger"><?=form_error('fullName');?></span>
                        </div>
                        <div class="form-group col-sm-2">
                            <label class="exampleInputEmail1">Genero<span class="text-danger">*</span></label>
                            <select class="form-control form-control-sm" name="genero" id="genero">
                                <option></option>
                                <option value="Masculino"> Masculino </option>
                                <option value="Femenino"> Femenino </option>
                            </select>
                        </div>

                        <div class="form-group col-sm-2">
                            <label class="exampleInputEmail1">Data de Nascimento</label>
                            <input type="Date" class="form-control form-control-sm" id="data" name="data" placeholder="04/1/2014" value="04/1/2014">
                        </div>

                        <div class="form-group col-sm-2">
                            <label class="exampleInputEmail1">B.I</label>
                            <?= form_input('bilhete', set_value('bilhete'), array('placeholder'=>"00000LA000000", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm", 'id' => "bilhete"));
                            ?>
                            <span class="text-danger"><?=form_error('bilhete');?></span>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Nome do Pai</label>
                            <?= form_input('nomePai', set_value('nomePai'), array('placeholder'=>"Nome Completo do Pai", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                            ?>
                            <span class="text-danger"><?=form_error('nomePai');?></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Nome da Mae</label>
                            <?= form_input('nomeMae', set_value('nomeMae'), array('placeholder'=>"Nome Completo da Mae", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                            ?>
                            <span class="text-danger"><?=form_error('nomeMae');?></span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <legend class="f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informacoes de Endereco</legend>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="col-form-label text-md-left">Provincia<span class="text-danger"></span></label>
                                <select id="provincia" class="provincia form-control form-control-sm" name="provincia">
                                    <?php echo $escolhe_provincias; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="col-form-label text-md-right">Municipio<span class="text-danger"></span></label>
                                <select id="municipio" class="form-control form-control-sm" name="municipio" disabled>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="col-form-label text-md-right">Destrito<span class="text-danger"></span></label>
                                <input type="text" name="Destrito" class="form-control form-control-sm" placeholder="Nome do Destrito">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row" id="Contacto">
                    <div class="col-md-12">
                        <legend class="f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informacoes de Contacto</legend>

                        <div class="form-row">
                            <div class="form-group col-sm-6" id="form-tele">
                                <label class="col-form-label text-md-right">Email<span class="text-danger">*</span></label>
                                <?= form_input('email', set_value('email'), array('placeholder'=>"Exemplo: edson@gmail.com", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));?>
                            </div>
                            <div class="form-group col-sm-3" id="form-tele">
                                <label class="col-form-label text-md-right">Telefone<span class="text-danger"></span></label>
                                <?= form_input('telefone', set_value('telefone'), array('placeholder'=>"telefone", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                                form_error('telefone');
                                ?>
                            </div>
                            <div class="form-group col-sm-3" id="form-tele">
                            <label class="col-form-label text-md-right">Telefone 2<span class="text-danger"></span></label>
                            <?= form_input('telefone2', set_value('telefone2'), array('placeholder'=>"Telefone 2", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                            form_error('telefone2');
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
        <!-- begin col-8 -->
                    <div class="col-md-12">
                        <legend class="f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informacoes Tecnicas</legend>
                        <div class="form-row">
                            <div class="form-group col-sm-4" id="col-sm-4">
                                <label class="col-form-label text-md-right"> Categoria <span class="text-danger"></span></label>
                                <select id="Categoria" class="form-control form-control-sm" name="Categoria">
                                    <option> Selecione a Categoria </option>
                                    <?php foreach($categoria as $categoria): ?>
                                        <option value="<?= $categoria->descricao_cat_arb?>" nome_categoria="<?= $categoria->descricao_cat_arb?>" categoria_arbitro="categoria[];"> <?= $categoria->descricao_cat_arb?> </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4" id="subcategoria" hidden>
                                <label class="col-form-label text-md-right"> sub-categoria <span class="text-danger"></span></label>
                                <select class="form-control form-control-sm" name="sub-categoria" id="sub-categoria">
                                    <option value="NULL"> selecione a sub-categoria </option>
                                    <?php foreach ($subcategoria as $subcategoria):?>
                                        <option value="<?= $subcategoria->descricao_subcategoria;?>"><?= $subcategoria->descricao_subcategoria;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4" id="col-sm-3">
                                <label class="col-form-label text-md-right"> Statu <span class="text-danger"></span></label>
                                <select id="statu" class="form-control form-control-sm" name= "statu">
                                    <option value="Activo"> Activo </option>
                                    <option value="Nao Activo"> Nao Activo </option>
                                </select>
                            </div>
                        </div>
                    </div>
        <!-- end col-8 -->
                </div>

                <div class="col-md-4" style="position:relative;left:50%;transform: translate(-50%);">
                    <div class="form-group">
                        <img id="mudarFotoArbitro" src="<?= base_url('assets/images/3.jpg')?>" width="110" height="110" class="img-thumbnail rounded mx-auto d-block"/><br>
                        <div style="display:none">
                            <input type="file" name="arquivoFotoArbitro" id="arquivoFotoArbitro" class="rounded mx-auto d-block form-control hide" onchange="PreviewImagemArbitro()">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 pr-0 pb-5">
                    <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Finalizar Cadastro</button>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
</section>
<?= form_close();?>
