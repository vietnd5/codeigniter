<!DOCTYPE html>
<html lang="en"><head>
	<title> Artica  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
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
<body >

		


<div class="container">
	<div class="col-sm-6 push-sm-3">
		<form class="form-inline" action="save" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputName2">Tieu de</label>
				<input name="title" type="text" class="form-control" id="exampleInputName2" placeholder="Tieude">
			</div>
			<h3 class="btn btn-block btn-info btn-lg">Thong tin mang xa hoi </h3>
			<hr>
			<div class="form-group">
				<label for="exampleInputEmail2">Link <i class="fa fa-facebook"></i> </label>

				<input name="linkfb" type="text" class="form-control" id="exampleInputEmail2" placeholder="Link facebook">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Link Google plus <i class="fa fa-google-plus"></i> </label>

				<input name="linkgg" type="text" class="form-control" id="exampleInputEmail2" placeholder="Link Google">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Link <i class="fa fa-pinterest"></i> </label>

				<input name="linkp" type="text" class="form-control" id="exampleInputEmail2" placeholder="Link pinterrsest">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Link <i class="fa fa-twitter"></i> </label>

				<input name="linktwitter" type="text" class="form-control" id="exampleInputEmail2" placeholder="Link Twitter">
			</div>
			
			<h3   class="btn btn-block btn-info btn-lg"> Thong tin goi dien </h3>
			<hr>
			<div class="form-group">
				<label for="exampleInputEmail2">titlehotline </label>

				<input name="titlehotline" type="text" class="form-control" id="exampleInputEmail2" placeholder="Link Twitter">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Phone </label>

				<input name="phone" type="text" class="form-control" id="exampleInputEmail2" placeholder="Link Twitter">
			</div>

			<h4   class="btn btn-block btn-info btn-lg"> Thog tin openning hours </h4>
			<div class="form-group">
				<label for="exampleInputEmail2">title </label>

				<input name="titlehours" type="text" class="form-control" id="exampleInputEmail2" placeholder="openinghours">
			</div>	

			<div class="form-group">
				<label for="exampleInputEmail2">openning hours  </label>

				<input name="openinghours" type="text" class="form-control" id="exampleInputEmail2" placeholder="openinghours">
			</div>	

			

			<button type="submit" class="btn btn-primary btn-block">Luu du lieu </button>
		</form>
	</div>
</div>


 	<div class="topheader2">
 		<div class="container">
 			<div class="row">
 			<?php
$arr = array("mot"=>"one", "hai"=>"two","ba"=> "three");
foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}
?>
 			<?php foreach ($dulieulayduoc as $key => $value): ?>
 				<?php 


 				echo "<h1> value </h1> ";
 				echo "<pre>";
				var_dump(($value));
				echo "</pre>";

 				echo "<h1> value[tentruong] </h1> ";
				echo "<hr>";
				echo "<hr>";
				echo "<hr>";
				echo "<hr>";
				echo "<h4>";
				var_dump( ($value['id']));
				echo "</h4>";
echo "<i>";
				var_dump( ($value['contactjson']));
				echo "</i>";


				echo "<hr>";
				echo "<pre>";
				var_dump(json_decode($value['contactjson']));
				echo "</pre>";


				 ?>
 				<?php $data = json_decode($value['contactjson']);?>
 		
 				<!-- <div class="col-sm-6 wow jello">
 					<div class="mangxh float-sm-left text-xs-center text-sm-left">


						<a href="<?php // echo $data->social->linkfb;?>"><i class="fa fa-facebook"></i></a>
 					 </div>
 					<div class="datban">
 						Call for reservation: +011 29 345 678
 					 </div>
 				</div>
 				<div class="col-sm-6 ">
 					<div class="datban openingtop float-sm-right text-sm-left text-xs-center">
 						Opening Hours : 9:00am - 10:00pm
 					</div>
 				</div> -->
 			<?php endforeach;?>
 			</div> <!-- het row -->
 		</div> <!-- het container -->
 	</div> <!-- het topheader  -->
 	
</body>
</html>