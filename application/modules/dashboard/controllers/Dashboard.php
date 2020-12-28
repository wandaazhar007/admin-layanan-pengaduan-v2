<?php defined('BASEPATH') or exit('no direct script access allowed');

class Dashboard extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_dashboard', 'p');
    $this->load->library('datatables');
  }

  function index()
  {
    $data['title']                      = 'Dashboard Layanan Pengaduan';
    $data['breadcumb']                  = 'Dashboard';
    $data['getAllUserAdmin']            = $this->wandalibs->getAllUserAdmin();
    $data['contents']                   = 'v_dashboard';
    $this->load->view('templates/core', $data);
  }

  function getFotoProfileAdmin($id)
  {
    $data['title']                  = $this->session->userdata('nama');
    $data['getFotoProfileAdmin']    = $this->wandalibs->getFotoProfileAdmin($id);

    $this->load->view('detail_foto_profile_admin', $data);
  }

  function getHistoryAdmin()
  {
    $id = htmlspecialchars($this->input->post('idAdmin', true));

    $output = '';
    if (isset($id) and !empty($id)) {
      $query = $this->wandalibs->getHistoryAdmin($id);
      $output .= '
        <div class="">
        <table class="table-modal-forward">
          <tr>
            <td width="150px"><span class="badge badge-btn">Nama</span></td>
            <td width="50px">:</td>
            <td width="400px"><span class="badge badge-btn">' . $query[0]['nama'] . '</span></td>
          </tr>
          <tr>
            <td width="150px"><span class="badge badge-btn">Email</span></td>
            <td width="50px">:</td>
            <td width="400px"><span class="badge badge-btn">' . $query[0]['email'] . '</span></td>
          </tr>
        </table>
      </div>
						    ';

      echo $output;
    } else {
      echo 'Not Found!';
    }
  }

  function blank()
  {
    $data['title']      = 'Blank';
    $data['contents']   = 'blank';
    $this->load->view('templates/core', $data);
  }

  function getAllPesanBelumDibalas()
  {
    $status_proses = $this->input->post('status_proses');
    if (isset($status_proses) and !empty($status_proses)) {
      $query = $this->wandalibs->getAllPesanBelumDibalas();
      $query2 = $this->wandalibs->countAllPesanBelumDibalas();
      $output = '';

      $no = 1;
      foreach ($query as $i) :
        if ($query2 >= 0) {
          if ($this->session->userdata('user_access') == 'administrator') {
            $showButtonViewAll = '
          <div class="col text-center">
            <a href="' . base_url('inbox') . '">
              <button class="btn btn-tosca btn-block btn-sm"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>
            </a>
          </div>
          ';
          } else {
            $showButtonViewAll = '<button class="btn btn-danger btn-block btn-sm" style="cursor: no-drop"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>';
          }
        }

        $showCountPesan = '
        <div class="row justify-content-center mb-2 mt-5">
        <span class="badge text-danger"">&nbsp;Total: ' . $this->wandalibs->countAllPesanBelumDibalas() . ' pengaduan yang belum dibalas</span>
        </div>
        ';
        $output .= '
        <div class="info-box">
          <span class="info-box-icon bg-danger"><i class="far fa-envelope"></i></span>
          <div class="info-box-content">
            <small class="text-muted float-right">' . date('d F Y', $i['tgl_masuk']) . '</small>
            <span class="info-box-text text-muted">' . $i['nama'] . '</span>
            <small class="text-muted text-sm float-left">' . $i['email'] . '</small>
          </div>
        </div>
        ';
      endforeach;
      echo $output;
      echo $showCountPesan;
      echo $showButtonViewAll;
    } else {
      echo 'not found!';
    }
  }


  function getAllPesanSedangDiproses()
  {
    $status_proses = $this->input->post('status_proses');
    if (isset($status_proses) and !empty($status_proses)) {
      $query = $this->wandalibs->getAllPesanSedangDiproses();
      $query2 = $this->wandalibs->countAllPesanSedangDiproses();
      $output = '';
      $no = 1;
      foreach ($query as $i) :
        if ($query2 >= 0) {
          if ($this->session->userdata('user_access') == 'administrator') {
            $showButtonViewAll = '
          <div class="col text-center">
            <a href="' . base_url('inbox/') . '">
              <button class="btn btn-tosca btn-block btn-sm"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>
            </a>
          </div>
          ';
          } else {
            $showButtonViewAll = '<button class="btn btn-info btn-block btn-sm" style="cursor: no-drop"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>';
          }
        }

        $showCountPesan = '
        <div class="row justify-content-center mb-2 mt-5">
        <span class="badge text-muted"">&nbsp;Total: ' . $this->wandalibs->countAllPesanSedangDiproses() . ' pengaduan yang sedang diproses</span>
        </div>
        ';

        $output .= '
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
          <div class="info-box-content">
            <small class="text-muted float-right">' . date('d F Y', $i['tgl_masuk']) . '</small>
            <span class="info-box-text text-muted">' . $i['nama'] . '</span>
            <small class="text-muted text-sm float-left">' . $i['email'] . '</small>
          </div>
        </div>

        ';
      endforeach;
      echo $output;
      echo $showCountPesan;
      echo $showButtonViewAll;
    } else {
      echo 'not found!';
    }
  }


  function getAllPesanSudahSelesai()
  {
    $status_proses = $this->input->post('status_proses');
    if (isset($status_proses) and !empty($status_proses)) {
      $query = $this->wandalibs->getAllPesanSudahSelesai();
      $query2 = $this->wandalibs->countAllPesanSudahSelesai();
      $output = '';
      $no = 1;
      foreach ($query as $i) :
        if ($query2 >= 0) {
          if ($this->session->userdata('user_access') == 'administrator') {
            $showButtonViewAll = '
          <div class="col text-center">
            <a href="' . base_url('inbox/') . '">
              <button class="btn btn-tosca btn-block btn-sm"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>
            </a>
          </div>
          ';
          } else {
            $showButtonViewAll = '<button class="btn btn-success btn-block btn-sm" style="cursor: no-drop"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>';
          }
        }

        $showCountPesan = '
        <div class="row justify-content-center mb-2 mt-5">
        <span class="badge text-muted"">&nbsp;Total: ' . $this->wandalibs->countAllPesanSedangDiproses() . ' pengaduan yang sedang diproses</span>
        </div>
        ';

        $output .= '
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>
          <div class="info-box-content">
            <small class="text-muted float-right">' . date('d F Y', $i['tgl_masuk']) . '</small>
            <span class="info-box-text text-muted">' . $i['nama'] . '</span>
            <small class="text-muted text-sm float-left">' . $i['email'] . '</small>
          </div>
        </div>

        ';
      endforeach;
      echo $output;
      echo $showCountPesan;
      echo $showButtonViewAll;
    } else {
      echo 'not found!';
    }
  }


  function getAllPesan()
  {
    $status_proses = $this->input->post('status_proses');
    if (isset($status_proses) and !empty($status_proses)) {
      $query = $this->wandalibs->getAllPesan();
      $query2 = $this->wandalibs->countAllPesan();
      $output = '';
      $no = 1;
      foreach ($query as $i) :
        if ($query2 >= 0) {
          if ($this->session->userdata('user_access') == 'administrator') {
            $showButtonViewAll = '
          <div class="col text-center">
            <a href="' . base_url('inbox/') . '">
              <button class="btn btn-tosca btn-block btn-sm"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>
            </a>
          </div>
          ';
          } else {
            $showButtonViewAll = '<button class="btn btn-warning btn-block btn-sm" style="cursor: no-drop"><i class="fa fa-search"></i>&nbsp;Lihat Semua</button>';
          }
        }

        $showCountPesan = '
        <div class="row justify-content-center mb-2 mt-5">
        <span class="badge text-muted"">&nbsp;Total: ' . $this->wandalibs->countAllPesanSedangDiproses() . ' pengaduan yang sedang diproses</span>
        </div>
        ';

        $output .= '
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="far fa-envelope"></i></span>
          <div class="info-box-content">
            <small class="text-muted float-right">' . date('d F Y', $i['tgl_masuk']) . '</small>
            <span class="info-box-text text-muted">' . $i['nama'] . '</span>
            <small class="text-muted text-sm float-left">' . $i['email'] . '</small>
          </div>
        </div>

        ';
      endforeach;
      echo $output;
      echo $showCountPesan;
      echo $showButtonViewAll;
    } else {
      echo 'not found!';
    }
  }


  function getDetail($user_id)
  {
    $query = $this->db->get_where('tb_user', ['id' => $user_id])->row_array();

    $data['title']      = $query['email'];
    $data['conntents']  = 'detail_pesan_user';
    $data['getDetail']  = $this->p->getDetail($user_id);

    $this->load->view('templates/cpre', $data);
  }

  function getAllInboxYanmed()
  {
    $id = $this->input->post('id');
    if (isset($id) and !empty($id)) {
      $query = $this->wandalibs->getAllPesanYanmed();
      $output = '';
      // foreach ($query as $i) :
      $queryBidang = $this->session->userdata('bidang');
      if ($queryBidang == 'pelayanan medis' or $queryBidang == 'promkes') {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
        <a href="' . base_url('inbox/') . '">
          <span class="btn btn-block btn-sm btn-tosca">&nbsp;Total: ' . $this->wandalibs->countAllPesanYanmed() . ' pesan pengaduan &nbsp; <i class="fa fa-search"></i></span>
        </a>
      </div>
          ';
      } else {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
              <span class="btn btn-block btn-sm btn-default swalButtonHakAkses" style="cursor: no-drop">&nbsp;Total: ' . $this->wandalibs->countAllPesanYanmed() . ' pesan pengaduan &nbsp;</span>
          </div>
          ';
      }

      $showButtonCountPesan = $btn;

      $output .= '
      <div class="callout callout-danger">
        <h6><i class="fas fa-info"></i> Note:</h6>
        <small class="text-muted">Ini adalah detail Pengaduan Bidang Pelayanan Medis.</small>
      </div>
     
      <div class="callout callout-danger">
          <span class="info-box-icon bg-danger p-2 rounded"><i class="fa fa-share"></i></span>
          <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanBelumBalasYanmed() . '</span> <small class="text-muted ml-2"> Pesan Belum Dibalas</small>
      </div>
      
      <div class="callout callout-info">
          <span class="info-box-icon bg-info p-2 rounded"><i class="fa fa-sync fa-spin"></i></span>
            <span class="badge badge-info ml-2">' . $this->wandalibs->countAllPesanSedangProsesYanmed() . '</span><small class="text-muted ml-2"> Pesan Sedang Diproses</small>
      </div>
      
      <div class="callout callout-success">
          <span class="info-box-icon bg-success p-2 rounded"><i class="fa fa-check"></i></span>
            <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanSelesaiYanmed() . '</span><small class="text-muted ml-2"> Pesan Sudah Selesai</small>
      </div>



        ';
      // endforeach;
      echo $output;
      echo $showButtonCountPesan;
    } else {
      echo 'not found!';
    }
  }


  function getAllInboxPenunjang()
  {
    $id = $this->input->post('id');
    if (isset($id) and !empty($id)) {
      $query = $this->wandalibs->getAllPesanPenunjang();
      $output = '';
      // foreach ($query as $i) :
      $queryBidang = $this->session->userdata('bidang');
      if ($queryBidang == 'penunjang' or $queryBidang == 'promkes') {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
        <a href="' . base_url('inbox/') . '">
          <span class="btn btn-block btn-sm btn-tosca">&nbsp;Total: ' . $this->wandalibs->countAllPesanPenunjang() . ' pesan pengaduan &nbsp; <i class="fa fa-search"></i></span>
        </a>
      </div>
          ';
      } else {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
              <span class="btn btn-block btn-sm btn-default" style="cursor: no-drop">&nbsp;Total: ' . $this->wandalibs->countAllPesanPenunjang() . ' pesan pengaduan</span>
        </div>
          ';
      }

      $showButtonCountPesan = $btn;

      $output .= '
      <div class="callout callout-danger">
        <h6><i class="fas fa-info"></i> Note:</h6>
        <small class="text-muted">Ini adalah detail Pengaduan Bidang Penunjang.</small>
      </div>
     
      <div class="callout callout-danger">
          <span class="info-box-icon bg-danger p-2 rounded"><i class="fa fa-share"></i></span>
          <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanBelumBalasPenunjang() . '</span> <small class="text-muted ml-2"> Pesan Belum Dibalas</small>
      </div>
      
      <div class="callout callout-info">
          <span class="info-box-icon bg-info p-2 rounded"><i class="fa fa-sync fa-spin"></i></span>
            <span class="badge badge-info ml-2">' . $this->wandalibs->countAllPesanSedangProsesPenunjang() . '</span><small class="text-muted ml-2"> Pesan Sedang Diproses</small>
      </div>
      
      <div class="callout callout-success">
          <span class="info-box-icon bg-success p-2 rounded"><i class="fa fa-check"></i></span>
            <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanSelesaiPenunjang() . '</span><small class="text-muted ml-2"> Pesan Sudah Selesai</small>
      </div>


        ';
      // endforeach;
      echo $output;
      echo $showButtonCountPesan;
    } else {
      echo 'not found!';
    }
  }


  function getAllInboxKeperawatan()
  {
    $id = $this->input->post('id');
    if (isset($id) and !empty($id)) {
      $query = $this->wandalibs->getAllPesanKeperawatan();
      $output = '';
      // foreach ($query as $i) :
      $queryBidang = $this->session->userdata('bidang');
      if ($queryBidang == 'keperawatan' or $queryBidang == 'promkes') {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
        <a href="' . base_url('inbox/') . '">
          <span class="btn btn-block btn-sm btn-tosca">&nbsp;Total: ' . $this->wandalibs->countAllPesanKeperawatan() . ' pesan pengaduan &nbsp; <i class="fa fa-search"></i></span>
        </a>
      </div>
          ';
      } else {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
              <span class="btn btn-block btn-sm btn-default" style="cursor: no-drop">&nbsp;Total: ' . $this->wandalibs->countAllPesanKeperawatan() . ' pesan pengaduan</span>
        </div>
          ';
      }

      $showButtonCountPesan = $btn;

      $output .= '
      <div class="callout callout-danger">
        <h6><i class="fas fa-info"></i> Note:</h6>
        <small class="text-muted">Ini adalah detail Pengaduan Bidang Keperawatan.</small>
      </div>
     
      <div class="callout callout-danger">
          <span class="info-box-icon bg-danger p-2 rounded"><i class="fa fa-share"></i></span>
          <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanBelumBalasKeperawatan() . '</span> <small class="text-muted ml-2"> Pesan Belum Dibalas</small>
      </div>
      
      <div class="callout callout-info">
          <span class="info-box-icon bg-info p-2 rounded"><i class="fa fa-sync fa-spin"></i></span>
            <span class="badge badge-info ml-2">' . $this->wandalibs->countAllPesanSedangProsesKeperawatan() . '</span><small class="text-muted ml-2"> Pesan Sedang Diproses</small>
      </div>
      
      <div class="callout callout-success">
          <span class="info-box-icon bg-success p-2 rounded"><i class="fa fa-check"></i></span>
            <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanSelesaiKeperawatan() . '</span><small class="text-muted ml-2"> Pesan Sudah Selesai</small>
      </div>


        ';
      // endforeach;
      echo $output;
      echo $showButtonCountPesan;
    } else {
      echo 'not found!';
    }
  }


  function getAllInboxUmum()
  {
    $id = $this->input->post('id');
    if (isset($id) and !empty($id)) {
      $query = $this->wandalibs->getAllPesanUmum();
      $output = '';
      // foreach ($query as $i) :
      $queryBidang = $this->session->userdata('bidang');
      if ($queryBidang == 'umum' or $queryBidang == 'promkes') {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
        <a href="' . base_url('inbox/') . '">
          <span class="btn btn-block btn-sm btn-tosca">&nbsp;Total: ' . $this->wandalibs->countAllPesanUmum() . ' pesan pengaduan &nbsp; <i class="fa fa-search"></i></span>
        </a>
      </div>
          ';
      } else {
        $btn = '
        <div class="row justify-content-center mb-2 mt-5">
              <span class="btn btn-block btn-sm btn-default" style="cursor: no-drop">&nbsp;Total: ' . $this->wandalibs->countAllPesanUmum() . ' pesan pengaduan</span>
        </div>
          ';
      }

      $showButtonCountPesan = $btn;

      $output .= '
      <div class="callout callout-danger">
        <h6><i class="fas fa-info"></i> Note:</h6>
        <small class="text-muted">Ini adalah detail Pengaduan Bidang Umum.</small>
      </div>
     
      <div class="callout callout-danger">
          <span class="info-box-icon bg-danger p-2 rounded"><i class="fa fa-share"></i></span>
          <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanBelumBalasUmum() . '</span> <small class="text-muted ml-2"> Pesan Belum Dibalas</small>
      </div>
      
      <div class="callout callout-info">
          <span class="info-box-icon bg-info p-2 rounded"><i class="fa fa-sync fa-spin"></i></span>
            <span class="badge badge-info ml-2">' . $this->wandalibs->countAllPesanSedangProsesUmum() . '</span><small class="text-muted ml-2"> Pesan Sedang Diproses</small>
      </div>
      
      <div class="callout callout-success">
          <span class="info-box-icon bg-success p-2 rounded"><i class="fa fa-check"></i></span>
            <span class="badge badge-success ml-2">' . $this->wandalibs->countAllPesanSelesaiUmum() . '</span><small class="text-muted ml-2"> Pesan Sudah Selesai</small>
      </div>


        ';
      // endforeach;
      echo $output;
      echo $showButtonCountPesan;
    } else {
      echo 'not found!';
    }
  }





  // function getAllInboxPenunjang()
  // {
  //   $id = $this->input->post('id');
  //   if (isset($id) and !empty($id)) {
  //     $query = $this->wandalibs->getAllPesan();
  //     $output = '';
  //     // foreach ($query as $i) :

  //     $output .= '
  //     <div class="callout callout-danger">
  //       <h6><i class="fas fa-info"></i> Note:</h6>
  //       <small class="text-muted">Ini adalah detail Pengaduan Bidang Penunjang.</small>
  //     </div>

  //     <div class="callout callout-warning">
  //         <span class="info-box-icon bg-warning p-2 rounded"><i class="far fa-envelope"></i></span>
  //           <small class="text-muted ml-2">Belum Dibalas: ' . $this->wandalibs->countAllPesan() . ' Pesan</small>
  //     </div>

  //       ';
  //     // endforeach;
  //     echo $output;
  //   } else {
  //     echo 'not found!';
  //   }
  // }
}
