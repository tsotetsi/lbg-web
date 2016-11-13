<?php
	include_once './data/view/templates/head.html';
	include_once './data/view/templates/nav.html';
?>

<div class="container">
  <div class="jumbotron">
    <h1 class="text-info">LBG</h1>
    <p class="text-info">Room Allocation</p> 
  </div>
  <div class="row">
  	<hr>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h3 class="text-center">Rule 1</h3>
      <p>Familiarize yourself with the online room/flat allocation process available on Vula.</p>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Rule 2</h3>
      <p>Please read all anouncements related to room/flat allocation process.</p>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Rule 3</h3> 
      <p>Wait for the Warden/Administrator to reply to your application before making another application.</p>
    </div>
  </div>
	<ul class="pager">
    	<li><a href="./floors.php">Press Here to Start The Process</a></li>
  	</ul>
</div>

<?php
	include_once './data/view/templates/footer.html';
?>