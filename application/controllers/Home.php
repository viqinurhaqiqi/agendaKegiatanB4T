<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('M_home');
		$data['jadwal'] = $this->M_home->get_jadwal_sekarang();
		$data['jadwal_trkhr'] = $this->M_home->get_jadwal_sekarang();
		$data['jadwal_besok'] = $this->M_home->get_jadwal_besok();
		$data['jadwal_besoknya'] = $this->M_home->get_jadwal_besoknya();
		
		$this->load->view('header1',$data);
		$this->load->view('pengumuman', $data);
	}

	//public function ganti_des($id,$nomor){
		//$this->load->model('M_home');
		//$data['jadwal'] = $this->M_home->get_jadwal();
		//$data['jadwal_trkhr'] = $this->M_home->get_jadwal_sekarang();
		//$data['jadwal_random1'] = $this->M_home->get_jadwalif($id);
		//$data['nmr'] = $nomor;
		//$this->load->view('header1',$data);
		//$this->load->view('pengumuman', $data);
	//}
	
}
