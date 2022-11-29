<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('')?>"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <?php foreach ($this->menus as $menu){?>
                <?php if(count($menu['submenus'])>0): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo ($menu['nome_menu'])?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach($menu['submenus'] as $submenu){?>
                                <li>
                                    <a href="#"><?php echo $submenu->nome_menu?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </li>
                <?php else:{?>
                    <li>
                        <a href="#"><?php echo $submenu->nome_menu?></a>
                    </li>
                <?php }?>
            <?php }?>
        </ul>
    </div>
</nav>
