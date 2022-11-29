<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
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

    <!-- Main content -->

<section class="content">
<div class="container-fluid">
        
        <div class="row">
            <div class="col-md-10" style="position:relative;left:50%;transform:translateX(-50%)">
            
            <div class="card card-danger">
              <div class="card-body" style="padding-bottom:7.25rem">
              <div class="box-header with-border m-b-2">
            <!-- <div class="box-tools">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
            </div> -->
            </div>
                <!-- Date dd/mm/yyyy -->
                <div class="col-md-10 text-center pb-4">
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
                        <!-- <a class="btn btn-primary btn-block width-71" href="<?= site_url('orgao_social/listarOrgaoSocial');?>" style="margin-top:6px;margin-bottom: 18px;"><i class="fa fa-list"></i> Listar Orgaos Sociais </a> -->
                        <div class="">
              <!-- Add the bg color to the header using any of the bg-* classes -->
                          <div class="widget-user-header text-center">
                            <h3 class="widget-user-username">AINDA NAO FORAM DEFINIDOS OS ORGAOS SOCIAIS</h3>
                            <h5 class="widget-user-desc"></h5>
                          </div>
                          <div class="widget-user-image pb-5 text-center pt-5">
                            <!-- <a class="btn btn-primary btn-block width-71" href="<?= site_url('orgao_social/listarOrgaoSocial');?>" style="margin-top:6px;margin-bottom: 18px;"><i class="fa fa-list"></i> Listar Orgaos Sociais </a> -->
                           
                              <i class="fa fa-database fa-8x"></i>
                           
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
