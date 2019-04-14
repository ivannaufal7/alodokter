<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanya_model extends CI_Model {
	function insertTanya($data){
		$this->db->insert("tb_pertanyaan",$data);
	}

	function getDataTanya(){
		$this->db->select("tb_pasien.id_pasien, tb_pasien.username, id_pertanyaan,topik, pertanyaan, tanggal_tanya");
		$this->db->from("tb_pertanyaan");
		$this->db->join("tb_pasien","tb_pertanyaan.id_pasien = tb_pasien.id_pasien");

		$query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function deleteTanya($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function getWhereTanya($table,$where){
		return $this->db->get_where($table,$where);
	}
	function updateTanya($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
