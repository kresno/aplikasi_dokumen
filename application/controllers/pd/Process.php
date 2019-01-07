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

    $data['dokumen'] = $this->M_transact->get_data_file_pd($t_id);

    $this->load->view('layout/pd/header');
    $this->load->view('layout/pd/sidebar', $header);
    $this->load->view('pd/process/comment', $data);
    $this->load->view('layout/pd/footer');
  }
  
  public function doComment()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;
    $data = array(
      't_id' => $this->input->post('t_id'),
      'catatan' => $this->input->post('catatan_opd')
    );
    
    if (empty($_FILES['dok']['name'])) {
      $this->M_transact->updateCommentPD($data);
      echo "<script>alert('Berhasil Memperbaharui Komentar') ; window.location.href = '../dokumen' </script>";
    } else {
      $filename = $this->M_transact->getFile($this->input->post('t_id'));
      $file_name = $filename[0]->file;
      $fullfile = './public/upload/dokumen/'.$file_name;

      if(is_file($fullfile)) unlink($fullfile);

      $config['upload_path']          = dirname($_SERVER["SCRIPT_FILENAME"]).'/public/upload/dokumen/';
      $config['allowed_types']        = 'pdf|zip|docx|doc';
      $config['max_size']             = 5000;
      $config['file_name']            = $this->input->post('filename');
      $config['overwrite']            = TRUE;
      $config['file_name']            = md5(round(microtime(true))).' -OPD-'.$admin_log['opd_id'];
  
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
  
      if (!$this->upload->do_upload('dok')) {
              $error = $this->upload->display_errors();
              // menampilkan pesan error
              print_r($error);
          } else {
              $result = $this->upload->data();
              $data['file'] = $result['file_name'];
              $this->M_transact->updateCommentPD($data);
  
              echo "<script>alert('Berhasil Memperbaharui File dan Komentar') ; window.location.href = '../dokumen' </script>";
          }
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

  public function doDelete($t_id)
  {
    $filename = $this->M_transact->getFile($t_id);
    $file_name = $filename[0]->file;
    $fullfile = dirname($_SERVER["SCRIPT_FILENAME"]).'/public/upload/dokumen/'.$file_name;
    
    if(is_file($fullfile)) unlink($fullfile);
    $response = $this->M_transact->deleteTransact($t_id);
    
    if($response)
    {
      echo "<script>alert('File Berhasil dihapus') ; window.location.href = '../../dokumen' </script>";
    } else {
      echo "gagal";
    }
  }
}


 ?>
