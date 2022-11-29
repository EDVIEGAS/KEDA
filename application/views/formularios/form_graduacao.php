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

<form class="memdgraduacao1278" method="post">
  <section class="content mt-4">
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

                          <div class="col-md-1">
                              <a class="btn btn-primary btn-block width-72 btn-sm" href="<?= site_url('listaGraduacao');?>" style="border-top-width: 0px;margin-top: 26px;margin-bottom: 18px;"><i class="fa fa-list"></i> Listar </a>
                          </div>
                          <br>
                          <!-- begin col-8 -->
                          <div class="form-row">
                          <div class="col-md-12">
                              <legend class="f-w-700 pt-0 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse text-center">ADICIONAR GRADUACAO</legend>
                              <!-- <input type="hidden" class="form-control form-control-sm" id="data" name="id_associacao_pro" placeholder="04/1/2014" value="<?php echo $id_associacao_pro;?>"> -->
                              <!-- begin form-group -->
                              <div class="form-row">
                              <div class="form-group col-sm-12">
                                  <label class="col-form-label text-md-left">Ablitacao Literaria<span class="text-danger"></span></label>
                                  <select id="peso" class="form-control form-control-sm" name="peso">
                                  <option> Selecione o tipo de Actividade </option>
                                  <?php foreach($actividade as $actividade): ?>
                                          <option value="<?= $actividade->id_tipoActividade;?>"> <?= $actividade->nome_tipoActividade?> </option>
                                      <?php endforeach;?>
                                  </select>
                              </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                        <label class="text-nowrap">Nome da Actividade</label>
                                        <input name="ano_actividade" placeholder="Escrever aqui" id="nome_completo_id" value="<?= date('Y')?>" hidden>
                                        <input name="nome_actividade" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                    </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                        <label class="text-nowrap">Local da Actividade</label>
                                        <input name="nome_local" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                  </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-sm-6">
                                  <label>Data e Hora de Inicio</label>
                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                        <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdatetime" name="data_inicio">
                                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                  <label>Data e hora do Fim</label>
                                    <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                        <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdatetime2" name="data_fim">
                                        <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-6" disabled="true">
                                      <label class="col-form-label text-md-left"> Pais <span class="text-danger"></span></label>
                                      <select id="pais" class="form-control form-control-sm" name="pais">
                                          <option value="Angola">Angola</option>
                                      </select>
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label text-md-right"> Provincia <span class="text-danger"></span></label>
                                      <select id="provincia343789" class="form-control form-control-sm" name="provincia">

                                      </select>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-sm-12">
                                  <label class="col-form-label text-md-left"> Tipo <span class="text-danger"></span></label>
                                  <div class="card-body border">
                                    <!-- Minimal style -->
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" class="radio" name="checkboxPrimary1" id="checkboxPrimary1" value="OFICIALIZACAO DE FAIXAS NEGRAS">
                                            <label for="checkboxPrimary1">
                                            </label>
                                          </div>

                                          <div class="icheck-primary d-inline">
                                            <label for="checkboxPrimary3">
                                              OFICIALIZACAO DE FAIXAS NEGRAS
                                            </label>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <!-- Minimal red style -->
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" class="radio" name="checkboxDanger1" id="checkboxDanger1" value="RECICLAGEM">
                                            <label for="checkboxDanger1">
                                            </label>
                                          </div>

                                          <div class="icheck-primary d-inline">
                                            <label for="checkboxDanger3">
                                             RECICLAGEM
                                            </label>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <!-- Minimal red style -->
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" class="radio" name="checkboxSuccess1" id="checkboxSuccess1" value="GRADUACAO">
                                            <label for="checkboxSuccess1">
                                            </label>
                                          </div>

                                          <div class="icheck-primary d-inline">
                                            <label for="checkboxSuccess3">
                                              GRADUACAO
                                            </label>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="col-md-3 pb-5 pt-3">
                                  <button type="submit" class="btn btn-primary btn-sm BTNCadastrar567" name="enviar-formulario" style="margin-right: 0px; margin-left: -2px;padding-left: 5px;padding-right: 5px;border-left-width: 0px;"><i class="fa fa-save"></i> Cadastrar </button>
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
</form>
