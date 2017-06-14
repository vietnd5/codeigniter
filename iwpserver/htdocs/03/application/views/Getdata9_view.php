<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($dulieulayve as $key ): ?>
		<h2>Ten : <?= $key['ten'] ?></h2>
		<hr>
		<h3> Mota : <?= $key['mota'] ?></h3>
	<?php endforeach ?>
</body>
</html>