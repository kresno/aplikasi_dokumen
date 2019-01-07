<?php

/**
 *
 */
class M_dokumen extends CI_Model
{

  function __construct()
  {

  }

  function insert($data){
       return $this->db->insert("menu_admin", $data);
	}

	function update($data, $id){
		return $this->db->update("menu_admin", $data, array('id' => $id));
	}

	function delete($id){
		return $this->db->delete("menu_admin", array('id' => $id));
	}


  public function grid_all($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like="")
  {
    $this->db->select($select);
    $this->db->from("menu_admin a");
    $this->db->join("menu b", "a.menu_id=b.id");
    $this->db->join("level_users c", "c.id=a.level_id");
    if($where){$this->db->where($where);}
    if($like)
    {
      foreach ($like as $key => $value) {
        $this->db->like($key,$value);
      }
    }
    if($sidx && $sord){$this->db->order_by($sidx, $sord);}
    if(!empty($limit)) {$this->db->limit($limit, $start);}

    $query = $this->db->get();
    if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}
  }


  public function count_all($where="", $like="")
  {
    $this->db->select("a.id");
    $this->db->from("menu_admin a");
    $this->db->join("menu b", "a.menu_id=b.id", "left");
    $this->db->join("level_users c", "c.id=a.level_id", "left");
    if($where){
      $this->db->where($where);
    }
    if($like){
      foreach ($like as $key => $value) {
        $this->db->like($key, $value);
      }
    }

    $query = $this->db->get();
    return $query->num_rows();
  }

  public function get_all()
  {
    $this->db->select("id, nama");
    $this->db->from("document");
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
	} else {
		return false;
	}
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
