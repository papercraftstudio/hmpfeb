<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<?php 
			foreach($query->result() as $row) {
				echo("<h2> ". $row->title ."</h2>");
				echo("<p>" . $row->content ."</p>");
				echo("<a href=". base_url('') .">Selengkapnya...</a>")
			}
		 ?>

		 <?php echo $this->pagination->create_links() ?>
	</div>
	
</body>
</html>