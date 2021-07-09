<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index()
	{
        $this->load->model('dosen_model', 'dosen');

        $data['list_dosen'] = $this->dosen->getAll();
        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
    }

    public function create(){
        $this->load->model('dosen_model', 'dosen');

        $data[''];
        $this->load->view('header');
        $this->load->view('dosen/form');
        $this->load->view('footer');
    }
    public function form(){
        $this->load->view('header');
        $this->load->view('dosen/form');
        $this->load->view('footer');
    }

    public function save(){
        
        $this->load->model('dosen_model', 'dosen');
        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_idedit=$this->input->post('idedit');
        
        $data_dosen['nidn'] = $_nidn;
        $data_dosen['nama'] = $_nama;

        if(!empty($_idedit)){
            $data_dosen['id'] = $_idedit;
            $this->dosen->update($data_dosen);
        }else{
            $this->dosen->simpan($data_dosen);

        }
        
        redirect('dosen','refresh');
        // $data['list_dosen'] = $this->dosen->getAll();
        // $this->load->view('header');
        // $this->load->view('dosen/index', $data);
        // $this->load->view('footer');
    }

    public function edit($id){

        $this->load->model('dosen_model','dosen');
        $obj_dosen = $this->dosen->findById($id);
        $data['objdosen']=$obj_dosen;

        $this->load->view('header');
        $this->load->view('dosen/edit',$data);
        $this->load->view('footer');
    }
    
    public function delete($id){
        $this->load->model('dosen_model','dosen');
        $data_dosen['id']=$id;
        $this->dosen->delete($data_dosen);
        redirect('dosen','refresh');
    }

    public function view($id){
        $this->load->model('dosen_model','dosen');
        $obj_dosen = $this->dosen->findById($id);
        $data['objdosen']=$obj_dosen;
        $data['error']='';

        $this->load->view('header');
        $this->load->view('dosen/view',$data);
        $this->load->view('footer');
    }

    public function upload(){
        
        $_iddosen=$this->input->post("iddosen");
        $this->load->model('dosen_model','dosen');
        $obj_dosen = $this->dosen->findById($_iddosen);
        $data['objdosen']=$obj_dosen;

        $config['upload_path']          = './uploads/photos/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name']            = $obj_dosen->nidn;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto')){
                $data['error'] = $this->upload->display_errors();
                //$this->load->view('upload_form', $error);
                }else
                {
                    $data['error']='sukses upload';
                    $data['upload_data'] = $this->upload->data();
                //$this->load->view('upload_success', $data);
                }

        $this->load->view('header');
        $this->load->view('dosen/view',$data);
        $this->load->view('footer');
    }

}