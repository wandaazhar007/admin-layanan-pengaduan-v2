<?php defined('BASEPATH') or exit('no direct script access allowed');

class Pelapor extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_pelapor', 'p');
    $this->load->library('form_validation');
    $this->load->library('datatables');
  }

  function index()
  {
    $data['title']              = 'Data Pelapor';
    $data['contents']           = 'list_pelapor';
    $data['getAllDataPelapor']  = $this->p->getAllDataPelapor();

    $this->load->view('templates/core', $data);
  }


  function getAllTablePelapor()
  {

    $list = $this->p->datatables_getAllTablePelapor();
    $getAllDataPelapor = $this->p->getAllDataPelapor();
    $data = array();
    $no = 1;
    foreach ($list as $value) {
      foreach ($getAllDataPelapor as $u) :
        $foto =  '<a href="' . base_url('pelapor/getFotoProfile/') . $value['id'] . '" data-toggle="lightbox"><img src="' . base_url() . 'assets/img/profile-user/' . $value['foto'] . '" style="width: 50px; height: 50px;"></a>';

        $queryAction = '<a href="#">
        <button class="btn btn-xs btn-success view_history_pelapor" id="' . $value['id'] . '"><i class="fa fa-search"></i>&nbsp;History</button>
        </a>';

      endforeach;


      $row = array();
      $row[] = $no++;
      $row[] = $value['nama'];
      $row[] = $value['no_hp'];
      $row[] = $value['email'];
      // $row[] = $jumlah;
      $row[] = $foto;
      // $action = $queryAction;
      $row[] = $queryAction;
      $data[] = $row;
    }
    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->p->countAll(),
      "recordsFiltered" => $this->p->countFiltered(),
      "data" => $data
    );
    echo json_encode($output);
  }

  function getDetailPelaporResult()
  {
    $id_user = $this->input->post('id_user');
    if (isset($id_user) and !empty($id_user)) {
      $query = $this->p->getHistoryPelapor($id_user);
      $email = $query['email'];
      $nama2 = $query['nama'];
      $output = '';
      $output .= '
        <div class="">
        <table class="table-modal-forward">
          <tr>
            <td width="150px"><span class="badge badge-btn">Nama</span></td>
            <td width="50px">:</td>
            <td width="400px"><span class="badge badge-btn">' . $nama2 . '</span></td>
          </tr>
          <tr>
            <td width="150px"><span class="badge badge-btn">Email</span></td>
            <td width="50px">:</td>
            <td width="400px"><span class="badge badge-btn">' . $email . '</span></td>
          </tr>
          <tr>
            <td width="150px"><span class="badge badge-btn">Jumlah Pengaduan</span></td>
            <td width="50px">:</td>
            <td width="400px"><a href="' . base_url('inbox/getAllPesanByEmail/') . $id_user . '"><span class="badge badge-success ml-2"><i class="fa fa-envelope"></i> &nbsp; ' . $this->wandalibs->countAllPesanByIdUser($id_user) . ' pesan &nbsp;</span>&nbsp;<span class="badge badge-success"><i class="fa fa-search"></i><span></a></td>
          </tr>
        </table>
      </div>
                ';

      // endforeach;
      echo $output;
    } else {
      echo 'not founds';
    }
  }

  // function detail($id)
  // {
  //   $data['title']              = 'Data Pelapor';
  //   $data['contents']           = 'list_pelapor';
  //   $data['getPelaporById']  = $this->p->getPelaporById($id);

  //   $this->load->view('templates/core', $data);
  // }

  function getFotoProfile($id)
  {
    $data['title']    = $this->session->userdata('nama');
    $data['getFotoProfile'] = $this->p->getFotoProfile($id);

    $this->load->view('detail_foto_profile', $data);
  }
}
