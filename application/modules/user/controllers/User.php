<?php defined('BASEPATH') or exit('no direct script access allowed');

class User extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_user', 'p');
    $this->load->library('form_validation');
    $this->load->library('datatables');
  }

  function getAllTable()
  {

    $list = $this->p->datatables_getAllTable();
    // $getAllDataPelapor = $this->p->getAllData();
    $data = array();
    $no = 1;
    foreach ($list as $value) {
      // foreach ($getAllDataPelapor as $u) :
      // $foto =  '<a href="' . base_url('user/getFotoProfile/') . $value['id'] . '" data-toggle="lightbox"><img src="' . base_url() . 'assets/img/profile-user/' . $value['foto'] . '" style="width: 50px; height: 50px;"></a>';

      $queryAction = '<a href="' . base_url('user/profileUser/') . $value['id'] . '">
        <button class="btn btn-xs btn-success view_history_pelapor" id="' . $value['email'] . '"><i class="fa fa-search"></i>&nbsp;Detail</button>
        </a>';

      // endforeach;


      $row = array();
      $row[] = $no++;
      $row[] = $value['nama'];
      $row[] = $value['no_hp'];
      $row[] = $value['email'];
      $row[] = $value['bidang'];
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

  function index()
  {
    if ($this->session->userdata('user_access') != 'administrator') {
      redirect('dashboard');
    }
    $email = $this->session->userdata('email');
    $data['title']      = 'Data User Admin';
    $data['contents']   = 'list_user';
    $data['getAllUser'] = $this->p->getAllUser();
    $data['lastLogin'] = $this->wandalibs->_lastLoginUserById($email);
    $this->load->view('templates/core', $data);
  }

  function profileUser($id)
  {
    $query = $this->db->get_where('tb_user_admin', ['id' => $id])->row_array();
    $data['title']      = $query['email'];
    $data['contents']   = 'profile_user';
    $data['getProfileUser'] = $this->p->getProfileUser($id);
    $this->load->view('templates/core', $data);
  }

  function getFotoProfile($id)
  {
    $query = $this->db->get_where('tb_user_admin', ['id' => $id])->row_array();
    $data['title']    = $query['email'];
    $data['getFotoProfile'] = $this->p->getFotoProfile($id);

    $this->load->view('detail_foto_profile', $data);
  }

  function insertUser()
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required'    => '*Nama lengkap wajib diisi'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_user_admin.email]', [
      'required'    => '*Email wajib diisi',
      'valid_email' => '*Email tidak valid',
      'is_unique'   => '*Email sudah terdaftar'
    ]);
    $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|trim|is_unique[tb_user_admin.no_hp]', [
      'required'    => '*No handphone wajib diisi',
      'is_unique'   => '*No handphone sudah terdaftar'
    ]);
    $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
      'required'    => '*Bidang user wajib diisi'
    ]);
    $this->form_validation->set_rules('user_access', 'Hak akses', 'required', [
      'required'    => '*Hak akses user wajib diisi'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', [
      'required'    => '*Password wajib diisi',
      'min_length'  => '*Password minimal 6 karakter',
      'matches'     => '*Password tidak sama'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password]', [
      'required'    => '*Password wajib diisi',
      'min_length'  => '*Password minimal 6 karakter',
      'matches'     => '*Password tidak sama'
    ]);

    if ($this->form_validation->run() == false) {

      $data['title']      = '';
      $data['contents']   = 'form_add_user';

      $this->load->view('templates/core', $data);
    } else {
      $nama         = htmlspecialchars($this->input->post('nama', true));
      $no_hp        = htmlspecialchars($this->input->post('no_hp', true));
      $email        = htmlspecialchars($this->input->post('email', true));
      $bidang       = htmlspecialchars($this->input->post('bidang', true));
      $user_access  = htmlspecialchars($this->input->post('user_access', true));
      $password     = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);

      $uploadGambar   = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'gif|jpg|png|pdf';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      } else {
        $uploadGambar = 'default-avatar.png';
      }

      $data = [
        'nama'        => $nama,
        'email'       => $email,
        'no_hp'       => $no_hp,
        'password'    => $password,
        'bidang'      => $bidang,
        'user_access' => $user_access,
        'password'    => $password,
        'date_created' => time(),
        'active'      => 'tidak aktif',
        'foto'        => $uploadGambar
      ];

      if (!function_exists('random_bytes')) {
        function random_bytes($length = 6)
        {
          $characters = '0123456789';
          $characters_length = strlen($characters);
          $output = '';
          for ($i = 0; $i < $length; $i++)
            $output .= $characters[rand(0, $characters_length - 1)];

          return $output;
        }
      }
      $token = base64_encode(random_bytes(32));
      $dataToken = [
        'nama'              => $nama,
        'email'             => $email,
        'token'             => $token,
        'date_created'      => time()
      ];
      $this->wandalibs->_sendEmail($token, 'verify');
      $this->db->insert('form_token', $dataToken);
      $this->db->insert('tb_user_admin', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><b>Berhasil.</b>Silahkan cek email ' . $email . ' untuk proses verifikasi
    </div>');
      redirect('user/insertUser');
    }
  }

  function update($id)
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required'    => '*Nama lengkap wajib diisi'
    ]);
    $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
      'required'    => '*Bidang user wajib diisi'
    ]);
    $this->form_validation->set_rules('user_access', 'Hak akses', 'required', [
      'required'    => '*Hak akses user wajib diisi'
    ]);

    if ($this->form_validation->run() == true) {
      $nama         = htmlspecialchars($this->input->post('nama', true));
      $no_hp        = htmlspecialchars($this->input->post('no_hp', true));
      $bidang       = htmlspecialchars($this->input->post('bidang', true));
      $user_access  = htmlspecialchars($this->input->post('user_access', true));

      $uploadGambar   = $_FILES['foto']['name'];
      if ($uploadGambar) {
        $config['upload_path']      = './assets/img/profile-user/';
        $config['allowed_types']    = 'gif|jpg|png|pdf';
        $config['max_size']         = '2048';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      } else {
        $query = $this->db->get_where('tb_user_admin', ['id' => $id])->row_array();
        $uploadGambar = $query['foto'];
      }

      $data = [
        'nama'        => $nama,
        'no_hp'       => $no_hp,
        'bidang'      => $bidang,
        'user_access' => $user_access,
        'foto'        => $uploadGambar
      ];

      $this->db->where('id', $id);
      $this->db->update('tb_user_admin', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i><b>Berhasil.</b> Data ' . $nama . ' berhasil diupdate
      </div>');
      redirect('user/profileUser/' . $id);
    } else {
      $query = $this->db->get_where('tb_user_admin', ['id' => $id])->row_array();
      $data['title']      = $query['email'];
      $data['contents']   = 'profile_user';
      $data['getProfileUser'] = $this->p->getProfileUser($id);

      $this->load->view('templates/core', $data);
    }
  }
}
