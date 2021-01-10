<?php defined('BASEPATH') or exit('no direct script access allowed');

class Auth extends MX_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    if ($this->session->userdata('nama')) {
      redirect('dashboard');
    }
  }

  /* Note: Function untuk login | Author: wandaazhar@gmail.com */
  function login()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
      'required'        => '*email harus diisi',
      'valid_email'     => '*format email tidak sesuai'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
      'required'    => '*password belum diisi',
      'min_length'   => '*password kurang dari 6 karakter'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title']      = 'Admin Layanan Pengaduan | Login';
      $this->load->view('login', $data);
    } else {

      $captcha_response = trim($this->input->post('g-recaptcha-response', true));
      // var_dump($captcha_response);
      // die;
      if ($captcha_response != '') {
        $keySecret = '6LdoiycaAAAAAGG3f0rN5fh2kw9YfgrMCKeiCyGR';
        $check = [
          'secret'    => $keySecret,
          'response'  => $this->input->post('g-recaptcha-response')
        ];
        $startProccess = curl_init();
        curl_setopt($startProccess, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($startProccess, CURLOPT_POST, true);
        curl_setopt($startProccess, CURLOPT_POSTFIELDS, http_build_query($check));
        curl_setopt($startProccess, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($startProccess, CURLOPT_RETURNTRANSFER, true);

        $receiveData = curl_exec($startProccess);
        $final_response = json_decode($receiveData, true);

        if ($final_response['success']) {
          /* Note: jika form_validation lolos, jalankan function login yang ada di libraries/wandalibs.php | Author: wandaazhar@gmail.com */
          $this->wandalibs->_loginProcess();
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Ups. Maaf Anda belum ceklis recaptcha!
          </div>');
          redirect('auth/login');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Ups. Maaf Anda belum ceklis recaptcha!
          </div>');
        redirect('auth/login');
      }
    }
  }

  /* Note: Function untuk record login user | Author: wandaazhar@gmail.com */
  function loginFirstTime()
  {
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
      'required'    => '*password belum diisi',
      'min_length'   => '*password kurang dari 6 karakter'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title']      = 'Login Layanan Pengaduan';
      // $this->load->view('v_verifikasi', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><small><b>Ups!.</b> Password Anda salah</small>
      </div>');
      redirect('' . $_SERVER['HTTP_REFERER'] . '');
    } else {
      $this->wandalibs->_loginProcessFirstTime();
    }
  }

  /* Note: Function untuk registrasi user menggunakan send email | Author: wandaazhar@gmail.com */
  function registerUser()
  {
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required'    => '*Nama lengkap wajib diisi'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_user_admin.email]', [
      'required'    => '*Email wajib diisi',
      'valid_email' => '*Email tidak valid',
      'is_unique'   => '*Email sudah terdaftar'
    ]);
    $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
      'required'    => '*Bidang user wajib diisi'
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
    $this->form_validation->set_rules('terms', 'Ketentuan', 'required', [
      'required'    => '*Ketentuan belum di checklist'
    ]);

    if ($this->form_validation->run() == false) {

      $data['title']      = 'Registrasi User | Admin Layanan Pengaduan';
      $this->load->view('form_register', $data);
    } else {


      $captcha_response = trim($this->input->post('g-recaptcha-response', true));
      // var_dump($captcha_response);
      // die;
      if ($captcha_response != '') {
        $keySecret = '6LdoiycaAAAAAGG3f0rN5fh2kw9YfgrMCKeiCyGR';
        $check = [
          'secret'    => $keySecret,
          'response'  => $this->input->post('g-recaptcha-response')
        ];
        $startProccess = curl_init();
        curl_setopt($startProccess, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($startProccess, CURLOPT_POST, true);
        curl_setopt($startProccess, CURLOPT_POSTFIELDS, http_build_query($check));
        curl_setopt($startProccess, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($startProccess, CURLOPT_RETURNTRANSFER, true);

        $receiveData = curl_exec($startProccess);
        $final_response = json_decode($receiveData, true);

        if ($final_response['success']) {
          //store data to database
          $nama         = htmlspecialchars($this->input->post('nama', true));
          $email        = htmlspecialchars($this->input->post('email', true));
          $bidang       = htmlspecialchars($this->input->post('bidang', true));
          $password     = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);

          $data = [
            'nama'        => $nama,
            'email'       => $email,
            'password'    => $password,
            'bidang'      => $bidang,
            'user_access' => 'pengguna',
            'foto'        => 'default-avatar.png',
            'password'    => $password,
            'date_created' => time(),
            'active'      => 'tidak aktif'
          ];

          $token = $this->wandalibs->_getToken(32);
          $dataToken = [
            'nama'              => $nama,
            'email'             => $email,
            'token'             => $token,
            'date_created'      => time()
          ];
          $this->wandalibs->_sendEmail($token, 'verify'); /* Note: mengirim token lewat email untuk verifikasi akun  | Author: wandaazhar@gmail.com */
          $this->db->insert('form_token', $dataToken); /* Note: Insert data ke tabel form_token | Author: wandaazhar@gmail.com */
          $this->db->insert('tb_user_admin', $data); /* Note: Insert data ke tabel tb_user_admin | Author: wandaazhar@gmail.com */
          $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-check"></i><small><b>Berhasil.</b>Silahkan cek email ' . $email . ' untuk proses verifikasi</small>
          </div>');
          redirect('auth/login');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Ups. Maaf Anda belum ceklis recaptcha!
          </div>');
          redirect('home');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Ups. Maaf Anda belum ceklis recaptcha!
          </div>');
        redirect('auth/registerUser');
      }
    }
  }

  /* Note: Function untuk verifikasi akun user dengan send email | Author: wandaazhar@gmail.com */
  function pageVerifikasiAkun()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');
    $query = $this->db->get_where('form_token', ['token' => $token])->row_array();

    if ($token != $query['token']) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-exclamation-triangle"></i><small><b>Ups!.</b>Email ' . $email . ' sudah diverifkasi sebelumnya</small>
    </div>');
      redirect('auth/pageBlocked');
    }
    if ($email != $query['email']) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-exclamation-triangle"></i><small><b>Ups!.</b>Email ' . $email . ' sudah tidak terdaftar</small>
    </div>');
      redirect('auth/pageBlocked');
    } else {
      $this->db->set('active', 'aktif');
      $this->db->where('email', $email);
      $this->db->update('tb_user_admin');

      $this->db->delete('form_token', ['email' => $email]);
      $data['title']    = 'Selamat Datang';
      $data['getEmail'] = $this->db->get_where('tb_user_admin', ['email' => $email])->row_object();
      $this->load->view('v_verifikasi', $data);
    }
  }

  /* Note: function untuk lupa password | Author: wandaazhar@gmail.com */
  function forgotPassword()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
      'required'  => '*email belum diisi',
      'valid_email' => '*Format email tidak benar'
    ]);

    if ($this->form_validation->run() == false) {

      $data['title']      = 'Lupa Password | Layanan Pengaduan';
      $this->load->view('forgot_password', $data);
    } else {
      $email = htmlspecialchars($this->input->post('email', true));
      $query = $this->db->get_where('tb_user_admin', ['email' => $email])->row_array();
      $nama = $query['nama'];
      // var_dump($nama);
      // die;

      if ($query['email'] != $email) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-check"></i><small><b>Ups.</b> Email ' . $email . ' tidak terdaftar</small>
        </div>');
        redirect('auth/forgotPassword');
      } else {
        $token = $this->wandalibs->_getToken(32);
        $dataToken = [
          'nama'              => $nama,
          'email'             => $email,
          'token'             => $token,
          'date_created'      => time()
        ];
        /* Note: mengirim token lewat email untuk verifikasi akun  | Author: wandaazhar@gmail.com */
        $this->wandalibs->_sendEmail($token, 'forgot');
        /* Note: insert token ke table form_token  | Author: wandaazhar@gmail.com */
        $this->db->insert('form_token', $dataToken);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="icon fa fa-check"></i><small><b>Berhasil.</b>Silahkan cek email' . $email . ' untuk isi password baru Anda</small>
        </div>');
        redirect('auth/login');
      }
    }
  }

  /* Note: Function untuk menampilkan halaman ubah password baru | Author: wandaazhar@gmail.com */
  function pageResetPassword()
  {
    $email = $this->input->get('email');
    $token = $this->input->get('token');
    $query = $this->db->get_where('form_token', ['token' => $token])->row_array();
    $nama = $query['nama'];
    $emailDb = $query['email'];
    // var_dump($emailDb);
    // die;

    if ($token != $query['token']) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-exclamation-triangle"></i><small><b>Ups!.</b>Email ' . $email . ' sudah diverifkasi sebelumnya</small>
    </div>');
      redirect('auth/pageBlocked');
    }
    if ($email != $query['email']) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-exclamation-triangle"></i><small><b>Ups!.</b>Email ' . $email . ' sudah tidak terdaftar</small>
    </div>');
      redirect('auth/pageBlocked');
    }

    $data['getEmail'] = $emailDb;
    $data['getNama']  = $nama;
    $this->load->view('v_ubah_password', $data);
  }

  function updatePassword()
  {
    $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[6]|matches[new_password2]', [
      'required'    => '*Password belum diisi',
      'matches'     => '*Password tidak sama'
    ]);
    $this->form_validation->set_rules('new_password2', 'Password Baru', 'required|trim|min_length[6]|matches[new_password1]', [
      'required'    => '*Password belum diisi',
      'matches'     => '*Password tidak sama'
    ]);


    if ($this->form_validation->run() == false) {
      // $query = $this->db->get_where('form_token', ['token' => $token])->row_array();
      // $nama = $query['nama'];
      // $emailDb = $query['email'];

      // $data['getEmail'] = $emailDb;
      // $data['getNama']  = $nama;
      // $this->load->view('v_ubah_password');
      redirect('' . $_SERVER['HTTP_REFERER'] . '');
    } else {
      $email = $this->input->post('email');
      $new_password     = password_hash($this->input->post('new_password1', true), PASSWORD_DEFAULT);

      $this->db->set('password', $new_password);
      $this->db->where('email', $email);
      $this->db->update('tb_user_admin');

      $this->db->delete('form_token', ['email' => $email]);

      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i><small><b>Selamat.</b> Password Anda berhasil diupdate</small>
      </div>');
      redirect('auth/login');
    }
  }

  /* Note: Function untuk menampilkan halaman ketentuan | Author: wandaazhar@gmail.com */
  function ketentuanRegisterUserAdmin()
  {
    $data['title']  = 'Ketentuan Registrasi User Admin';
    $this->load->view('ketentuan_user_admin', $data);
  }

  /* Note: Function untuk menampilkan halaman blocked jika ada user yag mencoba akses tanpa token | Author: wandaazhar@gmail.com */
  function pageBlocked()
  {
    $this->load->view('v_blocked');
  }
}
