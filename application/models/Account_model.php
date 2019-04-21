<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {
	function daftar($table,$data){
		$this->db->insert($table,$data); 
		return $this->db->insert_id();;
	}
}
