<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('auth_model');

        if($this->session->id_role != 1){
            redirect('');
        }
    }
    
	public function index()
	{
        $this->load->view('Mahasiswa');
    }
    public function PengajuanJudul()
	{
        $this->load->view('Proposal/form_usulan');
    }
}