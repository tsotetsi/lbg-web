<?php
	include_once 'data/controller/controller.php';
	
	$controller = new Controller();
	$approvals = $controller->gedAllApprovals();

	foreach ($approvals['approvals'] as $key => $value) {
		echo '<tr>';
		echo '<td>'.$value['flat_number'].'</td>';
		echo '<td>'.$value['student_number'].'</td>';
		echo '<td>'.$value['surname']. " ".$value['name'].'</td>';
		echo '<td>'.$value['mobile_number'].'</td>';
		echo '<td>'.$value['gender'].'</td>';
		echo '<td>'.$value['approval_date'].'</td>';
		echo '<td> <a href="/action.php?action=revoke&id='.$value['id'].'&flat_number='.$value['flat_number'].'&student_number='.$value['student_number'].'">Revoke</a></td>';
		echo '</tr>';
	}
?>