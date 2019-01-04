<?php
/**
 *
 */
class Process extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('Auth');
    $this->load->model('M_transact');
  }

  public function comment($t_id)
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;
    $level_id = $admin_log['level_id'];

    $data['dokumen'] = $this->M_transact->get_data_file($t_id);

    // print_r($data);
    $this->load->view('layout/bidang/header');
    $this->load->view('layout/bidang/sidebar', $header);
    $this->load->view('bidang/process/comment', $data);
    $this->load->view('layout/bidang/footer');
  }
  
  public function doComment()
  {
    $data = array(
      't_id' => $this->input->post('t_id'),
      'catatan' => $this->input->post('catatan')
    );
    //print_r($data);
    $reponse = $this->M_transact->updateComment($data);
    if($reponse)
    {
      echo "<script>alert('Berhasil menambah komentar') ; window.location.href = '../download' </script>";
    } else {
      echo "gagal";
    }
  }

  public function doAccept($t_id)
  {
    $data = array(
      't_id' => $t_id
    );
    $reponse = $this->M_transact->updateStatus($data);
    if($reponse)
    {
      echo "<script>alert('Upload Berhasil') ; window.location.href = '../../download' </script>";
    } else {
      echo "gagal";
    }
  }
}


 ?>
