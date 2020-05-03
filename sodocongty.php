<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen">
		.imgtamnhinsumenh{
			width: 100%; 
			height: 300px; 
			margin-top: 10px;
			float: left;
		}
		.contenttamnhinsumenh{
			text-indent: 20px; font-weight: 450;
		}
		.titletamninsumenh{
			text-align: center; width: 100%;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<a href="index.php" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
			</div>
			<div class="col-sm-10" >
				<h2 style="text-align: center; width: 80%; font-weight: 500; margin-top: 3%; margin-left: 10%;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h2>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row" style=" border-radius: 30px; border-style: solid;">
			<?php 
			include 'menuLeft.php';
			?>

			<div class="col-lg-9 col-md-9" style="background-color: #CC681D; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<?php 
						include 'menuTop.php';
						?>
					</div>
					<div class="col-lg-12 col-md-12" style="margin-top: 20px; background-color: #F8FAD5; ">
						<img src="img/sodocongty.png" alt="" style="max-width: 100%; height: auto;">
					</div>
				</div>	

			</div>



		</div>
		<!-- phan lien he  -->
		<?php 
		include 'enpage.php';
		?>

	</body>
	</html>