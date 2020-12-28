<?php
class M_user extends CI_Model
{

  // DataTables serverside
  function datatables_getAllTable()
  {
    $column_order   = ['id', 'nama', 'no_hp', 'email', 'bidang'];
    $column_search  = ['id', 'nama', 'no_hp', 'email', 'bidang'];
    $def_order      = ['id' => 'desc'];

    $this->_sql();
    $this->query_datatables($column_order, $column_search, $def_order);
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result_array();
  }

  function _sql()
  {
    $this->db->select("id,nama,no_hp,email, bidang,date_created", false)
      ->from("tb_user_admin");
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
    $this->_sql();
    return $this->db->count_all_results();
  }

  function countFiltered()
  {
    $column_order       = ['id', 'nama', 'no_hp', 'email', 'bidang'];
    $column_search      = ['id', 'nama', 'email'];
    $def_order          = ['id' => 'desc'];

    $this->_sql();
    $this->query_datatables($column_order, $column_search, $def_order);
    $query = $this->db->get();
    return $query->num_rows();
  }

  function getProfileUser($id)
  {
    return $this->db->query("SELECT * FROM `tb_user_admin` WHERE `tb_user_admin`.`id` = '$id'")->result_array();
  }

  function getFotoProfile($id)
  {
    return $this->db->query("SELECT `tb_user_admin`.`foto` FROM `tb_user_admin` WHERE `tb_user_admin`.`id` = '$id'")->result_array();
  }

  function getHistoryPelapor($email)
  {
    return $this->db->query("SELECT * FROM `pesan` WHERE `pesan`.`email` = '$email'")->result_array();
  }

  function countHistoryPelapor($email)
  {
    return $this->db->query("SELECT * FROM `pesan` WHERE `pesan`.`email` = '$email'")->num_rows();
  }

  function getAllUser()
  {
    return $this->db->query("SELECT
    tb_user_admin.*
      FROM
        tb_user_admin
      ORDER BY
        `tb_user_admin`.`id` ASC")->result_array();
  }

  function countLogin($email)
  {
    return $this->db->query("SELECT
    `tb_user_admin`.*, 
    `history_login`.`date_created` as `last_login`,
    `history_login`.`email`
      FROM
        `tb_user_admin`
        INNER JOIN
        `history_login`
        ON 
          `tb_user_admin`.`email` = `history_login`.`email`
          WHERE `history_login`.`email` = '$email'
      ORDER BY
        `tb_user_admin`.`id` ASC")->result_array();
  }
}
