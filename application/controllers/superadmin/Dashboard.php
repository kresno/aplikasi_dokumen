<?php
/**
 *
 */
class Dashboard extends CI_Controller
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

    $this->load->view('layout/superadmin/header');
    $this->load->view('layout/superadmin/sidebar', $header);
    $this->load->view('superadmin/dashboard/index');
    $this->load->view('layout/superadmin/footer');
  }
}


 ?>
