<?php
  include_once 'data/controller/controller.php';

  $controller = new Controller();
  $stats = $controller->getRoomStats();
  $test = 'test';
  foreach ($$stats as $key => $value) {
    echo $value['TIT'];
  }
?>
