<div class="row justify-content-center">
  <div class="col-12 col-sm-6 col-md-6 text-center">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row">

    <div class="card">
      <div class="card-header border-0">
        <a href="#" onclick="window.history.back()" style="color: #fff;">
          <button type="button" class="btn btn-tosca btn-sm"><i class="fa fa-arrow-alt-circle-left"></i>&nbsp;Kembali</button>
        </a>
        <a href="<?php echo base_url('inbox') ?>" style="color: #fff;">
          <button type="button" class="btn btn-tosca btn-sm"><i class="fa fa-envelope"></i>&nbsp;Kembali Ke Halaman Inbox</button>
        </a>
        <div class="card-tools">
          <a href="<?php echo base_url() ?>" class="btn btn-tool btn-sm">
            <i class="fas fa-home"></i>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="float-right text-muted" style="font-size: 12px;">
          Total <?php echo $getAllPesanByIdUser['total_rows']; ?> Pesan
        </div>
      </div>

      <div class="card-body table-responsive p-0">
        <?php $this->load->view('serverside_list_by_user') ?>
      </div>
      <?php echo $getAllPesanByIdUser['pagination']; ?>
    </div>

  </div>
</div>