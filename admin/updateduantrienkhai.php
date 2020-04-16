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
								<div style="text-align: center;">
									<H5>Thêm dự án</H5>
								</div>
								<?php 
								if(isset($_GET['id']));
								$id=$_GET['id'];
								$query = "select * from duantrienkhai where id = '" .$id."'";
								$stmt = $pdo->prepare($query);
								$stmt->setFetchMode(PDO::FETCH_ASSOC);
								$stmt->execute();
								$resultSet = $stmt->fetchAll();
								for($i=0; $i<count($resultSet); $i++)
								{
									?>
									<table>
										<form action="" method="POST" accept-charset="utf-8">
											<tr>
												<td><div class="textlienhe">ID :</div></td>
												<td><input type="text" name="id" style="width: 80%" value="<?=$resultSet[$i]["id"]?>"></td>
											</tr>
											<tr>
												<td><div class="textlienhe">Địa chỉ :</div></td>
												<td><input type="text" name="diachi" style="width: 80%" value="<?=$resultSet[$i]["diachi"]?>"></td>
											</tr>
											<tr>
												<td><div class="textlienhe">Tên dự án :</div></td>
												<td><input type="text" name="tenduan" style="width: 80%" value="<?=$resultSet[$i]["tenduan"]?>"></td>
											</tr>
											<tr>
												<td><div class="textlienhe">Đường dẫn ảnh :</div></td>
												<td><textarea name="duongdananh" style="width: 80%; overflow: auto;height: 200px"><?=$resultSet[$i]["duongdananh"]?></textarea></td>
											</tr>
											<tr>
												<td colspan="2" style="text-align: center;"><input type="submit" name="" value="sửa dự án"></td>
											</tr>
										</form>
									</table>
									<?php 
								}
								?>

								<?php 
								if(isset($_POST['id'])&&isset($_POST['diachi'])&&isset($_POST['tenduan'])&&isset($_POST['duongdananh']))
								{

									$id=$_POST['id'];
									$diachi=$_POST['diachi'];
									$tenduan=$_POST['tenduan'];
									$duongdananh=$_POST['duongdananh'];
									$update = "Update duantrienkhai Set id = '" .$id."', diachi = '" .$diachi."', tenduan = '" .$tenduan."', duongdananh = '" .$duongdananh."' where id ='" . $id."'";
									$stmt = $pdo->prepare($update);	
									$stmt->execute();
									if($stmt != null){
										echo "Product has update successfully!";
										header("Location: ./admin.php");
									}
									else
										echo "Try again";
								}
								?>







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