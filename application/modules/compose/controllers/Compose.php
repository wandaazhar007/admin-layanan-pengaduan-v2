<?php defined('BASEPATH') or exit('No direct script access allowed');

class Compose extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->library('form_validation');
  }

  /* Note: Function untuk kirim email ke pelapor | Author: wandaazhar@gmail.com */
  function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
      'required'    => '*Email harus diisi',
      'valid_email' => '*Alamat Email tidak valid'
    ]);
    $this->form_validation->set_rules('subject', 'Subjek', 'required', [
      'required'    => '*Subjek tidak boleh kosong'
    ]);
    $this->form_validation->set_rules('pesan_keluar', 'Pesan', 'required|min_length[10]', [
      'required'    => '*Isi pesan tidak boleh kosong',
      'min_length'  => '*Isi pesan terlalu singkat'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title']                  = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'compose';

      $this->load->view('templates_message/core', $data);
    } else {
      $email  = htmlspecialchars($this->input->post('email', true));
      $pesan  = htmlspecialchars($this->input->post('pesan_keluar', true));
      $subject  = htmlspecialchars($this->input->post('subject', true));
      $token = $this->wandalibs->_getToken(32);

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
        'email'           => $email,
        'pesan_keluar'    => $pesan,
        'file'            => $uploadGambar,
        'tgl_masuk'       => time(),
        'subject'         => $subject
      ];

      $this->db->insert('pesan', $data); /* Note: Insert data ke tabel pesan | Author: wandaazhar@gmail.com */
      $this->wandalibs->_sendEmail($token, 'compose'); /* Note: menjalankan function send email yang ada di library | Author: wandaazhar@gmail.com */
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span><small><b>Berhasil! - </b> Email Anda terkirim ke <b><i>' . $email . ' </i></b></span></small>
          </div>');
      redirect('inbox');
    }
  }
}
