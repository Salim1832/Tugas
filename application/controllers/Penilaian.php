<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

    public function index ()
    {
        $this->load->model('Penilaian_model', 'penilaian');
        $data['penilaian'] = $this->penilaian->getAll();
        $this->load->view('header');
	 	$this->load->view('penilaian/index', $data);
        $this->load->view('footer');
    }
}