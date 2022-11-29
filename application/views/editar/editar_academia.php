<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Academia</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Editar Academia</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?= form_open('editar_academia/'.$academia[0]->id_academia, array('method'=>"POST", 'name'=>"form-wizard", 'class'=>"form-control-with-bg", 'enctype'=>"multipart/form-data"));?>
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
                            <legend class="f-w-700 pt-0 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">EDITAR ACADEMIA</legend>
                            <!-- begin form-group -->

                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Responsavel</label>
                                    <input type="text" value="<?= $academia[0]->id_academia;?>" hidden>
                                    <input type="text" value="<?= $academia[0]->id_associacao_pro;?>" hidden>
                                    <input type="text" name="responsavel" placeholder="Numero de Bilhete" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $academia[0]->responsavel;?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="Email" placeholder="Email" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $academia[0]->email_clube;?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Designacao da Academia</label>
                                    <input type="text" name="Designacao_academia" placeholder="Numero de Bilhete" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $academia[0]->nome_academia;?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-right">Data de Fundacao</label>
                                    <input type="Date" class="form-control form-control-sm" id="data" name="data" placeholder="Select Date" value="<?php echo $academia[0]->Data_fundacao;?>">
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
                                    <select id="provincia" class="form-control form-control-sm" name="provincia">
                                        <option value="<?= $academia[0]->provincia?>"><?php echo $academia[0]->provincia?></option>
                                        <?php echo $escolhe_provincias; ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-right">Municipio<span class="text-danger"></span></label>
                                    <select id="municipio" class="form-control form-control-sm" name="municipio" disabled>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 pb-5 pt-3">
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
