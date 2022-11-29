<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar Academia</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Cadastrar Academia</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?= form_open('cada_academia', array('method'=>"POST", 'name'=>"form-wizard", 'class'=>"form-control-with-bg", 'enctype'=>"multipart/form-data"));?>
<section class="content">
<div class="container-fluid">

        <div class="row">
            <div class="col-md-10" style="position:relative;left:50%;transform:translateX(-50%)">

            <div class="card card-danger">
              <div class="card-body">
              <div class="box-header with-border m-b-2">
            <div class="box-tools">
                <a href="javascript:history.back();"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Voltar </button></a>
            </div>
            </div>


                        <div class="col-md-12">
                            <?php
                            if($this->session->flashdata('sucesso_academia') != NULL):
                                echo $this->session->flashdata('sucesso_academia');
                            endif;
                            ?>
                        </div>

                        <div class="col-md-1">
                            <a class="btn btn-primary btn-block width-72 btn-sm" href="<?= site_url('Academia/listar_Academia');?>" style="border-top-width: 0px;margin-top: 26px;margin-bottom: 18px;"><i class="fa fa-list"></i> Listar </a>
                        </div>
                        <br>
                        <!-- begin col-8 -->
                        <div class="form-row">
                        <div class="col-md-12">
                            <legend class="f-w-700 pt-0 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">FICHA DE INSCRICAO DE CLUBE</legend>
                            <!-- begin form-group -->
                            <div class="form-group" hidden>
                                <label class="exampleInputEmail1">Data de Nascimento</label>
                                <input type="text" class="form-control form-control-sm" id="data" name="id_associacao_pro" placeholder="04/1/2014" value="<?php echo $id_associacao_pro;?>">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Responsavel</label>
                                    <?= form_input('responsavel', set_value('responsavel'), array('placeholder'=>"Nome Completo", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                                    ?>
                                    <span class="text-danger"><?=form_error('responsavel');?></span>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Email</label>
                                    <?= form_input('Email', set_value('Email'), array('placeholder'=>"E-mail", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                                    ?>
                                    <span class="text-danger"><?=form_error('Email');?></span>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Designacao</label>
                                    <?= form_input('Designacao_academia', set_value('Designacao_academia'), array('placeholder'=>"Designacao", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));
                                    ?>
                                    <span class="text-danger"><?=form_error('Designacao_academia');?></span>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-right">Data de Fundacao</label>
                                    <input type="Date" class="form-control form-control-sm" id="data" name="data" placeholder="Select Date" value="04/1/2014">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-right">Estilo<span class="text-danger"></span></label>
                                    <select class="form-control form-control-sm" name="estilo" id="estilo">
                                        <?php foreach ($estilo as $est):?>
                                            <option value="<?= $est->id_estilo?>"><?= $est->nome_estilo?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-left">Provincia<span class="text-danger"></span></label>
                                    <select id="provincia" class="form-control form-control-sm provincia" name="provincia">
                                        <option value="0"></option>
                                        <?php echo $escolhe_provincias; ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-right">Municipio<span class="text-danger"></span></label>
                                    <select id="municipio" class="form-control form-control-sm" name="municipio" disabled>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 pb-5 pt-3">
                                <button type="submit" class="btn btn-primary btn-sm" name="enviar-formulario" style="margin-right: 0px; margin-left: -2px;padding-left: 5px;padding-right: 5px;border-left-width: 0px;"><i class="fa fa-save"></i> Finalizar Cadastro</button>
                            </div>
                        </div>
                        </div>
            </div>
<!-- end wizard-content -->
</div>
<!-- end wizard -->
</div>
</section>
<?= form_close();?>
