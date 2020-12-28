<div class="col-12 col-sm-4 col-md-4" style="position: fixed; z-index: 999; right: 12px; top: 50px;">
  <?php echo $this->session->flashdata('message'); ?>
</div>

<div class="card" style="padding: 20px;">
  <a href="<?php echo base_url('update_dokter/insert') ?>"><button class="btn btn-tosca btn-sm mb-2 float-right"><i class="fa fa-user"></i>&nbsp; Tambah Dokter</button></a>
  <div class="card-body table-responsive p-0" style="padding: 20px;">
    <table class="table table-hover text-nowrap" id="tabel_update_dokter">
      <thead>
        <tr>
          <th>No</th>
          <th>Klinik</th>
          <th>Nama Dokter</th>
          <th>Senin</th>
          <th>Selasa</th>
          <th>Rabu</th>
          <th>Kamis</th>
          <th>Jumat</th>
          <th>Foto</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>
    </table>
  </div>
</div>



<!-- Modal Detail History Pelapor -->
<div class="modal fade" id="modal_history_pelapor">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color: #009999;"> <i class="fa fa-user"></i>&nbsp; History Pelapor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div id="pelapor_result"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->