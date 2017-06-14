<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($dulieulayve as $key  ): ?>
				<div class="card">
					<img class="card-img-top" data-src="holder.js/100%x180/" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title"><?php echo $key['ten'] ?></h4>
						<p class="card-text"><?php echo $key['mota'] ?>.</p>
						<a href="#" class="btn btn-primary">Button</a>
					</div>
				</div>
	<?php endforeach ?>
	
</body>
</html>