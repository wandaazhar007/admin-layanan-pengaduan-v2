<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url() ?>" class="brand-link">
    <img src="<?php echo base_url() ?>/assets/img/logo-rsu.png" alt="AdminLTE Logo" style="width: 50px;">
    <span class="brand-text font-weight-light" style="font-size: 15px; margin-left: 20px;"> Layanan Pengaduan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar text-sm">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <a href="<?php echo base_url('user/my_profile/getProfileUser/') . $this->session->userdata('id') ?>"><img src="<?php echo base_url('/assets/img/profile-user/') . $this->session->userdata('foto') ?>" class="img-circle elevation-2" alt="User Image"></a>
      </div>
      <div class="info">
        <a href="<?php echo base_url('user/my_profile/getProfileUser/') . $this->session->userdata('id') ?>" class="d-block"><?php echo $this->session->userdata('nama') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2 nav-legacy nav-flat">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
            <i class="nav-icon fa fa-signal"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?php echo base_url('inbox') ?>" class="nav-link">
            <i class="nav-icon fa fa-envelope"></i>
            <p>Pesan Pengaduan</p>
          </a>
        </li>

        <li class="nav-header">Master Data</li>
        <li class="nav-item">
          <a href="<?php echo base_url('pelapor') ?>" class="nav-link">
            <i class="nav-icon far fa-calendar"></i>
            <p>Data Pelapor</p>
          </a>
        </li>
        <?php
        if ($this->session->userdata('user_access') == 'administrator') {
          echo '
          <li class="nav-item">
          <a href="' . base_url('user') . '" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>Pengguna</p>
          </a>
        </li>
          ';
        } else {
          echo '
          <li class="nav-item">
          <a href="#" class="nav-link swalButtonSidebarPengguna">
            <i class="nav-icon fa fa-user"></i>
            <p>Pengguna</p>
          </a>
        </li>
          ';
        }
        ?>
        <?php
        if ($this->session->userdata('user_access') == 'administrator') {
          echo '
          <li class="nav-item">
          <a href="' . base_url('update_dokter') . '" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Update Dokter</p>
          </a>
        </li>
          ';
        } else {
          echo '
          <li class="nav-item">
          <a href="#" class="nav-link swalButtonSidebarJadwalDokter">
            <i class="nav-icon fas fa-edit"></i>
            <p>Update Dokter</p>
          </a>
        </li>
          ';
        }
        ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>