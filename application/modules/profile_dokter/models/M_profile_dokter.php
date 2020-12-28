<?php
class M_profile_dokter extends CI_Model
{
  function getAllDataDokter()
  {
    return $this->db->query("SELECT * FROM `tb_profile_dokter` ORDER BY `id` DESC")->result_array();
  }

  // DataTables list table data dokter
  function datatables_getAllTableDokter()
  {
    $column_order   = ['id', 'nama'];
    $column_search  = ['id', 'nama'];
    $def_order      = ['id' => 'asc'];

    $this->sql_dokter();
    $this->query_datatables($column_order, $column_search, $def_order);
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result_array();
  }

  function sql_dokter()
  {
    $this->db->select("id,nama_dokter,poliklinik,spesialis,foto,kode_poli", false)
      ->from("tb_profile_dokter");
    // $this->db->query("SELECT * FROM `tb_user` ORDER BY `id` DESC");
  }

  function query_datatables($column_order, $column_search, $def_order)
  {
    $i = 0;
    foreach ($column_search as $item) {
      if ($_POST['search']['value']) {
        if ($i === 0) {
          $this->db->group_start();
          $this->db->like($item, $_POST['search']['value']);
        } else {
          $this->db->or_like($item, $_POST['search']['value']);
        }

        if (count($column_search) - 1 == $i)
          $this->db->group_end();
      }
      $i++;
    }

    if (isset($_POST['order'])) {
      $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } else if (isset($order)) {
      $order = $def_order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  function getFotoProfile($id)
  {
    return $this->db->query("SELECT * FROM `tb_profile_dokter` WHERE `tb_profile_dokter`.`id` = '$id'")->result_array();
  }
}
