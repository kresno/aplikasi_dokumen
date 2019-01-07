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

    $data['opd'] = $this->M_transact->getCountTransactOpd($admin_log['opd_id']);
    
    print_r($data);

    // $this->load->view('layout/pd/header');
    // $this->load->view('layout/pd/sidebar', $header);
    // $this->load->view('pd/dashboard/index');
    // $this->load->view('layout/pd/footer');
  }
}


 ?>
