<?php
	include_once './data/controller/controller.php';
	include_once './data/controller/auth.php';

	$controller = new Controller();
	$applications = $controller->gedAllApplications();
	echo $controller->getSmsCredits(). 'SMS Credits Remaining.';

	foreach ($applications['applications'] as $key => $value) {
		$gender = "";
		if ($value['gender'] == 1) {$gender = "Male";}else{$gender = "Female";}
		echo '<tr>';
		echo '<td>'.$value['flat_number'].'</td>';
		echo '<td>'.$value['student_number'].'</td>';
		echo '<td>'.$value['name']. " ".$value['surname'].'</td>';
		echo '<td>'.$gender.'</td>';
		echo '<td>'.$value['mobile_number'].'</td>';
		echo '<td>'.$value['date_of_application'].'</td>';
		echo '<td> <a href="/action.php?action=approve&id='.$value['id'].'&name='.$value['name'].'&surname='.$value['surname'].'&mobile_number='.$value['mobile_number'].'&flat_number='.$value['flat_number'].'&student_number='.$value['student_number'].'&gender='.$gender.'">Approve</a> | <a href="/action.php?action=decline&id='.$value['id'].'&name='.$value['name'].'&surname='.$value['surname'].'&mobile_number='.$value['mobile_number'].'&flat_number='.$value['flat_number'].'&student_number='.$value['student_number'].'&gender='.$gender.'">Decline</a> </td>';
		echo '</tr>';
	}
?>