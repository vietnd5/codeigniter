<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>css/1.css">
	
	<title>Document</title>
</head>
<body>
	<div class="container">
		
				<form method="post" action="../suasp" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 form-control-label">Ten</label>
						<div class="col-sm-10">
							<input value="<?php echo $sanpham['id'];?>" type="hidden" name="id">
							<input value="<?php echo $sanpham['ten'];?>" type="text" class="form-control" id="ten" placeholder="Ten" name="ten">
						</div>
					</div>
					<div class="form-group row">
					<div class="col-sm-3">
						<label for="inputEmail3" class="col-sm-2 form-control-label">Upload anh</label>
						<img class="img-fluid"  src="<?php echo $sanpham['anh'];?>" /></div>
						<div class="col-sm-10">
							<input type="file" class="form-control" id="anh" placeholder="Anh" name="anh">
						</div>
					</div>
					 <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 form-control-label">Mo ta san pham</label>
						<div class="col-sm-10">
							<input value="<?php echo $sanpham['mota'];?>" type="text" class="form-control" id="mota" placeholder="mota"  name="mota">
						</div>
					</div>
					 
					<div class="form-group row">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-secondary">Luu</button>
						</div>
					</div>
				</form>
	</div>
</body>
</html>