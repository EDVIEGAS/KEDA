<?php
  $this->load->model("send_notificationModel");
?>
<!DOCTYPE html>
<html lang="en">
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

  <link rel="stylesheet" href="http://localhost/KEDA/assets/css/css_login.css">

  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/daterangepicker/daterangepicker.css">

  <link href='<?= base_url()?>assets/fullcalendar/packages/core/main.css' rel='stylesheet' />
  <link href='<?= base_url()?>assets/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
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
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/toastr/toastr.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url()?>assets/plugins/plugins/summernote/summernote-bs4.min.css"> -->


  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/geralCss.css">

  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/data/countries2.js"></script>


  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

<style>




/* body {

    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 12px;
  } */

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }


      .tela21 {
          background-image: url('http://localhost/KEDA/assets/images/QWS21.jpg');
          height: none;
          max-width: 100%;
          border-radius: 10px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          color: rgb(231, 231, 231);
          font-weight: 500;
          font-size: larger;
          /* text-shadow: 1px 1px white, 1px 1px #333; */
          margin-bottom: 22px;
      }

      .tela77 img {
          opacity: 0.7;
          padding-right: 6px;
      }

      .tela212 {
          padding: 14px;
          display: flex;
          flex-direction: row;
          flex-grow: 1;
          line-height:1;
      }

      .tela99 {
          padding-bottom: 0px;
      }

      .tela66 {
          width: 70%;
      }

      .tela55 {
          margin-left: 20px;
          display: flex;
          flex-direction: column;
          line-height:inherit;
      }

      .tela55 span {
          text-align: center;
          font-size: 6px;
          padding-top: 0px;
      }

      .tela98 {
          display: flex;
          flex-direction: row;
          flex-grow: 1;
      }

      .a2 {
          font-size: 6px;
      }

      .a3 {
          font-size: 6px;
      }

      .u12 {
          display: flex;
      }

      .u12 {
          font-size: 6px;
          justify-content: space-between;
          padding-bottom: 0px;
      }

      .tela66 hr {
          color: rgb(231, 231, 231);
          margin-bottom:6px;
          margin-top:6px;
      }

      .s12 {
          font-size: 4px;
          padding-top: 0px;
      }

      .tela879 {
          display: flex;
          padding-bottom: 0px;
      }

      .tela47 {
          font-size: 8px;
      }

      .aa34 {
          padding-top: 8px;
          display:flex;
          flex-direction:column;
          padding-bottom:8px;
      }

      .aa345 span {
          font-size: 6px;
      }

      .aa345 {
          padding-bottom: 0px;
      }

      .logomarca34 {
          position: absolute;
          top: 50%;
          left: 50%;
          z-index: -1;
          transform: translate(-50%, -50%);
          opacity: 0.3;
      }

      /**---------------------------------------------------------------------------------------------------------------------- */


      #conteiner3 {
          background-color: rgb(59, 59, 59);
          height: 25px;
          width: 120px;
          position: relative;
          border-radius:2px;
      }

      .entrada2 {
          background-color: white;
          height: 100%;
          width: 30px;
          /* position: absolute;
          left: 347px; */
      }

        .entrada3 {
            background-color: white;
            height: 100%;
            width: 30px;
        }

        .entrada4 {
            background-color: white;
            height: 100%;
            width: 5px;
            margin-left: 3px;
            margin-right: 2px;
            box-shadow: 0 0 4px #a5a5a5;
            z-index: -1;
        }

        .entrada7 {
            /* background-color: black; */
            opacity: 0.7;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 900;

        }

        .entrada7 p {
            font-size: 14px;
            color: rgb(255, 94, 0);
            font-weight: 700;
        }


        /* .entrada7 h5 {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        } */

        .entrada9 {
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0%;
            left: 0%;
            display: flex;
            justify-content: flex-end;
            z-index: 90;
        }

      /*-------------------------------------------------------------------------------------------------------------------------------------------- */

      <?php if($controlMethod == 'Editar'){?>

        .c-loader {
            animation: is-rotating 1s infinite;
            border: 6px solid #e5e5e5;
            border-radius: 50%;
            border-top-color: #b0b0b0;
            height: 34px;
            width: 34px;
        }

        @keyframes is-rotating {
          to {
            transform: rotate(1turn);
          }
        }

        element {
            margin-left: 14px;
            display: block;
        }

        #content_success_msg {
            position: absolute;
            top: -178px;
            left: 21%;
            padding: 4px 15px;
            z-index: 1000;
            border-radius: 0 0 4px 4px;
            opacity: 1.0;
            filter: alpha(opacity=100);
            margin-top: 64px;
        }
        .zoom-newmessage {
            margin-top: 104px !important;
        }
        .hideme {
            display: none;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

      .admin-content {
          padding: 0;
          min-height: 300px;
          position: relative;
      }

      .z-form-row {
          padding: 12px 30px 4px;
          border-bottom: 1px solid #eeeff2;
          position: relative;
      }

      .form-horizontal .zm-form-group {
          margin-left: -15px;
          margin-right: -15px;
          margin-bottom: 15px;
      }

      .profile-info .z-row-action {
          top: 23px;
      }

      .z-row-action .edit, .zr-control-btn, .z-row-action-sip .edit, .z-row-action-sip .delete {
          font-size: 14px;
          line-height: 20px;
          white-space: nowrap;
      }

      a {
          color: #0E71EB;
          text-decoration: none;
          background: transparent;
      }

      .z-form-row .form-horizontal .col-sm-3 {
          max-width: 220px;
      }

      .form-horizontal .control-label {
          text-align: left;
          color: #747487;
          font-size: 14px;
      }

      .form-horizontal .control-label, .form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline {
          padding-top: 7px;
          margin-top: 0;
          margin-bottom: 0;
      }

      .col-sm-3 {
          width: 25%;
      }

      .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
          float: left;
      }

      label {
          font-weight: normal;
      }

      .col-sm-9 {
          width: 75%;
      }

      .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
          position: relative;
          min-height: 1px;
          padding-right: 15px;
          padding-left: 15px;
      }

      .form-horizontal .zm-form-group::after {
          clear: both;
      }
      .form-horizontal .zm-form-group::before, .form-horizontal .zm-form-group::after {
          display: table;
          content: " ";
      }


      element {
          padding-right: 40px;
      }

      .form-horizontal .form-control-static {
          padding-top: 7px;
      }

      .fullName {
          font-weight: bold;
          color: #232333;
          font-size: 24px;
      }

      .form-control-static {
          margin-bottom: 0;
      }

      p {
          line-height: 1.5;
      }

      h4, h5, h6, p {
          font-size: 14px;
      }

      p {
          margin: 0 0 10px;
      }

      .displayName {
          font-size: 16px;
          word-break: break-all;
          color: #747487;
      }

      h4, h5, h6, p {
          font-size: 14px;
      }

      .phoneLabel {
          color: #747487;
          display: inline-block;
          min-width: 150px;
      }

      .form-horizontal .form-group {
          margin-right: -15px;
          margin-left: -15px;
      }

      .form-group {
          margin-bottom: 15px;
      }

      .z-row-action, .z-row-action-sip {
          white-space: nowrap;
          position: absolute;
          top: 19px;
          right: 30px;
      }

      h1:first-child, h2:first-child, h3:first-child, h4:first-child, h5:first-child, h6:first-child {
          margin-top: 0;
      }

      h2 {
          font-size: 18px;
          font-weight: 500;
      }

      .clearfix::before, .clearfix::after, .container::before, .container::after, .container-fluid::before, .container-fluid::after, .row::before, .row::after, .form-horizontal .form-group::before, .form-horizontal .form-group::after, .btn-toolbar::before, .btn-toolbar::after, .btn-group-vertical > .btn-group::before, .btn-group-vertical > .btn-group::after, .nav::before, .nav::after, .navbar::before, .navbar::after, .navbar-header::before, .navbar-header::after, .navbar-collapse::before, .navbar-collapse::after, .pager::before, .pager::after, .panel-body::before, .panel-body::after, .modal-footer::before, .modal-footer::after {
          display: table;
          content: " ";
      }

      .clearfix::after, .container::after, .container-fluid::after, .row::after, .form-horizontal .form-group::after, .btn-toolbar::after, .btn-group-vertical > .btn-group::after, .nav::after, .navbar::after, .navbar-header::after, .navbar-collapse::after, .pager::after, .panel-body::after, .modal-footer::after {
          clear: both;
      }

      ::before, ::after {
          box-sizing: border-box;
      }
    <?php }?>

  </style>
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
      <!-- <li class="nav-item d-none d-sm-inline-block d-sm-inline-block23">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <input type="hidden" id="user-id" value="<?= $this->session->userdata('id_usuario');?>">
    <input type="hidden" id="user-nome" value="<?= $this->session->userdata('nome');?>">
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge navbar-badge345"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right dropdown-menu-rightjhgfd54673">
          <div class="dropdown-menu-right23456">

          </div>
          <a href="<?= base_url("caixaEntrada"); ?>" class="dropdown-item dropdown-footer">Ver todas mensagens</a>
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
        <?php if($this->session->userdata('imagem') == NULL){?>
          <img src="<?=base_url()?>assets/images/Image00001.jpg" class="user-image img-circle elevation-2" alt="User Image" id="imagemMensagem77" data_variavel_control="<?= $this->session->userdata('ctrl');?>">
        <?php }else{?>
          <img src="<?= base_url('uploads/product/' . $this->session->userdata('imagem'))?>" class="user-image img-circle elevation-2" alt="User Image" id="imagemMensagem77" data_variavel_control="<?= $this->session->userdata('ctrl');?>">
        <?php } ?>
          <span class="d-none d-md-inline" id="imagemMensagem88"><?php echo $this->session->userdata('role');?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <!-- User image -->
          <li class="user-header bg-primary">
          <?php if($this->session->userdata('imagem') != NULL){?>
            <img src="<?= base_url('uploads/product/' . $this->session->userdata('imagem'))?>" class="img-circle elevation-2" alt="User Image">
          <?php }else{?>
            <img src="<?=base_url()?>assets/images/Image00001.jpg" class="img-circle elevation-2" alt="User Image">
          <?php } ?>

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
            <a href="<?= base_url('sair');?>" class="btn btn-default btn-flat float-right" id="sairdoSistema">Terminar sessão</a>
          </li>
        </ul>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
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
        <?php if($this->session->userdata('imagem') != NULL){?>
          <img src="<?= base_url('uploads/product/' . $this->session->userdata('imagem'))?>" class="img-circle elevation-2 height-160 widht-160" alt="User Image" style="height:2.1rem;width:2.1rem">
        <?php }else{?>
          <img src="<?=base_url()?>assets/images/Image00001.jpg" class="img-circle elevation-2 height-160 widht-160" alt="User Image" style="height:2.1rem;width:2.1rem">
        <?php }?>
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

                            <li class="nav-item">
                                  <a href="<?= base_url($submenu['accao']);?>" class="nav-link" id="">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p><?php echo($submenu['nome_sub_menu'])?></p>
                                  </a>
                                <?php if(count($submenu['submenusubmenus']) != 0) {?>

                                    <ul class="nav nav-treeview">
                                      <?php foreach($submenu['submenusubmenus'] as $submenusubmenus){?>
                                        <?php if($submenusubmenus['submenusubmenu'] != "Eliminar") {?>
                                        <?php if($submenusubmenus['submenusubmenu'] != "Editar") {?>
                                        <?php if($submenusubmenus['submenusubmenu'] != "Ver") {?>
                                          <li class="nav-item">
                                            <a href="<?= base_url($submenusubmenus['accao_camada3']);?>" class="nav-link">
                                              <i class="far fa-dot-circle nav-icon"></i>
                                              <p><?php echo($submenusubmenus['submenusubmenu'])?></p>
                                            </a>
                                          </li>
                                        <?php } ?>
                                        <?php } ?>
                                        <?php } ?>
                                      <?php } ?>
                                    </ul>

                                <?php } ?>
                            </li>

                  <?php } ?>
                  </ul>
                </li>

          <?php } ?>
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
    <strong>Copyright &copy; 2021 <a href="http://adminlte.io">Edson Viegas</a>.</strong> Todos Direitos Reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
              <div id="bodyMensagemEditarUsuario" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregarEditarUsuario">
                              <div class="col-md-12" id="conteudoUsuario" style="padding-left: 0.5px;padding-right: 0.5px;"></div>
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
                                      <input name="nome_local" type="password" placeholder="****************" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="senhaUsuario" value="">
                                  </div>
                                  <div class="form-group col-sm-6">
                                      <label class="text-nowrap">Confirmar Senha</label>
                                      <input name="nome_local" type="password" placeholder="****************" data-parsley-group="step-1" data-parsley-required="true" class="form-control form-control-sm" id="senhaUsuario2" value="">
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
              <div id="bodyMensagemEditarActividade" class="modal-body m-2 pt-2 pb-3">
                  <div class="col-md-12" id="conteudoCarregarEditarActividade">
                              <div class="col-md-12" id="conteudoActividade" style="padding-left: 0.5px;padding-right: 0.5px;"></div>
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
<script src="<?=base_url()?>assets/jsComplementar/socket/socket.io.js"></script>
<script src="socket.io.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App2.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App3.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App8.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App4.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App5.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App6.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App7.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/permissao.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/Grafico/apexcharts.min.js"></script>

