<?php
	if (count($errors) > 0) {
?>
		<!-- Form Error List -->
		<div class="alert alert-danger">
			<strong>Whoops! You are asking me to do something illogical :)</strong>
			<br><br>
			<?php
				foreach ($errors->all() as $error) {
					echo $error;
				}
			?>
		</div>
<?php
	}
?>
    
