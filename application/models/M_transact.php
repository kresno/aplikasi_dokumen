<?php
/**
 *
 */
class M_transact extends CI_Model
{

  function __construct()
  {
  }

  public function grid_download($opd_id)
  {
    $this->db->select('b.nama as opd, a.file as file, c.nama as dok, a.nama as ket');
    $this->db->from('transact a');
    $this->db->join('opd b', 'b.id=a.opd_id');
    $this->db->join('document c', 'c.id=a.doc_id');
    if($opd_id!=1){
        $this->db->where('a.opd_id', $opd_id);
    }
    $this->db->where('a.status', 1);

    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}

  }


  public function grid_upload($opd_id)
  {
    $this->db->select('b.nama as opd, a.file as file,  c.nama as dok, a.nama as ket');
    $this->db->from('transact a');
    $this->db->join('opd b', 'b.id=a.opd_id');
    $this->db->join('document c', 'c.id=a.doc_id');
    
    if($opd_id!=1){
        $this->db->where('a.opd_id', $opd_id);
    }
    $this->db->where('a.status', 2 );

    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}

  }

  public function set_upload($data)
  {
    return  $this->db->insert('transact', $data);
  }

  // Start Untuk User Bidang
  public function get_file_bidang($level_id)
  {
    $this->db->select('a.id, c.nama as jenis_dok, a.file as file, b.nama as opd, a.status as status, a.catatan_pd as catatan');
    $this->db->from('transact a');
    $this->db->join('opd b', 'b.id=a.opd_id');
    $this->db->join('document c', 'c.id=a.doc_id');
    $this->db->join('akses_bidang e', 'e.opd_id=b.id');
    $this->db->where('e.level_id', $level_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
    }
  }

  public function get_data_file($t_id)
  {
    $this->db->select('a.id, c.nama as jenis_dok, a.file as file, b.nama as opd');
    $this->db->from('transact a');
    $this->db->join('opd b', 'b.id=a.opd_id');
    $this->db->join('document c', 'c.id=a.doc_id');
    $this->db->join('akses_bidang e', 'e.opd_id=b.id');
    $this->db->where('a.id', $t_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
    }
  }

  public function updateComment($data)
  {
    $this->db->set('catatan_bidang', $data['catatan'])
             ->where('id', $data['t_id'])
             ->update('transact');
    return true;
  }

  public function updateStatus($data)
  {
    $this->db->set('status', 2)
             ->where('id', $data['t_id'])
             ->update('transact');
    return true;
  }

  public function get_data_cari($data)
  {
    $this->db->select('a.id, c.nama as jenis_dok, a.file as file, b.nama as opd, a.status as status, a.catatan_pd as catatan');
    $this->db->from('transact a');
    $this->db->join('opd b', 'b.id=a.opd_id');
    $this->db->join('document c', 'c.id=a.doc_id');
    $this->db->join('akses_bidang e', 'e.opd_id=b.id');
    $this->db->where('a.doc_id', $data['jenis_dokumen_id']);
    $this->db->where('a.opd_id', $data['opd_id']);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
    }
    return true;
  }

  //end untuk user Bidang

  //start untuk user PD
  public function get_file_opd($opd_id)
  {
    $this->db->select('a.id, c.nama as jenis_dok, a.file as file, b.nama as opd, a.status as status, a.catatan_bidang as catatan');
    $this->db->from('transact a');
    $this->db->join('opd b', 'b.id=a.opd_id');
    $this->db->join('document c', 'c.id=a.doc_id');
    $this->db->where('a.opd_id', $opd_id);
    $this->db->order_by('a.created_at');
    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
    }
  }

  public function get_data_file_pd($t_id)
  {
    $this->db->select('a.id, c.nama as jenis_dok, a.file as file, b.nama as opd, a.catatan_bidang as catatan');
    $this->db->from('transact a');
    $this->db->join('opd b', 'b.id=a.opd_id');
    $this->db->join('document c', 'c.id=a.doc_id');
    $this->db->where('a.id', $t_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
    }
  }

  public function updateCommentPD($data)
  {
    $this->db->set('catatan_pd', $data['catatan'])
             ->where('id', $data['t_id'])
             ->update('transact');
    return true;
  }

  public function deleteTransact($t_id)
  {
    $this->db->where('id', $t_id);
    $this->db->delete('transact');
    return true;
  }

  public function getFile($t_id)
  {
    $this->db->select('file')
              ->from('transact')
              ->where('id', $t_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
      return $query->result();
    } else {
      return false;
    }
  }
  //end untuk user PD
}


 ?>
