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
</head>
<body>	
	<?php 
	include 'connect.php';
	?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<a href="index.php" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
			</div>
			<div class="col-sm-10" >
				<h2 style="text-align: center; width: 80%; font-weight: 500;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h2>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row" style=" border-radius: 30px; border-style: solid;">
			<?php 
			include 'menuLeft.php';
			?>

			<div class="col-lg-8 col-md-12" id="boderright">
				<div class="row">
					<div class="col-lg-12 col-md-12">						
					<?php 
					include 'menuTop.php';
					?>
					<div class="col-lg-6 col-md-12" style="margin-top: 15px">
						<a href="thungo.php" title="">
							<div class="project">
								<img src="img/thungo.png" alt="Avatar" class="imageProject" style="background-color: white;">
								<div class="overlay">
									<div class="textproject">Thư ngỏ</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12" style="margin-top: 15px">
						<a href="gioithieu.php" title="">
							<div class="project">
								<img src="img/gioithieu.png" alt="Avatar" class="imageProject">
								<div class="overlay">
									<div class="textproject">Giới thiệu công ty</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12" style="margin-top: 15px">
						<a href="tamnhinsumenh.php" title="">
							<div class="project">
								<img src="img/tamnhinsumenh.png" alt="Avatar" class="imageProject">
								<div class="overlay">
									<div class="textproject">Tầm nhìn, sứ mệnh</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-12" style="margin-top: 15px;">
						<a href="sodocongty.php" title="">
							<div class="project">
								<img src="img/iconsodocongty.png" alt="Avatar" class="imageProject" style="background-color: white;">
								<div class="overlay">
									<div class="textproject">Sơ đồ tổ chức công ty</div>
								</div>
							</div>
						</a>
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