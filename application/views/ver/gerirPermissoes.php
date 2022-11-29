<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listar Permissoes</h1>
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

<section class="content" style="padding-right: 9.5rem;padding-left: 9.5rem;">

      <!-- Default box -->
      <div class="card border">
        <div class="card-header">

          <div class="col-md-12" style="padding-right: 190px;padding-left: 190px;">
                    <label class="col-form-label text-center">Perfil de Usuario<span class="text-danger"></span></label>

                    <select class="form-control form-control-sm" name="role" id="role">
                        <option value="0"> Seleccione o tipo de usuario</option>
                        <?php foreach ($role as $role):?>
                            <option value="<?= $role->id?>" id="role22"><?= $role->nome_role?></option>
                        <?php endforeach; ?>
                    </select>
          </div>
        </div>

        <div id="Beforemensagem"></div>
        <div id="callback3" class="text-center" style="padding-bottom: 20px"></div>
        <div class="card-body p-3" id="corpoPermissao908" hidden>


                    <div class="row d-flex">
                        <?php foreach($menuPerm as $menuPerm) {?>
                            <div class="col-12 col-sm-4 col-md-4 d-flex" style="max-width: 24.333%;padding-left:54.4px">

                                <div class="card card-primary collapsed-card bg-light d-flex flex-fill meu234" id="<?= $menuPerm['id'];?>">
                                    <div class="card-header p-1 card-header-sm">
                                        <span class="card-title text-sm"><?= $menuPerm['nome_menu'];?></span>

                                        <!-- <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div> -->
                                        <!-- /.card-tools -->
                                    </div>
                                <!-- /.card-header -->
                                    <div class="card-body border" style="display: block;">
                                        <div class="col">
                                            <?php foreach($menuPerm['submenus'] as $submenu) {?>
                                                <div class="col-12" style="">

                                                <?php if(count($submenu['camada3s']) != 0){?>
                                                    <div class="card card-primary collapsed-card bg-light d-flex flex-fill meu234" id="<?= $menuPerm['id'];?><?= $submenu['id_submenu']?>">
                                                        <div class="card-header p-1 text-sm">
                                                            <span class="card-title text-sm"><?= $submenu['nome_sub_menu']?></span>

                                                            <!-- <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                                </button>
                                                            </div> -->
                                                            <!-- /.card-tools -->
                                                        </div>
                                                    <!-- /.card-header -->
                                                        <div class="card-body" style="display: block;">
                                                                <?php foreach($submenu['camada3s'] as $camada) {?>
                                                                    <div class="row d-flex">
                                                                        <span class="text-sm" ><?= $camada['descricao']?></span>

                                                                        <span style="margin-top: 8px;margin-left: 8px">
                                                                            <label class="label834" id="label834" idmenu1="<?= $camada['id_submenu_submenusubmenu'];?>" style="margin-top:-6px;background: #dee2e6; position: absolute;width: 17px;height: 17px;content: '';border-radius: 50%;" for="<?= $camada['id_submenu_submenusubmenu'];?><?= $camada['id_submenu'];?>control"></label>
                                                                            <input type="checkbox" class="input checkSub1256" idmenu="<?= $menuPerm['id'];?>" idsubmenu="<?= $camada['id_submenu'];?>" idsubmenusubmenu="<?= $camada['id_submenu_submenusubmenu'];?>" id="<?= $camada['id_submenu_submenusubmenu'];?><?= $camada['id_submenu'];?>control" name="<?= $camada['id_submenu_submenusubmenu'];?>controle[]" value="<?= $camada['id_submenu'];?>" hidden>
                                                                        </span>

                                                                    </div>
                                                                <?php }?>
                                                        </div>
                                                    <!-- /.card-body -->
                                                    </div>
                                                <?php }else{?>

                                                    <div class="row d-flex">
                                                        <span class="text-sm">
                                                            <?= $submenu['nome_sub_menu']?>
                                                        </span>

                                                        <span>
                                                            <label class="label834" id="label34" idmenu1="7" style="margin-top:-6px;background: red; position: absolute;width: 17px;height: 17px;content: '';border-radius: 50%;bottom: -7px;" for="<?= $submenu['id_menu'];?><?= $submenu['id_submenu'];?>" ></label>
                                                            <input type="checkbox" class="input checkSub1256" idmenu="<?= $menuPerm['id'];?>" idsubmenu="<?= $submenu['id_submenu'];?>" id="<?= $submenu['id_menu'];?><?= $submenu['id_submenu'];?>" name="<?= $submenu['id_submenu'];?>controle[]" value="<?= $submenu['id_menu'];?>" hidden>
                                                        </span>
                                                    </div>


                                                <?php }?>
                                                    <!-- /.card -->
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                <!-- /.card-body -->
                                </div>

                                <!-- /.card -->
                            </div>
                        <?php }?>
                    </div>



        </div>
        <div class="col-sm-12 p-3">
          <h1 class="text-inverse"></h1>
          <button type="submit" class="btn btn-success hide" id="btnn456"  name="enviar-formulario"><i class="fa fa-save"></i> Registar</button>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
