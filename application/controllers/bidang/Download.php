<?php
/**
 *
 */
class Download extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('Auth');
    $this->load->model('M_transact');
  }


  public function index()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;
    $level_id = $admin_log['level_id'];

    $data['dokumen'] = $this->M_transact->get_file_bidang($level_id);

    $this->load->view('layout/bidang/header');
    $this->load->view('layout/bidang/sidebar', $header);
    $this->load->view('bidang/download/index', $data);
    $this->load->view('layout/bidang/footer');
  }
}


 ?>
