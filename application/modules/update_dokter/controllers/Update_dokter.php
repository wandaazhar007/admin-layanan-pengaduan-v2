<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_dokter extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('wandalibs');
    $this->load->model('m_update_dokter', 'p');
    $this->load->library('datatables');
    $this->load->library('form_validation');
  }

  function index()
  {
    $data['title']      = 'Update Jadwal Dokter';
    $data['contents']   = 'list_update_dokter';

    $this->load->view('templates/core', $data);
  }

  function getAllTable()
  {
    $query = $this->p->get_dataTables();
    $data = array();
    $no = 1;
    foreach ($query as $i) {
      // var_dump($i['foto']);
      // die;
      $foto =  '<a href="' . base_url('update_dokter/getFotoProfile/') . $i['id'] . '" data-toggle="lightbox"><img src="' . base_url() . 'assets/img/profile-dokter/' . $i['foto'] . '" style="width: 50px; height: 50px;"></a>';
      $queryAction = '<a href="' . base_url('update_dokter/detail/') . $i['id'] . '">
        <button class="btn btn-xs btn-success"><i class="fa fa-search"></i>&nbsp;Edit</button>
        </a>';
      $row = array();
      $row[] = $no++;
      $row[] = $i['poliklinik'];
      $row[] = $i['nama'];
      $row[] = $i['senin'];
      $row[] = $i['selasa'];
      $row[] = $i['rabu'];
      $row[] = $i['kamis'];
      $row[] = $i['jumat'];
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

  function detail($id)
  {
    $data['title']        = 'Form Edit Data Dokter';
    $data['contents']     = 'form_edit_dokter';
    $data['getDataById']  = $this->p->getDataById($id);

    $this->load->view('templates/core', $data);
  }

  function getFotoProfile($id)
  {
    $data['title']    = $this->session->userdata('nama');
    $data['getFotoProfile'] = $this->p->getFotoProfile($id);

    $this->load->view('detail_foto_profile', $data);
  }

  function insert()
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required'      => '*Nama lengkap harus diisi!'
    ]);
    $this->form_validation->set_rules('poliklinik', 'Klinik', 'required', [
      'required'      => '*Nama Klinik harus diisi'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title']    = 'Form tambah data dokter';
      $data['contents'] = 'form_tambah_dokter';

      $this->load->view('templates/core', $data);
    } else {
      $nama = htmlspecialchars($this->input->post('nama', true));
      $poliklinik = htmlspecialchars($this->input->post('poliklinik', true));

      $uploadGambar = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/profile-dokter/';
        $config['allowed_types']    = 'gif|jpg|png|pdf';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      } else {
        $uploadGambar = 'default-dokter.png';
      }
      $data = [
        'nama'        => $nama,
        'poliklinik'  => $poliklinik,
        'senin'       => htmlspecialchars($this->input->post('senin', true)),
        'selasa'      => htmlspecialchars($this->input->post('selasa', true)),
        'rabu'        => htmlspecialchars($this->input->post('rabu', true)),
        'kamis'       => htmlspecialchars($this->input->post('kamis', true)),
        'jumat'       => htmlspecialchars($this->input->post('jumat', true)),
        'foto'        => $uploadGambar
      ];

      $this->db->insert('tb_jadwal_dokter', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><small><b>Yeay!.</b> Data dokter berhasil ditambah</small>
    </div>');
      redirect('update_dokter/insert');
    }
  }

  function update($id)
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required'      => '*Nama lengkap harus diisi!'
    ]);
    $this->form_validation->set_rules('poliklinik', 'Klinik', 'required', [
      'required'      => '*Nama Klinik harus diisi'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title']    = 'Form tambah data dokter';
      $data['contents'] = 'form_edit_dokter';
      $data['getDataById']  = $this->p->getDataById($id);

      $this->load->view('templates/core', $data);
    } else {
      $nama = htmlspecialchars($this->input->post('nama', true));
      $poliklinik = htmlspecialchars($this->input->post('poliklinik', true));

      $uploadGambar = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/profile-dokter/';
        $config['allowed_types']    = 'gif|jpg|png|pdf';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      } else {
        $query = $this->db->get_where('tb_jadwal_dokter', ['id' => $id])->row_array();
        $uploadGambar = $query['foto'];
      }
      $data = [
        'nama'        => $nama,
        'poliklinik'  => $poliklinik,
        'senin'       => htmlspecialchars($this->input->post('senin', true)),
        'selasa'      => htmlspecialchars($this->input->post('selasa', true)),
        'rabu'        => htmlspecialchars($this->input->post('rabu', true)),
        'kamis'       => htmlspecialchars($this->input->post('kamis', true)),
        'jumat'       => htmlspecialchars($this->input->post('jumat', true)),
        'foto'        => $uploadGambar
      ];

      $this->db->where('id', $id);
      $this->db->update('tb_jadwal_dokter', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><small><b>Yeay!.</b> Data dokter berhasil diupdate</small>
    </div>');
      redirect('update_dokter/update/' . $id);
    }
  }
}
