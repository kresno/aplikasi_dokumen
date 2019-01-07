<?php

/**
 *
 */
class M_dokumen extends CI_Model
{

  function __construct()
  {

  }

  public function getDokumen()
  {
    $this->select('*')
        ->from('document');
    $query = $this->db->get();
    if ($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
    }
  }
}


 ?>
