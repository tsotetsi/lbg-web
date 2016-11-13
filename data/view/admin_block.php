<?php
	include_once 'data/controller/controller.php';
	
	$controller = new Controller();
	$blocked = $controller->gedAllBlocked();

	foreach ($blocked['blocked'] as $key => $value) {
		echo '<tr>';
		echo '<td>'.$value['student_number'].'</td>';
		echo '<td>'.$value['blocked_date'].'</td>';
		echo '<td> <a href="/action.php?action=revoke_block&student_number='.$value['student_number'].'">Revoke</a></td>';
		echo '</tr>';
	}
?>