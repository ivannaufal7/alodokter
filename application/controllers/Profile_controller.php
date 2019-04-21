<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_controller extends CI_Controller {

	function __construct(){
         parent::__construct();
         $this->load->model('Tanya_model');
    }
	public function index()
	{
		$where = $this->session->userdata('id');
		$data['tanya'] = $this->Tanya_model->getDataTanyaWhere($where);
		// $this->Tanya_model->countDiskusi($where);
		$this->load->view('Profile',$data);
	}
}
