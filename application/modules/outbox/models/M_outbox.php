<?php

class M_outbox extends CI_Model
{
  // function getAllOutboxPromkes()
  // {
  //   return $this->db->query("SELECT 
  //                           `pesan`.`id`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_keluar`, 70) as `outbox`, `pesan`.`tgl_masuk` 
  //                           FROM `pesan`
  //                           WHERE `pesan`.`pesan_keluar` IS NOT NULL
  //                           ORDER BY `id` 
  //                           DESC")->result_array();
  // }

  function getAllOutboxPromkes()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_keluar`, 70) as `outbox`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id`
              WHERE `pesan`.`pesan_masuk` IS NOT NULL
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('outbox/index');
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

  function getAllOutboxPenunjang()
  {
    $this->load->library('pagination'); /* Note: Load library pagination | Author: wandaazhar@gmail.com */

    $query = "SELECT `pesan`.`id`, `pesan`.`subject`, `pesan`.`kategori`, `pesan`.`bidang`, LEFT(`pesan`.`pesan_keluar`, 70) as `outbox`, `pesan`.`file`, `pesan`.`file_pengadu`, `pesan`.`tgl_masuk`, `pesan`.`tgl_forward`, `pesan`.`tgl_balas`, `pesan`.`tgl_selesai`, `pesan`.`status_proses`, `tb_user`.`id` AS 'id_user', `tb_user`.`nama`, `tb_user`.`no_hp`, `tb_user`.`email`, `tb_user`.`date_created`, `tb_user`.`foto`, `tb_user`.`active` FROM `pesan` INNER JOIN `tb_user` ON `pesan`.`id_user` = `tb_user`.`id`
              WHERE `pesan`.`pesan_masuk` IS NOT NULL
              ORDER BY `pesan`.`id` 
              DESC";

    $config['base_url'] = base_url('outbox/index');
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

  function getAllOutbox($bidang)
  {
    return $this->db->query("SELECT 
                            `pesan`.`id`, `pesan`.`nama`, `pesan`.`email`, `pesan`.`subject`, `pesan`.`bidang`, `pesan`.`file`, LEFT(`pesan`.`pesan_keluar`, 70) as `outbox`, `pesan`.`tgl_masuk` 
                            FROM `pesan` WHERE `pesan`.`bidang` = '$bidang' 
                            ORDER BY `id` 
                            DESC")->result_array();
  }
}
