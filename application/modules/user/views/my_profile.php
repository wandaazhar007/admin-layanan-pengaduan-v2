<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-12 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <?php foreach ($getProfileUser as $i) : ?>
      <div class="col-md-3">
        <div class="card card-widget widget-user">
          <div class="widget-user-header btn-tosca">
            <h3 class="widget-user-username"><?php echo $i['nama'] ?></h3>
            <h5 class="widget-user-desc"><?php echo $i['email'] ?></h5>
          </div>
          <div class="widget-user-image">
            <a href="<?php echo base_url('user/my_profile/getFotoProfile/') . $i['id'] ?>" data-toggle="lightbox">
              <img class="img-circle elevation-2" src="<?php echo base_url('assets/img/profile-user/') . $i['foto'] ?>" alt="User Avatar" style="width: 90px;">
            </a>
          </div>
          <p class="text-center mt-5 text-sm font-italic text-muted">Mulai Terdaftar <?php echo date('d F Y', $i['date_created']) ?></p>
          <div class="dropdown-divider"></div>
          <div class="card-footer" style="margin-top: -30px;">
            <div class="row">
              <div class="col-sm-12 border-right">
                <div class="description-block">
                  <h5 class="text-muted"><?php echo $i['user_access'] ?></h5>
                  <span class="text-muted"><?php echo $i['no_hp'] ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="col-md-8 col-sm-12">
      <div class="card card-info">
        <div class="card-header" style="background-color: #009999;">
          <h5 class="text-center">Form Edit User</h5>
        </div>
        <div class="card-body">
          <?php foreach ($getProfileUser as $i) : ?>
            <form role="form" action="<?php echo base_url('user/my_profile/update/') . $i['id'] ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $i['nama'] ?>">
                    <small class="text-danger"><?php echo form_error('nama') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $i['email'] ?>" disabled>
                    <small class="text-danger"><?php echo form_error('email') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">No Handphone</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" value="<?php echo $i['no_hp'] ?>">
                    <small class="text-danger"><?php echo form_error('no_hp') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Bidang</label>
                    <select class="form-control" style="width: 100%;" name="bidang">
                      <option value="<?php echo $i['bidang'] ?>"><?php echo $i['bidang'] ?></option>
                      <option value="pelayanan medis">Pelayanan Medis</option>
                      <option value="penunjang">Penunjang</option>
                      <option value="keperawatan">Keperawatan</option>
                      <option value="umum">Umum</option>
                      <option value="keuangan">Keuangan</option>
                      <option value="costumer services">Costumer Services</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('bidang') ?></small>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">User Akses</label>
                    <select class="form-control" style="width: 100%;" name="user_access">
                      <option value="<?php echo $i['user_access'] ?>"><?php echo $i['user_access'] ?></option>
                      <option value="pengguna">Pengguna</option>
                      <option value="administrator">Administrator</option>
                      <option value="cs">Customer Services</option>
                    </select>
                    <small class="text-danger"><?php echo form_error('user_access') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Ubah Foto</label><br>
                    <input type="file" name="foto" class="" placeholder="">
                  </div>
                  <div class="modal-footer pull-right">
                    <a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-info btn-outline-light"><i class="fa fa-arrow-alt-circle-left"></i> Kembali</button></a>
                    <button type="submit" class="btn btn-tosca btn-outline-light"><i class="fa fa-save"></i> Update</button>
                  </div>
                </div>
              </div>
            </form>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>