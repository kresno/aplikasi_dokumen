<?php
/**
 *
 */
class Cari extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('Auth');
    $this->load->model('M_dokumen');
    $this->load->model('M_akses_bidang');
    $this->load->model('M_transact');
  }


  public function index()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;
    $level_id = $admin_log['level_id'];

    $data['dokumen']= $this->M_dokumen->get_all();
    $data['opd'] = $this->M_akses_bidang->get_akses($level_id);

    $this->load->view('layout/bidang/header');
    $this->load->view('layout/bidang/sidebar', $header);
    $this->load->view('bidang/cari/index', $data);
    $this->load->view('layout/bidang/footer');
  }

  public function doCari()
  {
    $data = array(
      'opd_id' => $this->input->post('opd'),
      'jenis_dokumen_id' => $this->input->post('jenis_dokumen')
    );
    $data['dokumen'] = $this->M_transact->get_data_cari($data);

    $this->result($data);
  }

  public function result($data)
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;
    $level_id = $admin_log['level_id'];

    $this->load->view('layout/bidang/header');
    $this->load->view('layout/bidang/sidebar', $header);
    $this->load->view('bidang/cari/result', $data);
    $this->load->view('layout/bidang/footer');
  }

}



 ?>
