<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	foreach ($dulieulayduoc as $motdulieu) {
		?>

			<h2> Ten : <?php echo $motdulieu['ten'] ?></h2>
			<h2> Ten : <?php echo $motdulieu['mota'] ?></h2>

		<?php
		
	}
	 ?>
	
</body>
</html>