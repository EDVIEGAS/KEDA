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
      <div class="card">
        <div class="card-header">
         
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
          <div class="col-md-12" style="padding-right: 190px;padding-left: 190px;">
                    <label class="col-form-label text-center">Perfil de Usuario<span class="text-danger"></span></label>

                    <select class="form-control" name="role" id="role">
                        <option> Seleccione o tipo de usuario</option>
                        <?php foreach ($role as $role):?>
                            <option value="<?= $role->id?>" id="role22"><?= $role->nome_role?></option>
                        <?php endforeach; ?>
                    </select>
          </div>
        </div>
        
        <div id="Beforemensagem"></div>
        <div id="callback3" class="text-center" style="padding-bottom: 20px"></div>
        <div class="card-body p-0" id="corpoPermissao908" hidden>
          <table class="table table-striped projects table-sm">
              
              <tbody>
              <?php foreach($menuPerm as $menuPerm) {?>
                  <tr>
                     
                      <td class="f-s-600 text-inverse" id="menu11">
                      <label id="label344" idmenu2="<?= $menuPerm['id_menu'];?>" style="margin-top:-6px;background: #dee2e6; position: absolute;width: 16px;height: 16px;" for="<?= $menuPerm['id_menu'];?>control"></label>
                      <input type="checkbox" id_menu="idmenu" id="<?= $menuPerm['id_menu'];?>control" class="menu1" name="teste[]" value="<?= $menuPerm['id_menu'];?>" hidden>
                      </td>       
                      
                      <td>
                          <a>
                            <strong><?= $menuPerm['nome_menu'];?></strong>
                          </a>
                      </td>
                      
                      <?php foreach($menuPerm['submenus'] as $submenu) {?>
                          <td class="text-center" ><?= $submenu['nome_sub_menu']?></td>
                          <td class="text-center">
                            <label id="label34" idmenu1="<?= $submenu['id_menu'];?>" style="margin-top:-6px;background: #dee2e6; position: absolute;width: 17px;height: 17px;content: '';border-radius: 50%;" for="<?= $submenu['id_menu'];?><?= $submenu['id_submenu'];?>"></label>
                            <input type="checkbox" class="input checkSub12" idmenu="<?= $submenu['id_menu'];?>" idsubmenu="<?= $submenu['id_submenu'];?>" id="<?= $submenu['id_menu'];?><?= $submenu['id_submenu'];?>" name="<?= $submenu['id_menu'];?>controle[]" value="<?= $submenu['id_submenu'];?>" hidden>
                          </td>
                          <!-- <?php foreach($submenu['camada3s'] as $camada) {?>
                            <td class="text-center" >
                              <label id="label34" idmenu1="<?= $camada['id_submenusubmenu'];?>" style="margin-top:-6px;background: #dee2e6; position: absolute;width: 17px;height: 17px;content: '';border-radius: 50%;" for="<?= $camada['id_submenusubmenu'];?><?= $camada['id_submenu'];?>"></label>
                              <input type="checkbox" class="input checkSub12" idmenu="<?= $camada['id_submenusubmenu'];?>" idsubmenu="<?= $camada['id_submenu'];?>" id="<?= $camada['id_submenusubmenu'];?><?= $camada['id_submenu'];?>" name="<?= $camada['id_submenusubmenu'];?>controle[]" value="<?= $camada['id_submenu'];?>" hidden>
                            </td>
                          <?php }?> -->
                      <?php }?>                 
                  </tr>
              <?php }?>
              </tbody>

          </table>
        </div>
        <div class="col-sm-12 p-3">
          <h1 class="text-inverse"></h1>
          <button type="submit" class="btn btn-white hide" id="btnn456"  name="enviar-formulario"><i class="fa fa-save"></i> Registar</button>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

