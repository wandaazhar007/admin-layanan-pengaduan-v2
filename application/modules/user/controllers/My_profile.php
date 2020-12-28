<?php defined('BASEPATH') or exit('no direct script access allowed');

class My_profile extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_user', 'p');
    $this->load->library('form_validation');
  }

  function getProfileUser($id)
  {
    $query = $this->db->get_where('tb_user_admin', ['id' => $id])->row_array();
    $data['title']      = 'Hallo ' . $query['nama'] . '';
    $data['contents']   = 'my_profile';
    $data['getProfileUser'] = $this->p->getProfileUser($id);

    $this->load->view('templates/core', $data);
  }

  function update($id)
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required'    => '*Nama lengkap wajib diisi'
    ]);;
    $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
      'required'    => '*Bidang user wajib diisi'
    ]);
    $this->form_validation->set_rules('user_access', 'Hak akses', 'required', [
      'required'    => '*Hak akses user wajib diisi'
    ]);

    if ($this->form_validation->run() == true) {
      $nama         = htmlspecialchars($this->input->post('nama', true));
      $no_hp        = htmlspecialchars($this->input->post('no_hp', true));
      $email        = htmlspecialchars($this->input->post('email', true));
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
        <i class="icon fa fa-check"></i><b>Berhasil.</b> Data Anda berhasil diupdate
      </div>');
      redirect('user/my_profile/getProfileUser/' . $id);
    } else {
      $data['title']      = 'Edit User';
      $data['contents']   = 'my_profile';
      $data['getProfileUser'] = $this->p->getProfileUser($id);

      $this->load->view('templates/core', $data);
    }
  }

  function getFotoProfile($id)
  {
    $data['title']    = $this->session->userdata('nama');
    $data['getFotoProfile'] = $this->p->getFotoProfile($id);

    $this->load->view('detail_foto_profile', $data);
  }
}
