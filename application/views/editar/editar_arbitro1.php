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

<section class="content">
    <div class="container-fluid">

        <div class="card card-default color-palette-box">
            <div class="box-tools col-1 mt-3 ml-3 mb-0">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm bg-info"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12 p-3">
              <?php
                if($this->session->flashdata('sucesso_editar') != NULL):
                    echo $this->session->flashdata('sucesso_editar');
                endif;
              ?>
            </div>
            <div class="card-body" style="padding:9px 98px;color: #232333;">
                <div class="admin-content profile_content_container" style="background-color: #fff;padding: 0;min-height: 300px;position: relative;">
                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal profile-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;top: 23px;text-align: left;color: #747487;font-size: 14px;">
                                <div class="zm-form-group" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                    <label class="col-sm-3 control-label my-profile" style="font-weight: normal;width: 25%;float: left;text-align: left;color: #747487;font-size: 14px;">
                                        <a role="button" href="javascript:;" class="profile-pic change-picture" style="border:1px solid #EDEDF4;">
                                            <?php if($editarArbitro[0]->imagem == null){ ?>
                                                <!-- <img src="<?= base_url('uploads/product/' . $editar[0]->imagem);?>" id="124" hidden> -->
                                                <img class="card-img-top width-200 height-150" data_imagem="<?php echo $editarArbitro[0]->imagem;?>" src="<?= base_url('assets/images/3.jpg');?>" id="129" style="height:180px; width:150px;border-radius:24px;vertical-align: middle;">
                                            <?php }else{ ?>
                                                <!-- <img src="<?= base_url('uploads/product/' . $editarArbitro[0]->imagem);?>" id="124" hidden> -->
                                                <img class="card-img-top width-200 height-150" data_imagem="<?php echo $editarArbitro[0]->imagem;?>" src="<?= base_url('uploads/product/' . $editarArbitro[0]->imagem);?>" id="129" style="height:180px; width:150px;border-radius:18px;vertical-align: middle;">
                                            <?php } ?>
                                        </a>
                                        <div class="pic-action clearfix" style="float: left;font-size: 14px;width: 120px;text-align: center;padding-top: 6px;margin-left: 16px">
                                            <a ui-cmd="Change" role="button" ui-cat="Web.Profile" class="btn btn-sm bg-success" href="" id="idTrocarFotoArbitro" class="change-picture" style="float: left;margin-left: -5px">
                                            Alterar
                                            </a>
                                            <?php if($editarArbitro[0]->imagem == null || empty($editarArbitro[0]->imagem)){ ?>
                                                <a ui-cmd="Change" role="button" ui-cat="Web.Profile" href="javascript:;" class="delete-picture delete-picture-arbitro" style="float: right;"></a>
                                            <?php }else{ ?>
                                                <a ui-cmd="Change" role="button" ui-cat="Web.Profile" href="javascript:;" class="delete-picture delete-picture-arbitro btn btn-sm bg-danger" style="float: right;">Excluir</a>
                                            <?php } ?></div>
                                        <!-- <div style="display:none">
                                            <input type="file" name="arquivoFotoArbitro" id="arquivoFotoArbitro" class="rounded mx-auto d-block form-control form-control-sm" onchange="PreviewImagemMestre2()">
                                        </div> -->
                                    </label>
                                    <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticArbitro3849674">
                                                <p class="form-control-static fullName" style="font-weight: bold;color: #232333;font-size: 24px;margin-bottom: 0;"><?= $editarArbitro[0]->nome?></p>
                                                <!-- <p class="form-control-static displayName ">Edson Viegas</p> -->
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Genero</span> <span class="cellphone"><?= $editarArbitro[0]->genero?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Bilhte de Identidade</span> <span class="cellphone"><?= $editarArbitro[0]->n_bilhete?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Data de Nascimento</span> <span class="cellphone"><?= $editarArbitro[0]->data_nascimento?></span> <!----></p>
                                            </div>
                                            <div class="profile-detailArbitro453278" id="profile-detailArbitro453278" style="display: none;">
                                                <form id="info-formElIP1Arbitro" novalidate="novalidate">
                                                    <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IPessoal">
                                                    <input type="hidden" name="idArbitro" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_pessoa;?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarArbitro[0]->id_endereco_fk1?>">
                                                        <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="content_success_msg" role="alert" aria-live="assertive" class="alert alert-success hideme zoom-newmessage" style="margin-left: -128.259px; display: none;">Sucesso ao salvar informações do usuário.</div>
                                                                <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Nome Completo</p>
                                                                    <input type="hidden" class="oldFirstName" value="Edson">
                                                                    <label for="firstName" class="sr-only" style="font-weight: normal;">Nome Completo</label>
                                                                    <input type="text" name="fullName" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->nome?>">
                                                                </div>
                                                            <!-- </div>
                                                            <div class="zm-form-group" style="max-width: 430px; margin-bottom: 0px;"> -->
                                                                <div id="first-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Numero do Bilhete</p>
                                                                    <input type="text" name="bilhete" placeholder="Numero de Bilhete" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->n_bilhete?>">
                                                                </div>
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Genero</p>
                                                                    <select class="form-control form-control-sm" name="genero" id="genero">
                                                                        <option value="Masculino" selected=""> Masculino </option>
                                                                        <option value="Femenino"> Femenino </option>
                                                                    </select>
                                                                </div>

                                                            <!-- </div>
                                                            <div class="zm-form-group" style="max-width: 430px; margin-bottom: 0px;"> -->
                                                                <div id="first-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Data de Nascimento</p>
                                                                    <input type="date" name="data" class="form-control form-control-sm" placeholder="04/1/2014" value="<?= $editarArbitro[0]->data_nascimento;?>">
                                                                </div>
                                                        </div>
                                                        <div class="row" style="margin-right: -15px;margin-left: -15px;">
                                                            <div class="col-sm-12 z-form-item-action" style="margin-top: 10px;margin-bottom: 10px;">
                                                                <button class="btn btn-primary submit" style="padding: 5px 16px">
                                                                    <span>Salvar Alterações</span>
                                                                </button>
                                                                <a role="button" href="#" data-edit="profile-detail" class="btn btn-default cancel profile-detail23718" id="profile-detailCancel64589">
                                                                    <span style="font-size:14px">Cancelar</span>
                                                                </a>
                                                                <div id="loadingIP21" class="c-loader" style="margin-top: -34px;margin-left: 220px;display:none"></div>
                                                            </div>
                                                            <div class="col-sm-12" style="float: left;">
                                                                <div id="detail_error_msg" class="col-sm-12 col-sm-12 alert alert-danger hideme" style="display: none;float: left;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="card-body profile-EditarFotoArbitro453278" id="profile-EditarFotoArbitro453278" style="display:none;max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">

                                                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                                    <li class="nav-item">
                                                    <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"> Envio</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false"> Tirar Foto</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content" id="custom-content-below-tabContent">
                                                    <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">

                                                        <div class="row">
                                                            <div class="col-12" style="top: 8px;">
                                                            <div class="card pb-2">
                                                                <div class="" style="display: table-cell;padding: 40px 0;text-align: center;vertical-align: middle;">
                                                                    <p class="drag-drop-info">Solte seu arquivo aqui</p>
                                                                    <p>ou</p>
                                                                    <!-- <form id="gravarFotoAlterar123" method="POST" name="form-wizard" class="form-control-with-bg" enctype="multipart/form-data" accept-charset="utf-8"> -->
                                                                        <p class="drag-drop-buttons" style="text-align: center;">
                                                                            <img class="card-img-top pb-2 ml-auto mr-auto" data_imagem="<?php echo $editarArbitro[0]->imagem;?>" src="<?= base_url('uploads/product/' . $editarArbitro[0]->imagem);?>" id="12323524Arbitro" style="height:120px; width:120px;border-radius:24px;vertical-align: middle;display:none">

                                                                            <button class="btn btn-success" id="botaoEsconderArbitro231"><label for="arquivoFotoArbitro" class="bp-screen-reader-text" style="font-weight:500;display:inline">Selecione seu arquivo</label></button>
                                                                            <!-- <input id="bp-browse-button" type="button" value="Selecione seu arquivo" class="button" style="position: relative; z-index: 1;color: #767676;"> -->
                                                                            <form id="gravarFotoAlterar123" action="http://localhost/KEDA/Arbitro/gravarFoto" method="POST" name="form-wizard" class="form-control-with-bg" enctype="multipart/form-data" accept-charset="utf-8">

                                                                            <div style="display:none">
                                                                                <input type="hidden" name="idArbitro" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                                                                <input type="file" name="arquivoFotoArbitro" id="arquivoFotoArbitro" class="rounded mx-auto d-block form-control form-control-sm" onchange="PreviewImagemArbitro2()">
                                                                                <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_pessoa;?>">
                                                                            </div>
                                                                            <div class="row">

                                                                                <div id="botaoEsconderArbitro231CG" class="drag-drop-buttons ml-auto mr-auto" style="display:none">
                                                                                    <button type="submit" class="btn btn-success">Gravar</button>
                                                                                    <button class="btn btn-default" id="CancelarGravarFotoMestre1">Cancelar</button>
                                                                                </div>
                                                                            </div>
                                                                            </form>
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            </div>



                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                                                    <div class="row pt-5">
                                                        <div class="col-12">
                                                        <div class="card">


                                                        </div>
                                                        <!-- /.card -->
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>

                                <div class="z-row-action" style="top: 23px;white-space: nowrap;position: absolute;top: 19px;right: 30px;">
                                    <a class="edit btn btn-sm bg-success" href="javascript:;" data-edit="profile-detail profile-detail23718Arbitro" id="profile-detail23718Arbitro" style=""><i class="fa fa-edit"></i>Editar</a>
                                </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Informacao de Endereco</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom:0;" id="form-control-staticIEArbitro4650">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Provincia</span> <span class="cellphone"><?= $editarArbitro[0]->provincia_e?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Municipio</span> <span class="cellphone"><?= $editarArbitro[0]->municipio?></span> <!----></p>
                                            </div>
                                            <div class="profile-detail" id="profile-detailIEArbitro625448" style="display: none;">
                                                <form id="info-formElIE1Arbitro" novalidate="novalidate">
                                                <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IEndereco">
                                                <input type="hidden" name="idArbitro" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                                <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_pessoa;?>">
                                                <input type="hidden" name="id_endereco_fk1" value="<?= $editarArbitro[0]->id_endereco_fk1?>">
                                                    <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Provincia</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">

                                                                    <select id="provincia" class="provincia form-control form-control-sm" name="provincia">
                                                                        <option><?=  $editarArbitro[0]->provincia_e;?></option>
                                                                        <?php echo $escolhe_provincias; ?>
                                                                    </select>
                                                                </div>
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Municipio</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">
                                                                    <label for="lastName" class="sr-only" style="font-weight: normal;">Sobrenome</label>
                                                                    <select id="municipio" class="form-control form-control-sm" name="municipio">
                                                                        <?php foreach($editarArbitro as $municipio){?>
                                                                            <option><?= $municipio->municipio;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="row" style="margin-right: -15px;margin-left: -15px;">
                                                            <div class="col-sm-12 z-form-item-action" style="margin-top: 10px;margin-bottom: 10px;">
                                                                <button class="btn btn-primary submit" style="padding: 5px 16px">
                                                                    <span>Salvar Alterações</span>
                                                                </button>
                                                                <a role="button" href="#" data-edit="profile-detail" class="btn btn-default cancel profile-detail23718" id="profile-detailCancelIE64589">
                                                                        <span style="font-size:14px">Cancelar</span>
                                                                </a>
                                                                <div id="loadingIP21" class="c-loader" style="margin-top: -34px;margin-left: 220px;display:none"></div>
                                                            </div>
                                                            <div class="col-sm-12" style="float: left;">
                                                                <div id="detail_error_msg" class="col-sm-12 col-sm-12 alert alert-danger hideme" style="display: none;float: left;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                    </div>
                        </div>

                        <div class="z-row-action" style="top: 23px;white-space: nowrap;position: absolute;top: 19px;right: 30px;">
                        <a class="edit btn btn-sm bg-success" href="javascript:;" data-edit="meetingid-detail" id="meetingid-detailEditarArbitro7364820" style=""><i class="fa fa-edit"></i>Editar</a>
                        </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Filiacao</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticIFArbitro4650890">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Pai</span> <span class="cellphone"><?= $editarArbitro[0]->nomePai;?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Mae</span> <span class="cellphone"><?= $editarArbitro[0]->nomeMae;?></span> <!----></p>
                                            </div>
                                            <div class="profile-detail" id="profile-detailIFesdArbitro62544812313" style="display: none;">
                                                <form id="info-formElIF1Arbitro" novalidate="novalidate">

                                                    <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IFiliacao">
                                                    <input type="hidden" name="idArbitro" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_pessoa;?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarArbitro[0]->id_endereco_fk1?>">

                                                    <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                        <div id="content_success_msgIF" role="alert" aria-live="assertive" class="alert alert-success hideme zoom-newmessage" style="margin-left: -128.259px; display: none;">Sucesso ao salvar informações do usuário.</div>
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">Nome do Pai</p>
                                                                <input type="text" name="nomePai" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->nomePai;?>">
                                                            </div>
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">Nome da Mae</p>
                                                                <input type="text" name="nomeMae" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->nomeMae;?>">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-right: -15px;margin-left: -15px;">
                                                            <div class="col-sm-12 z-form-item-action" style="margin-top: 10px;margin-bottom: 10px;float: left;">
                                                                <button class="btn btn-primary submit" style="padding: 5px 16px">
                                                                    <span>Salvar Alterações</span>
                                                                </button>
                                                                <a role="button" href="#" data-edit="profile-detail" class="btn btn-default cancel profile-detail23718" id="profile-detailCancelIFes589123">
                                                                        <span style="font-size:14px">Cancelar</span>
                                                                </a>
                                                                <div id="loadingIF21" class="c-loader" style="margin-top: -34px;margin-left: 220px;display:none"></div>
                                                            </div>
                                                            <div class="col-sm-12" style="float: left;">
                                                                <div id="detail_error_msg" class="col-sm-12 col-sm-12 alert alert-danger hideme" style="display: none;float: left;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                    </div>
                        </div>

                        <div class="z-row-action" style="top: 23px;white-space: nowrap;position: absolute;top: 19px;right: 30px;">
                        <a class="edit btn btn-sm bg-success" href="javascript:;" data-edit="meetingid-detail" id="meetingid-detailEditarIFsewArbitro9020" style=""><i class="fa fa-edit"></i>Editar</a>
                        </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Informacao de Contacto</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticIArbitroC4650123">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">E-mail</span> <span class="cellphone"><?= $editarArbitro[0]->email?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Telefone 1</span> <span class="cellphone"><?= $editarArbitro[0]->telefone?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Telefone 2</span> <span class="cellphone"><?= $editarArbitro[0]->telefone2?></span> <!----></p>
                                            </div>
                                            <div class="profile-detail" id="profile-detailICXSAarbitro12349123" style="display: none;">
                                                <form id="info-formElIC1Arbitro" novalidate="novalidate">
                                                <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IContacto">
                                                    <input type="hidden" name="idArbitro" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_pessoa;?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarArbitro[0]->id_endereco_fk1?>">
                                                    <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">E-mail</p>
                                                                <input type="hidden" class="oldFirstName" value="Edson">
                                                                <label for="firstName" class="sr-only" style="font-weight: normal;">Nome Completo</label>
                                                                <input type="text" name="email" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->email;?>">
                                                            </div>
                                                        </div>
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Telefone</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">
                                                                    <label for="lastName" class="sr-only" style="font-weight: normal;">Sobrenome</label>
                                                                    <input type="text" name="telefone" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->telefone;?>">
                                                                </div>
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Telefone 2</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">
                                                                    <label for="lastName" class="sr-only" style="font-weight: normal;">Sobrenome</label>
                                                                    <input type="text" name="telefone2" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarArbitro[0]->telefone2;?>">
                                                                </div>
                                                        </div>
                                                        <div class="row" style="margin-right: -15px;margin-left: -15px;">
                                                            <div class="col-sm-12 z-form-item-action" style="margin-top: 10px;margin-bottom: 10px;float: left;">
                                                                <button class="btn btn-primary submit" style="padding: 5px 16px">
                                                                    <span>Salvar Alterações</span>
                                                                </button>
                                                                <a role="button" href="#" data-edit="profile-detail" class="btn btn-default cancel profile-detail23718" id="profile-detailCancelICWEArbitro3589123">
                                                                        <span style="font-size:14px">Cancelar</span>
                                                                </a>
                                                                <div id="loadingIC21" class="c-loader" style="margin-top: -34px;margin-left: 220px;display:none"></div>
                                                            </div>
                                                            <div class="col-sm-12" style="float: left;">
                                                                <div id="detail_error_msg" class="col-sm-12 col-sm-12 alert alert-danger hideme" style="display: none;float: left;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                    </div>
                        </div>

                        <div class="z-row-action" style="top: 23px;white-space: nowrap;position: absolute;top: 19px;right: 30px;">
                        <a class="edit btn btn-sm bg-success" href="javascript:;" data-edit="meetingid-detail" id="meetingid-detailEditarICArbitro7364820123" style=""><i class="fa fa-edit"></i>Editar</a>
                        </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Informacao Tecnica</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticITedsArbitro23410123">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Categoria</span> <span class="cellphone"><?= $editarArbitro[0]->nome_categoria_fk?></span></p>

                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Subcategoria</span> <span class="cellphone"><?= $editarArbitro[0]->nome_subcategoria_fk?></span></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Statu</span> <span class="cellphone"><?= $editarArbitro[0]->statu ?></span></p>

                                            </div>
                                            <div class="profile-detail" style="display: none;" id="profile-detailITsweArbitro2341123">
                                                <form id="info-formElIT1Arbitro" novalidate="novalidate">
                                                    <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="ITecnica">
                                                    <input type="hidden" name="idArbitro" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_arbitro;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarArbitro[0]->id_pessoa;?>">
                                                    <input type="hidden" id="id_nome_categoria_fk" value="<?= $editarArbitro[0]->nome_categoria_fk?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarArbitro[0]->id_endereco_fk1?>">
                                                    <input type="hidden" name="id_inf_tecnica" value="<?= $editarArbitro[0]->id_inf_tecnica?>">
                                                    <div id="profile-detail-el">

                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div class="col-sm-6 form-group" style="margin: 0px;float: left;" id="col-sm-4">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Categoria</p>
                                                                    <select id="Categoria" class="form-control form-control-sm" name="Categoria">
                                                                        <?php foreach($categoria as $cat): ?>
                                                                            <?php if ($cat->descricao_cat_arb == $editarArbitro[0]->nome_categoria_fk) { ?>
                                                                            <option value="<?= $cat->descricao_cat_arb?>" nome_categoria="<?= $cat->descricao_cat_arb?>" selected categoria_arbitro2="categoria[];"><?= $editarArbitro[0]->nome_categoria_fk;?></option>
                                                                        <?php } else { ?>
                                                                            <option value="<?= $cat->descricao_cat_arb?>" nome_categoria="<?= $cat->descricao_cat_arb?>" categoria_arbitro2="categoria[];"><?= $cat->descricao_cat_arb?></option>
                                                                        <?php }?>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>


                                                                <div class="col-sm-6 form-group" style="margin: 0px;float: left;" id="subcategoria2">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Subcategoria</p>
                                                                    <select class="form-control form-control-sm" name="sub-categoria">
                                                                        <?php foreach ($subcategoria as $subcategoria):?>
                                                                            <?php if ($subcategoria->descricao_subcategoria == $editarArbitro[0]->nome_subcategoria_fk) { ?>
                                                                                <option value="<?= $subcategoria->descricao_subcategoria?>" selected><?= $editarArbitro[0]->nome_subcategoria_fk;?></option>
                                                                            <?php } else { ?>
                                                                                <option value="<?= $subcategoria->descricao_subcategoria;?>"><?= $subcategoria->descricao_subcategoria;?></option>
                                                                            <?php }?>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">

                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Status</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">
                                                                    <label for="lastName" class="sr-only" style="font-weight: normal;">Sobrenome</label>
                                                                    <select id="statu" class="form-control form-control-sm" name= "statu">
                                                                        <option value="Activo" <?= $editarArbitro[0]->statu=="Activo"?' selected ':' ';?>> Activo </option>
                                                                        <option value="Nao Activo" <?= $editarArbitro[0]->statu=="Nao Activo"?' selected ':' ';?>> Nao Activo </option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="row" style="margin-right: -15px;margin-left: -15px;">
                                                            <div class="col-sm-12 z-form-item-action" style="margin-top: 10px;margin-bottom: 10px;">
                                                                <button class="btn btn-primary submit" style="padding: 5px 16px">
                                                                    <span>Salvar Alterações</span>
                                                                </button>
                                                                <a role="button" href="#" data-edit="profile-detail" class="btn btn-default cancel profile-detail23718" id="profile-detailCancelITesw64589">
                                                                        <span style="font-size:14px">Cancelar</span>
                                                                </a>
                                                                <div id="loadingIT21" class="c-loader" style="margin-top: -34px;margin-left: 220px;display:none"></div>
                                                            </div>
                                                            <div class="col-sm-12" style="float: left;">
                                                                <div id="detail_error_msg" class="col-sm-12 col-sm-12 alert alert-danger hideme" style="display: none;float: left;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                    </div>
                        </div>

                        <div class="z-row-action" style="top: 23px;white-space: nowrap;position: absolute;top: 19px;right: 30px;">
                        <a class="edit btn btn-sm bg-success" href="javascript:;" data-edit="meetingid-detail" id="meetingid-detailITArbitro2340123" style=""><i class="fa fa-edit"></i>Editar</a>
                        </div>
                        </div>
                    </div>
                </div>
          <!-- /.card-body -->
            </div>
        <!-- /.card -->
        <!-- START ALERTS AND CALLOUTS -->
        </div>
        <!-- END TYPOGRAPHY -->
    </div><!-- /.container-fluid -->
</section>
