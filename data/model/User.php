<?php
	/**
	*	User model 
	*/
	class User
	{
		private $name;
		
		function __construct($name)
		{
			$this->name = $name;
		}

		private function getName()
		{
			return $this->name;
		}

		private function setName($name)
		{
			return $this->name = $name;
		}
	}
?>