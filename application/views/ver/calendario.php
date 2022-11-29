<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sticky-top mb-3">
                    <div class="card">
                        <button class="btn btn-primary" id="verlistaDeEvento123">Ver Lista de Evento</button>
                    </div>
                </div>
            </div>
          <!-- /.col -->
            <div class="col-md-10">
                <div class="card card-primary">
                    <div class="card-body p-0" id="calendarioMostra13" style="display:block">
                        <div class="col-md-12 pt-2">
                            <?php if($this->session->flashdata('sucesso_evento') != NULL):
                                        echo $this->session->flashdata('sucesso_evento');
                                endif;
                            ?>
                        </div>
                        <div id='calendar'>
                        </div>
                    </div>

                    <div class="card-body p-0" id="MostralistaDeEventos13" style="display:none">
                            <div class="row">
                            <div class="col-12">
            <!-- <div class="card"> -->
            
              <!-- <div class="col-1 mb-3 ml-3">
                <button style="border: 1px solid #348fe2" class="btn btn-default btn-block" id="botaoEdit"><i class="fa fa-edit" id="icone123"></i> Editar</button>
              </div> -->
              <!-- <div class="invoice-company text-inverse f-w-600">
                  <span class="pull-right hidden-print">
                  <a href="http://localhost/KEDA/actividade/GerarPDF" class="btn btn-sm btn-white mb-10 pl-5" id="Listar900"><i class="fa fa-file-alt t-plus-1 text-danger fa-fw fa-lg"></i> Ver Lista</a>
                  </span><br>
              </div> -->
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <?php if($actividade != null){ ?>
              <div class="card-body">
                <table id="example1" class="table table-striped table-sm">
                <thead>
                  <tr>
                      <th width="1%" class="numeracao">Nº</th>
                      <th class="text-nowrap">Actividade</th>
                      <th class="text-center">Local</th>
                      <th class="text-center">Data Inicio</th>     
                      <th class="text-center">Data Fim</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Accao</th>
                  </tr>
                </thead>
                <tbody>
                   <?php $cont=0;
                         $contador=0;
                         foreach($actividade as $actividade):
                                 $cont++;
                         ?>

                    <tr class="odd gradeX">
                                        <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                        
                                        <td id="nomeAatleta"><?= $actividade->nome_actividade; ?></td>
                                        <td class="text-center"><?= $actividade->local;?></td>
                                        <td class="text-center" id="nome_role"><?= $actividade->data_inicio;?></td>
                                        <td class="text-center status" id="controle"><?= $actividade->data_fim;?></td>
                                        <?php for($i=0;$i <= 3;$i++){?>
                                          <?php if($i == $actividade->status){?>
                                            <td class="text-center status text-bold bg-dark" id="controle"><span style="color:<?= $estado_actividade[$i]['cor'];?>;border"><?= $estado_actividade[$i]['descricao'];?></span></td>
                                          <?php }?>
                                        <?php }?>
                                        <td class="text-center project-actions">
                                            <a href="<?= base_url('mostrarArbl/' . $actividade->id_actividade);?>" href2="<?= base_url('ExcluirActividade/' . $actividade->id_actividade)?>" data-id_actividade="<?php echo $actividade->id_actividade ?>" class="btn btn-sm btn-info width-60 m-r-2"><i class="fa fa-eye"></i></a>
                                           <!-- <a href="<?= base_url('editar_actividade/' . $actividade->id_actividade);?>" data-editar-actividade="<?php echo $actividade->id_actividade ?>" data-inicio="<?php echo $actividade->data_inicio ?>" data-fim="<?php echo $actividade->data_fim ?>" data-nome="<?php echo $actividade->nome_actividade ?>" data-local="<?php echo $actividade->local ?>" class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i> Editar </a> -->
                                           <a href="<?= base_url('editar_actividade/' . $actividade->id_actividade);?>" data-inicio="<?php echo $actividade->data_inicio ?>" data-fim="<?php echo $actividade->data_fim ?>" data-nome="<?php echo $actividade->nome_actividade ?>" data-local="<?php echo $actividade->local ?>" class="btn btn-sm btn-primary width-62 m-r-2"><i class="fa fa-edit"></i></a>
                                           <a href="<?= base_url('ExcluirActividade/' . $actividade->id_actividade)?>" data-confirm-actividade="<?php echo $actividade->id_actividade ?>" class="btn btn-sm btn-danger width-65"><i class="fa fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                   <?php endforeach;?>
                                </tbody>
                  
                </table>
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
          <!-- </div> -->
                            </div>
                    </div>
                </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>