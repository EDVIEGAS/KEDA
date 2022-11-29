<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuario</h1>
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
        <div class="box-tools col-md-1 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
        </div>
        <div class="row ml-5 mr-5">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline" style="border-top:0px">
              <div class="card-body box-profile" style="padding-top: 18px;padding-right:4px;padding-left:4px">
              
                <div id="text-center5" class="text-center">
                    <?php if($verUsuario[0]->imagem != null){ ?>
                    <img class="profile-user-img img-fluid p-0" src="<?= base_url('uploads/product/' . $verUsuario[0]->imagem);?>" style="height:16.1rem; width:14.1rem;border:1px solid #adb5bd">
                    <?php }else{ ?>
                    <img class="profile-user-img img-fluid p-0" src="<?= base_url('assets/images/medium.png')?>" style="height:16.1rem; width:14.1rem;border:1px solid #adb5bd">
                    <?php } ?>
                </div>

                <h3 class="profile-username text-center"><?php echo $verUsuario[0]->nome?></h3>

                <p class="text-muted text-center"><?php echo $verUsuario[0]->nome_role?></p>

                <?php if($verUsuario[0]->status == 'Activo'){?>
                    <div class="btn btn-success" style="display: block">Activo</div>
                <?php }else{ ?>
				    <div class='btn btn-danger'>Nao Activo</div>
				<?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
           <div class="col-md-9">
            <div class="card">
              
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                         
                                <div class="table-primary p-1"><p class="lead mb-0"><strong> Dados de Utilizador </strong</p></div>
                                  <div class="table-responsive">
                                  <div class="card-body bg-blue-light" id="person_user">
                                  
                                    <div class="pull-right">
                                    <a data-disable-with="<span class=&quot;fa fa-spinner fa-spin fa-fw&quot;></span>" class=" link-to-edit" data-remote="true" href="https://app.dojoweb.com.br/people/people/2/user/edit"><span class="fa fa-pencil fa-fw"></span></a>
                                    </div>
                                    <!-- <p><span class="fa fa-user fa-fw"></span> <span class="icon-text">Dados de Acesso</span></p> -->
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="card-text text-muted mb-2">Nome</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="card-text mb-2"><?php echo $verUsuario[0]->nome;?></p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="card-text text-muted mb-2">Nome de Utilizador</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="card-text mb-2"><?php echo $verUsuario[0]->username;?></p>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="card-text text-muted mb-2">Data de Criacao</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="card-text mb-2"><?= date('d/m/Y', strtotime(strtoupper($verUsuario[0]->data_criacao)));?></p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="card-text text-muted mb-2">Ultimo Login</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="card-text mb-2"><?= date('d/m/Y', strtotime(strtoupper($verUsuario[0]->dataLogin)));?></p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="card-text text-muted mb-2">Senha</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="card-text mb-2"><?php echo $verUsuario[0]->senha;?></p>
                                      </div>
                                    </div>
                                   
                                    <!-- <table class="table">
                                      <tbody>
                                        
                        
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px">Data de Login</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px"><?= date('d/m/Y', strtotime(strtoupper($verUsuario[0]->dataLogin)));?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px">Senha</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px"><?php echo $verUsuario[0]->senha;?></td>
                                        </tr>
                                      </tbody>
                              
                                    </table> -->
                                  </div>
                  </div>
                  
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          
        </div>
      </div>
</section>
