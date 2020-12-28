<?php

class M_dashboard extends CI_Model
{
  // DataTables list table pesan belum dibalas
  function datatables_getAllTablePesanBelumDibalas()
  {
    $column_order   = ['id', 'nama'];
    $column_search  = ['id', 'nama'];
    $def_order      = ['id' => 'asc'];

    $this->sql_PesanBelumDibalas();
    $this->query_datatables($column_order, $column_search, $def_order);
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result_array();
  }

  function sql_PesanBelumDibalas()
  {
    $this->db->select("id,nama,no_hp,email", false)
      ->from("pesan");
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

  public function countAll()
  {
    $this->sql_PesanBelumDibalas();
    return $this->db->count_all_results();
  }

  function countFiltered()
  {
    $column_order       = ['id', 'nama', 'no_hp'];
    $column_search      = [
      'id',
      'nama',
      'email'
    ];
    $def_order          = ['id' => 'asc'];

    $this->sql_PesanBelumDibalas();
    $this->query_datatables($column_order, $column_search, $def_order);
    $query = $this->db->get();
    return $query->num_rows();
  }

  function getPesanBelumBalasUmumById($id)
  {
    return $this->db->query("SELECT * FROM `pesan` WHERE `pesan`.`bidang` = 'umum' AND `pesan`.`id` = '$id'");
  }
}
