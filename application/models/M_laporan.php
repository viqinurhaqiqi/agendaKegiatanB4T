<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	class M_laporan extends CI_Model
	{
		
		public function get_jadwal(){
        	$q = $this->db->get('jadwal_b4t')->result();
        	return $q;
    	}
	}
 ?>