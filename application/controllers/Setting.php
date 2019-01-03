<?php
/**
 *
 */
class Setting extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

  }


  public function index()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar', $header);
    $this->load->view('setting/index');
    $this->load->view('admin/footer');
  }


  public function user()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar', $header);
    $this->load->view('setting/index');
    $this->load->view('admin/footer');
  }

  public function menu()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar', $header);
    $this->load->view('setting/index');
    $this->load->view('admin/footer');
  }

}




 ?>
