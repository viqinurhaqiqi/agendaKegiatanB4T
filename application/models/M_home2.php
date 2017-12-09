<?php
/**
* 
*/
class M_home2 extends CI_Model
{


	public function get_jadwal_random() {
		$this->db->limit(3,0);
		$this->db->order_by("RAND()");
		$q = $this->db->get('jadwal_b4t')->result();
        return $q;	
	}

}
?>