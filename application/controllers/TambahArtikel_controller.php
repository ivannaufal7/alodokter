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
	// public function addArtikel(){
	// 	$data = array(
	// 			"judul_artikel" => $this->input->post('judulartikel'),
	// 			"deskripsi" => $this->input->post('deskripsi'),
	// 			"foto_artikel" => $this->do_upload(),
	// 			);
	// 	$artikel = $this->TambahArtikel_model;
	// 	$artikel->insertArtikel($data);
	// 	redirect('index.php/Home_controller');


	// }

	public function do_upload() {
    $config['upload_path']          = './assets/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 8048;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Tambah_artikel', $error);
    }else{
        $_data = array('upload_data' => $this->upload->data());
         $data = array(
            'judul_artikel'=> $this->input->post('judulartikel'),
            'deskripsi'=> $this->input->post('deskripsi'),
            'foto_artikel' => $_data['upload_data']['file_name'],
            'id_pengguna' => $this->session->userdata('id'),
            );
        if($this->TambahArtikel_model->insertArtikel($data)){
            echo 'berhasil di upload';
            
            redirect('Home_controller');
        }else{
            echo 'gagal upload';
        }
    }
}

public function deleteArtikel($id){
            $_id = $this->db->get_where('tb_artikel',['id_artikel' => $id])->row();
            $query = $this->db->delete('tb_artikel',['id_artikel'=>$id]);
            if($query){
                unlink("assets/".$_id->foto_artikel);
            }
            $this->session->set_flashdata('flash_success','Berhasil menghapus artikel !');
            redirect('Home_controller');
        }

    public function editArtikel($id){
		$where = array('id_artikel' => $id);
	    $config['upload_path']          = './assets/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 8048;
	    $config['max_width']            = 3000;
	    $config['max_height']           = 3000;
	    $this->load->library('upload', $config);
	    if (!$this->upload->do_upload('userfile')){
	    	$id_pengguna = $this->session->userdata('id');
	    	$judulartikel = $this->input->post('judulartikel');
			$deskripsi = $this->input->post('textDeskripsi'.$id);
			$file = $this->upload->data();
			$gambar = $this->input->post('old_image');

			$data = array(
				"id_pengguna" => $id_pengguna,
				"judul_artikel" => $judulartikel,
				"deskripsi" => $deskripsi,
				"foto_artikel" => $gambar,
			);

			$this->TambahArtikel_model->updateArtikel("tb_artikel",$where,$data);
			$this->session->set_flashdata('flash_success','Berhasil mengubah artikel !');
            // $error = array('error' => $this->upload->display_errors());
           redirect('Home_controller');
    	}else{
    		$id_pengguna = $this->session->userdata('id');
    		$judulartikel = $this->input->post('judulartikel');
			$deskripsi = $this->input->post('textDeskripsi'.$id);
			$file = $this->upload->data();
			$gambar = $file['file_name'];

			unlink("assets/".$this->input->post('old_image'));
			$data = array(
				"id_pengguna" => $id_pengguna,
				"judul_artikel" => $judulartikel,
				"deskripsi" => $deskripsi,
				"foto_artikel" => $gambar,
			);
			$this->TambahArtikel_model->updateArtikel("tb_artikel",$where,$data);
			$this->session->set_flashdata('flash_success','Berhasil mengubah artikel !');
			redirect('Home_controller');
    	}
		
	}    
	public function readArtikel($id){
		$getData = $this->db->get_where('tb_artikel',['id_artikel' => $id])->row();
		$data = array(
			'judul_artikel' => $getData->judul_artikel,
			'deskripsi' => $getData->deskripsi,
			'foto' => $getData->foto_artikel 
		);
		$this->load->view('Read_artikel',$data);
	}
}
