<?php
/**
 *
 */
class Upload extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('Auth');
    $this->load->model('M_transact');
    $this->load->model('M_dokumen');
  }


  public function index()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;
    $data['dokumen']= $this->M_dokumen->get_all();
    
    $this->load->view('layout/pd/header');
    $this->load->view('layout/pd/sidebar', $header);
    $this->load->view('pd/upload/index', $data);
    $this->load->view('layout/pd/footer');
  }

  public function doUpload()
  {
    $admin_log = $this->auth->is_login_admin();
    $header['admin_log'] = $admin_log;


    $data['catatan_pd'] = $this->input->post('catatan');
    $data['doc_id'] = $this->input->post('jenis_dokumen');
    $data['opd_id'] = $admin_log['opd_id'];
    $data['status'] = 1;

    $config['upload_path']          = './public/upload/dokumen/';
		$config['allowed_types']        = 'pdf|zip|docx|doc';
    $config['max_size']             = 5000;
    $config['file_name']            = md5(round(microtime(true))).' -OPD-'.$admin_log['opd_id'];

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('dok', $data['opd_id'])) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            $data['file'] = $result['file_name'];
            $this->M_transact->set_upload($data);

            echo "<script>alert('Upload Berhasil') ; window.location.href = '../dokumen' </script>";
        }
  }
}


 ?>
