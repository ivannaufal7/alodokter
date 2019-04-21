<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {

	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('Account_model');
    }

	public function index()
	{
		$this->load->view('register');
	}
	public function daftarAccount(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('pass','password','required|md5');

		if($this->form_validation->run() == false){
			redirect('index.php/Register_controller');
		}else{
			$data = array(
				"username" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"password" => md5($this->input->post('pass')),
				"status" => "pasien",
			);
			$id_pengguna = $this->Account_model->daftar("tb_pengguna",$data);
			$data2 = array(
				"id_pengguna" => $id_pengguna, 
			);
			$this->Account_model->daftar("tb_pasien",$data2);
			$this->session->set_flashdata('daftar','Pendaftaran Berhasil');
			redirect('login_controller');
		}
	}
}