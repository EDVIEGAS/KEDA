<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Mestre</h1>
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
            <div class="box-tools col-1 mt-3 ml-3 mb-0 pb-2">
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
                                            <?php if($editarMestre[0]->imagem == null || empty($editarMestre[0]->imagem)){ ?>
                                                <!-- <img src="<?= base_url('uploads/product/' . $editarMestre[0]->imagem);?>" id="124" hidden> -->
                                                <img class="card-img-top width-200 height-150" data_imagem="<?php echo $editarMestre[0]->imagem;?>" src="<?= base_url('assets/images/3.jpg');?>" id="130" style="height:180px; width:150px;border-radius:24px;vertical-align: middle;">
                                            <?php }else{ ?>
                                                <!-- <img src="<?= base_url('uploads/product/' . $editarMestre[0]->imagem);?>" id="124" hidden> -->
                                                <img class="card-img-top width-200 height-150" data_imagem="<?php echo $editarMestre[0]->imagem;?>" src="<?= base_url('uploads/product/' . $editarMestre[0]->imagem);?>" id="130" style="height:180px; width:150px;border-radius:18px;vertical-align: middle;">
                                            <?php } ?>
                                        </a>
                                        <div class="pic-action clearfix" style="float: left;font-size: 14px;width: 120px;text-align: center;padding-top: 6px;">
                                            <a ui-cmd="Change" role="button" ui-cat="Web.Profile" href="" id="idTrocarFotoMestre" class="change-picture" style="float: center;">
                                            Alterar
                                            </a>
                                            <?php if($editarMestre[0]->imagem == null || empty($editarMestre[0]->imagem)){ ?>
                                                <a ui-cmd="Change" role="button" ui-cat="Web.Profile" href="javascript:;" class="delete-picture delete-picture-mestre" style="float: right;color: #17a2b8"></a>
                                            <?php }else{ ?>
                                                <a ui-cmd="Change" role="button" ui-cat="Web.Profile" href="javascript:;" class="delete-picture delete-picture-mestre" style="float: right;color: #17a2b8">Excluir</a>
                                            <?php } ?>

                                        </div>
                                        <!-- <div style="display:none">
                                            <input type="file" name="arquivoFotoMestre" id="arquivoFotoMestre" class="rounded mx-auto d-block form-control form-control-sm" onchange="PreviewImagemMestre2()">
                                        </div> -->
                                    </label>
                                    <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticMestre3849674">
                                                <p class="form-control-static fullName" style="font-weight: bold;color: #232333;font-size: 24px;margin-bottom: 0;"><?= $editarMestre[0]->nome?></p>
                                                <!-- <p class="form-control-static displayName ">Edson Viegas</p> -->
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Genero</span> <span class="cellphone"><?= $editarMestre[0]->genero?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Bilhte de Identidade</span> <span class="cellphone"><?= $editarMestre[0]->n_bilhete?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Data de Nascimento</span> <span class="cellphone"><?= $editarMestre[0]->data_nascimento?></span> <!----></p>
                                            </div>
                                            <div class="profile-detailMestre453278" id="profile-detailMestre453278" style="display: none;">
                                                <form id="info-formElIP1Mestre" novalidate="novalidate">
                                                    <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IPessoal">
                                                    <input type="hidden" name="idMestre" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_mestre;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_pessoa;?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarMestre[0]->id_endereco_fk1?>">
                                                        <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="content_success_msg" role="alert" aria-live="assertive" class="alert alert-success hideme zoom-newmessage" style="margin-left: -128.259px; display: none;">Sucesso ao salvar informações do usuário.</div>
                                                                <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Nome Completo</p>
                                                                    <input type="hidden" class="oldFirstName" value="Edson">
                                                                    <label for="firstName" class="sr-only" style="font-weight: normal;">Nome Completo</label>
                                                                    <input type="text" name="fullName" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->nome?>">
                                                                </div>
                                                            <!-- </div>
                                                            <div class="zm-form-group" style="max-width: 430px; margin-bottom: 0px;"> -->
                                                                <div id="first-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Numero do Bilhete</p>
                                                                    <input type="text" name="bilhete" placeholder="Numero de Bilhete" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->n_bilhete?>">
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
                                                                    <input type="date" name="data" class="form-control form-control-sm" placeholder="04/1/2014" value="<?= $editarMestre[0]->data_nascimento;?>">
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

                                            <div class="card-body profile-EditarFotoMestre453278" id="profile-EditarFotoMestre453278" style="display:none;max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">

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
                                                                            <img class="card-img-top pb-2 ml-auto mr-auto" data_imagem="<?php echo $editarMestre[0]->imagem;?>" src="<?= base_url('uploads/product/' . $editarMestre[0]->imagem);?>" id="12323524Mestre" style="height:120px; width:120px;border-radius:24px;vertical-align: middle;display:none">

                                                                            <button class="btn btn-success" id="botaoEsconderMestre231"><label for="arquivoFotoMestre" class="bp-screen-reader-text" style="font-weight:500;display:inline">Selecione seu arquivo</label></button>
                                                                            <!-- <input id="bp-browse-button" type="button" value="Selecione seu arquivo" class="button" style="position: relative; z-index: 1;color: #767676;"> -->
                                                                            <form id="gravarFotoAlterar123" action="http://localhost/KEDA/Mestre/gravarFoto" method="POST" name="form-wizard" class="form-control-with-bg" enctype="multipart/form-data" accept-charset="utf-8">

                                                                            <div style="display:none">
                                                                                <input type="hidden" name="idMestre" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_mestre;?>">
                                                                                <input type="file" name="arquivoFotoMestre" id="arquivoFotoMestre" class="rounded mx-auto d-block form-control form-control-sm" onchange="PreviewImagemMestre2()">
                                                                                <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_pessoa;?>">
                                                                            </div>
                                                                            <div class="row">

                                                                                <div id="botaoEsconderMestre231CG" class="drag-drop-buttons ml-auto mr-auto" style="display:none">
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
                                    <a class="edit" href="javascript:;" data-edit="profile-detail profile-detail23718Mestre" id="profile-detail23718Mestre" style="color: #17a2b8">Editar</a>
                                </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Informacao de Endereco</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom:0;" id="form-control-staticIE4650">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Provincia</span> <span class="cellphone"><?= $editarMestre[0]->provincia_e?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Municipio</span> <span class="cellphone"><?= $editarMestre[0]->municipio?></span> <!----></p>
                                            </div>
                                            <div class="profile-detail" id="profile-detailIE625448" style="display: none;">
                                                <form id="info-formElIE1Mestre" novalidate="novalidate">
                                                <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IEndereco">
                                                <input type="hidden" name="idMestre" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_mestre;?>">
                                                <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_pessoa;?>">
                                                <input type="hidden" name="id_endereco_fk1" value="<?= $editarMestre[0]->id_endereco_fk1?>">
                                                    <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Provincia</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">

                                                                    <select id="provincia" class="provincia form-control form-control-sm" name="provincia">
                                                                        <option><?=  $editarMestre[0]->provincia_e;?></option>
                                                                        <?php echo $escolhe_provincias; ?>
                                                                    </select>
                                                                </div>
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Municipio</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">
                                                                    <select id="municipio" class="form-control form-control-sm" name="municipio">
                                                                        <?php foreach($editarMestre as $municipio){?>
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
                        <a class="edit" href="javascript:;" data-edit="meetingid-detail profile-detail23718Mestre" id="meetingid-detailEditar7364820" style="color: #17a2b8">Editar</a>
                        </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 2px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Filiacao</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticIF4650890">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Pai</span> <span class="cellphone"><?= $editarMestre[0]->nomePai;?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Mae</span> <span class="cellphone"><?= $editarMestre[0]->nomeMae;?></span> <!----></p>
                                            </div>
                                            <div class="profile-detail" id="profile-detailIFesd62544812313" style="display: none;">
                                                <form id="info-formElIF1Mestre" novalidate="novalidate">

                                                    <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IFiliacao">
                                                    <input type="hidden" name="idMestre" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_mestre;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_pessoa;?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarMestre[0]->id_endereco_fk1?>">

                                                    <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                        <div id="content_success_msgIF" role="alert" aria-live="assertive" class="alert alert-success hideme zoom-newmessage" style="margin-left: -128.259px; display: none;">Sucesso ao salvar informações do usuário.</div>
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">Nome do Pai</p>
                                                                <input type="text" name="nomePai" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->nomePai;?>">
                                                            </div>
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">Nome da Mae</p>
                                                                <input type="text" name="nomeMae" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->nomeMae;?>">
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
                        <a class="edit" href="javascript:;" data-edit="meetingid-detail profile-detail23718Mestre" id="meetingid-detailEditarIFsew9020" style="color: #17a2b8">Editar</a>
                        </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Informacao de Contacto</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticIC4650123">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">E-mail</span> <span class="cellphone"><?= $editarMestre[0]->email?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Telefone 1</span> <span class="cellphone"><?= $editarMestre[0]->telefone?></span> <!----></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Telefone 2</span> <span class="cellphone"><?= $editarMestre[0]->telefone2?></span> <!----></p>
                                            </div>
                                            <div class="profile-detail" id="profile-detailICXSA12349123" style="display: none;">
                                                <form id="info-formElIC1Mestre" novalidate="novalidate">
                                                <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="IContacto">
                                                    <input type="hidden" name="idMestre" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_mestre;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_pessoa;?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarMestre[0]->id_endereco_fk1?>">
                                                    <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">E-mail</p>
                                                                <input type="hidden" class="oldFirstName" value="Edson">
                                                                <label for="firstName" class="sr-only" style="font-weight: normal;">Nome Completo</label>
                                                                <input type="text" name="email" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->email;?>">
                                                            </div>
                                                        </div>
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Telefone</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">
                                                                    <label for="lastName" class="sr-only" style="font-weight: normal;">Sobrenome</label>
                                                                    <input type="text" name="telefone" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->telefone;?>">
                                                                </div>
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Telefone 2</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">
                                                                    <label for="lastName" class="sr-only" style="font-weight: normal;">Sobrenome</label>
                                                                    <input type="text" name="telefone2" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->telefone2;?>">
                                                                </div>
                                                        </div>
                                                        <div class="row" style="margin-right: -15px;margin-left: -15px;">
                                                            <div class="col-sm-12 z-form-item-action" style="margin-top: 10px;margin-bottom: 10px;float: left;">
                                                                <button class="btn btn-primary submit" style="padding: 5px 16px">
                                                                    <span>Salvar Alterações</span>
                                                                </button>
                                                                <a role="button" href="#" data-edit="profile-detail" class="btn btn-default cancel profile-detail23718" id="profile-detailCancelICWE3589123">
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
                        <a class="edit" href="javascript:;" data-edit="meetingid-detail profile-detail23718Mestre" id="meetingid-detailEditarIC7364820123" style="color: #17a2b8">Editar</a>
                        </div>
                        </div>
                    </div>

                    <div class="z-form-row" style="padding: 12px 30px 4px;border-bottom: 1px solid #eeeff2;position: relative;">
                        <div class="form-horizontal meetingid-info" style="margin-left: -15px;margin-right: -15px;margin-bottom: 15px;text-align: left;color: #747487;font-size: 14px;">
                        <div class="form-group">
                        <h2 class="col-sm-3 control-label" style="width:25%;float: left;color: #747487;font-size: 14px;">Informacao Tecnica</h2>
                        <div class="col-sm-9" style="width: 75%;float: left;">

                                            <div class="form-control-static" style="padding-right:40px;margin-bottom: 0;" id="form-control-staticITeds23410123">
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Peso</span> <span class="cellphone"><?= $editarMestre[0]->peso?> Kg</span></p>
                                                <?php if($editarMestre[0]->graduacao == 0){?>
                                                    <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Graduacao</span> <span class="cellphone"></span>Cinturao Negro</p>
                                                <?php }else{?>
                                                    <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Graduacao</span> <span class="cellphone"><?= $editarMestre[0]->graduacao?></span>º DAN</p>
                                                <?php } ?>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Clube</span> <span class="cellphone"><?= $editarMestre[0]->nome_academia?></span></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Statu</span> <span class="cellphone"><?= $editarMestre[0]->statu_mestre?></span></p>
                                                <p id="cellphone-content-el" class="form-control-static phone-container " style="margin-bottom: 0;"><span class="phoneLabel" style="color: #747487;display: inline-block;min-width: 150px;">Estilo</span> <span class="cellphone"><?= $editarMestre[0]->nome_estilo?></span></p>
                                            </div>
                                            <div class="profile-detail" style="display: none;" id="profile-detailITswe2341123">
                                                <form id="info-formElIT1Mestre" novalidate="novalidate">
                                                    <input type="hidden" name="controlInfo" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="ITecnica">
                                                    <input type="hidden" name="idMestre" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_mestre;?>">
                                                    <input type="hidden" name="idpessoa" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="<?= $editarMestre[0]->id_pessoa;?>">
                                                    <input type="hidden" name="id_endereco_fk1" value="<?= $editarMestre[0]->id_endereco_fk1?>">
                                                    <input type="hidden" name="id_inf_tecnica" value="<?= $editarMestre[0]->id_inf_tecnica?>">
                                                    <div id="profile-detail-el">
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">Peso</p>
                                                                <input type="text" name="peso" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->peso;?>">
                                                            </div>
                                                        </div>
                                                        <!-- <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                            <div id="first-name-form-group" class="col-sm-12 form-group" style="margin: 0px;float: left;">
                                                                <p class="form-control-static detail-label" style="margin-bottom: 0;">Mestre</p>
                                                                <input type="text" name="mestre" placeholder="Nome do Mestre" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" value="<?= $editarMestre[0]->mestre;?>">
                                                            </div>
                                                        </div> -->
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Graduacao</p>
                                                                    <select id="Graduacao" class="form-control form-control-sm" name="Graduacao">
                                                                        <?php for($descricao=0;$descricao < 12;$descricao++){ ?>
                                                                            <?php if ($descricao == $editarMestre[0]->graduacao) { ?>
                                                                                <option value="<?= $descricao?>" selected><?= $editarMestre[0]->graduacao?>º DAN</option>
                                                                            <?php } else { ?>
                                                                                <option value="<?= $descricao?>"><?= $descricao ?>º DAN</option>
                                                                            <?php }?>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Clube</p>
                                                                    <select class="form-control form-control-sm" name="Academia" id="Academia">
                                                                        <?php foreach ($nome_academia as $n):?>
                                                                            <?php if ($n->id_academia == $editarMestre[0]->id_academia) { ?>
                                                                                <option value="<?= $n->id_academia?>" selected><?= $editarMestre[0]->nome_academia;?></option>
                                                                            <?php } else { ?>
                                                                                <option value="<?= $n->id_academia?>"><?= $n->nome_academia;?></option>
                                                                            <?php }?>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="zm-form-group" style="max-width: 530px; margin-bottom: 0px;margin-left: -15px;margin-right: -15px;margin-bottom: 15px;">
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Estilo</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">

                                                                    <select class="form-control form-control-sm" name="estilo" id="estilo">
                                                                        <?php foreach ($estilo as $est):?>
                                                                        <?php if ($est->id_estilo == $editarMestre[0]->id_estilo) { ?>
                                                                            <option value="<?= $est->id_estilo?>" selected><?= $est->nome_estilo;?></option>
                                                                        <?php } else { ?>
                                                                            <option value="<?= $est->id_estilo?>"><?= $est->nome_estilo;?></option>
                                                                        <?php }?>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                                <div id="last-name-form-group" class="col-sm-6 form-group" style="margin: 0px;float: left;">
                                                                    <p class="form-control-static detail-label" style="margin-bottom: 0;">Status</p>
                                                                    <input type="hidden" class="oldLastName" value="Viegas">

                                                                    <select id="statu" class="form-control form-control-sm" name= "statu">
                                                                        <option value="Activo" <?= $editarMestre[0]->statu=="Activo"?' selected ':' ';?>> Activo </option>
                                                                        <option value="Nao Activo" <?= $editarMestre[0]->statu=="Nao Activo"?' selected ':' ';?>> Nao Activo </option>
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
                        <a class="edit" href="javascript:;" data-edit="meetingid-detail profile-detail23718Mestre" id="meetingid-detailIT2340123" style="color: #17a2b8">Editar</a>
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
