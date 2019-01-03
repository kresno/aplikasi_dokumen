<?php
/**
 *
 */
class Rkpd extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_transact');
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
    $this->load->view('rkpd/index');
    $this->load->view('admin/footer');
  }


  public function murni()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    $data['download']=$this->M_transact->grid_download($admin_log['opd_id']);
    $data['upload']=$this->M_transact->grid_upload($admin_log['opd_id']);

    // var_dump($data['download']);
    // var_dump($data['upload']);

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar', $header);
    $this->load->view('murni/index', $data);
    $this->load->view('admin/footer');
  }

  public function perubahan()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar', $header);
    $this->load->view('perubahan/index');
    $this->load->view('admin/footer');
  }

  public function upload()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    if($this->uri->segment(3) == 'murni'){
      $data['state'] = 1;
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar', $header);
      $this->load->view('murni/upload', $data);
      $this->load->view('admin/footer');

    } else {
      $data['state'] = 2;

    }
  }


  public function aksi_upload()
  {
    $admin_log = $this->auth->is_login_admin();

    $header['admin_log'] = $admin_log;

    $config['upload_path']          = './public/upload/dokumen/';
		$config['allowed_types']        = 'pdf|docx|doc';
		$config['max_size']             = 5000;

    $data['nama'] = $this->input->post('nama');
    $data['doc_id'] = $this->input->post('jenis_dokumen');
    $data['opd_id'] = $admin_log['opd_id'];
    $data['status'] = 1;

		$this->load->library('upload', $config);

    if (!$this->upload->do_upload('dok', $data['opd_id'])) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            $data['file'] = $result['file_name'];
            $this->M_transact->set_upload($data);

            echo "<script>alert('Upload Berhasil') ; window.location.href = 'murni' </script>";
        }
  }

}


 ?>
