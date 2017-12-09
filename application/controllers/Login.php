<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
      parent::__construct();
      
   }

   public function index(){
   	$status_login = $this->session->userdata('login');
   	
      if ($status_login!='') {
        redirect(base_url()."Admin/index");
      }
    $data['status_login'] = "";
   	$this->load->view('login',$data);
   }

   public function login_error(){
   	$data['status_login'] = "<div class='alert alert-danger alert-dismissible'>
                                 <a href='#' class='close' data-dismiss='alert' aria-label='close' style=''>&times;</a>
                                 <strong>Gagal Masuk!</strong>Username dan Password Tidak Sesuai
                              </div>";
   	$this->load->view('login',$data);
   }

   public function act_login(){
   	  $this->load->model('M_login');
   	  $username = $this->input->post('username');
   	  $password = md5($this->input->post('password'));
   	  $login    = $this->M_login->cek_login($username,$password);
   	  if ($login==true) {
   	  	$data_session = array('login' => 1,
   	  		                  'username' => $username);
   	  	$this->session->set_userdata($data_session);
   	  	redirect(base_url()."Admin/index");
   	  }else{
   	  	redirect(base_url()."login/login_error");
   	  }
   }

   public function logout(){
   	 $this->session->unset_userdata('login');
   	 $this->session->unset_userdata('username');
   	 redirect(base_url()."login");
   }
}
    
