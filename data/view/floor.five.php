<?php
	foreach ($rooms['floor_five'] as $key => $value) {
		echo '<li><a href="./apply.php?id='.$value['flat_number'].'">'.$value['flat_number'].'</a></li>'."\n";
	}
?>