<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header" style="color: #fff; background-color: #009999;">
      <h3 class="card-title">Kirim Pesan</h3>
    </div>

    <form action="<?php echo base_url('compose') ?>" method="post" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">
          <input class="form-control" name="email" placeholder="To:">
          <small class="text-danger font-italic"><?php echo form_error('email') ?></small>
        </div>
        <div class="form-group">
          <input class="form-control" name="subject" placeholder="Subject:" value="Layanan Pengaduan RSU Kota Tangsel (No Reply)" readonly>
        </div>
        <div class="form-group">
          <textarea id="compose-textarea" name="pesan_keluar" class="form-control" style="height: 300px"></textarea>
          <small class="text-danger font-italic"><?php echo form_error('pesan_keluar') ?></small>
        </div>
        <div class="form-group">
          <div class="btn btn-default">
            <i class="fas fa-paperclip"></i>
            <input type="file" name="foto">
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="float-right">
          <button type="submit" class="btn btn-tosca"><i class="far fa-envelope"></i> Send</button>
        </div>
      </div>
    </form>
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->
</div>