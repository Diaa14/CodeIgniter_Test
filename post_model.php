<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post_model extends CI_Model{

	function get_data(){
		$this->db->select("*");
		$this->db->from("ci_project");
		$query=$this->db->get();
		return $query->result();
	}
}
?>