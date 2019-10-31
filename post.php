<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_Controller{

	public function _construct(){
		parent::_construct();
		$this->load->database();
		$this->load->model('post_model');
	}

	public function data_view(){
		$result['data']=$this->post_model->get_data();
		$this->load->view('post_view',$result);
	}

}
?>