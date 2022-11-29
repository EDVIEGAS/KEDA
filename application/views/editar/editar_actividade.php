<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar Actividade</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Cadastrar Actividade</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?= form_open('editar_actividade1', array('method'=>"POST", 'name'=>"form-wizard", 'class'=>"form-control-with-bg", 'enctype'=>"multipart/form-data"));?>
<section class="content">
<div class="container-fluid">
    
        <div class="row">
            <div class="col-md-8" style="position:relative;left:50%;transform:translateX(-50%)">
            
            <div class="card card-danger">
              <div class="card-body">
              <div class="box-header with-border m-b-2">
            <div class="box-tools">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar </button></a>
            </div>
            </div>

            
                        <div class="col-md-12">
                            <?php
                            if($this->session->flashdata('sucesso_academia') != NULL):
                                echo $this->session->flashdata('sucesso_academia');
                            endif;
                            ?>
                        </div>

                        <div class="col-md-3">
                            <a class="btn btn-primary btn-block width-72" href="<?= site_url('listaAtividade');?>" style="border-top-width: 0px;margin-top: 26px;margin-bottom: 18px;"><i class="fa fa-list"></i> Listar Actividade</a>
                        </div>
                        <br>
                        <!-- begin col-8 -->
                        <div class="form-row">
                        <div class="col-md-12">
                            <legend class="f-w-700 pt-0 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">ADICIONAR ACTIVIDADE</legend>
                            <!-- begin form-group -->
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Nome da Actividade</label>
                                      <input name="ano_actividade" placeholder="Escrever aqui" id="nome_completo_id" value="<?= date('Y')?>" hidden>
                                  
                                      <input name="nome_actividade" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="<?php echo($actividade[0]->nome_actividade);?>">
                                  </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Local da Actividade</label>
                                      <input name="nome_local" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="<?php echo($actividade[0]->local);?>">
                                </div>
                            </div>
                    
                            <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label>Data de Inicio</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <label for="teste2" class="input-group-text"><i class="far fa-calendar-alt"></i></label>
                                          </div>
                                          <input id="teste2" type="date" class="form-control form-control-sm" name="data_inicio" value="<?php echo($actividade[0]->data_inicio);?>">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label>Data de Fim</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                           <label for="teste3" class="input-group-text"><i class="far fa-calendar-alt"></i></label>
                                          </div>
                                          <input id="teste3" type="date" class="form-control form-control-sm" name="data_fim" value="<?php echo($actividade[0]->data_fim);?>">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                            </div>
                            
                            <div class="col-md-3 pb-5 pt-3">
                                <button type="submit" class="btn btn-primary " name="enviar-formulario" style="margin-right: 0px; margin-left: -2px;padding-left: 5px;padding-right: 5px;border-left-width: 0px;"><i class="fa fa-save"></i> Finalizar Cadastro</button>
                            </div>  
                        </div>

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