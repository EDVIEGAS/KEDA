<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Compose</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Compose</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="row text-sm">
        <div class="col-md-3">
          <a href="<?php echo base_url("criarMensagem"); ?>" class="btn btn-primary btn-block mb-3">Compose</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="<?= base_url("caixaEntrada"); ?>" class="nav-link">
                    <i class="fas fa-inbox"></i> Recebidas
                    <span class="badge bg-primary float-right navbar-badge345"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url("caixaSaida"); ?>" class="nav-link">
                    <i class="far fa-envelope"></i> Enviadas
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-trash-alt"></i> Lixo
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Caixa de Entrada</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <!-- <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>

                </div> -->
                <!-- /.float-right -->
              </div>
              <?php
        			 function data6($data){
        				$ano = explode(" ",$data);
        				$ano2 = explode("-",$ano[0]);
        				return $ano2[2] ."-". $ano2[1] ."-". $ano2[0];
        			 }
        			?>
              <?php
                function getTimeNotification($data){

                  $Start = date(data6($data));

                  $Now = date('Y-m-d');

                  if(strtotime($Start) == strtotime($Now)){

                    $dateStart = new \DateTime($data);
                    $dateNow = new \DateTime(date('Y-m-d H:i'));

                    $dateDiff = $dateStart->diff($dateNow);

                    $result = $dateDiff->i . ' min';

                    return $result;

                  }else{
                    $dateStart = new \DateTime($data);
                    $dateNow = new \DateTime(date('Y-m-d H:i'));

                    $dateDiff = $dateStart->diff($dateNow);

                    $result = $dateDiff->i;

                    return $result;
                  }
                }
              ?>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped table-sm">
                  <tbody>

                    <?php foreach ($caixaEntrada as $caixa): ?>
                      <tr>
                        <td>
                          <div class="icheck-primary">
                            <input type="checkbox" value="" id="check1">
                            <label for="check1"></label>
                          </div>
                        </td>
                        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                        <td class="mailbox-name"><a href="#" data_idcaixa="<?php echo $caixa->id ?>"><?php echo $caixa->nome ?></a></td>
                        <td class="mailbox-subject"><b><?php echo $caixa->message ?></b> - Trying to find a solution to this problem...
                        </td>
                        <td class="mailbox-attachment"></td>
                        <td class="mailbox-date"><?php echo getTimeNotification($caixa->created_at); ?></td>
                      </tr>

                    <?php endforeach; ?>

                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                  <i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <!-- <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>

                </div> -->
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
