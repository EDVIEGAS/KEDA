<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Atleta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="box-tools col-1 mt-2 ml-3 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12">
              <span id="conteudo2"></span>

            </div>
            <div class="col-1 mb-3 mt-0 ml-3" style="">
                <a class="btn btn-primary btn-flat btn-block btn-sm" href="<?= site_url('novo_atleta');?>"><i class="fa fa-user-plus"></i> Adicionar </a>
              </div>
              <div class="row col-sm-12">
                  <div class="ml-3 col-md-1">
                      <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoEdit879"><i class="fa fa-edit" id="icone123"></i> Editar</button>
                  </div>
                  <div class="btn-group " style="right: -9px;">
                    <button type="button" class="float-right btn btn-info btn-flat dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false"> Opoes de Exportacao</button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" href="<?= base_url("pdfAtletalista"); ?>" id="Listar900"><div><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Exportar Listagem (PDF)</div></a>
                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-success fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                    </div>
                  </div>
              </div>
                  <!-- <span class="pull-right hidden-print">
                  <a href="#" class="btn btn-sm btn-white mb-10 pl-5" id="Listar900"><i class="fa fa-pdf-alt t-plus-1 text-danger fa-fw fa-lg"></i> Ver Lista</a>
                  </span><br> -->

              <div><p style="color: black;font-size: 16px" class="text-center" dataEmisssao="<?php echo date('d/m/Y');?>" id="contador123"></p></div>
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <?php if($atletas != null){ ?>
              <div class="card-body">
                <legend class="f-w-700 p-b-5 m-t-0 mb-40 text-inverse text-center text-bold text-uppercase">LISTA COMPLETA DOS ATLETAS CONTROLADOS PELA ASSOCIACAO PROVINCIAL DO <?php echo $this->session->userdata('nome'); ?></legend><br>
                <table id="example1" class="table table-striped table-sm">
                  <thead>
                    <tr>
                        <th width="1%" class="numero1" hidden><label id="label55" style="margin-bottom: -0.5rem;background: #dee2e6;width: 18px;height: 18px;content: ''" for="radio1"></label><input type="checkbox" class="radio1" id="radio1" name="control[]" value="" hidden></th>
                        <th width="1%" class="numeracao">Nº</th>
                        <th width="1%" data-orderable="false">Foto</th>
                        <th class="text-nowrap">Nome</th>
                        <th class="text-nowrap">D.Nasc</th>
                        <th class="text-center">Graduacao</th>
                        <th width="2%" class="text-center">ASSOCIACAO PROVINCIAL</th>
                        <th width="2%" class="text-center">Transferencia</th>
                        <th class="text-center">Estilo</th>
                        <th class="text-center">Academia</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Accao</th>
                    </tr>
                  </thead>
                <tbody>
                   <?php $cont=0;
                         $contador=0;
                         foreach($atletas as $atleta):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                    <td width="1%" class="numero1" hidden><label id="label555" style="background: #dee2e6; position: absolute;width: 18px;height: 18px;content: '';border-radius: 50%" for="<?= $atleta->id_mestre;?>"></label><input type="checkbox" class="radio" id="<?= $atleta->id_mestre;?>" name="<?= $atleta->id_mestre?>radio[]" value="<?= $atleta->id_mestre;?>" hidden></td>
                      <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                      <?php if($atleta->imagem == null){ ?>
                                  <td class="width-30"><figure style="height: 30px;width: 30px;flex: 0 0 auto;margin: 0 15px 0 0;border-radius: 50%; box-sizing: border-box;"><img style="width: 100%;height: 100%; object-fit: cover;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('assets/images/3.JPG');?>" class="img-rounded"/></figure></td>
                        <?php }else{ ?>
                                           <td class="width-30"><figure style="height: 30px;width: 30px;flex: 0 0 auto;margin: 0 15px 0 0;border-radius: 50%; box-sizing: border-box;"><img style="height: 100%;width: 100%;object-fit: cover;border-radius: 50%;box-sizing: border-box;" src="<?= base_url('uploads/product/' . $atleta->imagem);?>" /></figure></td>
                                        <?php }?>
                                        <td id="nomeAatleta"><?= $atleta->nome; ?></td>
                                        <td id="nomeAatleta"><?= date('d/m/Y', strtotime(strtoupper($atleta->data_nascimento)));?></td>
                                        <td class="text-center">
                                          <div class="text-center" id="conteiner3">

                                                <?php if($atleta->graduacao == 0){?>

                                                    <div class="entrada7">
                                                      <p style="margin-top: 13px;"> NEGRO </p>
                                                    </div>

                                                <?php }else if($atleta->graduacao > 10){?>

                                                    <?php if($atleta->graduacao == 15){ ?>
                                                      <div class="bg bg-warning">
                                                        <p style="margin-top: 13px;color:black">Amarelo</p>
                                                      </div>
                                                    <?php }elseif ($atleta->graduacao == 16) { ?>
                                                      <div class="bg bg-light">
                                                        <p style="margin-top: 13px;color:black">Branco</p>
                                                      </div>
                                                    <?php }elseif ($atleta->graduacao == 14) { ?>
                                                      <div class="bg bg-orange">
                                                        <p style="margin-top: 13px;color:black">Laranja</p>
                                                      </div>
                                                    <?php }elseif ($atleta->graduacao == 13) { ?>
                                                      <div class="bg bg-success">
                                                        <p style="margin-top: 13px;color:black">Verde</p>
                                                      </div>
                                                    <?php }elseif ($atleta->graduacao == 12) { ?>
                                                      <div class="bg bg-primary">
                                                        <p style="margin-top: 13px;color:black">Azul</p>
                                                      </div>
                                                    <?php }elseif ($atleta->graduacao == 11) { ?>
                                                      <div class="bg bg-light">
                                                        <p style="margin-top: 13px;color:black">Castanho</p>
                                                      </div>
                                                    <?php } ?>

                                                <?php }else{ ?>

                                                    <div class="entrada7">
                                                      <p style="margin-top: 13px;"><?= $atleta->graduacao;?>º DAN</p>
                                                    </div>

                                                    <div class="entrada9">
                                                      <?php for($i=0;$i < $atleta->graduacao;$i++){ ?>
                                                            <div class="entrada4">
                                                            </div>
                                                      <?php } ?>
                                                    </div>

                                                <?php } ?>
                                          </div>
                                        </td>

                                        <td width="2%" class="text-center">
                                          <!-- <div class="ml-3"> -->
                                            <?= $atleta->descricao_associacao?>
                                          <!-- </div> -->
                                        </td>
                                        <td width="3%" class="text-center">
                                          <!-- <div class="ml-3"> -->
                                              <button style="border: 1px solid #348fe2" class="btn btn-info btn-flat btn-block btn-sm" id="botaoTROCARAssociacaoAtleta" data_id_mestre="<?= $atleta->id_mestre; ?>" data_nomeAsso="<?= $atleta->descricao_associacao?>" data_id_Usuario="<?= $this->session->userdata("id_usuario"); ?>">Transferencia</button>
                                          <!-- </div> -->
                                        </td>
                                        <td class="text-center"><?= $atleta->nome_estilo; ?></td>
                                        <td class="text-center"><?= $atleta->nome_academia; ?></td>

                                        <?php if($atleta->statu_mestre == "Activo") {?>
                                        <td class="text-center statu_mestres project-state"><a href="<?= base_url('editar_estado_mestre/'. $atleta->id_mestre.'/'.$atleta->statu_mestre);?>" cont="<?= $cont?>" data-Mudar-atleta='<?php echo $atleta->statu_mestre;?>' data-mudar-atleta-id="<?php echo $atleta->id_mestre;?>" class="btn-update-statu_mestres<?= $cont?>" id='mudarAtleta'><span class="badge badge-success"><?= $atleta->statu_mestre;?></span></a></td>
                                        <?php }else{ ?>
                                        <td class="text-center statu_mestres1"><a href="<?= base_url('editar_estado_mestre/'. $atleta->id_mestre .'/'.$atleta->statu_mestre);?>" cont="<?= $cont?>" data-Mudar-atleta='<?php echo $atleta->statu_mestre;?>' data-mudar-atleta-id="<?php echo $atleta->id_mestre;?>" class="btn-update-statu_mestres<?= $cont?>" id='mudarAtleta'><span class="badge badge-danger"><?= $atleta->statu_mestre;?></span></a></td>
                                        <?php } ?>

                                        <td class="text-center project-actions">
                                            <a href="<?= base_url('verMestre/' . $atleta->id_mestre);?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                           <a href="<?= base_url('editar_mestre/' . $atleta->id_mestre);?>" class="btn btn-sm btn-info "><i class="fas fa-edit"></i></a>
                                           <a href="<?= base_url('ExcluirMestre/' . $atleta->id_mestre);?>" data-confirm-atleta="<?php echo $atleta->nome;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                   <?php endforeach;?>
                                </tbody>

                </table>
                <div class="col-md-2">
                    <button style="border: 1px solid #ff5b57;display:none" class="btn btn-default btn-block" id="botaoApagar"><i class="fa fa-trash-alt"></i> Apagar </button>
                </div>
              </div>
              <?php }else{ ?>
              <div style="display:flex; flex-direction:column;text-align:center;padding-bottom:156px;padding-top:56px">
                <i class="fa fa-archive fa-6x" style="padding-bottom:12px"></i>
                <h5 class="media-heading" style="font-size:26px"> BASE DE DADOS VAZIA </h5>
              </div>
              <?php } ?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</section>
