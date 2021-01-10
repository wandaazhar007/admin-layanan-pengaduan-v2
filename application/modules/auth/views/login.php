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
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- oneda-cassading -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/one-da-css/one-da-cassading.css">
  <!-- Rechapta Google -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <style>
    .ml14 {
      font-weight: 200;
      font-size: 3.2em;
    }

    .ml14 .text-wrapper {
      position: relative;
      display: inline-block;
      padding-top: 0.1em;
      padding-right: 0.05em;
      padding-bottom: 0.15em;
    }

    .ml14 .line {
      opacity: 0;
      position: absolute;
      left: 0;
      height: 2px;
      width: 100%;
      background-color: #fff;
      transform-origin: 100% 100%;
      bottom: 0;
    }

    .ml14 .letter {
      display: inline-block;
      line-height: 1em;
    }


    @media (min-width: 360px) {
      .ml14 {
        font-weight: 200;
        font-size: 24px;
      }
    }
  </style>
</head>

<body class="hold-transition login-page">
  <h1 class="ml14 mb-3">
    <span class="text-wrapper">
      <span class="letters">Hallo, Selamat Datang</span>
      <span class="line"></span>
    </span>
  </h1>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <div class="login-box">
    <div class="one-da-login-logo">
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/assets/img/logo-rsu.png" alt=""></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <?php echo $this->session->flashdata('message'); ?>
        <p class="login-box-msg">Admin Layanan Pengaduan</p>
        <form action="<?php echo base_url('auth/login') ?>" method="post" id="">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="first" name="email" value="<?php echo set_value('email') ?>" placeholder="Email" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <small class="form-text text-danger font-italic"><?php echo form_error('email') ?></small>
          <div class="input-group mb-3">
            <input type="password" id="second" name="password" class="form-control" placeholder="Password" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <small class="form-text text-danger font-italic"><?php echo form_error('password') ?></small>
          <div class="form-group mt-3">
            <div class="g-recaptcha" data-sitekey="6LdoiycaAAAAAO2YidCx7UFaVAedrowBK_QPDw9T"></div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-sm one-da-btn-login btn-tosca"> <i class="fa fa-power-off"></i> Login</button>
            </div>
          </div>
        </form>
        <p class="mb-0 one-da-text-unlink" style="font-size: 14px;">Tidak bisa login? <a href="<?php echo base_url('auth/forgotPassword') ?>" class="one-da-text-unlink one-da-text-tosca" style="font-size: 14px;">Lupa password</a></p>
        <p class="mb-0 one-da-text-unlink" style="font-size: 14px;"> Belum punya akun? <a href="<?php echo base_url('auth/registerUser') ?>" class="one-da-text-unlink one-da-text-tosca">Daftar</a></p>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>/assets/dist/js/adminlte.min.js"></script>

  <script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml14 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
        loop: true
      })
      .add({
        targets: '.ml14 .line',
        scaleX: [0, 1],
        opacity: [0.5, 1],
        easing: "easeInOutExpo",
        duration: 900
      }).add({
        targets: '.ml14 .letter',
        opacity: [0, 1],
        translateX: [40, 0],
        translateZ: 0,
        scaleX: [0.3, 1],
        easing: "easeOutExpo",
        duration: 800,
        offset: '-=600',
        delay: (el, i) => 150 + 25 * i
      }).add({
        targets: '.ml14',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
      });
  </script>

</body>

</html>