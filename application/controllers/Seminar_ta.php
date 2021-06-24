<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_ta extends CI_Controller {

    public function index()
	{
        $this->load->model('seminar_ta_model', 'seminar_ta');
        $data['list_seminar_ta']=$this->seminar_ta->getAll();

        $this->load->view('header');
        $this->load->view('seminar_ta/index', $data);
        $this->load->view('footer');
	}

    public function daftar()
	{
        $this->load->model('seminar_ta_model', 'seminar_ta');
        $data['list_dosen']=$this->seminar_ta->getAlldosen();

        $this->load->model('seminar_ta_model', 'seminar_ta');
        $data['list_kategori_seminar']=$this->seminar_ta->getAllkategori();

        $data[]='';
        $this->load->view('header');
        $this->load->view('seminar_ta/daftar', $data);
        $this->load->view('footer');
	}
}