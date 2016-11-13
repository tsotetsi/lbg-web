<?php
	include_once './data/view/templates/head.html';
	include_once './data/view/templates/nav.html';
?>

<div class="container">
	<ul class="pager" style="text-align:left">
    	<li><a href="./">Back</a></li>
  	</ul>
  <div class="row">
    <div class="col-sm-4">
      <h3 class="text-center">Floor 1</h3>
      <div class="row">
      	<div class="col-lg-12">
      		<ul class="pager">
	      		<?php
	      			include_once 'data/view/floor.one.php';
	      		?>
  			</ul>
      	</div>
      </div>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Floor 2</h3>
      <div class="row">
      	<div class="col-lg-12">
      		<ul class="pager">
	      		<?php
	      			include_once 'data/view/floor.two.php';
	      		?>
  			</ul>
      	</div>
      </div>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Floor 3</h3>
      <div class="row">
      	<div class="col-lg-12">
      		<ul class="pager">
	      		<?php
	      			include_once 'data/view/floor.three.php';
	      		?>
  			</ul>
      	</div>
      </div>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Floor 4</h3>
      <div class="row">
      	<div class="col-lg-12">
      		<ul class="pager">
	      		<?php
	      			include_once 'data/view/floor.four.php';
	      		?>
  			</ul>
      	</div>
      </div>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Floor 5</h3>
      <div class="row">
      	<div class="col-lg-12">
      		<ul class="pager">
	      		<?php
	      			include_once 'data/view/floor.five.php';
	      		?>
  			</ul>
      	</div>
      </div>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Floor 6</h3>
      <div class="row">
      	<div class="col-lg-12">
      		<ul class="pager">
	      		<?php
	      			include_once 'data/view/floor.six.php';
	      		?>
  			</ul>
      	</div>
      </div>
    </div>
  </div>
</div>
<?php
	include_once './data/view/templates/footer.html';
?>