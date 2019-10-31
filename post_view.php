<!DOCTYPE html>
<html>
<head>
<title> job main details</title>
</head>

<body style="background-color: #7AB7BF">
<table align="center" width="450" border="3" style="border-color:white">
	<tr>
		<td><strong>Job#:</strong></td>
		<td><strong>Job Type:</strong></td>
		<td><strong>Service Center:</strong></td>
		<td><strong>Customer Reference:</strong></td>
		<td><strong>Supervisor:</strong></td>
		<td><strong>Created On:</strong></td>
		<td><strong>Created By:</strong></td>
		<td><strong>Type:</strong></td>
		<td><strong>Job Status:</strong></td>
		<td><strong>Due Date:</strong></td>
		<td><strong>Time Remaining:</strong></td>
		<td><strong>Receiving Time:</strong></td>
		<td><strong>BU:</strong></td>
		<td><strong>Service Advisor:</strong></td>
		<td><strong>Priority:</strong></td>
		<td><strong>Current Bay:</strong></td>
		<td><strong>Time Zone:</strong></td>
		<td><strong>Follow Up Date:</strong></td>
	</tr>

	<?php foreach($data as $post){?>
	<tr>
	    <td><?php echo $post->job_no;?></td>
	    <td><?php echo $post->job_type;?></td>
	    <td><?php echo $post->service_center;?></td>
	    <td><?php echo $post->customer_reference;?></td>
	    <td><?php echo $post->supervisor;?></td>
	    <td><?php echo $post->created_on;?></td>
	    <td><?php echo $post->created_by;?></td>
	    <td><?php echo $post->type;?></td>
	    <td><?php echo $post->job_status;?></td>
	    <td><?php echo $post->due_date;?></td>
	    <td><?php echo $post->time_remaining;?></td>
	    <td><?php echo $post->receiving_time;?></td>
	    <td><?php echo $post->bu;?></td>
	    <td><?php echo $post->service_advisor;?></td>
	    <td><?php echo $post->priority;?></td>
	    <td><?php echo $post->current_bay;?></td>
	    <td><?php echo $post->time_zone;?></td>
	    <td><?php echo $post->follow_up_date;?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
