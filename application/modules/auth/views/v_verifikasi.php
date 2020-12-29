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

    <div class="lockscreen-name" style="margin-top: -15px; padding-bottom: 20px;"><?php echo htmlentities($getEmail->nama) ?></div>
    <div class="lockscreen-name" style="margin-top: -15px; padding-bottom: 20px;"><?php echo htmlentities($this->input->get('email')) ?></div>

    <div class="help-block text-center text-muted text-sm">
      <a href="<?php echo base_url('auth/login') ?>">
        <button class="btn btn-tosca">Login</button>
      </a>
    </div>


    <div class="lockscreen-footer text-center text-muted mt-5">
      Copyright &copy; 2020 <b><a href="#" class="text-muted">RSU Kota Tangerang Selatan</a></b><br>
      All rights reserved
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>/assets/dist/js/adminlte.min.js"></script>
</body>

</html>