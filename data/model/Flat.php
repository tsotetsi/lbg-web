<?php	
	/**
	*  Flat Model
	*/
	class Flat
	{
		private $flatNumber;
		private $flatType;
		
		function __construct($flatNumber, $flatType)
		{
			$this->flatNumber = $flatNumber;
			$this->flatType = $flatType;
		}

		public function getFlatNumber()
		{
			return $this->$flatNumber;
		}

		public function setFlatNumber($flatNumber)
		{
			$this->flatNumber = $flatNumber;
		}

		public function getFlatType()
		{
			return $this->flatType;
		}

		public function setFlatType($flatType)
		{
			$this->flatType = $flatType;
		}
	}

/*	$aflat = new Flat("sds","232");
	$aflat->getFlatNumber();
	$aflat->setFlatType("TIT");
	var_dump($aflat);*/
?>