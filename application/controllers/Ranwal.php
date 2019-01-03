<?php
/**
 *
 */
class Ranwal extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_transact');
    $this->load->model('M_bab');
    $this->load->model('M_level_users');
    $this->load->library('Datatables');
  }

  function datatable()
  {
    $admin_log = $this->auth->is_login_admin();
    $levelBidang =  $this->M_level_users->get('nama', " level_id= '".$admin_log['level_id'].'"');
    if($levelBidang){
      $gridAksesBidang = $this->M_akses_bidang->grid_all('');
    }
  }

  public function index()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar', $header);
    $this->load->view('ranwal/index');
    $this->load->view('admin/footer');
  }


}


 ?>
