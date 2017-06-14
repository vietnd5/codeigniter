<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($dulieu as $key  ): ?>
		<h1> Ten : <?= $key['ten'] ?></h1>
		<h1> Mota : <?= $key['mota'] ?></h1>
	<?php endforeach ?>
</body>
</html>