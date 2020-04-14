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
				<div>
					<div class="topnav" id="myTopnav">
						<a href="index.php" class="active">Trang chủ</a>
						<a href="vechungtoi.php">Về chúng tôi</a>
						<a href="lienhe.php">Liên hệ</a>
						<a href="#about">About</a>
						<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
					</div>


					<script>
						function myFunction() {
							var x = document.getElementById("myTopnav");
							if (x.className === "topnav") {
								x.className += " responsive";
							} else {
								x.className = "topnav";
							}
						}
					</script>


				</div>	
				<div style="margin-top: 10px; margin-bottom: 10px;">
					<?php 
					if(isset($_GET['nameimg']))
					{
						$nameimg = $_GET['nameimg'];
						?>
						<img src="img/<?=$nameimg?>" alt="" class="mx-auto d-block" style="width:100%; height: auto;">
						<?php 
					}
					?>
				</div>

			</div>



		</div>
		<!-- phan lien he  -->
		<?php 
		include 'enpage.php';
		?>

	</body>
	</html>