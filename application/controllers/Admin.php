<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('auth_model');

        if($this->session->id_role != 4){
            redirect('');
        }
    }
    
	public function index()
	{
        $this->load->view('Admin');
    }
}
