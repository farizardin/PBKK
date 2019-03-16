<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('auth_model');

        if($this->session->id_role != 2){
            redirect('');
        }
    }
    
	public function index()
	{
        $this->load->view('Dosen');
    }
}
