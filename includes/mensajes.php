<div class="col-md-12">
	<?php 
		if (isset($_SESSION['mensaje']) && $_SESSION['mensaje'] != '') {
		  echo $_SESSION['mensaje'];
		  $_SESSION['mensaje'] = '';
		}
	?>
</div>
