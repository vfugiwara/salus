<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$d['teste'] = $this->session->userdata();
		$this->load->view('usuarios',$d); 
	}


}
