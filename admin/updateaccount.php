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
						<a href="admin.php?username=<?=$username?>&password=<?=$password?>" title=""><img src="img/Logo.png" alt="" style="width: 100%; height: auto;"></a>
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

					<div class="col-lg-9 col-md-9" style="background-color: #CC681D; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<?php 
								include 'menuTop.php';
								?>
							</div>
							<div class="col-lg-12 col-md-12" style="margin-top: 20px; background-color: #F8FAD5; text-align: center; margin-bottom: 20px">
								<div style="text-align: center;">
									<H5>Cập nhật tài khoản</H5>
								</div>
								<?php 
								if(isset($_GET['account']));
								$account=$_GET['account'];
								$query = "select * from account where username = '" .$account."'";
								$stmt = $pdo->prepare($query);
								$stmt->setFetchMode(PDO::FETCH_ASSOC);
								$stmt->execute();
								$resultSet = $stmt->fetchAll();
								for($i=0; $i<count($resultSet); $i++)
								{
									?>
									<table style="width:100%">
										<form action="" method="POST" accept-charset="utf-8">
											<tr>
												<td><div class="textlienhe">Tên đăng nhập :</div></td>
												<td><input type="text" name="username" style="width: 80%" value="<?=$resultSet[$i]["username"]?>"></td>
											</tr>
											<tr>
												<td><div class="textlienhe">Mật khẩu :</div></td>
												<td><input type="text" name="password" style="width: 80%" value="<?=$resultSet[$i]["password"]?>"></td>
											</tr>
											<tr>
												<td colspan="2" style="text-align: center;"><input type="submit" name="" value="Cập nhật"></td>
											</tr>
										</form>
									</table>
									<?php 
								}
								?>

								<?php 
								if(isset($_POST['username'])&&isset($_POST['password']))
								{

									$username=$_POST['username'];
									$password=$_POST['password'];
									if ($username != "admin") {
										$update = "Update account Set username = '" .$username."', password = '" .$password."' where username ='" . $account."'";
										$stmt = $pdo->prepare($update);	
										$stmt->execute();
										if($stmt != null){
											?>
											<script>

												setTimeout(function()
												{ 
													window.location = "selectaccount.php?username=<?=$username?>&password=<?=$password?>"; 
												}, 10);

											</script>
											<?php
											echo "Product has update successfully!";
										}
										else
											echo "Try again";
									}
									if ($username == "admin") 
									{
										$username=$_POST['username'];
										$password=$_POST['password'];
										$update = "Update account Set username = '" .$username."', password = '" .$password."' where username ='" . $account."'";
										$stmt = $pdo->prepare($update);	
										$stmt->execute();
										if($stmt != null){
											?>
											<script>

												setTimeout(function()
												{ 
													window.location = "selectaccount.php?username=<?=$username?>&password=<?=$password?>"; 
												}, 10);

											</script>
											<?php
											echo "Product has update successfully!";
										}
										else
											echo "Try again";
										
									}
								}
								else{
									echo "Bạn không thể sửa tài khoản này";
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