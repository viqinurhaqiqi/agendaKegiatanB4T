<?php
/**
* 
*/
class M_home extends CI_Model
{
     

    public function get_jadwal() {
        $this->db->order_by('date', 'DESC');
        $q = $this->db->get('jadwal_b4t')->result();
        return $q;
    }

    public function get_jadwalif($where){
        $this->db->where('kode_jadwal', $where);
        $q = $this->db->get('jadwal_b4t')->result();
        return $q;
    }

    public function get_newjadwal() {
        $this->db->limit(5,0);
        $this->db->order_by('date', 'DESC');
        $q = $this->db->get('jadwal_b4t')->result();
        return $q;
    }

    public function hitung_baris(){ 
        $waktu = date('Y-m-d');
        $this->db->where('date', $waktu);
        $this->db->from('jadwal_b4t');
        echo $this->db->count_all_results();

    }


    public function get_jadwal_sekarang(){
        $waktu = date('Y-m-d');
        $this->db->limit(15,0);
        $this->db->where('date',$waktu);
        $q = $this->db->get('jadwal_b4t')->result();
        return $q;
    }
    
    public function get_jadwal_besok(){
        $tanggal = date("d");
        $bulan = date("m");
        $tahun = date("Y");
        $hari_kedua = 0;
        if($bulan == 12 && $tanggal == 30 || $tanggal == 31){
            $bulan = 1;
            $hari_kedua = 1;
            $tahun =+1;
        }else if($bulan != 12 && $tanggal == 30 || $tanggal == 31){
            $bulan +=1;
            $hari_kedua =1; 
        }else{
            $hari_kedua+=1;
        }
        $waktu = $tahun."-".$bulan."-".$hari_kedua;
        $this->db->where('date',$waktu);
        $q = $this->db->get('jadwal_b4t')->result();
        return $q;

    }

    public function get_jadwal_besoknya(){
        $tanggal = date("d");
        $bulan = date("m");
        $tahun = date("Y");
        $hari_kedua = 0;
        if($bulan == 12 && $tanggal == 30 || $tanggal == 31){
            $bulan = 1;
            $hari_kedua = 2;
            $tahun =+1;
        }else if($bulan != 12 && $tanggal == 30 || $tanggal == 31){
            $bulan +=1;
            $hari_kedua =2; 
        }else{
            $hari_kedua+=2;
        }
        $waktu = $tahun."-".$bulan."-".$hari_kedua;
        $this->db->where('date',$waktu);
        $q = $this->db->get('jadwal_b4t')->result();
        return $q;

    }

    public function get_jadwal_tiga_hari_kedepan(){
        $waktu_awal = date('Y-m-d');
        $tanggal = date("d");
        $bulan = date("m");
        $tahun = date("Y");
        $hari_kedua = 0;
        if($bulan == 12 && $tanggal == 30 || $tanggal == 31){
            $bulan = 1;
            $hari_kedua = 3;
            $tahun =+1;
        }else if($bulan != 12 && $tanggal == 30 || $tanggal == 31){
            $bulan +=1;
            $hari_kedua =3; 
        }else{
            $hari_kedua+=3;
        }
        $this->db->between($waktu_awal,$hari_kedua);
        $hasil = $this->db->get('jadwal_b4t')->result();
        return $hasil;
    }
}
?>