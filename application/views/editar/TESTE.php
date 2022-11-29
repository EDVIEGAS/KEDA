<?php foreach ($menus as $menu) { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon <?php echo ($menu['icone'])?>"></i>
              <p>
                <?php echo ($menu['nome_menu'])?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php foreach($menu['submenus'] as $submenu){?>
              <?php if($submenu['tipo'] == 0){?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                <?php echo($submenu['nome_sub_menu'])?>
                                <i class="right fas fa-angle-left"></i>
                                </p>
                        </a>
                    
                        <ul class="nav nav-treeview" style="display: none;">
                        <?php if($submenu['controlador'] == null){?>
                          <li class="nav-item">
                              <a href="<?php echo base_url($submenu['controlador']);?>" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Novo</p>
                              </a>
                          </li>
                        <?php }else{?>
                          
                        <?php }?>
                          <li class="nav-item">
                              <a href="<?= base_url($submenu['accao']);?>" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Listar</p>
                              </a>
                          </li>
                        </ul>
                    
                    </li>
              <?php }else{?>
                <li class="nav-item">
                    <a href="<?= base_url($submenu['accao']);?>" class="nav-link" id="<?= $submenu['modal'] ?>" >
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                <?php echo($submenu['nome_sub_menu'])?>
                                </p>
                    </a>
                </li>
              <?php } ?>
            <?php } ?>
            </ul>
          </li>
        <?php } ?>
