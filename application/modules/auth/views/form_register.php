<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/logo-tangsel.png">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- oneda-cassading -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/one-da-css/one-da-cassading.css">
  <!-- Rechapta Google -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body class="hold-transition register-page">

  <div class="register-box">
    <div class="one-da-login-logo">
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/assets/img/logo-rsu.png" alt=""></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <?php echo $this->session->flashdata('message'); ?>
        <p class="login-box-msg">Form Register User</p>
        <form action="<?php echo base_url('auth/registerUser') ?>" method="post">
          <div class="input-group mb-3 input-group-sm">
            <input type="text" name="nama" value="<?php echo set_value('nama') ?>" class="form-control" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('nama') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <input type="text" name="email" value="<?php echo set_value('email') ?>" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('email') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <select class="form-control" style="width: 100%;" name="bidang">
              <option value="" selected disabled>Pilih Bidang:</option>
              <option value="pelayanan medis">Pelayanan Medis</option>
              <option value="penunjang">Penunjang</option>
              <option value="keperawatan">Keperawatan</option>
              <option value="umum">Umum</option>
              <option value="keuangan">Keuangan</option>
              <option value="costumer services">Costumer Services</option>
            </select>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('bidang') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('password') ?></small>

          <div class="input-group mb-3 input-group-sm">
            <input type="password" name="password2" value="<?php echo set_value('password2') ?>" class="form-control" placeholder="Ulangi Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <small class="text-danger font-italic"><?php echo form_error('password2') ?></small>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary input-group-sm">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                  <small class="text-muted">Saya setuju dengan <a href="<?= base_url('auth/ketentuanRegisterUserAdmin') ?>" target="_blank">Ketentuan</a></small>
                  <small class="text-danger font-italic"><?php echo form_error('terms') ?></small>
                </label>
              </div>
            </div>
            <div class="form-group mt-3">
              <div class="g-recaptcha" data-sitekey="6LdoiycaAAAAAO2YidCx7UFaVAedrowBK_QPDw9T"></div>
            </div>

            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block one-da-btn-login btn-tosca">Daftar</button>
            </div>

          </div>
        </form>
        <div class="mt-3">
          <p class="mb-0 one-da-text-unlink" style="font-size: 14px;">Tidak bisa login? <a href="<?php echo base_url('auth/forgotPassword') ?>" class="one-da-text-unlink one-da-text-tosca" style="font-size: 14px;">Lupa password</a></p>
          <p class="mb-0 one-da-text-unlink" style="font-size: 14px;"> Sudah punya akun? <a href="<?php echo base_url('auth/login') ?>" class="one-da-text-unlink one-da-text-tosca">Login</a></p>
        </div>
      </div>
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