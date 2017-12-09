<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   public function __construct(){
      parent::__construct();
       $status_login = $this->session->userdata('login');
      if ($status_login=='') {
        redirect(base_url()."login");
      }
   }

	public function index()
	{
		$this->load->view('header_admin');
		$this->load->view('admin_area');
		$this->load->view('footer_admin');
	}

  public function add()
  {
    $this->load->view('header_admin');
    $this->load->view('add_admin');
    $this->load->view('footer_admin');
  }

  public function aksi_add() {
    $config['upload_path'] = './foto/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 100000;
    $config['max_width'] = 20000;
    $config['max_height'] = 20000;
    $this->load->library('upload', $config);
    $this->load->model('M_admin');
    $this->upload->do_upload("foto");
    $nm_foto = $this->upload->data();
    $data =  array('nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'foto' => $nm_foto['file_name']
            );  
    $this->M_admin->add_admin($data);
    redirect(base_url()."Admin/lihat_admin");  
  }

  public function lihat_admin()
  {
    $this->load->model('M_admin');
    $data['admin'] = $this->M_admin->get_admin();
    $this->load->view('header_admin');
    $this->load->view('lihat_admin', $data);
    $this->load->view('footer_admin');
  }

  public function edit($id=NULL)
  {
    $this->load->model('M_admin');
    $data['admin'] = $this->M_admin->get_admin_selected($id);
    $this->load->view('header_admin');
    $this->load->view('edit_admin',$data);
    $this->load->view('footer_admin');
  }

  public function aksi_edit() {
    $config['upload_path'] = './foto/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 100000;
    $config['max_width'] = 20000;
    $config['max_height'] = 20000;
    $this->load->library('upload', $config);
    $this->load->model('M_admin');
    $this->upload->do_upload("foto");
    $nm_foto = $this->upload->data();
    $data =  array('nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'foto' => $nm_foto['file_name']
            );  
    $this->M_admin->update_admin($data);
    redirect(base_url()."Admin/lihat_admin");  
  }

  public function hapus($id){
    $this->load->model('M_admin');
    $data = array('id' => $id);
    $this->M_admin->hapus_admin($data);
    redirect(base_url()."Admin/lihat_admin");
  }

  
  public function add_jadwal(){
    $this->load->view('header_admin');
    $this->load->view('add_jadwal');
    $this->load->view('footer_admin');
  }

  public function lihat_jadwal()
  {
    $this->load->model('M_admin');
    $data['jadwal'] = $this->M_admin->get_jadwal();
    $this->load->view('header_admin');
    $this->load->view('lihat_jadwal', $data);
    $this->load->view('footer_admin');
  }

  public function aksi_add_jadwal() {
    $config['upload_path'] = './foto/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 100000;
    $config['max_width'] = 20000;
    $config['max_height'] = 20000;
    $this->load->library('upload', $config);
    $this->load->model('M_admin');
    $this->upload->do_upload("gambar");
    $nm_foto = $this->upload->data();
    $data =  array('date' => $this->input->post('date'),
            'date_end' => $this->input->post('date_end'),
            'venue' => $this->input->post('venue'),
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $nm_foto['file_name']
            );  
    $this->M_admin->add_jadwal($data);
    redirect(base_url()."Admin/lihat_jadwal");  
  }

  public function edit_jadwal($kode_jadwal=NULL)
  {
    $this->load->model('M_admin');
    $data['jadwal'] = $this->M_admin->get_jadwal_selected($kode_jadwal);
    $this->load->view('header_admin');
    $this->load->view('edit_jadwal',$data);
    $this->load->view('footer_admin');
  }

  public function aksi_edit_jadwal() {
    $config['upload_path'] = './foto/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 100000;
    $config['max_width'] = 20000;
    $config['max_height'] = 20000;
    $this->load->library('upload', $config);
    $this->load->model('M_admin');
    $this->upload->do_upload("gambar");
    $nm_foto = $this->upload->data();
    $data =  array('date' => $this->input->post('date'),
            'date_end' => $this->input->post('date_end'),
            'venue' => $this->input->post('venue'),
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $nm_foto['file_name']
            );  
    $this->M_admin->update_jadwal($data);
    redirect(base_url()."Admin/lihat_jadwal");  
  }

  public function hapus_jadwal($kode_jadwal){
    $this->load->model('M_admin');
    $data = array('kode_jadwal' => $kode_jadwal);
    $this->M_admin->hapus_jadwal($data);
    redirect(base_url()."Admin/lihat_jadwal");
  }

  public function tentang(){
    $this->load->view('header_admin');
    $this->load->view('tentang');
    $this->load->view('footer_admin');
  }
}
