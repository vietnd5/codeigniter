<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>Quản lý slide </title>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
		<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	 	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/isotope.pkgd.min.js.js"></script>
	 	<script type="text/javascript" src="<?php echo base_url(); ?>imagesloaded.pkgd.min.js"></script>
	 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-8 push-sm-2">
			 <h2> upload slide </h2>
			 <hr>
			 <form action="addSlide" enctype="multidata/form-data" method="post">


			 		<div class="card _1slide">
			 			<div class="card-block">
			 				<h4 class="card-title text-xs-center">Nội dung 1 slide </h4>
			 				<hr>
			 				<div class="form-group row">
						 		<label for="inputEmail3" class="col-sm-2 form-control-label">Tieu de cua slide </label>
						 		<div class="col-sm-10">
						 			<input type="titleSlide" class="form-control" id="inputEmail3" placeholder="Tieu de slide">
						 		</div>
						 	</div>
						 	<div class="form-group row">
						 		<label for="inputPassword3" class="col-sm-2 form-control-label">Mô tả slide </label>
						 		<div class="col-sm-10">
						 			<input type="descSlide" class="form-control" id="inputPassword3" placeholder="Mo ta slide">
						 		</div>
						 	</div>
						 	 

						 	 <div class="form-group row">
						 		<label for="inputPassword3" class="col-sm-2 form-control-label">link slide  </label>
						 		<div class="col-sm-10">
						 			<input type="linkSlide" class="form-control" id="inputPassword3" placeholder="link  slide">
						 		</div>
						 	</div>
						 	 
						 	 <div class="form-group row">
						 		<label for="inputPassword3" class="col-sm-2 form-control-label">tieu de nut slide  </label>
						 		<div class="col-sm-10">
						 			<input type="nutSlide" class="form-control" id="inputPassword3" placeholder="Tieu de nut  slide">
						 		</div>
						 	</div>
						 	 
			 				 
			 			</div>
			 		</div> <!-- het _1slide -->
			 	

			 		<div class="card _1slide">
			 			<div class="card-block">
			 				<h4 class="card-title text-xs-center">Nội dung 1 slide </h4>
			 				<hr>
			 				<div class="form-group row">
						 		<label for="inputEmail3" class="col-sm-2 form-control-label">Tieu de cua slide </label>
						 		<div class="col-sm-10">
						 			<input type="titleSlide" class="form-control" id="inputEmail3" placeholder="Tieu de slide">
						 		</div>
						 	</div>
						 	<div class="form-group row">
						 		<label for="inputPassword3" class="col-sm-2 form-control-label">Mô tả slide </label>
						 		<div class="col-sm-10">
						 			<input type="descSlide" class="form-control" id="inputPassword3" placeholder="Mo ta slide">
						 		</div>
						 	</div>
						 	 

						 	 <div class="form-group row">
						 		<label for="inputPassword3" class="col-sm-2 form-control-label">link slide  </label>
						 		<div class="col-sm-10">
						 			<input type="linkSlide" class="form-control" id="inputPassword3" placeholder="link  slide">
						 		</div>
						 	</div>
						 	 
						 	 <div class="form-group row">
						 		<label for="inputPassword3" class="col-sm-2 form-control-label">tieu de nut slide  </label>
						 		<div class="col-sm-10">
						 			<input type="nutSlide" class="form-control" id="inputPassword3" placeholder="Tieu de nut  slide">
						 		</div>
						 	</div>
						 	 
			 				 
			 			</div>
			 		</div> <!-- het _1slide -->
			 	


			 	<div class="form-group row">
			 		<div class="col-sm-offset-2 col-sm-10">
			 			<button type="submit" class="btn btn-secondary">Luu </button>
			 			<button type="button" class="btn btn-info themslide">Thêm slide </button>
			 		</div>
			 	</div><!-- het khoi nut -->
			 </form>
		</div>
	</div>
</div>
		
</body>
</html>