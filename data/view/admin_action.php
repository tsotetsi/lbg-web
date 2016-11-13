<?php
	include_once 'data/controller/controller.php';

	$action = $_GET['action'];
	$id = $_GET['id'];
	$flat_number = $_GET['flat_number'];
	$student_number = $_GET['student_number'];
	$name = $_GET['name'];
	$surname = $_GET['surname'];
	$mobile_number = $_GET['mobile_number'];
	$gender = $_GET['gender'];

	$controller = new Controller();

	if($action == 'revoke_block'){
		$controller->revokeBlock($student_number);
	}

	$controller->handleApplication($action, $id, $student_number, $name, $surname, $mobile_number, $flat_number, $gender);
?>