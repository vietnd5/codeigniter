<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Json </title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>css/1.css">
</head>
<body>

 	<div class="container">
 		<div class="row">
 			<?php foreach ($dulieulayduoc as $key ): ?>
 			<div class="col-sm-3">
 		
 				<div class="card card-block">
 					<h3 class="card-title"><?= $key['title'] ?></h3>
 					<p class="card-text"><?= $key['json'] ?></p>
 					<a href="#" class="btn btn-primary">End</a>
 				</div>
 			</div>
 			<?php endforeach ?>
 			
 			 
 		</div>
 	</div>
	<div class="container">
		<div class="row">
			<div class="text-xs-center">
				<h2 class="display-3"> Them noi dung json </h2>
				<form method="post" action="insertData" class="form-inline" enctype="multipart/form-data">
					 
					 	<div class="form-group">
					 		<label for="exampleInputName2">Name</label>
					 		<input name="title" type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
					 	</div>
					 	<div class="form-group">
					 		<label for="exampleInputEmail2">Email</label>
					 		<textarea name="json"  class="form-control" id="exampleInputEmail2" placeholder="Jane Doe">

					 		</textarea>
					 	</div>
					 	<button type="submit" class="btn btn-primary">Insert vao du lieu </button>
					  

				</form>
			</div>
		</div>
	</div>
</body>
</html>