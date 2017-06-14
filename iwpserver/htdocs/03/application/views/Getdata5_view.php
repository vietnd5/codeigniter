<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>view data 5</h1>
	<?php 
	foreach ($cacketqua as $motkq) {?>
		<h2> Ten : <?php echo $motkq['ten']; ?></h2>
		<h2> Mota : <?php echo $motkq['mota']; ?></h2>

	<?php 
		
	}
	 ?>
</body>
</html>