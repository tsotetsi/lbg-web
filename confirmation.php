<?php
	include_once './data/view/templates/head.html';
	include_once './data/view/templates/nav.html';
?>

<div class="container">
  <div class="row text-center">
    <div class="col-sm-12">
      <h3 class="text-center"></h3>

      <?php
      		include_once 'app/process_apply.php';
      ?>

      <p>Your room/flat application was captured succesfully</p>
      <p>Please wait for reply before making another application</p>
    </div>
  </div>

	<ul class="pager">
    	<li><a href="./">Exit</a></li>
  	</ul>
</div>
<?php
	include_once './data/view/templates/footer.html';
?>