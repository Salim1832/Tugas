<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class login extends CI_Controller 
	{
		public function index()
		{
			$this->load->view('login_v/index');
		}

		public function ceklogin()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('login_m');
			$this->login_m->proseslogin($username, $password);
		}

		public function logout(){
			$this->session->set_userdata('username', FALSE);
			$this->session->sess_destroy();
			redirect('login');
		}
	}

 ?>