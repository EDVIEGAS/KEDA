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
            <!-- <div class="col-2 mb-3 mt-0 ml-3" style="padding-right:4.5px">
              <a class="btn btn-primary btn-block btn-sm" href="<?= site_url('mostrarMandatoHistorico');?>"><i class="fa fa-briefcase"></i> Ver Historico </a>
            </div> -->
          <h3 class="text-center">MANDATOS ANTERIORES</h3>

        </div>
            
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle table-sm">
                  <thead>
                  <tr>
                    <th>Inicio Mandato</th>
                    <th>Fim Mandato</th>
                    <th class="text-center">More</th>
                  </tr>
                  </thead>
                  <?php foreach($Mandatos2 as $Mandatos2){?>
                  <tbody>
                  <tr>
                    <td>
                        
                        <?= date('d/m/Y', strtotime(strtoupper($Mandatos2->data_inicio_mandato)));?>
                    </td>
                    <td>
                       
                        <?= date('d/m/Y', strtotime(strtoupper($Mandatos2->data_fim_mandato)));?>
                    </td>
                    
                    <td class="text-center">
                      <a href="<?= base_url('listarMandatoOrgaoMembro/' . $Mandatos2->id_mandato);?>" class="text-muted">
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                  <?php }?>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
     
      <!-- /.card -->
</section>
