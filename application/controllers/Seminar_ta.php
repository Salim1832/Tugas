<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_ta extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('seminar_ta_model', 'seminar_ta');
    }
    public function index()
	{
        $data['list_seminar_ta']=$this->seminar_ta->getAll();

        $data['list_dosen']=$this->seminar_ta->getAlldosen();
        $data['join'] = $this->seminar_ta->join_table();
        $this->load->view('header');
        $this->load->view('seminar_ta/index', $data);
        $this->load->view('footer');
	}

    public function create(){
        $data['list_dosen'] = $this->seminar_ta->getAlldosen();
        $this->load->view('header');
        $this->load->view('seminar_ta/daftar', $data);
        $this->load->view('footer');
    }
    public function form(){
        $this->load->view('header');
        $this->load->view('seminar_ta/form');
        $this->load->view('footer');
    }

    public function save(){
        
        $this->load->model('seminar_ta_model', 'seminar_ta');
        $_semester = $this->input->post('semester');
        $_tanggal = $this->input->post('tanggal');
        $_jam = $this->input->post('jam');
        $_kategori_seminar = $this->input->post('kategori_seminar');
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_judul = $this->input->post('judul');
        $_pembimbing = $this->input->post('pembimbing');
        $_penguji1 = $this->input->post('penguji1');
        $_penguji2 = $this->input->post('penguji2');
        $_lokasi = $this->input->post('lokasi');
        $_nilai_akhir = $this->input->post('nilai_akhir');
        $_idedit=$this->input->post('idedit');
        
        $data_seminar_ta['semester'] = $_semester;
        $data_seminar_ta['tanggal'] = $_tanggal;
        $data_seminar_ta['jam'] = $_jam;
        $data_seminar_ta['kategori_seminar'] = $_kategori_seminar;
        $data_seminar_ta['nim'] = $_nim;
        $data_seminar_ta['nama'] = $_nama;
        $data_seminar_ta['judul'] = $_judul;
        $data_seminar_ta['pembimbing'] = $_pembimbing;
        $data_seminar_ta['penguji1'] = $_penguji1;
        $data_seminar_ta['penguji2'] = $_penguji2;
        $data_seminar_ta['lokasi'] = $_lokasi;
        $data_seminar_ta['nilai_akhir'] = $_nilai_akhir;

        if(!empty($_idedit)){
            $data_seminar_ta['id'] = $_idedit;
            $this->seminar_ta->update($data_seminar_ta);
        }else{
            $this->seminar_ta->simpan($data_seminar_ta);

        }
        
        redirect('seminar_ta','refresh');
    }

    public function edit($id){

        $data['objseminar_ta']= $this->seminar_ta->findById($id);
        $data['list_dosen']=$this->seminar_ta->getAlldosen();
            
        
        // $obj_seminar_ta = $this->seminar_ta->findById($id);
        // $this->seminar_ta->getAll();
        // $data['objseminar_ta']=$obj_seminar_ta;

        $this->load->view('header');
        $this->load->view('seminar_ta/edit', $data);
        $this->load->view('footer');
    }
    
    public function delete($id){
        $data_seminar_ta['id']=$id;
        $this->seminar_ta->delete($data_seminar_ta);
        redirect('seminar_ta','refresh');
    }
}