<?php
	include_once 'data/controller/controller.php';
	include_once './data/controller/auth.php';

	$controller = new Controller();
	$applicant = $controller->getApplications(strip_tags(trim($_GET['id'])));

	if ($applicant['applicants'] == false) {
		echo "No one has applied to stay in this room/flat.";
	}
	else{
		echo "<p>The following students have applied to stay in this room/flat:";
		foreach ($applicant['applicants'] as $key => $value) {
			$gender = "";
			if ($value['gender'] == 1) {$gender = "Male";}else{$gender = "Female";}

			echo "<p>".$value['name']." ". $value['flat_number']. " ". $gender. " ". $value['date_of_application']."</p>";
		}
	}
?>