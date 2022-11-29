<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/css_login.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-dark">
<div class="login-box">
  <div class="login-logo">
    <h6><b>KEDA</b> - Sistema de Gestao da FAJUJ e DAO</h6>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="padding-bottom:65px">

    <div class="card-body login-card-body rounded" style="padding:40px">
      <div class="text-center">
        <img src="<?= base_url("assets/images/A22.png");?>" style="width:120px;height:120px" class=""/>
      </div>
      <p class="login-box-msg">Entrar no Sistema</p>

      <?= form_open('login', array('method' => 'post'));?>
        <div class="form-group m-b-15 m-t-10">
          <?php if($this->session->flashdata('error') != NULL):
            echo $this->session->flashdata('error');
            endif;
          ?>
        </div>
        <label>Conta</label>
        <div class="input-group mb-3">
          <!-- <?= form_input('user', set_value('user'), array('class'=>"form-control", 'placeholder'=>"Usuario"));?> -->
          <input type="text" class="form-control" placeholder="Usuario" name="user" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <label>Senha</label>
        <div class="input-group mb-3">
          <!-- <?= form_input('senha', set_value('senha'), array('class'=>"form-control", 'placeholder'=>"Senha"));?> -->
          <input type="password" class="form-control" placeholder="Senha" id="idPassword1989" name="senha" onkeyup="PasswordControl()" required>
          <!-- <span class="text-danger"><?php echo form_error('user');?></span> -->
          <div class="input-group-append">
            <div class="input-group-text" id="idPasswordVerSenhaLogin">
              <span class="fas fa-lock" id="idPasswordFALogin"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                lembrar-me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-sm">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      <?= form_close()?>

      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/jsComplementar/App5.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
