<?php
	include_once '../data/model/Flat.php';

	class FlatTest extends \PHPUnit_Framework_TestCase
	{
		

		public $flatNumber;
		public $flatType;

		public function testCanGetFlatNumber()
		{
			$aflat = new Flat("101A", "TIT");

			$class = new ReflectionClass ("Flat");
			$method = $class->getMethod ('getFlatNumber');
			$method->setAccessible(true);
			$output = $method->invoke (new Flat("101A","TIT"));
		} 
	}
?>