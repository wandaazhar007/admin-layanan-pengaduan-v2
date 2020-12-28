<?php

class M_inbox extends CI_Model
{

  function getAllInboxPromkes()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id`
              WHERE `pesan`.`pesan_masuk` IS NOT NULL
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['num_links'] = 5;

    /* Note: Style Pagination Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap | Author: wandaazhar@gmail.com */
    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    $this->pagination->initialize($config); /* Note: Set konfigurasi pagination | Author: wandaazhar@gmail.com */

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']      = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); /* Note: Generate link pagination sesuai config diatas | Author: wandaazhar@gmail.com */
    $data['inbox']      = $this->db->query($query)->result_array();

    return $data;
  }

  function getAllInboxPenunjang()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` 
              WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`tgl_forward` IS NOT NULL AND `pesan`.`bidang` = 'penunjang'
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['num_links'] = 5;

    /* Note: Style Pagination Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap | Author: wandaazhar@gmail.com */
    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    $this->pagination->initialize($config); /* Note: Set konfigurasi pagination | Author: wandaazhar@gmail.com */

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']     = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); /* Note: Generate link pagination sesuai config diatas | Author: wandaazhar@gmail.com */
    $data['inbox']     = $this->db->query($query)->result_array();

    return $data;
  }


  function getAllInboxKeperawatan()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` 
              WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`tgl_forward` IS NOT NULL AND `pesan`.`bidang` = 'keperawatan'
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['num_links'] = 5;

    /* Note: Style Pagination Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap | Author: wandaazhar@gmail.com */
    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    $this->pagination->initialize($config); /* Note: Set konfigurasi pagination | Author: wandaazhar@gmail.com */

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']     = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); /* Note: Generate link pagination sesuai config diatas | Author: wandaazhar@gmail.com */
    $data['inbox']     = $this->db->query($query)->result_array();

    return $data;
  }

  function getAllInboxYanmed()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` 
              WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`tgl_forward` IS NOT NULL AND  `pesan`.`bidang` = 'pelayanan medis'
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['num_links'] = 5;

    /* Note: Style Pagination Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap | Author: wandaazhar@gmail.com */
    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    $this->pagination->initialize($config); /* Note: Set konfigurasi pagination | Author: wandaazhar@gmail.com */

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']     = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); /* Note: Generate link pagination sesuai config diatas | Author: wandaazhar@gmail.com */
    $data['inbox']     = $this->db->query($query)->result_array();

    return $data;
  }

  function getAllInboxUmum()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` 
              WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`tgl_forward` IS NOT NULL AND `pesan`.`bidang` = 'umum'
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['num_links'] = 5;

    /* Note: Style Pagination Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap | Author: wandaazhar@gmail.com */
    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    $this->pagination->initialize($config); /* Note: Set konfigurasi pagination | Author: wandaazhar@gmail.com */

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']     = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); /* Note: Generate link pagination sesuai config diatas | Author: wandaazhar@gmail.com */
    $data['inbox']     = $this->db->query($query)->result_array();

    return $data;
  }

  function getFormForward($idPesan)
  {
    return $this->db->query("SELECT `pesan`.`id`, `pesan`.`pesan_masuk`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`email` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` WHERE `pesan`.`id` = '$idPesan'")->result_array();
  }

  function getHistoryForward($idPesan)
  {
    return $this->db->query("SELECT `pesan`.`id`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`email` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` WHERE `pesan`.`id` = '$idPesan'")->result_array();
  }

  function getPesanById($id)
  {
    return $this->db->query("SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, `pesan`.`pesan_masuk`, `pesan`.`pesan_keluar`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` WHERE `pesan`.`id` = '$id'")->result_array();
  }

  function getProfileUser($id_user)
  {
    return $this->db->query("SELECT `tb_user`.`id`, `tb_user`.`nama`, `tb_user`.`email`, `tb_user`.`no_hp`, `tb_user`.`date_created`, `tb_user`.`foto` FROM `tb_user` WHERE `id` = '$id_user'")->result_array();
  }

  function getJumlahPengaduanByidUser($id_user)
  {
    return $this->db->query("SELECT * FROM `pesan` WHERE `id_user` = '$id_user'")->num_rows();
  }

  function searchPesan($keyword)
  {
    return $this->db->query("SELECT 
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`
                            FROM `pesan`
                            WHERE `pesan`.`email` 
                            LIKE '%$keyword%'
                            OR `pesan`.`nama`
                            LIKE '%$keyword%'
                            OR `pesan`.`pesan_masuk`
                            LIKE '%$keyword%'
                            OR `pesan`.`bidang`
                            LIKE '%$keyword%'
                            OR `pesan`.`tgl_masuk`
                            LIKE '%$keyword%' ")->result_array();
  }

  function getFileTerkirim($file)
  {
    return $this->db->query("SELECT `pesan`.`file`, `pesan`.`nama`, `pesan`.`email` FROM `pesan` WHERE `file` = '$file'")->result_array();
  }
  function getFilePengadu($file)
  {
    return $this->db->query("SELECT `pesan`.`file_pengadu`, `pesan`.`nama`, `pesan`.`email` FROM `pesan` WHERE `file_pengadu` = '$file' LIMIT 1")->result_array();
  }

  function getAllPesanByIdUser($id_user)
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */
    $query = "SELECT `pesan`.`id`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_masuk`, 40) AS `inbox`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` WHERE `pesan`.`id_user` = '$id_user' ORDER BY `pesan`.`id` DESC";

    $config['base_url'] = base_url('inbox/getAllPesanByIdUser/' . $id_user);
    // $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 4;
    $config['num_links'] = 5;

    /* Note: Style Pagination Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap | Author: wandaazhar@gmail.com */
    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    $this->pagination->initialize($config); /* Note: Set konfigurasi pagination | Author: wandaazhar@gmail.com */

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']      = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); /* Note: Generate link pagination sesuai config diatas | Author: wandaazhar@gmail.com */
    $data['pesan']      = $this->db->query($query)->result_array();
    // var_dump($data['pesan']);
    // die;

    return $data;
  }

  function getPesanBelumDibalasYanmed()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_masuk`, 70) as `inbox`, `pesan`.`pesan_keluar`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id` 
              WHERE `pesan`.`pesan_masuk` IS NOT NULL AND `pesan`.`tgl_balas` IS NULL AND  `pesan`.`bidang` = 'pelayanan medis'
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('inbox/index');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 3;
    $config['uri_segment'] = 3;
    $config['num_links'] = 5;

    /* Note: Style Pagination Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap | Author: wandaazhar@gmail.com */
    $config['next_link'] = 'Selanjutnya';
    $config['prev_link'] = 'Sebelumnya';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li class="page-link">';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_open'] = '<li class="page-link">';

    $this->pagination->initialize($config); /* Note: Set konfigurasi pagination | Author: wandaazhar@gmail.com */

    $page      = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
    $query     .= " LIMIT " . $page . ", " . $config['per_page'];

    $data['limit']     = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); /* Note: Generate link pagination sesuai config diatas | Author: wandaazhar@gmail.com */
    $data['inbox']     = $this->db->query($query)->result_array();

    return $data;
  }
}
