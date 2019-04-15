<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahArtikel_controller extends CI_Controller {

	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('TambahArtikel_model');
    }
	public function index()
	{
		$this->load->view('Tambah_artikel');
	}
	public function entryArtikel(){
		$this->form_validation->set_rules("judulartikel","judulartikel","required");
		$this->form_validation->set_rules("deskripsi","deskripsi","required");

		if($this->form_validation->run() ==  false){
			// redirect('TambahArtikel_controller');
		}else{
			
			if (!empty($_FILES['photo']['name'])) {
				$upload = $this->_do_upload();
				// $data['foto_artikel'] = $upload;
				$data = array(
				"judul" => $this->input->post('judulartikel'),
				"deskripsi" => $this->input->post('deskripsi'),
				"foto_artikel" => $upload,
				);
				$this->TambahArtikel_model->insertArtikel($data);
				$this->session->set_flashdata('artikel','Tambah Artikel berhasil dikirim !');
			}
			
			// redirect('TambahArtikel_controller');
		}


	}
	private function _do_upload()
	{
		$config['upload_path'] 		= './assets/images/';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size'] 			= 100;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= round(microtime(true)*1000);

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('photo')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('welcome');
		}
		return $this->upload->data('file_name');
	}
}