<script src='<?=base_url()?>assets/fullcalendar/packages/core/main.js'></script>
<script src='<?=base_url()?>assets/fullcalendar/packages/interaction/main.js'></script>
<script src='<?=base_url()?>assets/fullcalendar/packages/daygrid/main.js'></script>

<script src='<?=base_url()?>assets/fullcalendar/packages/core/locales/pt-br.js'></script>
<!-- <script src='<?=base_url()?>assets/fullcalendar/lib/main.js'></script> -->
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
<script src="<?= base_url()?>assets/plugins/chart.js/Chart.min.js"></script>

<!-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/data/countries2.js"></script> -->
<!-- <script src="<?= base_url()?>ckeditor/ckeditor.js"></script> -->
<script src="<?= base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url()?>assets/plugins/toastr/toastr.min.js"></script>

<script src="<?= base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<!-- <script src="<?= base_url()?>assets/plugins/codemirror/codemirror.js"></script>
<script src="<?= base_url()?>assets/plugins/codemirror/mode/css/css.js"></script>
<script src="<?= base_url()?>assets/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<?= base_url()?>assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>


<script>
  // $(function () {
  //   //Add text editor
  //   $('#compose-textarea').summernote()
  // })
  // // CKEDITOR.replace('Article_editor');
  // $(function () {
  //   // Summernote
  //   $('#summernote').summernote()

  //   // CodeMirror
  //   CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
  //     mode: "htmlmixed",
  //     theme: "monokai"
  //   });
  // })

  $(function () {

    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "language":{
        "url":"//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"
      }
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

    //,................................



  });
  ///.........................................................

</script>
</body>
</html>
