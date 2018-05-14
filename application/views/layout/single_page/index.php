<!DOCTYPE html>
<html lang="id">
<?php require_once 'head.php' ?>
<body>
<?php require_once 'header.php' ?>

<main>
	<div class="container margin_60">
		<div class="row">
			<div class="col-lg-9">
			
				<div class="bloglist singlepost">
					<?php if (is_callable('main')) main(); ?>
				</div>
			
				<hr>
			</div>
    	
    	</div>
	</div>
</main>
<?php require_once 'footer.php' ?>
</body>
</html>