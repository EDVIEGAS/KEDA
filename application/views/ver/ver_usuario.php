<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil de Usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <span id="conteudo2"></span>
              <?php
                if($this->session->flashdata('sucesso') != NULL):
                    echo $this->session->flashdata('sucesso');
                endif;
              ?>
          </div>
          <div class="col-md-3">
          <?= form_open('editarDados', array('method'=>"POST", 'name'=>"form-wizard", 'class'=>"form-control-with-bg", 'enctype'=>"multipart/form-data"));?>
            <!-- Profile Image -->
            <div class="card card-primary card-outline" style="border-top:none">
              <div class="card-body box-profile">
                <div class="text-center">
                <?php if($usuario[0]->imagem != null){ ?>
                    <img id="125" class="profile-user-img1 img-fluid" src="<?= base_url('uploads/product/' . $usuario[0]->imagem);?>" style="height:16.1rem; width:14.1rem">
                    <?php }else{ ?>
                    <img id="125" class="profile-user-img1 img-fluid" src="<?= base_url('assets/images/medium.png')?>" style="height:16.1rem; width:14.1rem">
                    <?php } ?>
                </div>

                <h3 class="profile-username text-center"><?php echo $usuario[0]->nome?></h3>

                <p class="text-muted text-center"><?php echo $usuario[0]->nome_role;?></p>

              
                <a href="#" class="btn btn-primary btn-block" id='trocarfotoUsuario55'><b>Editar Foto</b></a>
              </div>
              <div style="display:none">
                <input type="file" name="arquivoFotoUsuario" id="arquivoFotoUsuario" class="rounded mx-auto d-block form-control form-control-sm" onchange="PreviewImagemUsuario2()">
              </div>
              <!-- /.card-body -->
            </div>
           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Dados Pessoas</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Alterar Senha</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"></a></li>
                </ul>
              </div><!-- /.card-header -->
              
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <!-- <form class="form-horizontal"> -->
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="idAtleta" id="idAtleta" value="<?= $usuario[0]->id_usuario;?>" hidden>
                          <?= form_input('nome_usuario', $usuario[0]->nome, array('placeholder'=>"Nome Completo", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm"));?>
                          <span class="text-danger"><?php echo form_error('nome_usuario');?></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nome de utilizador</label>
                        <div class="col-sm-10">
                        <?= form_input('Utilizador', $usuario[0]->username, array('placeholder'=>"Nome Completo", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm", 'id' => "Utilizador"));
                                            ?>
                        <span class="text-danger"><?php echo form_error('Utilizador');?></span>
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger"><i class="fas fa-sync-alt"></i> Atualizar</button>
                        </div>
                      </div> -->
                  <!-- </form> -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane " id="timeline">
                    <!-- The timeline -->
                    <!-- <form class="form-horizontal"> -->
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                          <?= form_input('senha', $usuario[0]->senha, array('placeholder'=>"Nome Completo", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm", 'id' => "bilhete" , 'disabled'=>"true"));?>
                          <span class="text-danger"><?=form_error('senha');?></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nova Senha</label>
                        <div class="col-sm-10">
                        <?= form_input('nova_senha1', set_value('nova_senha1'), array('placeholder'=>"Nova Password", 'type' => "password" , 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm", 'id' => "bilhete"));
                        ?><span class="text-danger"><?=form_error('nova_senha1');?></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Confirmar Senha</label>
                        <div class="col-sm-10">
                          <?= form_input('nova_senha2', set_value('nova_senha2'), array('placeholder'=>"Confirmar Password", 'data-parsley-group'=>"step-1", 'data-parsley-required'=>"true", 'class'=>"form-control form-control-sm", 'id' => "bilhete"));?>
                          <span class="text-danger"><?=form_error('nova_senha2');?></span>
                        </div>
                      </div>
                      
                  <!-- </form> -->
                  </div>
                  <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger"><i class="fas fa-sync-alt"></i> Atualizar</button>
                        </div>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
             
            </div>
            <!-- /.nav-tabs-custom -->
            <?= form_close();?>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->