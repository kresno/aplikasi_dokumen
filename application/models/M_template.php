<?php

/**
 *
 */
class M_template extends CI_Model
{

    function __construct()
    {

    }

    
    public function get_template()
    {
        $this->db->select('a.id, b.nama as jenis_dok, a.catatan as catatan,  a.file as file');
        $this->db->from('template a');
        $this->db->join('document b', 'b.id=a.doc_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
        }
    }

}
?>