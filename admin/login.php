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
				<div>
					<?php 
					include 'menuTop.php';
					?>


				</div>	

				<div style="margin-top: 100px; margin-bottom: 10px;">
					<table style="width:100%; border: 1px solid black; background-color: #F8FAD5;">
						<tr>
							<th colspan="2">
								<h3 style="margin-top: 20px; text-align: center;">CÔNG TY CỔ PHẦN HANAGO QUỐC TẾ</h3>
								<div class="textlienhe">
									- Địa chỉ: Ô111, Lô A, KĐT Đại Kim - Định Công, 
									Phường Định Công, Quận Hoàng Mai, TP. Hà Nội
								</div>
								<div class="textlienhe">
									- Tel: 02462.594.592
								</div>
								<div class="textlienhe">
									- Fax: 0243.6413.412
								</div>

							</th>
						</tr>
		<form action="" method="GET">
			<input type="text" name="UserName" value="User name">
			<input type="text" name="PassWord" value="Password">
			<div><input type="submit" value="Login" name="Login"></div>
			<?php 
			if(isset($_GET['UserName'])&&isset($_GET['PassWord']))
			{
				$a=$_GET['UserName'];
				$b=$_GET['PassWord'];
				$query = "SELECT username, password FROM account WHERE username = '" . $a . "' and password = '". $b ."'" ;
				$stmt = $pdo->prepare($query);
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				$resultSet = $stmt->fetchAll();

				$c = $resultSet[0]["customerid"];
	

				if ((count($resultSet)>0))
				{

					header("Location: ./admin.php");
					
				}
				else
				{
					echo 'aaaaaaa';
				}
			}
			?>

		</form>









				</div>

			</div>



		</div>
		<!-- phan lien he  -->
		<?php 
		include 'enpage.php';
		?>

	</body>
	</html>