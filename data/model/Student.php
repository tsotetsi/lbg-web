<?php
require_once './User.php';
	
	/**
	*  Student Model
	*/
	class Student extends User
	{
		private $studentName;
		private $studentNumber;
		private $gender;
		
		function __construct($studentName, $studentNumber, $gender)
		{
			$this->studentNumber = $studentNumber;
			$this->studentName = $studentName;
			$this->gender = $gender;
		}

		private function setStudentName($studentName)
		{
			$this->studentName = $studentName;
		}

		private function setStudentNumber($studentNumber)
		{
			$this->studentNumber = $studentNumber;
		}

		private function setGender($gender)
		{
			$this->gender = $gender;
		}

	}

		$ui = 1;
		$username = "tsotetsi";
		$password = "407thaps";

		$user = new User($ui, $username, $password);

		echo $user->getUserName();

?>