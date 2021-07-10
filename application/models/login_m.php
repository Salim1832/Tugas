<?php
class login_m extends CI_Model {

    public function proseslogin($username, $password) 
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows()>0){
        	foreach ($query->result() as $row) {
        		$sess = array('username' => $row->username,
        						'password' => $row->password
        		);
        	}
        $this->session->get_userdata($sess);
        redirect('dashboard/index');
        }
        else{
        	$this->session->set_flashdata('info', 'Maaf Username dan Password anda salah!!');
        	redirect('login');
        }
    }

	public function keamanan(){
		$username = $this->session->sess_distroy('username');
		if(!empty($userame)){
			$this->session->sess_distroy();
			redirect('login');
		}
	}    
}