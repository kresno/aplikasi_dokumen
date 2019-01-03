<?php
/**
 *
 */
class Dokumen extends CI_Controller
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
    $opd_id = $admin_log['opd_id'];
    
    $data['dokumen'] = $this->M_transact->get_file_opd($opd_id);

    $this->load->view('layout/pd/header');
    $this->load->view('layout/pd/sidebar', $header);
    $this->load->view('pd/dokumen/index', $data);
    $this->load->view('layout/pd/footer');
  }
}


 ?>
