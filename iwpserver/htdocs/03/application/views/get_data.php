<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>css/1.css">
</head>
<body>
    <h3>Lay du lieu</h3>
    <div class="container">
			<div class="row text-xs-center">
<h2> Quan ly san pham </h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="card-deck-wrapper">
					<div class="card-deck">
						<?php foreach($sanphams as $sanpham):?>
						<div class="card">
							<img class="card-img-top img-fluid" src="<?php echo $sanpham['anh'];?>" alt="Card image cap">
							<div class="card-block">
								<h4 class="card-title"><?php echo $sanpham['ten'];?></h4>
								<p class="card-text"><?php echo $sanpham['mota'];?></p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
		<hr>
</body>
</html>