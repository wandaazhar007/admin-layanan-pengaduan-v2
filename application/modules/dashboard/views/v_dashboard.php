<div class="row justify-content-center">
  <div class="col-12 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>
<div class="container-fluid background-container">
  <!-- Note:Row pertama  | Author: wandaazhar@gmail.com */ -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <div class="small-box bg-danger" id="pesan_belum_dibalas">
        <div class="inner">
          <h3><?php echo $this->wandalibs->countAllPesanBelumDibalas() ?></h3>
          <p>Belum Dibalas</p>
        </div>
        <div class="icon">
          <i class="fa fa-envelope"></i>
        </div>
        <a href="#" class="small-box-footer view_pesan_belum_dibalas" id="pesanBelumDibalas">Lihat <i class="fa fa-fw fa-search" aria-hidden="true"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-info" id="pesan_sedang_diproses">
        <div class="inner">
          <h3><?php echo $this->wandalibs->countAllPesanSedangDiProses() ?></h3>
          <p>Sedang Diproses</p>
        </div>
        <div class="icon">
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <a href="#" class="small-box-footer view_pesan_sedang_diproses" id="pesanSedangDiproses">Lihat <i class="fas fa-search"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-success" id="pesan_sudah_selesai">
        <div class="inner">
          <h3><?php echo $this->wandalibs->countAllPesanSudahSelesai() ?></h3>
          <p>Sudah Selesai</p>
        </div>
        <div class="icon">
          <i class="fa fa-check"></i>
        </div>
        <a href="#" class="small-box-footer view_pesan_sudah_selesai" id="pesanSudahSelesai">Lihat <i class="fas fa-search"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning" id="all_pesan">
        <div class="inner">
          <h3><?php echo $this->wandalibs->countAllPesan() ?></h3>
          <p>Total Pesan</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer view_all_pesan" id="allPesan">Lihat <i class="fas fa-fw fa-search"></i></a>
      </div>
    </div>
  </div>


  <!-- Note:Row ke dua  | Author: wandaazhar@gmail.com */ -->
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3" id="pesan_bidang_yanmed">
      <a href="#" class="view_pesan_bidang_yanmed one-da-text-unlink wan-text-title-dashboard" id="idPesanYanmed">
        <div class="info-box">
          <span class="info-box-icon bg-danger"><i class="far fa-envelope"></i></span>
          <div class="info-box-content" id="view_pesan_bidang_yanmed">
            <span class="info-box-text">Pelayanan Medis</span>
            <span class="info-box-number" style="display: inline;"><?php echo $this->wandalibs->countAllPesanYanmed(); ?></span>
            <small class="">Pesan Pengaduan</small>
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-sm-6 col-md-3" id="pesan_bidang_penunjang">
      <a href="#" class="view_pesan_bidang_penunjang one-da-text-unlink wan-text-title-dashboard" id="idPesanPenunjang">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
          <div class="info-box-content" id="view_pesan_bidang_penunjang">
            <span class="info-box-text">Penunjang</span>
            <span class="info-box-number" style="display: inline;"><?php echo $this->wandalibs->countAllPesanPenunjang(); ?></span>
            <small class="">Pesan Pengaduan</small>
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-sm-6 col-md-3" id="pesan_bidang_keperawatan">
      <a href="#" class="view_pesan_bidang_keperawatan one-da-text-unlink wan-text-title-dashboard" id="idPesanKeperawatan">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>
          <div class="info-box-content" id="view_pesan_bidang_keperawatan">
            <span class="info-box-text">Keperawatan</span>
            <span class="info-box-number" style="display: inline;"><?php echo $this->wandalibs->countAllPesanKeperawatan(); ?></span>
            <small class="">Pesan Pengaduan</small>
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-sm-6 col-md-3" id="pesan_bidang_umum">
      <a href="#" class="view_pesan_bidang_umum one-da-text-unlink wan-text-title-dashboard" id="idPesanUmum">
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="far fa-envelope"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Umum</span>
            <span class="info-box-number" style="display: inline;"><?php echo $this->wandalibs->countAllPesanUmum(); ?></span>
            <small class="">Pesan Pengaduan</small>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- Note:Row ke tiga  | Author: wandaazhar@gmail.com */ -->
  <div class="row">
    <div class="col-md-8 col-sm-12">
      <div class="card">
        <div class="card-header border-transparent">
          <h3 class="card-title">10 Daftar Nama Pelapor Terakhir</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive" style="padding: 20px;">
            <table class="table m-0" id="tabel_list_pelapor">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelapor</th>
                  <th>No Handphone</th>
                  <th>Alamat Email</th>
                  <th>Foto</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>

        <div class="card-footer clearfix">
          <a href="<?php echo base_url('pelapor') ?>" class="btn btn-sm btn-info float-right"><i class="fa fa-search"></i> Lihat Semua Pelapor</a>
        </div>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Nama Pengguna</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0" id="history_admin">
          <ul class="products-list product-list-in-card pl-2 pr-2">
            <?php foreach ($getAllUserAdmin as $i) : ?>
              <li class="item">
                <div class="product-img">
                  <a href="<?= base_url('dashboard/getFotoProfileAdmin/') . $i['id'] ?>" data-toggle="lightbox">
                    <img src="<?= base_url('assets/img/profile-user/') . $i['foto'] ?>" alt="Product Image" class="img-size-50">
                  </a>
                </div>
                <div class="product-info">
                  <a href="#" class="product-title">
                    <span class="view_history_admin" id="<?= $i['id'] ?>"><?= $i['nama'] ?></span>
                    <span class="badge badge-warning float-right"><?= date('d F Y', $i['date_created']) ?></span>
                  </a>
                  <span class="product-description">
                    <?= $i['email'] ?>
                  </span>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="card-footer text-center">
          <?php
          if ($this->session->userdata('user_access') == 'pengguna') {
            echo '<a href="#" class="swalButtonSidebarPengguna" class="uppercase">Lihat Semua Pengguna</a>';
          } else {
            echo '<a href="' . base_url('user') . '" class="uppercase">Lihat Semua Pengguna</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pesan Belum Dibalas -->
<div class="modal fade" id="modal_pesan_belum_dibalas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Pesan Belum Dibalas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pesan_belum_dibalas_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pesan Belum Dibalas -->
<div class="modal fade" id="modal_pesan_sedang_diproses">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Pesan Sedang Diproses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pesan_sedang_diproses_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pesan Sudah Selesai -->
<div class="modal fade" id="modal_pesan_sudah_selesai">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Pesan Sudah Selesai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pesan_sudah_selesai_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Semua Pesan -->
<div class="modal fade" id="modal_all_pesan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Semua Pesan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="all_pesan_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Pesan Bidang Yanmed  -->
<div class="modal fade" id="modal_pesan_bidang_yanmed">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Pengaduan Pelayanan Medis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pesan_bidang_yanmed_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Pesan Bidang Penunjang  -->
<div class="modal fade" id="modal_pesan_bidang_penunjang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Pengaduan Bidang Penunjang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pesan_bidang_penunjang_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pesan Bidang Keperawatan  -->
<div class="modal fade" id="modal_pesan_bidang_keperawatan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Pengaduan Bidang Keperawatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pesan_bidang_keperawatan_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Pesan Bidang Umum  -->
<div class="modal fade" id="modal_pesan_bidang_umum">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted"> <i class="far fa-envelope"></i>&nbsp; Pengaduan Bidang Umum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pesan_bidang_umum_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal History Admin -->
<div class="modal fade" id="modal_history_admin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color: #009999;"> <i class="fa fa-user"></i>&nbsp; Riwayat Pengguna</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="history_admin_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>