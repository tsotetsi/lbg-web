<?php
	include_once 'data/controller/controller.php';

	$controller = new Controller();
	$applicant = $controller->getApplications(strip_tags(trim($_GET['id'])));

	if ($applicant['applicants'] == false) {
		echo "No one has applied to stay in this room/flat.";
		echo "<hr>";
	}
	else{
		echo "<p>The following students have applied to stay in this room/flat:";
		foreach ($applicant['applicants'] as $key => $value) {
			$gender = "Male";
			if($value['gender'] == 2){$gender = "Female";}
			echo "<p>".$value['name']." ". $value['flat_number']. " ".$gender. " ". $value['date_of_application']."</p>";
		}
		echo "<hr>";
	}
	if($applicant['approvals'] == false){
		echo "<p>No student has been approved to stay in this flat/room.";
	}else{
		echo "<p>The following student(s) have been approved to stay in this flat:";
		foreach ($applicant['approvals'] as $key => $value) {
			echo "<p>".$value['name']." ". $value['flat_number']. " ". $value['gender']. " ". $value['date_of_approval']."</p>";
		}
	}
?>
