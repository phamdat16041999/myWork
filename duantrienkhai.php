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
					
					<?php 
					$sql = "select * from duantrienkhai";
					$stmt = $pdo->prepare($sql);
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$stmt->execute();
					$resultSet = $stmt->fetchAll();
					for($i=0; $i<count($resultSet); $i++)
					{
						?>
						<div class="col-lg-6 col-md-12" style="margin-top: 15px">
							<div class="project">
								<img src="<?=$resultSet[$i]["duongdananh"]?>" alt="Avatar" class="imageProject">
								<div class="overlay">
									<div class="textproject"><?=$resultSet[$i]["tenduan"]?></div>
								</div>
							</div>
						</div>
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