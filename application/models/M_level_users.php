<?php

/**
 *
 */
class M_level_users extends CI_Model
{

  function __construct()
  {
  }

  function insert($data)
  {
    return $this->db->insert('level_users', $data);
  }

  function update($data, $id)
  {
    return $this->db->update('level_users', $data, array('id' => $id));
  }

  function delete($id)
  {
    return $this->db->update('level_users', array('id' => $id));
  }

  function get($select="", $where="")
  {
    $this->db->select($select);
    $this->db->from('level_users');
    if($where){$this->db->where($where);}
    $this->db->order_by('level_id', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return false;
		}
  }
}


 ?>
