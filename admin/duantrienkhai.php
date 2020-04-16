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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		.td{
			width: 20%;
		}
	</style>
</head>
<body>
	<?php include 'connect.php' ?>
	<?php 
	if(isset($_GET['username'])&&isset($_GET['password']))
	{
		$a=$_GET['username'];
		$b=$_GET['password'];
		$query = "SELECT username, password FROM account WHERE username = '" . $a . "' and password = '". $b ."'" ;
		$stmt = $pdo->prepare($query);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();

		$username = $resultSet[0]["username"];
		$password = $resultSet[0]["password"];


		if ((count($resultSet)>0))
		{
			?>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<a href="admin.php" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
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

					<div class="col-lg-8 col-md-12" style="background-color: #CC681D; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<?php 
								include 'menuTop.php';
								?>
							</div>
							<div class="col-lg-12 col-md-12" style="margin-top: 20px; background-color: #F8FAD5; text-align: center; margin-bottom: 20px">
								<a href="addduan.php?username=<?=$username?>&password=<?=$password?>" title="" style="float: right;"><i class="material-icons" style="font-size:48px;color:red">add_circle_outline</i></a>
								<table>
									<tr>
										<td>Địa chỉ</td>
										<td>Tên dự án</td>
										<td>Đường dẫn ảnh</td>
										<td colspan="2">Action</td>
									</tr>
									<?php 
									$sql = "select * from duantrienkhai";
									$stmt = $pdo->prepare($sql);
									$stmt->setFetchMode(PDO::FETCH_ASSOC);
									$stmt->execute();
									$resultSet = $stmt->fetchAll();
									for($i=0; $i<count($resultSet); $i++)
									{
										?>
										<tr>
											<td><input type="text" name="diachi" style="width: 100%" value="<?=$resultSet[$i]["diachi"]?>"></td>
											<td><input type="text" name="tenduan" style="width: 100%" value="<?=$resultSet[$i]["tenduan"]?>"></td>
											<td><input type="text" name="duongdananh" style="width: 100%" value="<?=$resultSet[$i]["duongdananh"]?>"></td>
											<td><a href="updateduantrienkhai.php?username=<?=$username?>&password=<?=$password?>&id=<?=$resultSet[$i]["id"]?>" title="">delete</a></td>
											<td><a href="updateduantrienkhai.php?username=<?=$username?>&password=<?=$password?>&id=<?=$resultSet[$i]["id"]?>" title="">update</a></td>
										</tr>
										<?php 
									}
									?>
								</table>
							</div>	

						</div>



					</div>
				</div>
				<!-- phan lien he  -->
				<?php 
				include 'enpage.php';
				?>

				<?php
			}
			else
			{
				echo 'Not found 404';
			}
		}
		?>

	</body>
	</html>