<?php
  include_once 'data/controller/controller.php';
	
	$controller = new Controller();
	$rooms = $controller->gedRoomsPerFloor();

	foreach ($rooms['floor_one'] as $key => $value) {
		echo '<li><a href="./apply.php?id='.$value['flat_number'].'">'.$value['flat_number'].'</a></li>'."\n";
	}
?>