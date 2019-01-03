<?php
class M_akses_bidang extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }

	function insert($data){
       return $this->db->insert("akses_bidang", $data);
	}

	function update($data, $id){
		return $this->db->update("akses_bidang", $data, array('id' => $id));
	}

	function delete($kode){
		return $this->db->delete("akses_bidang", array('id' => $id));
	}

	public function get($select="", $where=""){
		$this->db->select($select);
		$this->db->from("akses_bidang");
		$this->db->join("opd", "akses_bidang.opd_id=opd.id", "left");
		$this->db->join("level_user", "akses_bidang.level_id=level_user.id", "left");
		if ($where){$this->db->where($where);}
		$this->db->order_by('akses_bidang.id','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return false;
		}
	}

	public function grid_all($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like=""){
		$this->db->select($select);
    $this->db->from("akses_bidang");
		$this->db->join("opd", "akses_bidang.opd_id=opd.id", "left");
		$this->db->join("level_user", "akses_bidang.level_id=level_user.id", "left");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){
			$this->db->like($key, $value);
			}
		}
		if ($sidx && $sord) {$this->db->order_by($sidx,$sord);}
		if (!empty($limit)) {$this->db->limit($limit,$start);}
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}
	}

	public function count_all($where="", $like=""){
		$this->db->select("id");
    	$this->db->from("akses_bidang");
		$this->db->join("opd", "akses_bidang.opd_id=opd.id", "left");
		$this->db->join("level_user", "akses_bidang.level_id=level_user.id", "left");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){
			$this->db->like($key, $value);
			}
		}
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_akses($level_id){
		$this->db->select("opd.id as id, opd.nama as nama");
		$this->db->from("akses_bidang");
		$this->db->join("opd", "akses_bidang.opd_id=opd.id", "left");
		$this->db->where("akses_bidang.level_id", $level_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}
	}
}
