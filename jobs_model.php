<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  
 */
class Jobs_Model extends CI_Model
{
	
	public function save_job($job_no,$job_type,$service_center,$customer_reference,$supervisor,$created_on,$created_by,$type,$job_status,$due_date,$time_remaining,$receiving_time,$bu,$service_advisor,$priority,$current_bay,$time_zone,$follow_up_date)
	{
		$query="insert into job_main_data values ('$job_no','$job_type','$service_center','$customer_reference','$supervisor','$created_on','$created_by','$type','$job_status','$due_date','$time_remaining','$receiving_time','$bu','$service_advisor','$priority','$current_bay','$time_zone','$follow_up_date')";
		$this->db->query($query);

	}
	
}
?>