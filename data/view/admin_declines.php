<?php
	include_once './data/controller/controller.php';
	include_once './data/controller/auth.php';
	
	$controller = new Controller();
	$declines = $controller->gedAllDeclines();

	foreach ($declines['declines'] as $key => $value) {
		echo '<tr>';
		echo '<td>'.$value['flat_number'].'</td>';
		echo '<td>'.$value['student_number'].'</td>';
		echo '<td>'.$value['mobile_number'].'</td>';
		echo '<td>'.$value['gender'].'</td>';
		echo '<td>'.$value['decline_date'].'</td>';
		echo '</tr>';
	}
?>