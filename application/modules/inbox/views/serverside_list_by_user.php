<?php
//   $masuk = 1596214800;
// $selesai = 1596474000;
// $hasil = $selesai - $masuk;
// var_dump($hasil);
// die;
// $tgl = time();
// $tgl2 = strtotime('d F Y', $tgl);
?>
<table class="table table-striped table-valign-middle">
  <thead>
    <tr>
      <th>Pesan</th>
      <th>Bidang</th>
      <th>Masuk</th>
      <th>Forward</th>
      <th>Dibalas</th>
      <th>Selesai</th>
      <th class="text-center"><small style="font-weight: bold;">Selesai Dalam Waktu</small></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($getAllPesanByIdUser['pesan'] as $i) :
      $tgl_masuk    = $i['tgl_masuk'];

      $tgl_forward = '';
      if ($i['tgl_forward'] == null) {
        $tgl_forward = '<span class="badge badge-danger"> Belum Diforward</span>';
      } else {
        $tgl_forward .= '' . date('d F Y', $i['tgl_forward']) . '
                  <small class="text-success mr-1">
                    <i class="fa fa-clock"></i>
                    ' . date('h:i:s', $i['tgl_forward']) . '
                  </small>';
      }
      $tgl_balas = '';
      if ($i['tgl_balas'] == null) {
        $tgl_balas = '<span class="badge badge-danger"> Belum Dibalas</span>';
      } else {
        $tgl_balas .= '' . date('d F Y', $i['tgl_balas']) . '
                  <small class="text-success mr-1">
                    <i class="fa fa-clock"></i>
                    ' . date('h:i:s', $i['tgl_balas']) . '
                  </small>';
      }
      $tgl_selesai = '';
      if ($i['tgl_selesai'] == null) {
        $tgl_selesai = '<span class="badge badge-danger"> Belum Selesai</span>';
      } else {
        $tgl_selesai .= '' . date('d F Y', $i['tgl_selesai']) . '
                  <small class="text-success mr-1">
                    <i class="fa fa-clock"></i>
                    ' . date('h:i:s', $i['tgl_selesai']) . '
                  </small>';
      }

      $tgl_selesai_int = $i['tgl_selesai'];
      // $jam_selesai_int = $i['tgl_selesai']

    ?>
      <tr>
        <td><small><?php echo $i['inbox'] ?></small></td>
        <td class="text-center"><small><?php echo $this->wandalibs->echoBidang($i['bidang']) ?></small></td>
        <td>
          <small>
            <?php echo date('d F Y', $i['tgl_masuk']) ?>
            <small class="text-success mr-1">
              <i class="fa fa-clock"></i>
              <?php echo date('h:i:s', $i['tgl_masuk']) ?>
            </small>
          </small>
        </td>
        <td><small><?php echo $tgl_forward; ?></small></td>
        <td><small><?php echo $tgl_balas; ?></small></td>
        <td><small><?php echo $tgl_selesai; ?></small></td>
        <td>
          <?php if ($this->wandalibs->akumulasiByDay($tgl_masuk, $tgl_selesai_int) >= 7) { ?>
            <small class="badge badge-danger">
              <?php echo $this->wandalibs->akumulasiByDay($tgl_masuk, $tgl_selesai_int) ?> Hari |
              <?php echo $this->wandalibs->akumulasiByHour($tgl_masuk, $tgl_selesai_int) ?> Jam |
              <?php echo $this->wandalibs->akumulasiByMinute($tgl_masuk, $tgl_selesai_int) ?> Mnt
            </small>
            <small class="badge badge-danger"><i class="fa fa-exclamation"></i></small>
          <?php } elseif ($i['tgl_selesai'] == NULL) { ?>
            <small class="badge badge-info">Sedang diproses</small>
            <small class="badge badge-info"><i class="fa fa-sync fa-spin"></i></small>
          <?php } else { ?>
            <small class="badge badge-success">
              <?php echo $this->wandalibs->akumulasiByDay($tgl_masuk, $tgl_selesai_int) ?> Hari |
              <?php echo $this->wandalibs->akumulasiByHour($tgl_masuk, $tgl_selesai_int) ?> Jam |
              <?php echo $this->wandalibs->akumulasiByMinute($tgl_masuk, $tgl_selesai_int) ?> Mnt
            </small>
            <small class="badge badge-success"><i class="fa fa-check"></i></small>
          <?php } ?>
        </td>
        <td>
          <small>
            <?php
            // var_dump(strtotime($tgl_selesai));
            // die;
            ?>
          </small>
        </td>
      </tr>

    <?php endforeach; ?>
  </tbody>
</table>