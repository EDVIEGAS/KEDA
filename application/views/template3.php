<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url()?>assets/css/css_login.css">

  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fullcalendar-bootstrap/main.min.css">
  
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



</head>
<body class="hold-transition sidebar-mini text-sm">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('dashboard');?>" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a> 
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can<?= base_url()?>assets.</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url()?>assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url()?>assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="<?= base_url('uploads/product/' . $this->session->userdata('imagem'))?>" class="user-image img-circle elevation-2" alt="User Image" id="imagemMensagem77" data_variavel_control="<?= $this->session->userdata('ctrl');?>">
          <span class="d-none d-md-inline" id="imagemMensagem88"><?php echo $this->session->userdata('role');?></span>
          
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?= base_url('uploads/product/' . $this->session->userdata('imagem'))?>" class="img-circle elevation-2" alt="User Image">

            <p>
              <?= $this->session->userdata('nome');?> - <?= $this->session->userdata('role')?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
          </li> -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?= base_url('mostrarUsuario/' . $this->session->userdata('id_usuario'));?>" class="btn btn-default btn-flat">Perfil</a>
            <a href="<?= base_url('sair');?>" class="btn btn-default btn-flat float-right" id="sairdoSistema">Sair</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>assets/index3.html" class="brand-link">
      <img src="<?=base_url()?>assets/images/Image00001.jpg"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> KEDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('uploads/product/' . $this->session->userdata('imagem'))?>" class="img-circle elevation-2 height-160 widht-160" alt="User Image" style="height:2.1rem;width:2.1rem">
        </div>
        <div class="info" id="nomeRole77">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nome');?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Cadastros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Atleta
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('novo_atleta');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listar_atleta');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Mestre
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('novoMestre');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listaMestre')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Arbitro
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('cada_Arbitro');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listaArbitro');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Academia
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('novaAcademia');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listarAcademia');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Usuario
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="#" class="nav-link" id="UsuarioNovo2347">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listar_usuario');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    perfil
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="#" class="nav-link" id="addPerfil345">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listar_role')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Permissoes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('cada_Arbitro');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('verPermissoes');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>      
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Campeonatos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Provincial
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('campeonatoNovoProvincial');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listar_atleta');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li> -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Nacional
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('novoMestre');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listaMestre')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Africano
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('cada_Arbitro');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('verPermissoes');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Mundial
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('cada_Arbitro');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('verPermissoes');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
               Associacao
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('listarAssociacao')?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuracoes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Atleta
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('novo_atleta');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listar_atleta');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Mestre
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('novoMestre');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listaMestre')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Arbitro
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('cada_Arbitro');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listaArbitro');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Academia
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="<?= base_url('novaAcademia');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Novo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('listarAcademia');?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Listar</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>
               Backup do Banco
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('backup');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fazer Backup</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Actividade
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" id="actividade555">
                  <i class="far fa-circle nav-icon"></i>
                  <p>novo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('listaAtividade')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>listar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>
                Orgao Social
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" id="orgaoSocialModal">
                  <i class="far fa-circle nav-icon"></i>
                  <p>novo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('mostrarMandato')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <?php echo $contents; ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer text-sm">
    <div class="float-right d-none d-sm-block">
      <b>Versao</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Edson Viegas</a>.</strong> Todos Direitos Reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<div class="modal fade" id="modal-lg56748">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-sm"><i class="fa fa-edit"></i> CASDASTRAR USUARIO</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" id="AddUsuario45692" enctype="multipart/form-data">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                <div class="col-md-12" id="conteudoCarregar555">
                          <div class="col-md-12" id="conteudoCarregar5555" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                                <div class="form-row">
                                    <div class="form-group col-sm-8">
                                        <label class="text-nowrap">Nome Completo</label>
                                        <input name="nome_completo" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_usuario" value="">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-nowrap">Nome de Utilizador</label>
                                        <input name="nome_usuario" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_usuario_user" value="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label class="text-nowrap">Senha</label>
                                        <input name="senha" type="password" placeholder="" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="text-nowrap">Confirmar Senha</label>
                                        <input name="confirmar_senha" type="password" placeholder="" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                      <label class="col-form-label text-md-left">Perfil<span class="text-danger"></span></label>
                                      <select id="perfilUsuario-2341" class="form-control form-control-sm" name="perfil">
                                      </select>
                                    </div>
                                      
                                    <div class="form-group col-sm-6">
                                      <label class="col-form-label text-md-left">status<span class="text-danger"></span></label>
                                      <select id="status" class="form-control form-control-sm" name="status">
                                          <option value="Activo">Activo</option>
                                          <option value="Nao Activo">Nao Activo</option>
                                      </select>
                                    </div>
                                <div>

                                <div class="col-md-4" style="left: 67%;margin-left: 50px;position: relative;top: 6px;">
                                      <img id="trocarfotoUsuario55" src="<?= base_url('assets/images/3.jpg')?>" width="300" height="300" class="img-thumbnail rounded mx-auto d-block p-0"/><br>
                                      <div hidden>
                                          <input type="file" name="arquivoFotoUsuario" id="arquivoFotoUsuario" class="rounded mx-auto d-block form-control hide" onchange="PreviewImagemUsuario2()">
                                      </div>
                                </div>

                                <div class="col-5" style="padding-right: 0.5px">
                                    <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                                </div>
                          </div>
                </div>
              </div>
            </form>
            </div>
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-lg1231">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-sm"><i class="fa fa-edit"></i> EDITAR USUARIO</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" id="AddActividade777">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregar555">
                              <div class="col-md-12" id="conteudoCarregar5555" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                              <div class="form-row">
                                  <div class="form-group col-sm-8">
                                      <label class="text-nowrap">Nome Completo</label>
                                      <input name="nome_completo" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_usuario" value="">
                                  </div>
                                  <div class="form-group col-sm-4">
                                      <label class="text-nowrap">Nome de Utilizador</label>
                                      <input name="nome_usuario" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_usuario_user" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Nova senha</label>
                                      <input name="nome_local" type="password" placeholder="****************" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Confirmar Senha</label>
                                      <input name="nome_local" type="password" placeholder="****************" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-left">Perfil<span class="text-danger"></span></label>
                                    <select id="perfilUsuario" class="form-control form-control-sm" name="perfil">
                                          <option><div id="perfi12312"></div></option>
                                          <option value="">asdasdasdasd</option>
                                    </select>
                                  </div>
                                     
                                  <div class="form-group col-sm-6">
                                    <label class="col-form-label text-md-left">status<span class="text-danger"></span></label>
                                    <select id="provincia" class="form-control form-control-sm" name="provincia">
                                        <option value="">Activo</option>
                                        <option value="">Nao Activo</option>
                                    </select>
                                  </div>
                              <div>

                              <div class="col-5" style="padding-right: 0.5px">
                                  <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                              </div>
                          </div>
                          </div>
              </div>
            </form>
            </div>
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>

