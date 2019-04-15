<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahArtikel_model extends CI_Model {
  function insertArtikel($data){
		$this->db->insert("tb_artikel",$data);
	}
}
