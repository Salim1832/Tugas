<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function index()
	{
        $this->load->model('peserta_model', 'peserta');
        $data['list_peserta'] = $this->peserta->getAll();

        $this->load->view('header');
        $this->load->view('peserta/index', $data);
        $this->load->view('footer');
    }

    public function create(){
        $this->load->model('peserta_model', 'peserta');

        $data[''];
        $this->load->view('header');
        $this->load->view('peserta/form');
        $this->load->view('footer');
    }
    public function form(){
        $this->load->view('header');
        $this->load->view('peserta/form');
        $this->load->view('footer');
    }

    public function save(){
        
        $this->load->model('peserta_model', 'peserta');
        $_nidn = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_seminar = $this->input->post('seminar');
        $_kehadiran = $this->input->post('kehadiran');
        $_idedit=$this->input->post('idedit');
        
        $data_peserta['nidn'] = $_nidn;
        $data_peserta['nama'] = $_nama;
        $data_peserta['seminar'] = $_seminar;
        $data_peserta['kehadiran'] = $_kehadiran;

        if(!empty($_idedit)){
            $data_peserta['id'] = $_idedit;
            $this->peserta->update($data_peserta);
        }else{
            $this->peserta->simpan($data_peserta);

        }
        
        redirect('peserta','refresh');
    }

    public function edit($id){

        $this->load->model('peserta_model','peserta');
        $obj_peserta = $this->peserta->findById($id);
        $data['objpeserta']=$obj_peserta;

        $this->load->view('header');
        $this->load->view('peserta/edit',$data);
        $this->load->view('footer');
    }
    
    public function delete($id){
        $this->load->model('peserta_model','peserta');
        $data_peserta['id']=$id;
        $this->peserta->delete($data_peserta);
        redirect('peserta','refresh');
    }
}