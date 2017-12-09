<?php
/**
* 
*/
class M_login extends CI_Model
{
	
    public function cek_login($username,$password)
    {
	$this->db->where('username',$username);
        $this->db->where('password',$password);
        $q=$this->db->get('admin');
        if ($q->num_rows()>0) {
        	return true;
        }else{
        	return false;
        }
    }

    public function add_admin($data){
        $this->db->insert('admin',$data);
    }
}
?>