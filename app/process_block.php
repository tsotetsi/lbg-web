<?php
	include_once 'data/controller/controller.php';


	$student_number = strtolower(strip_tags(trim($_POST[ 'student_number'])));

	$controller = new Controller();
	$controller->blockStudent($student_number);
?>