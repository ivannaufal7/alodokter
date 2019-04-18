<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	function __construct(){
         parent::__construct();
         $this->load->model('TambahArtikel_model');
    }
	public function index()
	{
		$data['artikel'] = $this->TambahArtikel_model->getArtikel();
		$this->load->view('home_view',$data);
	}
}
