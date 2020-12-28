<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/logo-tangsel.png">
  <title>Selamat Datang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- oneda-cassading -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/one-da-css/one-da-cassading.css">
</head>

<body class="hold-transition lockscreen">
  <div class="col-12 col-sm-3 col-md-3 text-center" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
    <?php echo $this->session->flashdata('message'); ?>
  </div>

  <div class="lockscreen-wrapper">
    <div class="one-da-login-logo">
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/assets/img/logo-rsu.png" alt=""></a>
    </div>
    <div class="lockscreen-logo" style="font-size: 24px; margin-bottom: 10px;">
      <a href="#"><b>Selamat Datang</b></a>
    </div>

    <div class="lockscreen-name" style="margin-top: -15px; padding-bottom: 20px;"><?php echo $this->input->get('email') ?></div>


    <div class="lockscreen-item mt-0">

      <div class="lockscreen-image">
        <img src="<?php echo base_url('/assets/img/profile-user/') . $getEmail->foto ?>" alt="User Image">
      </div>

      <form class="lockscreen-credentials" action="<?php echo base_url('auth/loginFirstTime') ?>" method="post">
        <div class="input-group">
          <input type="hidden" name="email" class="form-control" value="<?php echo $this->input->get('email') ?>">
          <input type="password" name="password" class="form-control" placeholder="password">
          <div class="input-group-append">
            <button type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('password') ?></small>
        </div>
      </form>

    </div>
    <small class="text-danger font-italic text-center" style="margin-top: -20px; margin-left: auto; margin-right: auto; width: 50%; display: flex;"><?php echo form_error('password') ?></small>

    <div class="help-block text-center text-muted text-sm ml-5">
      Silahkan masukan password Anda
    </div>
    <div class="lockscreen-footer text-center text-muted mt-5">
      Copyright &copy; 2020 <b><a href="#" class="text-muted">RSU Kota Tangerang Selatan</a></b><br>
      All rights reserved
    </div>
  </div>


  <!-- jQuery -->
  <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>/assets/dist/js/adminlte.min.js"></script>
</body>

</html>