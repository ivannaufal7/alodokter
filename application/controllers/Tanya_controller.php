<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');


class Tanya_controller extends CI_Controller {

	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('Tanya_model');
    }

	public function index()
	{
		$data['tanya'] = $this->Tanya_model->getDataTanya();
		$this->load->view('tanya_view',$data);
	}
	public function tanya(){
		$this->form_validation->set_rules("topik","topik","required");
		$this->form_validation->set_rules("textTanya","textTanya","required");

		if($this->form_validation->run() ==  false){
			redirect('Tanya_controller');
		}else{
			$data = array(
				"id_pasien" => $this->session->userdata('id_pasien'),
				"topik" => $this->input->post('topik'),
				"pertanyaan" => $this->input->post('textTanya'),
				"tanggal_tanya" => date('Y-m-d H:i:s'),
			);
			$this->Tanya_model->insertTanya($data);
			$this->session->set_flashdata('tanya','Pertanyaan berhasil dikirim !');
			redirect('Tanya_controller');
		}
	}
	public function deletePertanyaan($id){
		$where = array('id_pertanyaan' => $id);
		$this->Tanya_model->deleteTanya("tb_pertanyaan",$where);
		redirect('Tanya_controller');
	}
	public function deletePertanyaanProfil($id){
		$where = array('id_pertanyaan' => $id);
		$this->Tanya_model->deleteTanya("tb_pertanyaan",$where);
		redirect('Profile_controller');
	}
	public function editPertanyaan($id){
		$where = array('id_pertanyaan' => $id);
		$topik = $this->input->post('topik');
		$tanya = $this->input->post('textQuestion'.$id);

		$data = array(
			"topik" => $topik,
			"pertanyaan" => $tanya,
		);
		$this->Tanya_model->updateTanya("tb_pertanyaan",$where,$data);
		redirect('Tanya_controller');
	}
	public function editPertanyaanProfil($id){
		$where = array('id_pertanyaan' => $id);
		$topik = $this->input->post('topik');
		$tanya = $this->input->post('textQuestion'.$id);

		$data = array(
			"topik" => $topik,
			"pertanyaan" => $tanya,
		);
		$this->Tanya_model->updateTanya("tb_pertanyaan",$where,$data);
		redirect('Profile_controller');
	}

}
