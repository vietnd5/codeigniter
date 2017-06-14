<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>	
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>css/1.css">
</head>
<body>
	
	<form action="AddData" enctype="multipart/form-data" method="post">
		<form class="form-inline">
			<div class="form-group">
				<label for="exampleInputName2">Ten</label>
				<input name="ten" type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Email</label>
				<input name="mota" type="text" class="form-control" id="exampleInputEmail2" placeholder="Jane Doe">
			</div>
			<button type="submit" class="btn btn-primary">Send invitation</button>
		</form>
	</form>
</body>
</html>