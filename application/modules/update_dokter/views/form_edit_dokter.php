<div class="col-6 col-sm-12 col-md-4 text-center" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
  <?php echo $this->session->flashdata('message'); ?>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 col-sm-12">
      <div class="card card-info">
        <div class="card-header" style="background-color: #009999;">
          <h6 class="text-center">Form Edit Dokter</h6>
        </div>
        <div class="card-body">
          <?php foreach ($getDataById as $i) : ?>
            <form role="form" action="<?php echo base_url('update_dokter/update/' . $i['id']) ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $i['nama'] ?>">
                    <small class="text-danger"><?php echo form_error('nama') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Poliklinik</label>
                    <input type="text" name="poliklinik" class="form-control" placeholder="poliklinik" value="<?php echo $i['poliklinik'] ?>">
                    <small class="text-danger"><?php echo form_error('poliklinik') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Upload Foto</label>
                    <input type="file" name="foto" class="" placeholder="">
                  </div>
                </div>
                <div class="col-md-3 col-sm-12">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Senin</label>
                    <input type="text" name="senin" class="form-control col-md-6 col-sm-12" placeholder="00.00" value="<?php echo $i['senin'] ?>">
                    <small class="text-danger"><?php echo form_error('senin') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Rabu</label>
                    <input type="text" name="rabu" class="form-control col-md-6 col-sm-12" placeholder="00.00" value="<?php echo $i['rabu'] ?>">
                    <small class="text-danger"><?php echo form_error('rabu') ?></small>
                  </div>
                </div>
                <div class="col-md-3 col-sm-12" style="margin-left: -100px;">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Selasa</label>
                    <input type="text" name="selasa" class="form-control col-md-6 col-sm-12" placeholder="00.00" value="<?php echo $i['selasa'] ?>">
                    <small class="text-danger"><?php echo form_error('selasa') ?></small>
                  </div>
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Kamis</label>
                    <input type="text" name="kamis" class="form-control col-md-6 col-sm-12" placeholder="00.00" value="<?php echo $i['kamis'] ?>">
                    <small class="text-danger"><?php echo form_error('kamis') ?></small>
                  </div>
                </div>


                <div class="col-md-3 col-sm-12" style="margin-left: -100px;">
                  <div class="form-group input-group-sm">
                    <label class="text-sm mb-0">Jumat</label>
                    <input type="text" name="jumat" class="form-control col-md-6 col-sm-12" placeholder="00.00" value="<?php echo $i['jumat'] ?>">
                    <small class="text-danger"><?php echo form_error('jumat') ?></small>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="modal-footer">
                    <a href="<?php echo base_url('update_dokter') ?>"><button type="button" class="btn btn-info btn-outline-light float-right"><i class="fa fa-arrow-alt-circle-left"></i> Kembali</button></a>
                    <button type="submit" class="btn btn-tosca btn-outline-light float-right"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </div>
              </div>
            </form>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4">
      <div class="card card-info card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0" style="background-color: #009999;">
          <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true" style="color: #C2C7D0;">Syarat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false" style="color: #C2C7D0;">Ketentuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false" style="color: #C2C7D0;">Tentang Layanan</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-two-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
            </div>
            <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
              Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
            </div>
            <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
              Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
            </div>
            <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
              Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/. container-fluid -->