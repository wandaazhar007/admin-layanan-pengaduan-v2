<?php defined('BASEPATH') or exit('No direct script access allowed');

class Outbox extends MX_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->wandalibs->_checkLoginSession();
    $this->load->model('m_outbox', 'model');
  }

  function index()
  {
    // $this->wandalibs->restrictUserAccess($this->session->userdata('bidang'));
    $bidang = $this->session->userdata('bidang');
    if ($bidang == 'promkes') {
      $data['title']                  = 'Layanan Pengaduan';
      $data['contentsMessage']        = 'list_outbox';
      $data['getAllOutbox']            = $this->model->getAllOutboxPromkes();

      $this->load->view('templates_message/core', $data);
    } else {
      if ($bidang == 'pelayanan medis') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_outbox';
        $data['getAllOutbox']            = $this->model->getAllOutboxYanmed();
        $this->load->view('templates_message/core', $data);
      }
      if ($bidang == 'penunjang') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_outbox';
        $data['getAllOutbox']            = $this->model->getAllOutboxPenunjang();
        $this->load->view('templates_message/core', $data);
      }
      if ($bidang == 'keperawatan') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_outbox';
        $data['getAllOutbox']            = $this->model->getAllOutboxKeperawatan();
        $this->load->view('templates_message/core', $data);
      }

      if ($bidang == 'umum' or $bidang == 'administrator') {
        $data['title']                  = 'Layanan Pengaduan';
        $data['contentsMessage']        = 'list_outbox';
        $data['getAllOutbox']            = $this->model->getAllOutboxUmum();
        $this->load->view('templates_message/core', $data);
      }
    }
  }
}
