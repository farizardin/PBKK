<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('auth_model');

        if($this->session->id_role != 3){
            redirect('');
        }
    }
    
	public function index()
	{
        $this->load->view('Petugas');
    }
}
