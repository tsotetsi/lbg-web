<?php
	include_once 'data/controller/controller.php';

	$flat_number = $_POST['flat_number'];
	$name = strip_tags(trim($_POST[ 'first_name']));
	$surname = strip_tags(trim($_POST['last_name']));
	$student_number = strtolower(strip_tags(trim($_POST[ 'student_number'])));
	$mobile_number = strip_tags(trim($_POST[ 'mobile_number']));
	$gender = strip_tags(trim($_POST[ 'gender']));

	$controller = new Controller();
	$controller->checkRoomAvailability($flat_number);
	$controller->checkBlockedStudent($student_number);
	$controller->checkForApplications($student_number);
	$controller->makeApplication($flat_number, $student_number, $name, $surname, $mobile_number, $gender);

	$controller->getApplications($flat_number);

?>