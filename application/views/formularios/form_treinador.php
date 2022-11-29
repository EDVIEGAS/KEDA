<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastrar Treinador</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Cadastrar Treinador</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<form method="POST" id="AddParticipanteTreinador874">
<section>
    <div class="container-fluid">
        <div class="row">



            <div class="col-sm-9 pb-4" style="position:relative;left:50%;transform:translateX(-50%)">
                <div class="card card-danger" style="">

                    <div class="p-4">
                        <div class="box-header with-border m-b-2">
                            <div class="box-tools">
                                <a href="javascript:history.back();"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
                            </div>

                        </div>
                        <!-- Date dd/mm/yyyy -->
                        <div class="col-md-10">
                                    <?php
                                    if($this->session->flashdata('sucesso') != NULL):
                                        echo $this->session->flashdata('sucesso');
                                    endif;
                                    ?>
                                    <?php
                                    if($this->session->flashdata('error') != NULL):
                                        echo $this->session->flashdata('error');
                                    endif;
                                    ?>
                        </div>
                                <br>
                        <div class="col-md-1">
                            <a class="btn btn-info btn-flat btn-block btn-sm" href="<?= site_url('listar_treiandor');?>"><i class="fa fa-list"></i> Listar</a>
                        </div>
                        <!-- <div class="col-1 mb-3 mt-0 ml-3">
                          <a class="btn btn-info btn-flat btn-block btn-sm" href="<?= site_url('novo_treinador');?>"><i class="fa fa-user-plus"></i> Adicionar</a>
                        </div> -->
                    </div>

                    <div class="row">
                      <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">CADASTRAR TREINADOR</legend><br>
                    <div class="col-sm-2 p-5">
                        <!-- <div class="col-md-12"> -->
                            <div class="form-group">
                                <img id="mudarFotoAtleta" src="<?= base_url('assets/images/3.jpg')?>" width="145" height="165" class="rounded mx-auto d-block"/><br>
                                <div style="display:none">
                                    <input type="file" name="arquivoFotoAtleta768" id="arquivoFotoAtleta768" class="rounded mx-auto d-block form-control hide" onchange="PreviewImagemAtletaIns()">
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-sm-10 p-5" style="right: 41px;">

                        <div class="form-row">
                            <div class="col-md-12">
                                <legend class="f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informacao Pessoal</legend>
                                <div class="form-row">
                                    <div class="form-group col-sm-5">
                                        <label for="exampleInputEmail1">Nome Completo</label>
                                        <input type="text" name="id_mestre" value="" id="id_mestre456" hidden>
                                        <input name="fullName" placeholder="Nome Completo do Atleta" data-parsley-group ="step-1" data-parsley-required="true" class="form-control form-control-sm"  id="nome_completo_bilhete" disabled="true" value=" ">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label class="exampleInputEmail1">Genero<span class="text-danger"></span></label>
                                        <input type="text" class="form-control form-control-sm" name="genero" id="genero" disabled="true" value="">

                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label class="exampleInputEmail1">Data de Nascimento</label>
                                        <input id="datadeNascimento" type="date" name="data" class="form-control form-control-sm" placeholder="04/1/2014" disabled="true" value="">
                                        <!-- <input type="Date" class="form-control " id="data" name="data"  value="04/01/2014"> -->
                                    </div>

                                    <div class="form-group col-sm-2 pr-2">
                                        <label class="exampleInputEmail1">B.I</label>
                                        <input name="bilhete" placeholder="000000000LA000" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="bilhete_id_mestre23" onkeyup="pegarViaBilheteDadosMestre()">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Nome do Pai</label>
                                        <input name="nomePai" placeholder="Nome Completo do Pai" id="nomePai" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" disabled="true" value="">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Nome da Mae</label>
                                        <input name="nomeMae" placeholder="Nome Completo da Mae" id="nomeMae" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" disabled="true" value="">

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
                                        <input type="text" id="provincia_bilhete" name="provincia" class="form-control form-control-sm provincia" disabled="true" value="">

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="col-form-label text-md-right">Municipio<span class="text-danger"></span></label>
                                        <input type="text" id="municipio" class="form-control form-control-sm" name="municipio" disabled="true" value="">

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="col-form-label text-md-right">Destrito<span class="text-danger"></span></label>
                                        <input type="text" name="Destrito" class="form-control form-control-sm" placeholder="Nome do Destrito" disabled="true">
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
                                        <input id="email23" name="email" placeholder="Exemplo: edson@gmail.com" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" disabled="true" value="">
                                    </div>
                                    <div class="form-group col-sm-3" id="form-tele">
                                        <label class="col-form-label text-md-right">Telefone<span class="text-danger"></span></label>
                                        <input id="telefone11" type="text" placeholder="999 999 999" class="form-control form-control-sm" data-inputmask='"mask": "999 999 999"' data-mask disabled="true" value="">

                                    </div>
                                    <div class="form-group col-sm-3" id="form-tele">
                                        <label class="col-form-label text-md-right">Telefone 2<span class="text-danger"></span></label>
                                        <input id="telefone22" type="text" placeholder="999 999 999" class="form-control form-control-sm" data-inputmask='"mask": "999 999 999"' data-mask disabled="true" value="">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <legend class="f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informacoes Tecnicas</legend>
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label class="col-form-label text-md-left">Categoria de Treinador<span class="text-danger">*</span></label>
                                        <select id="categoriatreinador" class="form-control form-control-sm" name="categoriatreinador">
                                            <option value="0"> Selecione a Categoria </option>
                                            <option value="1"> Treinador Nivel 1 </option>
                                            <option value="2"> Treinador Nivel 2 </option>
                                            <option value="3"> Treinador Nivel 3 </option>
                                            <option value="4"> Treinador Nivel 4 </option>
                                            <option value="5"> Treinador Nivel 5 </option>

                                        </select>
                                        <?php
                                            if($this->session->flashdata('sucesso') != NULL):
                                                echo $this->session->flashdata('sucesso');
                                            endif;
                                        ?>
                                        <!-- <div class="pt-1 controladorMSN123" hidden><span class="text-danger">Obrigatorio definir a Categoria do treinador</span></div> -->
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-3 pr-0 pb-5 pt-5">
                            <button id="AddParticipanteTreinador87412" type="submit" class="btn btn-primary btn-sm" name="enviar-formulario"><i class="fa fa-save"></i> Finalizar Cadastro</button>
                        </div>
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
