<?php

/**
 *
 */
class M_menu extends CI_Model
{

  function __construct()
  {
    // code...
  }

  public function grid_all($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like="")
  {
    $this->db->select($select);
    $this->db->from("menu a");
    $this->db->join("menu_admin b", "b.menu_id=a.id");
    $this->db->join("level_users c", "c.id=b.level_id");
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
}


 ?>