<div class="modal fade text-sm pb-5" id="modal-default-orgao">
        <div class="modal-dialog">
          <div class="modal-content">
           
              <h4 class="modal-title p-3 text-sm"><i class="fas fa-user-alt"></i><span id="tituloModaltroca77"> ADICIONAR MANDATO</span></h4>
            <form method="post" id="insertOrgao">
            <div id="bodyMensagem89" class="modal-body m-3 pt-2 pb-5">
                <div class="row">
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-6">
                        <label class="exampleInputEmail1">Inicio de Mandato</label>
                        <input type="text" name="data1" class="form-control " placeholder="04/1/2014" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                        <div class="form-group col-sm-6">
                        <label class="exampleInputEmail1">Fim de Mandato</label>
                        <input type="text" name="data2" class="form-control " placeholder="04/1/2014" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-danger" id="dataComfirmaTrocar129">CRIAR</button>
                <button type="submit" class="btn btn-default pull-right" data-dismiss="modal"><i class="fas fa-ban"></i> Nao</button>
                </div>
            </div>
            </form>
          </div>
         
        </div>   
      </div>

<div class="modal fade text-sm pb-5 hide" id="modal-default-actividade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> ADICIONAR ACTIVIDADE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="AddActividade777">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregar555">
                              <div class="col-md-12" id="conteudoCarregar5555" style="padding-left: 0.5px;padding-right: 0.5px;"></div>                       
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Nome da Actividade</label>
                                      <input name="nome_actividade" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Local da Actividade</label>
                                      <input name="nome_local" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id" value="">
                                  </div>
                              </div>
                              
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label>Data de Inicio</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" name="data_inicio">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label>Data de Fim</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" name="data_fim">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                              <div>

                              <div class="col-md-4" style="padding-right: 0.5px">
                                  <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                              </div>
                          </div>
                          </div>
              </div>
            </form>
          </div>
        </div>   
      </div>
</div>

<div class="modal fade text-sm pb-5 hide" id="modal-default-actividade1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-sm"><i class="fas fa-plus"></i> EDITAR ACTIVIDADE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="AddActividade999">
              <div id="bodyMensagem89" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregar555">
                              <div class="col-md-12" id="conteudoCarregar5555" style="padding-left: 0.5px;padding-right: 0.5px;"></div>
                              <input name="id_actividade" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="id_actividade1" value="" style="display:none">                        
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Nome da Actividade</label>
                                      <input name="nome_actividade" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="nome_completo_id1" value="">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-12">
                                      <label class="text-nowrap">Local da Actividade</label>
                                      <input name="local" placeholder="Escrever aqui" data-parsley-group="step-1" data-parsley-required="true" class="form-control" id="local_id1" value="">
                                  </div>
                              </div>
                              
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label>Data de Inicio</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" name="data_inicio" value="">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label>Data de Fim</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" name="data_fim" id="data_fim" value="">
                                      </div>
                                      <!-- /.input group -->
                                  </div>
                              <div>

                              <div class="col-md-4" style="padding-right: 0.5px">
                                  <button type="submit" class="btn btn-primary" name="enviar-formulario"><i class="fa fa-save"></i> Cadastrar </button>
                              </div>
                          </div>
                          </div>
              </div>
            </form>
          </div>
        </div>   
      </div>
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App2.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App3.js"></script>

<script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url()?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?= base_url()?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url()?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="<?= base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url()?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    //-------------------------------------------------

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  });
</script>
</body>
</html>
