<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{	
		$this->load->view('login.php');		
	}

	public function login_auth(){	
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$authentication = $this->Auth_model->auth($user,$pass);

		if($authentication){
			foreach($authentication as $row);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('id_role', $row->id_role);
			$this->session->set_userdata('nama_user', $row->nama_user);
			// $this->session->set_userdata('nama_user', $row->nama_user);

			if($this->session->userdata('id_role') == 4){
				redirect('Admin/index');
			}
			elseif($this->session->userdata('id_role') == 1){
				redirect('Mahasiswa/index');
			}
			elseif($this->session->userdata('id_role') == 2){
				redirect('Dosen/index');
			}
			elseif($this->session->userdata('id_role') == 3){
				redirect('Petugas/index');
			}
		}else{
			$data['error_message'] = "Username atau Password tidak sesuai.";
			$this->load->view('login', $data);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Homepage');
	}
}
