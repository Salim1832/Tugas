<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_penilaian extends CI_Controller {

    public function index ()
    {
        $this->load->model('detail_penilaian_model', 'detail_penilaian');
        $data['detail_penilaian'] = $this->detail_penilaian->tampil_data();
        $this->load->view('header');
	 	$this->load->view('Detail_Penilaian/index', $data);
        $this->load->view('footer');
    }
}