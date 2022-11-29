<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content pb-5">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="box-tools col-1 mt-0 ml-3 mb-3">
              <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div>
            <div class="col-md-12 p-3">
              <?php
                if($this->session->flashdata('sucesso') != NULL):
                    echo $this->session->flashdata('sucesso');
                endif;
              ?>
            </div>
            <div class="col-1 mb-3 mt-0 ml-3" style="padding-right:4.5px">
              <a class="btn btn-primary btn-block btn-sm" href="<?= site_url('mostrarMandatoHistorico');?>"><i class="fa fa-briefcase"></i> Ver Historico </a>
            </div>
          <h3 class="text-center">MANDATO ATUAL</h3>

        </div>

        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>

                      <th style="width: 30%">
                          Inicio do Mandato
                      </th>
                      <th style="width: 20%">
                          Fim do Mandato
                      </th>

                      <!-- <th style="width: 8%" class="text-center">
                          Status
                      </th> -->
                      <th style="width: 30%" class="text-center">
                          Accoes
                      </th>
                  </tr>
              </thead>
              <?php foreach($Mandatos as $Mandato){ ?>
              <tbody>
                  <tr>

                      <td>
                          <a>
                          <?= date('d/m/Y', strtotime(strtoupper($Mandato->data_inicio_mandato)));?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?= date('d/m/Y', strtotime(strtoupper($Mandato->data_fim_mandato)));?>
                          </a>
                      </td>

                      <!-- <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td> -->
                      <td class="project-actions text-center">
                          <a class="btn btn-primary btn-sm" href="<?= base_url('verMandatoOrgao/' . $Mandato->id_mandato)?>">
                              <i class="fas fa-eye">
                              </i>
                              Ver
                          </a>

                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-edit"></i>
                              editar
                          </a>
                      </td>
                  </tr>
              </tbody>
              <?php } ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</section>
