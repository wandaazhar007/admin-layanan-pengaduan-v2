<?php

class M_update_dokter extends CI_Model
{
  function get_dataTables()
  {
    $column_order   = ['id', 'nama', 'poliklinik', 'senin', 'selasa'];
    $column_search  = ['id', 'nama', 'poliklinik'];
    $def_order      = ['id' => 'asc'];

    $this->_sql();
    $this->_queryDataTables($column_order, $column_search, $def_order);
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result_array();
  }

  function _sql()
  {
    $this->db->select('*')
      ->from("tb_jadwal_dokter");
    // $this->db->query("SELECT * FROM `tb_user` ORDER BY `id` DESC");
  }

  function _queryDataTables($column_order, $column_search, $def_order)
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
    $this->_sql();
    return $this->db->count_all_results();
  }

  function countFiltered()
  {
    $column_order       = ['id', 'poliklinik', 'nama'];
    $column_search      = [
      'id',
      'poliklinik',
      'nama'
    ];
    $def_order          = ['id' => 'asc'];

    $this->_sql();
    $this->_queryDataTables($column_order, $column_search, $def_order);
    $query = $this->db->get();
    return $query->num_rows();
  }

  function getFotoProfile($id)
  {
    return $this->db->query("SELECT `tb_jadwal_dokter`.`foto` FROM `tb_jadwal_dokter` WHERE `tb_jadwal_dokter`.`id` = '$id'")->result_array();
  }

  function getDataById($id)
  {
    return $this->db->query("SELECT * FROM `tb_jadwal_dokter` WHERE `tb_jadwal_dokter`.`id` = '$id'")->result_array();
  }
}
