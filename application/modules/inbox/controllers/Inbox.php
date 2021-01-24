<?php defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_inbox', 'p');
  }

  function index()
  {
    // $this->wandalibs->restrictUserAccess($this->session->userdata('bidang'));
    $bidang = $this->session->userdata('bidang');
    // var_dump($bidang);
    // die;
    if ($bidang == 'promkes') {
      $data['title']                  = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getAllInboxPromkes();

      $this->load->view('templates_message/core', $data);
    } else {
      if ($bidang == 'pelayanan medis') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_inbox';
        $data['getAllInbox']            = $this->p->getAllInboxYanmed();
        $this->load->view('templates_message/core', $data);
      }
      if ($bidang == 'penunjang') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_inbox';
        $data['getAllInbox']            = $this->p->getAllInboxPenunjang();
        $this->load->view('templates_message/core', $data);
      }
      if ($bidang == 'keperawatan') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_inbox';
        $data['getAllInbox']            = $this->p->getAllInboxKeperawatan();
        $this->load->view('templates_message/core', $data);
      }

      if ($bidang == 'umum' or $bidang == 'administrator') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_inbox';
        $data['getAllInbox']            = $this->p->getAllInboxUmum();
        $this->load->view('templates_message/core', $data);
      }
    }
  }

  function getAllInboxPenunjang()
  {
    $query = $this->db->get_where('pesan', ['bidang' => 'penunjang'])->row_array();
    $this->wandalibs->restrictUserAccess($query['bidang']);
    $data['title']                    = 'Layanan Pengaduan';
    $data['contentsMessage']        = 'list_inbox_bidang';
    $data['getAllInbox']            = $this->p->getAllInboxPenunjang();

    $this->load->view('templates_message/core', $data);
  }

  function getAllInboxYanmed()
  {
    $query = $this->db->get_where('pesan', ['bidang' => 'pelayanan medis'])->row_array();
    $this->wandalibs->restrictUserAccess($query['bidang']);
    $data['title']                    = 'Layanan Pengaduan';
    $data['contentsMessage']        = 'list_inbox_bidang';
    $data['getAllInbox']            = $this->p->getAllInboxYanmed();

    $this->load->view('templates_message/core', $data);
  }

  function getAllInboxKeperawatan()
  {
    $query = $this->db->get_where('pesan', ['bidang' => 'keperawatan'])->row_array();
    $this->wandalibs->restrictUserAccess($query['bidang']);
    $data['title']                  = 'Layanan Pengaduan';
    $data['contentsMessage']        = 'list_inbox_bidang';
    $data['getAllInbox']            = $this->p->getAllInboxKeperawatan();

    $this->load->view('templates_message/core', $data);
  }

  function getAllInboxUmum()
  {
    $query = $this->db->get_where('pesan', ['bidang' => 'umum'])->row_array();
    $this->wandalibs->restrictUserAccess($query['bidang']);
    $data['title']                  = 'Layanan Pengaduan';
    $data['contentsMessage']        = 'list_inbox_bidang';
    $data['getAllInbox']            = $this->p->getAllInboxUmum();

    $this->load->view('templates_message/core', $data);
  }

  function getFormForward()
  {
    $idPesan = $this->input->post('idPesan');
    if (isset($idPesan) and !empty($idPesan)) {
      $records = $this->p->getFormForward($idPesan);
      $output = '';
      foreach ($records as $i) {
        $output .= '
      <form role="form" action="' . base_url('inbox/forwardPesan') . '" method="post">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Nama Pengirim</label>
              <input type="hidden" name="id" value="' . $i['id'] . '">
              <input type="text" name="nama" class="form-control" value="' . $i['nama'] . '" readonly>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Email</label>
              <input type="text" name="email" class="form-control" value="' . $i['email'] . '" readonly>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group input-group-sm">
              <label class="text-sm mb-0">Isi Pesan:</label>
              <textarea class="form-control" rows="3" name="pesan_masuk" readonly>' . $i['pesan_masuk'] . '</textarea>
            </div>
          </div>
          <div class="col-sm-6">
              <div class="form-group input-group-sm">
                <label class="text-sm mb-0">Pilih Bidang:</label>
                <select class="form-control" style="width: 100%;" name="bidang" required>
                  <option></option>
                  <option value="pelayanan medis">Pelayanan Medis</option>
                  <option value="penunjang">Penunjang</option>
                  <option value="keperawatan">Keperawatan</option>
                  <option value="umum">Umum</option>
                  <option value="keuangan">Keuangan</option>
                  <option value="costumer services">Costumer Services</option>
                </select>
              </div>
            </div>
          <div class="modal-footer pull-right">
            <button type="submit" class="btn btn-default"><i class="fa fa-share"></i> Forward Pesan</button>
          </div>
        </div>
      </form>
						    ';
      }
      echo $output;
    } else {
      echo 'not founds';
    }
  }

  function forwardPesan()
  {
    $id     = htmlspecialchars($this->input->post('id', true));
    $bidang = htmlspecialchars($this->input->post('bidang', true));
    $query3 = $this->db->get_where('tb_user_admin', ['bidang' => $bidang])->row_array();
    $email = $query3['email'];
    // var_dump($emailBidang);
    // die;
    $data = [
      'bidang'        => $bidang,
      'status_proses' => 'sudah diterima',
      'tgl_forward'   => time()
    ];
    $this->db->where('id', $id);
    $this->db->update('pesan', $data);
    $this->wandalibs->_sendEmail2($email, 'forward');
    $query = $this->db->get_where('pesan', ['id' => $id])->row_array();
    $bidangAlert = $query['bidang'];
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Berhasil.</b>Pesan sudah di forward ke bidang <b>' . $bidangAlert . ' </b>
    </div>');
    redirect('inbox');
  }

  function getHistoryForward()
  {
    $idPesan = $this->input->post('idPesan');
    if (isset($idPesan) and !empty($idPesan)) {
      $records = $this->p->getHistoryForward($idPesan);
      $output = '';
      foreach ($records as $i) {
        if ($i['tgl_balas'] == null) {
          $tgl_balas = 'Belum Dibalas';
        } else {
          $tgl_balas = date('d F Y | h:i:s', $i['tgl_balas']);
        }
        if ($i['tgl_selesai'] == null) {
          $tgl_selesai = 'Masih Dalam Proses';
        } else {
          $tgl_selesai = date('d F Y | h:i:s', $i['tgl_selesai']);
        }
        $output .= '
          <div class="">
            <table class="table-modal-forward">
              <tr>
                <td width="150px"><span class="badge badge-btn">Nama</span></td>
                <td width="50px">:</td>
                <td width="400px"><span class="badge badge-btn">' . $i['nama'] . '</span></td>
              </tr>
              <tr>
                <td width="150px"><span class="badge badge-btn">Email</span></td>
                <td width="50px">:</td>
                <td width="400px"><span class="badge badge-btn">' . $i['email'] . '</span></td>
              </tr>
              <tr>
                <td width="150px"><span class="badge badge-btn">Status Proses</span></td>
                <td width="50px">:</td>
                <td width="400px"><span class="badge badge-danger ml-2">' . $tgl_balas . '</span></td>
              </tr>
              <tr>
                <td width="150px"><span class="badge badge-btn">Tanggal Masuk</span></td>
                <td width="50px">:</td>
                <td width="400px"><span class="badge badge-btn">' . date('d F Y | h:i:s', $i['tgl_masuk']) . '</span></td>
              </tr>
              <tr>
                <td width="150px"><span class="badge badge-btn">Tanggal Diforward</span></td>
                <td width="50px">:</td>
                <td width="400px"><span class="badge badge-btn">' . date('d F Y | h:i:s', $i['tgl_forward']) . '</span></td>
              </tr>
              <tr>
                <td width="150px"><span class="badge badge-btn">Tanggal Dibalas</span></td>
                <td width="50px">:</td>
                <td width="400px"><span class="badge badge-btn">' . $tgl_balas . '</span></td>
              </tr>
              <tr>
                <td width="150px"><span class="badge badge-btn">Tanggal Selesai</span></td>
                <td width="50px">:</td>
                <td width="400px"><span class="badge badge-btn">' . $tgl_selesai . '</span></td>
              </tr>
            </table>
          </div>
        ';
      }
      echo $output;
    } else {
      echo 'not founds';
    }
  }

  function getPesanById($id)
  {
    $query = $this->db->get_where('pesan', ['id' => $id])->row_array();
    $query2 = $this->db->get_where('pesan', ['id' => $id])->row_array();
    $id_user = $query2['id_user'];

    $data['title']                      = 'Layanan Pengaduan';
    $data['contentsMessage']            = 'detail_inbox';
    $data['getProfileUser']             = $this->p->getProfileUser($id_user);
    $data['getJumlahPengaduanByidUser']  = $this->p->getJumlahPengaduanByidUser($id_user);
    $data['getPesanById']               = $this->p->getPesanById($id);

    $this->load->view('templates_message/core', $data);
  }

  function searchPesan()
  {
    $keyword = htmlspecialchars($this->input->post('keyword', true));

    $data['title']              = $keyword;
    $data['contentsMessage']    = 'list_result';
    $data['getAllInbox']            = $this->p->getAllInboxPromkes();
    $data['searchPesan']        = $this->p->searchPesan($keyword);
    $this->load->view('templates_message/core', $data);
  }

  function balasPesan()
  {
    $id = htmlspecialchars($this->input->post('id', true));
    $pesan_keluar = htmlspecialchars($this->input->post('pesan_keluar', true));
    $email = htmlspecialchars($this->input->post('email', true));

    $uploadGambar   = $_FILES['foto']['name'];
    if ($uploadGambar) {
      $config['upload_path']      = './assets/img/file-pengaduan';
      $config['allowed_types']    = 'gif|jpg|png|pdf';
      $config['max_size']         = '2048';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto')) {
        $this->upload->data('file_name');
      } else {
        echo $this->upload->display_errors();
      }
    } else {
      $uploadGambar = 'no-image.png';
    }

    $data = [
      'pesan_keluar'  => $pesan_keluar,
      'file'          => $uploadGambar,
      'status_proses' => 'sedang diproses',
      'tgl_balas'     => time()
    ];

    $this->db->where('id', $id);
    $this->db->update('pesan', $data);
    $this->wandalibs->_sendEmail($email, 'balas_inbox');
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Success.</b>Pesan sudah berhasil di balas
    </div>');
    redirect('inbox');
  }

  function fileTerkirim($file)
  {
    $query = $this->db->get_where('pesan', ['file' => $file])->row_array();
    $email = $query['email'];

    $data['title']                      = $this->input->post('nama');
    $data['contentsMessage']            = 'file_terkirim';
    $data['getProfileUser']             = $this->p->getProfileUser($email);
    $data['getJumlahPengaduanByEmail']  = $this->p->getJumlahPengaduanByEmail($email);
    $data['getFileTerkirim']            = $this->p->getFileTerkirim($file);

    $this->load->view('templates_message/core', $data);
  }

  function filePengadu($file)
  {
    $query = $this->db->get_where('pesan', ['file' => $file])->row_array();
    $email = $query['email'];

    $data['title']                      = $this->input->post('nama');
    $data['contentsMessage']            = 'file_pengadu';
    $data['getProfileUser']             = $this->p->getProfileUser($email);
    $data['getJumlahPengaduanByEmail']  = $this->p->getJumlahPengaduanByEmail($email);
    $data['getFilePengadu']             = $this->p->getFilePengadu($file);

    $this->load->view('templates_message/core', $data);
  }

  function getAllPesanByIdUser($id_user)
  {
    $query = $this->db->get_where('tb_user', ['id' => $id_user])->row_array();
    $data['title']                = $query['email'];
    $data['contents']             = 'list_jumlah_pengaduan_by_user';
    $data['getAllPesanByIdUser']   = $this->p->getAllPesanByIdUser($id_user);

    $this->load->view('templates/core', $data);
  }

  function getPesanBelumDibalasYanmed()
  {
    $userdata = $this->session->userdata('bidang');
    if ($userdata == 'pelayanan medis') {
      // if ($userdata == 'administrator') {
      $data['title']                  = 'Pesan sudah diterima | Yanmed';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getPesanBelumDibalasYanmed();

      $this->load->view('templates_message/core', $data);
      // }
    }
    if ($userdata == 'administrator') {
      $data['title']                  = 'Pesan sudah diterima | Yanmed';
      $data['contentsMessage']        = 'list_inbox';
      $data['getAllInbox']            = $this->p->getPesanBelumDibalasYanmed();

      $this->load->view('templates_message/core', $data);
    }
    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-check"></i><b>Maaf.</b>Anda tidak diberi akses untuk melihat pesan bidang lain
  </div>');
    redirect('dashboard');
  }
}
