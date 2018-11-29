<?php
	if (count($errors) > 0) {
?>
		<!-- Form Error List -->
		<div class="alert alert-danger">
			<strong>Whoops! Something went wrong :)</strong>
			<br><br>
			<?php
				if (!is_array($errors)) {
					$errors = $errors->all();
				}
				
			?>

			<ul>
				<?php
					//foreach ($errors->all() as $error) {
					foreach ($errors as $error) {
						echo '<li>' . $error . '</li>';
					}
				?>
			</ul>
		</div>
<?php
	}
?>
    
