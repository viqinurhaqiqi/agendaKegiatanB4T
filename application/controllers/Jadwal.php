<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function index() {
		$this->load_>view('header_admin');
		$this->load_>view('add_jadwal');
		$this->load_>view('footer_admin');
	}
}
