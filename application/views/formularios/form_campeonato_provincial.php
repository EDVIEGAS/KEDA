<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar Campeonato</h1>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    if($this->session->flashdata('sucesso_academia') != NULL):
                                        echo $this->session->flashdata('sucesso_academia');
                                    endif;
                                    ?>
                                </div>
                                <br><div class="col-md-1">
                                    <a class="btn btn-primary btn-block width-72 btn-sm" href="<?= site_url('listaProvincial');?>" style="border-top-width: 0px;margin-top: 26px;margin-bottom: 18px;"><i class="fa fa-list"></i> Listar </a>
                                </div>
                                <br>
                                <!-- begin col-8 -->
                                <div class="col-md-12">
                                    <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center">CADASTRAR CAMPEONATO PROVINCIAL</legend><br>

                                    <form method="post" id="addCampeonatoProvinciall874">
                                      <div id="bodyMensagem89">

                                            <div class="col-md-12">

                                                    <div class="form-row">
                                                        <div class="form-group col-sm-6">
                                                            <label class="text-nowrap">Tipo de Campeonato</label>
                                                            <select id="tipoCampeonato" class="form-control form-control-sm" name="campeonatoNome">
                                                                <option value="Provincial">Provincial</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label class="text-nowrap">Edicao</label>
                                                            <!-- <input type="hidden" name="fk_actividadeC" value="" id="fk_actividadeC"> -->
                                                            <!-- <input type="hidden" name="id_associacao_pro" value="" id="id_associacao_pro"> -->
                                                            <input name="Edicao" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <!-- <div class="form-group col-sm-6">
                                                            <label class="text-nowrap">Prova</label>
                                                            <input name="Campeonato" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                                                        </div> -->
                                                        <div class="form-group col-sm-6">
                                                            <label class="text-nowrap">Director da Prova</label>
                                                            <input name="Director" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                                                            <input type="hidden" name="actividade" id="actividade_id" value="">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label class="text-nowrap">Local da Prova</label>
                                                            <input name="localDaProva" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="provincia_bilhete" value="">
                                                            <input type="hidden" name="actividade" id="actividade_id" value="">
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
                                                            <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdatetime" name="provincia" value="<?php echo $this->session->userdata('nome'); ?>">
                                                            <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdatetime" name="id_associacao_pro" value="<?php echo $id_associacao_pro; ?>" hidden>
                                                        </div>
                                                    </div>

                                            </div>

                                            <div class="modal-footer justify-content-between">
                                                <button type="submit" class="btn btn-primary btn-sm BTNCadastrar567Provincial" name="enviar-formulario"><i class="fa fa-save"></i> Adicionar </button>
                                            </div>
                                      </div>

                                    </form>

                                </div>

                            </div>

            </div>
        </div>

</div>
<!-- end wizard -->
</section>
