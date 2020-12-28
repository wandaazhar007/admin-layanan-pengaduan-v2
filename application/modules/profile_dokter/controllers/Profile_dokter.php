<?php defined('BASEPATH') or exit('no direct script access allowed');

class Profile_dokter extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_profile_dokter', 'p');
    $this->load->library('form_validation');
    $this->load->library('datatables');
    // $this->wandalibs->_checkLoginSession();
  }

  function index()
  {
    $data['title']              = 'Data Dokter';
    $data['contents']           = 'list_dokter';
    $data['getAllDataDokter']  = $this->p->getAllDataDokter();

    $this->load->view('templates/core', $data);
  }

  function getFotoProfile($id)
  {
    $data['title']    = $this->session->userdata('nama');
    $data['getFotoProfile'] = $this->p->getFotoProfile($id);

    $this->load->view('detail_foto_profile', $data);
  }

  function getAllTablePelapor()
  {

    $list = $this->p->datatables_getAllTableDokter();
    $getAllDataPelapor = $this->p->getAllDataPelapor();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $value) {
      foreach ($getAllDataPelapor as $u) :
        $foto =  '<a href="' . base_url('pelapor/getFotoProfile/') . $value['id'] . '" data-toggle="lightbox"><img src="' . base_url() . 'assets/img/profile-user/' . $value['foto'] . '" style="width: 50px; height: 50px;"></a>';

        if ($this->session->userdata('nama') == 'user') {
          $queryAction = '<a href="#">
      <button class="btn btn-xs btn-info" id="tombol-edit" data-toggle="modal" data-target="#modal-secondary"><i class="fa fa-edit"></i>&nbsp;Edit</button>
      </a>';
        } else {
          $queryAction = '<a href="#">
        <button class="btn btn-xs btn-info view_data" id="' . $u['id'] . '"><i class="fa fa-edit"></i>&nbsp;Edit</button>
        </a>';
        }
      endforeach;


      $row = array();
      $row[] = $no++;
      $row[] = $value['nama'];
      $row[] = $value['no_hp'];
      $row[] = $value['email'];
      $row[] = $foto;
      $action = $queryAction;
      $row[] = $action;
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
}
