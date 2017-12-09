<?php
/**
* 
*/
class M_admin extends CI_Model
{
    public function add_admin($data){
        $this->db->insert('admin',$data);
    }

    public function get_admin(){
        $q = $this->db->get('admin')->result();
        return $q;
    }

	public function get_admin_selected($id){
		$this->db->where('id', $id);
		$q = $this->db->get('admin')->result();
		return $q;
	}

	public function update_admin($data){
		$this->db->where('id', $this->input->post('id_lama'));
		$this->db->update('admin', $data);
	}

	public function hapus_admin($data){
		$this->db->where($data);
		$this->db->delete('admin');
	}

    public function get_jadwal(){
        $q = $this->db->get('jadwal_b4t')->result();
        return $q;
    }

	public function add_jadwal($data){
        $this->db->insert('jadwal_b4t',$data);
    }

	public function get_jadwal_selected($kode_jadwal){
		$this->db->where('kode_jadwal', $kode_jadwal);
		$q = $this->db->get('jadwal_b4t')->result();
		return $q;
	}

	public function update_jadwal($data){
		$this->db->where('kode_jadwal', $this->input->post('kode_lama'));
		$this->db->update('jadwal_b4t', $data);
	}

	public function hapus_jadwal($data){
		$this->db->where($data);
		$this->db->delete('jadwal_b4t');
	}
}
?>