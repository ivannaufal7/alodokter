<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {
	function daftar($data){
		$this->db->insert("tb_pasien",$data);
	}
}
