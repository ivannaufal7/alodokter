<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahArtikel_model extends CI_Model {
	  function insertArtikel($data){
			$query = $this->db->insert("tb_artikel",$data);
			if($query){
				return true;
			}else{
				return false;	
			}
			
		}

	 function getArtikel(){
	 	$query = $this->db->get("tb_artikel");
	 	if($query->num_rows() != 0){
				return $query->result();
			}else{
				return false;
			}
	 }
	 function updateArtikel($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function getWhereArtikel($table,$where){
		return $this->db->get_where($table,$where);
	}
}
