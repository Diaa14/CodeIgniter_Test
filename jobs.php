<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class jobs extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('jobs_model');
	}


	public function jobs_form()
	{
		$this->load->view('jobs_view');

		if($this->input->post('save')){
			$no=$this->input->post('job_no');
			$jobType=$this->input->post('job_type');
			$service=$this->input->post('service_center');
			$reference=$this->input->post('customer_reference');
			$Supervisor=$this->input->post('supervisor');
			$createdOn=$this->input->post('created_on');
			$createdBy=$this->input->post('created_by');
			$type=$this->input->post('type');
			$status=$this->input->post('job_status');
			$dueDate=$this->input->post('due_date');
			$timeRemaining=$this->input->post('time_remaining');
			$receivingTime=$this->input->post('receiving_time');
			$BU=$this->input->post('bu');
			$serviceAdvisor=$this->input->post('service_advisor');
			$Priority=$this->input->post('priority');
			$currentBay=$this->input->post('current_bay');
			$timeZone=$this->input->post('time_zone');
			$follow_up=$this->input->post('follow_up_date');

			$this->jobs_model->save_job($no,$jobType,$service,$reference,$Supervisor,$createdOn,$createdBy,$type,$status,$dueDate,$timeRemaining,$receivingTime,$BU,$serviceAdvisor,$Priority,$currentBay,$timeZone,$follow_up);
			echo"Done";
		}

	}
}

?>