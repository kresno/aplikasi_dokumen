<?php
/**
 *
 */
class Tahapan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('Auth');
  }


  public function index()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    $this->load->view('layout/bidang/header');
    $this->load->view('layout/bidang/sidebar', $header);
    $this->load->view('bidang/dashboard/index');
    $this->load->view('layout/bidang/footer');
  }
}


 ?>
