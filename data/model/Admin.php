<?php
	/**
	*	Admin model 
	*/
	class Admin
	{
		private $userName;
		private $password;
		
		function __construct($userName, $password)
		{
			$this->userName = $userName;
			$this->password = $password;
		}

		private function getUserName()
		{
			return $this->userName;
		}

		private function setUserName($userName)
		{
			$this->userName = $userName;
		}

		private function getPassword()
		{
			return $this->password;
		}

		private function setPassword($password){
			$this->password = $password;
		}
	}
?>